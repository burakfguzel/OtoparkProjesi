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
                <i class="fa fa-user"></i> <?= $params['plan']->name." Krokisi Alanları";?>
            </div>

            <a class="nav-link" href="<?= site_url("space/form/".$params['plan']->id);?>">
                <i class="fa fa-fw fa-newspaper-o"></i>Alan Ekle
            </a>

            <a class="nav-link" href="<?= site_url("space/live/".$params['plan']->id);?>">
                <i class="fa fa-fw fa-newspaper-o"></i>Canlı Otopark Görünümü
            </a>

            <?php echo \App\Core\Map::draw($params['plan'],$params['plan']->spaces);?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Alan Adı</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($params['plan']->spaces as $space):?>
                                    <tr>
                                        <td><?= $space->name;?></td>
                                        <td> <a href="<?= site_url("space/edit/".$space->id);?>">Düzenle</a> | <a href="<?= site_url("space/delete/".$space->id);?>">Sil</a></td>
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>