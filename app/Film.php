<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = "film";
    protected $fillable = ["judul", "ringkasan", "tahun", "poster", "genre_id"];
}