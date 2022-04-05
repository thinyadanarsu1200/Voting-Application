<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class EditIdea extends Component
{
    public $idea;
    public $title;
    public $category_id;
    public $description;

    
    protected $rules = [
        'title' => 'required|min:4',
        'category_id' => 'required|integer|exists:categories,id',
        'description' => 'required',
    ];

    public function mount(Idea $idea){
        $this->idea = $idea;
        $this->title = $idea->title;
        $this->category_id = $idea->category_id;
        $this->description  = $idea->description;
    }

    public function clearError(){
        $this->resetErrorBag();
    }

    public function updateIdea(){
        if(auth()->guest() || auth()->user()->cannot('update',$this->idea)){
            abort(Response::HTTP_FORBIDDEN);
        }

        $attributes = $this->validate();

        $this->idea->title = $attributes['title'];
        $this->idea->category_id = $attributes['category_id'];
        $this->idea->description = $attributes['description'];

        $this->idea->update();

        // $this->idea->update([
        //     'title' => $this->title,
        //     'category_id' => $this->category_id,
        //     'description' => $this->description,
        // ]);

        $this->emit('ideaWasUpdated');
    }

    public function render()
    {
        return view('livewire.edit-idea');
    }
}
