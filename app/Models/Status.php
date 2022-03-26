<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function ideas(){
        return $this->belongsTo(Idea::class);
    }

    // public function getStatusClasses(){
    //     if($this->name === 'Open'){
    //         return 'bg-gray-200';
    //     }else if($this->name === 'Considering'){
    //         return 'bg-purple text-white';
    //     }else if($this->name === 'In Progress'){
    //         return 'bg-yellow text-white';
    //     }else if($this->name === 'Implemented'){
    //         return 'bg-green text-white';
    //     }else if($this->name === 'Closed'){
    //         return 'bg-red text-white';
    //     }
    // }
}
