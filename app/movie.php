<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
    protected $fillable = ['title', 'genre', 'length', 'year'];

    public function company()
    {
        return $this->belongsTo('App\company', 'company_id');
    }

    public function actor()
    {
        return $this->belongsToMany('App\actor', 'pemeran_films', 'movie_id', 'actor_id');
    }

    public function sutradara()
    {
        return $this->belongsToMany('App\sutradara', 'menulis', 'movie_id', 'sutradara_id');
    }

    public function pemeran_film_sutradara()

    {
        return $this->belongsToMany('App\sutradara', 'pemeran_films', 'movie_id', 'sutradara_id');
    }
}
