<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ResetCommentSpamReports extends Component
{
    public Comment $comment;

    protected $listeners = ['setResetCommentReports'];

    public function setResetCommentReports($commentId){
        $this->comment = Comment::findOrFail($commentId);

        $this->emit('resetCommentReportsWasSet');
    }

    public function resetCommentReports(){
        $this->comment->reports()->detach();

        $this->comment->update([
            'spam_reports' => 0
        ]);

        $this->emit('commentWasReseted');
        $this->dispatchBrowserEvent('notify',[
            'message' => 'Comment was reseted spam reports successfully'
        ]);
    }
    public function render()
    {
        return view('livewire.reset-comment-spam-reports');
    }
}
