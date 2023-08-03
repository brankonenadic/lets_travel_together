<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'content',
        'user_id',
        'post_image',
        'category_id',
        
    ];



    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
