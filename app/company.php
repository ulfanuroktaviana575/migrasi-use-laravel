<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $fillable = ['name', 'address', 'banyak_karyawan'];

    public function movie()
    {
        return $this->hasMany('App\movie', 'company_id');
    }
}
