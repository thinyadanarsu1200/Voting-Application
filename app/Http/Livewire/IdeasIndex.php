<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{
    use WithPagination;

    public $status,$category;
    protected $queryString = [
        'status' ,'category'=> ['except' => '']
    ];
    protected $listeners = ['queryStringUpdatedStatus','queryStringUpdatedCategory'];
    
    public function queryStringUpdatedStatus($new_status){
        $this->resetPage();
        $this->status = $new_status;
    }

    public function queryStringUpdatedCategory($new_category){
        $this->category = $new_category;
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
