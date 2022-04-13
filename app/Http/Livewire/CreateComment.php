<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Livewire\Component;
use Illuminate\Http\Response;

class CreateComment extends Component
{
    public $idea;
    public $body;

    protected $rules = [
        'body' => 'required',
    ];

    public function mount(Idea $idea){
        $this->idea = $idea;
    }

    public function createComment(){
        if(auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        $attributes = $this->validate();
        $attributes['user_id'] = auth()->id();
        $attributes['idea_id'] = $this->idea->id;
        $attributes['status_id'] = $this->idea->status_id;
        Comment::create($attributes);

        $this->emit('commentWasCreated');

        $this->dispatchBrowserEvent('notify',['message' => 'Comment was created successfully']);
    }

    public function render()
    {
        return view('livewire.create-comment');
    }
}
