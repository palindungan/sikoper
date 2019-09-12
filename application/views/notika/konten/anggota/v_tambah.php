 <!-- Breadcomb area Start-->
 <div class="breadcomb-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="breadcomb-list">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                             <div class="breadcomb-wp">
                                 <div class="breadcomb-icon">
                                     <i class="notika-icon notika-form"></i>
                                 </div>
                                 <div class="breadcomb-ctn">
                                     <h2>Form Anggota</h2>
                                     <p>Selamat Data nama_pegawai <span class="bread-ntd">(Admin)</span></p>
                                 </div>
                             </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                             <div class="breadcomb-report">
                                 <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Breadcomb area End-->

 <!-- Form Element area Start-->
 <div class="form-element-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="form-element-list">

                     <div class="cmp-tb-hd bcs-hd">
                         <a href="<?= base_url() ?>admin/produk/data_produk/data_tabel" class="btn btn-default">Tabel Produk</a>
                     </div>
                     <div class="cmp-tb-hd bcs-hd">
                         <h2>Form Detail Produk</h2>
                     </div>

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
                                 <div class="form-ic-cmp">
                                     <button id="btn_tambah_kategori" title="Tambah Kategori Produk" class="btn">
                                         +
                                     </button>
                                 </div>
                                 <div class="nk-int-st">
                                     <p>Tambah Kategori</p>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div id="detail_list">

                     </div>

                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="dropdone-nk mg-t-30">
                     <div class="cmp-tb-hd">
                         <h2>Upload Gambar Produk</h2>
                     </div>
                     <div id="dropzone1" class="multi-uploader-cs">
                         <form action="/upload" class="dropzone dropzone-nk needsclick" id="demo1-upload">
                             <div class="dz-message needsclick download-custom">
                                 <i class="notika-icon notika-cloud"></i>
                                 <h2>Drag File Disini atau Click untuk upload.</h2>
                             </div>
                         </form>
                     </div>
                     <br>
                     <div class="cmp-tb-hd">
                         <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                             <button type="submit" title="Menu Produk" class="btn btn-primary">Submit Data</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </div>
 <!-- Form Element area End-->