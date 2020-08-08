<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sutradara extends Model
{
    //
    protected $fillable = ['name', 'date_of_birth'];

    public function movie()
    {
        return $this->belongsToMany('App\movie', 'menulis', 'movie_id', 'sutradara_id');
    }

    public function pemeran_film()
    {
        return $this->belongsToMany('App\movie', 'pemeran_films', 'sutradara_id', 'movie_id');
    }
}
