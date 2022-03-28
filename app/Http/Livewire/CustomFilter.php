<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CustomFilter extends Component
{
    public $category,$filter,$search;

    public function updatedCategory($new_category){
        $this->emit('queryStringUpdatedCategory',$new_category);
    }

    public function updatedFilter($new_filter){
        if($new_filter === 'my-ideas'){
            if(!auth()->check()){
                return redirect()->route('login');
            }
        }
        $this->emit('queryStringUpdatedFilter',$new_filter);
    }

    public function updatedSearch($new_search){
        $this->emit('queryStringUpdatedSearch',$new_search);
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.custom-filter',[
            'categories' => $categories,
        ]);
    }
}
