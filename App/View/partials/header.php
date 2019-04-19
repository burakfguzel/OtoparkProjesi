<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?= site_url("");?>">Akıllı Otopark Uygulaması</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?= site_url("");?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Anasayfa</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?= site_url("admin");?>">
                    <i class="fa fa-fw fa-user"></i>
                    <span class="nav-link-text">Yöneticileri Listele</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?= site_url("admin/form");?>">
                    <i class="fa fa-fw fa-user-plus"></i>
                    <span class="nav-link-text">Yönetici Ekle</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?= site_url("car");?>">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Araçlar</span>
                </a>
            </li>


            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="<?= site_url("car/form");?>">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Araç Girişi Yap</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-map-marker"></i>
                    <span class="nav-link-text">Kroki Oluştur</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">İçerideki Araçları Listele</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Geçmiş Kayıtları İncele</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2"  action="<?= site_url("car");?>" method="POST">
                    <div class="input-group">
                        <input class="form-control" name="plate" value="<?= post('plate');?>" type="text" placeholder="Plaka Ara...">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('home/logout');?>" ">
                    <i class="fa fa-fw fa-sign-out"></i>Çıkış</a>
            </li>
        </ul>
    </div>
</nav>
