<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

        
    public function scopeFilter($query){
        if(request('search')){
            return $query->where('title','like','%' . request('search') . '%')
            ->orWhere('content','like','%' . request('search') . '%')
            ->orWhere('intro','like','%' . request('search') . '%');
        }
    }

    /*
    alt

     if(isset($filters['search']) ? $filters['search'] : false){
            return $query->where('title','like','%' . $filters['search'] . '%')
            ->orWhere('content','like','%' . $filters['search'] . '%')
            ->orWhere('intro','like','%' . $filters['search'] . '%');
        

    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where('title','like','%' . $search . '%')
            ->orWhere('content','like','%' . $search . '%')
            ->orWhere('intro','like','%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category){
            $query->whereHas('category',function($query) use ($category){
                $query->where('slug',$category);
            });
        });
    }
    */


    protected $fillable = [
        'title','category_id','user_id','slug','author','intro','content'
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
}
