<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Anasayfa</a>
            </li>
            <li class="breadcrumb-item active">Yöneticiler</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-user"></i> <?= "(".count($params['cars']).") Adet Kayıtlı Araç Bulunuyor.";?></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Plaka</th>
                                <th>Model</th>
                                <th>Tür</th>
                                <th>Renk</th>
                                <th>Son Giriş Tarihi</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($params['cars'] as $car):?>
                                    <tr>
                                        <td><?= $car->plate_number;?></td>
                                        <td><?= $car->representModel();?></td>
                                        <td><?= $car->body_type;?></td>
                                        <td><?= $car->color;?></td>
                                        <td><?= $car->updated_at;?></td>
                                        <td><a href="<?= site_url("car/log/".$car->id);?>">Araç Logları</a> | <a href="<?= site_url("car/edit/".$car->id);?>">Düzenle</a> | <a href="<?= site_url("car/delete/".$car->id);?>">Sil</a></td>
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>