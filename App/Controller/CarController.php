<?php

namespace App\Controller;

use App\Model\Cars;
use Plasticbrain\FlashMessages\FlashMessages;

class CarController extends BaseController
{

    public function index()
    {
        $cars = Cars::where(function ($query){
            if(post("plate"))
            {
                $query->where('plate_number','like','%'.post("plate").'%');
            }
        })->get();

        return view('cars/index.php',['cars' => $cars]);
    }

    public function form()
    {
        return view('cars/form.php');
    }

    public function store()
    {
        $car = new Cars();
        $car->plate_number = post("plate_number");
        $car->save();

        $msg = new FlashMessages();
        $msg->success("Araç Başarıyla Oluşturuldu");

        redirect("car");
    }

    public function edit($id)
    {
        $car = Cars::where('id',$id)->first();

        return view('cars/form.php',['car' => $car]);
    }

    public function update($id)
    {
        $car = Cars::where('id',$id)->first();
        $car->plate_number = post("plate_number");
        $car->save();

        $msg = new FlashMessages();
        $msg->success("Araç Başarıyla Düzenlendi");

        redirect("car/edit/".$id);
    }

    public function delete($id)
    {
        Cars::destroy($id);

        $msg = new FlashMessages();
        $msg->success("Araç Başarıyla Silindi");

        redirect('car');
    }

    public function log($id)
    {
        $car = Cars::where('id',$id)->first();

        return view('cars/log.php',$car);
    }
}