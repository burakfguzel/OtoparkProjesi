<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarParking extends Model {

    protected $table = "car_parkings";

    protected $fillable = ['car_id','car_entry_date','car_release_date','parking_space_id'];

    public $timestamps = false;

    public function parkingSpace()
    {
        return $this->belongsTo("App\Model\Spaces",'parking_space_id');
    }

    public function car()
    {
        return $this->belongsTo("App\Model\Cars",'car_id');
    }
}