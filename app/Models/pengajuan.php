<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','file1','file2','file3','file4','content','valid','msg'
    ];

    protected $guarded = [
        'id','timestamps'
    ];

    protected $with = (['user']);
    public function user(){
        return $this->belongsTo(User::class);
    }
}
