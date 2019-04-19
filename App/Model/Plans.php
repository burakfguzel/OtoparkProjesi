<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Plans extends Model {

    protected $table = "plans";

    protected $fillable = ['name','capacity','width','height'];

    public $timestamps = false;

    public function spaces()
    {
        return $this->hasMany("App\Model\Spaces","plan_id");
    }
}