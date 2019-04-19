<?php
/**
 * Created by PhpStorm.
 * User: eray
 * Date: 26.02.2018
 * Time: 23:10
 */

namespace App\Core;

class Map
{
    public static $types = [
        1 => [
            'name' => 'Park Alanı',
            'class' => ''
        ],
        2 => [
            'name' => 'Yol',
            'class' => 'path'
        ],
        3 => [
            'name' => 'Giriş Kapısı',
            'class' => 'entry-gate'
        ],
        4 => [
            'name' => 'Çıkış Kapısı',
            'class' => 'exit-gate'
        ]
    ];


    public static function draw($plan,$spaces,$live = false)
    {
        $htm   = '<div class="map-container">';
        $htm  .= '  <div class="map" style="height:'.$plan->height.'px;width:'.$plan->width.'px;">';

        foreach($spaces as $space)
        {
            $class = "parking-space ";
            $class .= static::$types[$space->type]['class'];

            $htm .= '<div class="'.$class.'" id="space-'.$space->id.'" style="width:'.$space->width.'px;height:'.$space->height.'px;left:'.$space->x_coord.'px;top:'.$space->y_coord.'px;"><h3>'.$space->name.'</h3>';

            if($live && $space->not_free_car_parking)
            {
                $htm .= '<h5>(Dolu) '.$space->not_free_car_parking->car->plate_number.'</h5>';
            }

            $htm .= '</div>';
        }

        return $htm.'</div></div>';
    }

    public static function findPaths($plan,$spaces)
    {
        $parking_spaces = [];


        $bos_alanlar = [];
        for($x=0;$x<=$plan->height;$x++)
        {
            $start_x = $x;
            for($y=0;$y<=$plan->height;$y++)
            {
                $bos_alanlar[] = [$x,$y];
                foreach($spaces as $space)
                {
                    if($space->x_coord == $x && $space->y_coord == $y)
                    {
                        $y = $space->y_coord + $space->height;
                        break;
                    }
                }

            }



        }

        dd($bos_alanlar);

        dd($parking_spaces);
    }
}