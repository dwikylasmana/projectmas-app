<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class galleri extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title','slug','user_id','content','image1','image2','image3','image4','image5','image6','image7','image8','image9','image10'
    ];

    protected $guarded = [
        'id','timestamps'
    ];

    protected $with = (['user']);

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query){
        if(request('search')){
            return $query->where('title','like','%' . request('search') . '%')
            ->orWhere('content','like','%' . request('search') . '%');
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
