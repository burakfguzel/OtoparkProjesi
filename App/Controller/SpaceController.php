<?php

namespace App\Controller;

use App\Core\Map;
use App\Model\Plans;
use App\Model\Spaces;
use Plasticbrain\FlashMessages\FlashMessages;
use Swagger\Client\Api\DefaultApi;

class SpaceController extends BaseController
{

    public function index($space_id)
    {
        $plan = Plans::find($space_id);

        return view('spaces/index.php',['plan' => $plan]);
    }

    public function form($plan_id)
    {
        $plan = Plans::find($plan_id);
        return view('spaces/form.php',['plan_id' => $plan->id,'plan' => $plan]);
    }

    public function store()
    {
        $space = new Spaces();

        $space->fill($_POST);
        $space->save();

        $msg = new FlashMessages();
        $msg->success("Alan Başarıyla Oluşturuldu");

        return redirect("space/index/".$_POST['plan_id']);
    }

    public function edit($id)
    {
        $space = Spaces::where('id',$id)->first();
        //Map::findPaths($space->plan,$space->plan->spaces);

        return view('spaces/form.php',['space' => $space,'plan_id' => $space->plan_id,'plan' => $space->plan]);
    }

    public function update($id)
    {
        $space = Spaces::find($id);

        $space->fill($_POST);
        $space->save();

        $msg = new FlashMessages();
        $msg->success("Alan Başarıyla Düzenlendi");

        return redirect("space/edit/".$id);
    }

    public function delete($id)
    {
        Spaces::destroy($id);

        $msg = new FlashMessages();
        $msg->success("Kroki Başarıyla Silindi");

        redirect('space');
    }

    public function live($space_id)
    {
        $plan = Plans::find($space_id);

        return view('spaces/live.php',['plan' => $plan]);
    }
}