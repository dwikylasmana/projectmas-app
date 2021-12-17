<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//
class galleri extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','slug','user_id','content','image1','image2','image3','image4','image5','image6','image7','image8','image9','image10'
    ];

    protected $guarded = [
        'id','timestamps'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
