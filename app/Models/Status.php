<?php

namespace App\Models;

use App\Models\Idea;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory,Sluggable;

    protected $guarded=[];

    public function sluggable(): array{
       return [
        'slug' => [
            'source' => 'name',
        ]
        ];
    }

    public function ideas(){
        return $this->belongsTo(Idea::class);
    }

    public static function getCount(){
        return Idea::query()
        ->selectRaw("count(*) as all_statuses")
        ->selectRaw("count(case when status_id = 1 then 1 end) as open")
        ->selectRaw("count(case when status_id = 2 then 1 end) as considering")
        ->selectRaw("count(case when status_id = 3 then 1 end) as in_progress")
        ->selectRaw("count(case when status_id = 4 then 1 end) as implemented")
        ->selectRaw("count(case when status_id = 5 then 1 end) as closed")
        ->first()
        ->toArray();
    }

    public static function getCountByDynamic(){
        $specific_idea_counts = [];
        $idea_counts = Idea::all()->countBy('status_id');//['1'=> '11']
        $statuses = Status::pluck('id','slug'); //['open' => '1']
        
        foreach($statuses as $key=>$status_id){  //['open' => '11']
            $specific_idea_counts[$key] = $idea_counts[$status_id];
        }
        
        $specific_idea_counts['all_statuses']= array_sum($idea_counts->toArray());

        return $specific_idea_counts;
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
