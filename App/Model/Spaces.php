<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Spaces extends Model {

    protected $table = "plan_parking_spaces";

    protected $fillable = [
        'name',
        'plan_id',
        'width',
        'height',
        'x_coord',
        'y_coord',
        'type'

    ];

    public $timestamps = false;

    public function plan()
    {
        return $this->belongsTo("App\Model\Plans","plan_id");
    }

    public function car_parking()
    {
        return $this->hasOne('App\Model\CarParking','parking_space_id');
    }

    public function not_free_car_parking()
    {
        return $this->hasOne('App\Model\CarParking','parking_space_id')->where('car_release_date',null);
    }


}