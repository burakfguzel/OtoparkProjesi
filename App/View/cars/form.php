<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= site_url("");?>">Anasayfa</a>
                <a href="<?= site_url("car");?>">/ Araçlar</a>
            </li>
            <li class="breadcrumb-item active">Araç İşlemleri</li>
        </ol>

        <div class="card-body">
            <form action="<?php echo isset($params['car']) ? site_url('car/update/'.$params['car']->id) : site_url('car/store');?>" method="post">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <label for="exampleInputName">Plaka Numarası</label>
                            <input class="form-control" value="<?php echo isset($params['car']) ? $params['car']->plate_number : "";?>" name="plate_number" id="exampleInputName" type="text" aria-describedby="nameHelp">
                        </div>
                    </div>
                <button type="submit" class="btn btn-success btn-block" href="login.html">Kaydet</button>
            </form>

        </div>
    </div>
</div>
