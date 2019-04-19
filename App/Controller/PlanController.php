<?php

namespace App\Controller;

use App\Model\Plans;
use Plasticbrain\FlashMessages\FlashMessages;

class PlanController extends BaseController
{

    public function index()
    {
        $plans = Plans::all();
        return view('plans/index.php',['plans' => $plans]);
    }

    public function form()
    {
        return view('plans/form.php');
    }

    public function store()
    {
        $plan = new Plans();

        $plan->fill($_POST);
        $plan->save();

        $msg = new FlashMessages();
        $msg->success("Kroki Başarıyla Oluşturuldu");

        redirect("plan");
    }

    public function edit($id)
    {
        $plan = Plans::where('id',$id)->first();

        return view('plans/form.php',['plan' => $plan]);
    }

    public function update($id)
    {
        $plan = Plans::where('id',$id)->first();
        $plan->fill($_POST);
        $plan->save();

        $msg = new FlashMessages();
        $msg->success("Kroki Başarıyla Düzenlendi");

        redirect("plan/edit/".$id);
    }

    public function delete($id)
    {
        Plans::destroy($id);

        $msg = new FlashMessages();
        $msg->success("Kroki Başarıyla Silindi");

        redirect('plan');
    }

}