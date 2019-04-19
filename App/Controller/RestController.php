<?php

namespace App\Controller;


use App\Model\Cars;

class RestController
{
    public function storePlateNumber()
    {
        if(!post('plate_number'))
        {
            return json_encode(['status' => 'false']);
        }

        $car = new Cars();
        $car->plate_number = post('plate_number');
        $car->save();

        return json_encode(['status' => 'true']);
    }

    public function getPlateNumber()
    {
        $plate = Cars::first();
        return json_encode(['plate_number' => $plate->plate_number]);
    }
}