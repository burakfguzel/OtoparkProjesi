<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model {

    protected $table = "cars";

    protected $fillable = ['plate_number','model','body_type','color'];

    public function parkings()
    {
        return $this->hasMany('App\Model\CarParking','car_id');
    }

    public function representModel()
    {
        return ucfirst(str_replace('_',' ',$this->model));
    }
}