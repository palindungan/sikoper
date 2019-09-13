 <!-- Breadcomb area Start-->
 <?php $this->load->view("notika/konten/pegawai/_partials/breadcomb_edit.php") ?>
 <!-- Breadcomb area End-->

 <!-- Form Element area Start-->
 <div class="form-element-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="form-element-list">

                     <div class="cmp-tb-hd bcs-hd">
                         <a href="<?= base_url() ?>pegawai/pegawai" class="btn btn-default">Tambah Pegawai</a>
                         <a href="<?= base_url() ?>pegawai/pegawai/tabel" class="active btn btn-default">Tabel Pegawai</a>
                     </div>

                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-list-alt"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="number" class="form-control" placeholder="NIP" value="09123723723">
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
                                     <input type="text" class="form-control" placeholder="Nama Lengkap" value="Dimas">
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
                                     <textarea name="" id="" rows="5" class="form-control" placeholder="Alamat"> Kab Lumajang, Jawa Timur</textarea>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <br>

                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                 <button type="submit" title="Menu Produk" class="btn btn-primary">Simpan Data</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Form Element area End-->