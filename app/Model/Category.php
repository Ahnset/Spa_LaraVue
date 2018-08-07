<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    // Laravel builtin Function for API route Parameter.
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
