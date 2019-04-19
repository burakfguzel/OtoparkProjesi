<?php

namespace App\Controller;

use App\Core\Session;
use App\Model\Deneme;
use App\Model\Admins;
use Plasticbrain\FlashMessages\FlashMessages;

class AdminController extends BaseController
{

    public function index()
    {
        $admins = Admins::all();
        return view('admins/index.php',['admins' => $admins]);
    }

    public function form()
    {
        return view('admins/form.php');
    }

    public function store()
    {
        $admin = new Admins();
        $admin->firstname = post("firstname");
        $admin->lastname = post("lastname");
        $admin->email = post("email");
        $admin->password = md5(post("password"));
        $admin->save();

        $msg = new FlashMessages();
        $msg->success("Yönetici Başarıyla Oluşturuldu");

        redirect("admin");
    }

    public function edit($id)
    {
        $admin = Admins::where('id',$id)->first();

        return view('admins/form.php',['admin' => $admin]);
    }

    public function update($id)
    {
        $admin = Admins::where('id',$id)->first();
        $admin->firstname = post("firstname");
        $admin->lastname = post("lastname");
        $admin->email = post("email");

        if(post("password"))
        {
            $admin->password = md5(post("password"));
        }

        $admin->save();

        $msg = new FlashMessages();
        $msg->success("Yönetici Başarıyla Düzenlendi");

        redirect("admin/edit/".$id);
    }

    public function delete($id)
    {
        Admins::destroy($id);

        $msg = new FlashMessages();
        $msg->success("Yönetici Başarıyla Silindi");

        redirect('admin');
    }
}