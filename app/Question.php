<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    // Slug instead of Id
    public function getRouteKeyName(){
        return 'slug';
    }

    // Fillable props
    protected $fillable = [
        'title', 'slug', 'body', 'category_id', 'user_id'
    ];

    // Relationships
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function replies(){
        return $this->hasMany(Reply::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
