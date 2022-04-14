<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class CommentNotifications extends Component
{
    const NOTIFICATION_THRESHOLD = 3;
    public $notifications,$notificationCount,$loader = true;

    public function mount(){
        $this->notifications = collect([]);
        $this->notificationCount();
    }

    public function notificationCount(){
        $this->notificationCount = auth()->user()->unreadNotifications()->count();

        if($this->notificationCount > (self::NOTIFICATION_THRESHOLD)){
            $this->notificationCount = self::NOTIFICATION_THRESHOLD."+";
        }
    }

    public function getNotifications(){
        sleep(2);
        $this->notifications =  auth()->user()->unreadNotifications()
        ->latest()
        ->take(self::NOTIFICATION_THRESHOLD)
        ->get();
        $this->loader = false;
    }

    public function markAllAsRead(){
        $this->notifications->markAsRead();
        $this->emit('markAllAsRead');
    }

    public function markAsRead($notificationId){
        $notification = DatabaseNotification::findOrFail($notificationId);
        // $notification->markAsRead();

        $idea = Idea::find($notification->data['idea_id']);
        $comment = Comment::find($notification->data['comment_id']);

        if(!$comment){
            session()->flash('error','This comment has not been found');
            return redirect('/');
        }
        if(!$idea){
            session()->flash('error','This comment has not been found');

            return redirect('/');
        }

        $comments = $idea->comments->pluck('id');

        $indexOfComment = $comments->search($comment->id);

        $commentPage = (int)($indexOfComment/$comment->getPerPage()) + 1;
        

        session()->flash('scrollToComment', $comment->id);

        return redirect()->route('idea.show',[
            'idea' => $notification->data['idea_slug'],
            'comment-page' => $commentPage,
        ]);
    }
    // https://meet.google.com/ymq-aker-odu

    public function render()
    {
        return view('livewire.comment-notifications');
    }
}
