<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Anasayfa</a>
            </li>
            <li class="breadcrumb-item active">Krokiler</li>
        </ol>

        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-user"></i> <?= "(".count($params['plans']).") Adet Kayıtlı Kroki Bulunuyor.";?></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Kroki Adı</th>
                                <th>Kapasite</th>
                                <th>En</th>
                                <th>Boy</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($params['plans'] as $plan):?>
                                    <tr>
                                        <td><?= $plan->name;?></td>
                                        <td><?= $plan->capacity;?></td>
                                        <td><?= $plan->width;?></td>
                                        <td><?= $plan->height;?></td>
                                        <td><a href="<?= site_url("space/index/".$plan->id);?>">Park Alanlarını Oluştur</a> | <a href="<?= site_url("plan/edit/".$plan->id);?>">Düzenle</a> | <a href="<?= site_url("plan/delete/".$plan->id);?>">Sil</a></td>
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>