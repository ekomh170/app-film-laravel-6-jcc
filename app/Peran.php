<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $table = "peran";
    protected $fillable = ["film_id", "cast_id", "nama"];
    public $timestamps = false;

    public function film()
    {
        return $this->belongsTo('App\Film');
    }

    public function cast()
    {
        return $this->belongsTo('App\Cast');
    }
}