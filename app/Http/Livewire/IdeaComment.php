<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Livewire\Component;

class IdeaComment extends Component
{
    public $comment;

    protected $listeners = ['commentWasUpdated'];

    public function commentWasUpdated(){
        $this->comment->refresh();
    }

    public function mount(Comment $comment){
        $this->comment = $comment;
    }

    public function render()
    {
        return view('livewire.idea-comment',[
            'comment' => $this->comment,
        ]);
    }
}
