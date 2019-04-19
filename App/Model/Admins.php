<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model {

    protected $table = "admins";

    protected $fillable = ['firstname','lastname','email','password'];

    public $timestamps = false;
}