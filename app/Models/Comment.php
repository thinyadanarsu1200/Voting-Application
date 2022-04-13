<?php

namespace App\Models;

use App\Models\Status;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $perPage = 15;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function idea(){
        return $this->belongsTo(Idea::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }


    public function reports(){
        return $this->belongsToMany(User::class,'comment_spam','comment_id','user_id')->withTimestamps();
    }

    public function isMarkAsSpamByUser(?User $user){
        return CommentSpam::where('user_id',$user->id)
        ->where('comment_id',$this->id)->exists();
    }
}
