 <!-- Breadcomb area Start-->
 <?php $this->load->view("notika/konten/simuda/_partials/breadcomb_kelola.php") ?>
 <!-- Breadcomb area End-->

 <!-- Form Element area Start-->
 <div class="form-element-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="form-element-list">

                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-list-alt"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="text" class="form-control" placeholder="Nama Produk">
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-truck"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="number" class="form-control" placeholder="Berat">
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-tag"></i>
                                 </div>
                                 <div class="bootstrap-select fm-cmp-mg">
                                     <select class="selectpicker">
                                         <option value="">Pilih Satuan Berat</option>
                                         <option>mg</option>
                                         <option>gr</option>
                                         <option>kg</option>
                                     </select>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-money"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <input type="number" class="form-control" placeholder="Harga">
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <div class="form-group ic-cmp-int">
                                 <div class="form-ic-cmp">
                                     <i class="fa fa-th"></i>
                                 </div>
                                 <div class="nk-int-st">
                                     <div class="bootstrap-select fm-cmp-mg">
                                         <select class="selectpicker">
                                             <option value="">Pilih Status Stok</option>
                                             <option>Tersedia</option>
                                             <option>Kosong</option>
                                         </select>
                                     </div>
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
                                     <textarea name="" id="" rows="5" class="form-control" placeholder="Deskripsi Produk"></textarea>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <br>

                     <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                 <button type="submit" title="Menu Produk" class="btn btn-primary">Submit Data</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Form Element area End-->