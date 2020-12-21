<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Get Single by slug
    public function getRouteKeyName(){
        return 'slug';
    }

    // Fillable props
    protected $fillable = [
        'name', 'slug'
    ];


}
