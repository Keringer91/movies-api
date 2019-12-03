<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $guarded = ['id'];

    public static function search($search)
    {
       return Movie::where('title', 'LIKE', '%'.$search.'%')
                    ->orderBy('title')
                    ->get();
    }
}
