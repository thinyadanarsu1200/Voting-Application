<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Livewire\WithPagination;

class Comment extends Model
{
    use HasFactory;

    protected $perPage = 3;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function idea(){
        return $this->belongsTo(Idea::class);
    }
}
