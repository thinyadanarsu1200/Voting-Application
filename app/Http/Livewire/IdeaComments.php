<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Livewire\Component;

class IdeaComments extends Component
{
    public $idea;

    protected $listeners = ['commentWasCreated'];

    public function commentWasCreated(){
        $this->idea->refresh();
    }

    public function mount(Idea $idea){
        $this->idea = $idea;
    }

    public function render()
    {
        return view('livewire.idea-comments',[
            'comments' => $this->idea->comments->load(['user','idea']),
        ]);
    }
}