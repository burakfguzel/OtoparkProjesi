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

            <?php echo \App\Core\Map::draw($params['plan'],$params['plan']->spaces,'live');?>

        </div>
    </div>
</div>