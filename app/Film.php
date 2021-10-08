<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    protected $fillable = ["judul", "ringkasan", "tahun", "poster", "genre_id"];

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    public function peran()
    {
        return $this->hasMany('App\Peran');
    }
}