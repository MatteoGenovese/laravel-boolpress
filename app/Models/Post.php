<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'post_date',
        'post_image',
        'post_content'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }
}
