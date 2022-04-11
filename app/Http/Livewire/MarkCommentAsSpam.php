<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\CommentSpam;
use Livewire\Component;

class MarkCommentAsSpam extends Component
{
    public Comment $comment;

    protected $listeners = ['setMarkAsSpamComment'];

    public function setMarkAsSpamComment($commentId){
        $this->comment = Comment::findOrFail($commentId);

        $this->emit('markCommentAsSpamWasSet');
    }

    public function markCommentAsSpam(){
        if(!$this->comment->isMarkAsSpamByUser(auth()->user())){
            $this->comment->reports()->attach(auth()->id());
 
            $this->comment->spam_reports++;
            $this->comment->update();
        }

        $this->emit('commentWasMarkAsSpam');
        $this->dispatchBrowserEvent('notify',['message' => 'Comment was marked as spam successfully']);
    }

    public function render()
    {
        return view('livewire.mark-comment-as-spam');
    }
}
