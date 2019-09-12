 <!-- Breadcomb area Start-->
 <?php $this->load->view("notika/konten/anggota/_partials/breadcomb.php") ?>
 <!-- Breadcomb area End-->

 <!-- Form Element area Start-->
 <div class="form-element-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="form-element-list">

                     <div class="cmp-tb-hd bcs-hd">
                         <a href="<?= base_url() ?>pegawai/anggota/tabel" class="btn btn-default">Tabel Anggota</a>
                     </div>
                     <div class="cmp-tb-hd bcs-hd">
                         <h2>Form Anggota</h2>
                     </div>

                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-list-alt"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="number" class="form-control" placeholder="NIK">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-user"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="number" class="form-control" placeholder="Nama Lengkap">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-arrow-right"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <textarea name="" id="" rows="5" class="form-control" placeholder="Alamat"></textarea>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Form Element area End-->