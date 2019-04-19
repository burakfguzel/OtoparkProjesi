<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= site_url("");?>">Anasayfa</a>
                <a href="<?= site_url("plan");?>">/ Krokiler</a>
            </li>
            <li class="breadcrumb-item active">Kroki İşlemleri</li>
        </ol>

        <div class="card-body">
            <form action="<?php echo isset($params['plan']) ? site_url('plan/update/'.$params['plan']->id) : site_url('plan/store');?>" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputName">Kroki Adı</label>
                            <input class="form-control" value="<?php echo isset($params['plan']) ? $params['plan']->name : "";?>" name="name" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">Kapasitesi</label>
                            <input class="form-control" value="<?php echo isset($params['plan']) ? $params['plan']->capacity : "";?>" name="capacity" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">En</label>
                            <input class="form-control" value="<?php echo isset($params['plan']) ? $params['plan']->width : "";?>" name="width" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputName">Boy</label>
                            <input class="form-control" value="<?php echo isset($params['plan']) ? $params['plan']->height : "";?>" name="height" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>
                    </div>
                <button type="submit" class="btn btn-success btn-block" href="login.html">Kaydet</button>
            </form>

        </div>
    </div>
</div>
