<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = "cast";
    protected $fillable = ["nama", "umur", "bio"];
    public $timestamps = false;
}