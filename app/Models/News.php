<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
    use HasFactory;
    use Sluggable;
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function scopeFilter($query){
        if(request('search')){
            return $query->where('title','like','%' . request('search') . '%')
            ->orWhere('content','like','%' . request('search') . '%')
            ->orWhere('intro','like','%' . request('search') . '%');
        }
    }

    protected $fillable = [
        'title','category_id','user_id','slug','intro','content'
    ];

    protected $guarded = [
        'id'
    ];

    protected $with = (['user','category']);

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
