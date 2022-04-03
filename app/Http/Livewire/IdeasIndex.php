<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{
    use WithPagination;

    public $status,$category,$filter,$search;

    protected $queryString = [
        'status' ,'category'=> ['except' => ''],'filter'=> ['except' => ''],'search'
    ];
    protected $listeners = ['queryStringUpdatedStatus','queryStringUpdatedCategory'
,'queryStringUpdatedFilter','queryStringUpdatedSearch'];
    
    public function queryStringUpdatedStatus($new_status){
        $this->resetPage();
        $this->status = $new_status;
    }

    public function queryStringUpdatedCategory($new_category){
        $this->category = $new_category;
    }

    public function queryStringUpdatedFilter($new_filter){
        $this->filter = $new_filter;
    }

    public function queryStringUpdatedSearch($new_search){
        $this->search = $new_search;
    }
    public function render()
    {
        return view('livewire.ideas-index',[
            'ideas' =>Idea::with('category','user','status')
                    // ->addSelect([
                    //     'voted_by_user' => Vote::select('id')
                    //     ->where('user_id',auth()->id())
                    //     ->whereColumn('idea_id','ideas.id')
                    // ])
                    ->when($this->status,function($query,$status){
                        $query->whereHas('status',function($query) use ($status){
                            $query->where('slug',$status);
                        });
                    })
                    ->when($this->category,function($query,$category){
                        $query->whereHas('category',function($query) use ($category){
                            $query->where('slug',$category);
                        });
                    })
                    ->when($this->filter === 'top-voted',function($query){
                        $query->orderByDesc('votes_count');
                    })
                    ->when($this->filter === 'all-ideas',function($query){
                        $query->where('user_id',auth()->user()->id);
                    })
                    ->when(strlen($this->search) > 3,function($query){
                        $query->where('title', 'like', "%$this->search%")
                        ->orWhere('description', 'like', "%$this->search%")
                        ->orWhereHas('user', function($query) {
                          $query->where('name', 'like', "%$this->search%");
                        });
                    })
                    ->withCount([
                        'votes',
                        'votes as voted_by_user' => function($query){
                            $query->where('user_id',auth()->id());
                        }
                    ])
                    ->orderBy('id','DESC')
                    ->simplePaginate(Idea::PAGINATE),
        ]);
    }
}
