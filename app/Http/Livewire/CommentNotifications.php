<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CommentNotifications extends Component
{
    const NOTIFICATION_THRESHOLD = 3;
    public $notifications,$notificationCount,$loader = true;

    public function mount(){
        $this->notifications = collect([]);
        $this->notificationCount();
    }

    protected function notificationCount(){
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
    public function render()
    {
        return view('livewire.comment-notifications');
    }
}
