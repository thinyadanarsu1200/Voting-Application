<?php

namespace App\Http\Livewire;

use App\Jobs\NotifyAllVoters;
use App\Mail\IdeaStatusUpdatedMailable;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Status;
use Livewire\Component;

class SetStatus extends Component
{
    public Idea $idea;
    public $status;
    public $body;
    public $notifyAllVoters;

    public function mount(){
        $this->status = $this->idea->status_id;
    }


    public function setStatus(){
        $this->idea->status_id = $this->status;
        $this->idea->update();

        Comment::create([
            'user_id' => auth()->id(),
            'idea_id' => $this->idea->id,
            'status_id' => $this->status,
            'body' => $this->body ?? 'There is no comment',
            'is_status_update' => true,
        ]);

        if($this->notifyAllVoters){
            NotifyAllVoters::dispatch($this->idea);
        }

        $this->emit('statusWasUpdated');
    }


    public function render()
    {
        return view('livewire.set-status',[
            'statuses' => Status::all(),
        ]);
    }
}
