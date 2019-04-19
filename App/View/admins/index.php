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
                <i class="fa fa-user"></i> <?= "(".count($params['admins']).") Adet Yönetici Bulunuyor.";?></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Adı</th>
                                <th>Soyadı</th>
                                <th>Email</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($params['admins'] as $admin):?>
                                    <tr>
                                        <td><?= $admin->firstname;?></td>
                                        <td><?= $admin->lastname;?></td>
                                        <td><?= $admin->email;?></td>
                                        <td><a href="<?= site_url("admin/edit/".$admin->id);?>">Düzenle</a> | <a href="<?= site_url("admin/delete/".$admin->id);?>">Sil</a></td>
                                    </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>