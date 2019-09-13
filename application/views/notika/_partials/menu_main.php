<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                    <li>
                        <a href="<?= base_url() ?>pegawai/home">
                            <i class="fa fa-home"></i> Home
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url() ?>pegawai/anggota">
                            <i class="fa fa-user-plus"></i> Anggota
                        </a>
                    </li>

                    <li>
                        <a href="<?= base_url() ?>pegawai/pegawai">
                            <i class="fa fa-users"></i> Pegawai
                        </a>
                    </li>

                    <li>
                        <a data-toggle="tab" href="#Page">
                            <i class="fa fa-credit-card"></i> Simuda
                        </a>
                    </li>

                </ul>
                <div class="tab-content custom-menu-content">

                    <!-- Start tab menu -->
                    <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li>
                                <a href="<?= base_url() ?>pegawai/simuda/form_simuda_baru">Form Simuda Baru</a>
                            </li>

                            <li>
                                <a href="<?= base_url() ?>pegawai/simuda/kelola_simuda">Kelola Simuda</a>
                            </li>

                            <li>
                                <a href="<?= base_url() ?>pegawai/simuda/daftar_nominatif">Daftar Nominatif</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End tab menu -->

                </div>
            </div>
        </div>
    </div>
</div>