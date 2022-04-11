<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Idea extends Model
{
    use HasFactory,Sluggable;
    const PAGINATE = 10;

    protected $guarded=[];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function votes(){
        return $this->belongsToMany(User::class,'votes','idea_id','user_id');
    }

    public function reports(){
        return $this->belongsToMany(User::class,'idea_spams','idea_id','user_id');
    }

    public function isMarkAsSpamByUser(?User $user){
        return IdeaSpams::where('user_id',$user->id)
        ->where('idea_id',$this->id)->exists();
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function isVotedByUser(?User $user){
        if(!$user){
            return false;
        }
        
        return Vote::where('user_id',$user->id)
                ->where('idea_id',$this->id)
                ->exists();
    }


    public function vote(User $user){
        $this->votes_count++;
        $this->update();
        Vote::create([
            'user_id' => $user->id,
            'idea_id' => $this->id,
        ]);

    }

    public function removeVote(User $user){
        $this->votes_count--;
        $this->update();
        Vote::where('user_id',$user->id)
            ->where('idea_id',$this->id)
            ->first()
            ->delete();

    }

    // public function toggleVote(User $user){
    //     $this->votes()->toggle($user->id);
    // }
   
}
