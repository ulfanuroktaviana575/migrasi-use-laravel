<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
    //

    protected $fillable = ['name', 'date_of_birth'];

    public function movie()
    {
        return $this->belongsToMany('App\movie', 'pemeran_films', 'movie_id', 'actor_id');
    }
}
