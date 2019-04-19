<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= site_url("");?>">Anasayfa</a>
                <a href="<?= site_url("admin");?>">/ Yöneticiler</a>
            </li>
            <li class="breadcrumb-item active">Yönetici İşlemleri</li>
        </ol>

        <div class="card-body">
            <form action="<?php echo isset($params['admin']) ? site_url('admin/update/'.$params['admin']->id) : site_url('admin/store');?>" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">Adı</label>
                            <input class="form-control" value="<?php echo isset($params['admin']) ? $params['admin']->firstname : "";?>" name="firstname" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Soyadı</label>
                            <input class="form-control" value="<?php echo isset($params['admin']) ? $params['admin']->lastname : "";?>" name="lastname" id="exampleInputLastName" type="text" aria-describedby="nameHelp" ">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="exampleInputName">Email Adresi</label>
                            <input class="form-control" value="<?php echo isset($params['admin']) ? $params['admin']->email : "";?>" name="email" id="exampleInputName" type="email" aria-describedby="nameHelp">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputLastName">Şifre</label>
                            <input class="form-control"  name="password" id="exampleInputLastName" type="password" aria-describedby="nameHelp">
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-success btn-block" href="login.html">Kaydet</button>
            </form>

        </div>
    </div>
</div>
