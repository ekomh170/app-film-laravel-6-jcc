<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profile";
    protected $fillable = ["umur", "bio", "alamat", "user_id"];
    public $timestamps = false;
}