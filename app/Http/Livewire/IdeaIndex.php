<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaIndex extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea,$votesCount){
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        // $this->hasVoted = $this->idea->isVotedByUser(auth()->user());
        $this->hasVoted = $this->idea->voted_by_user;

    }

    public function vote(){
        if(!auth()->check()){
            return redirect(route('login'));
        }

        // $this->idea->toggleVote(auth()->user());
        if($this->hasVoted){
            $this->idea->removeVote(auth()->user());
            $this->votesCount--;
            $this->hasVoted = false;
        }else{
            $this->idea->vote(auth()->user());
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }


    public function render()
    {
        return view('livewire.idea-index');
    }
}
