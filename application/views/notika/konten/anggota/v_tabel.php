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

 <!-- Data Table area Start-->
 <div class="data-table-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="data-table-list">
                     <div class="basic-tb-hd">
                         <a href="<?= base_url() ?>admin/produk/data_produk/tambah_data" class="btn btn-default">Kembali</a>
                     </div>
                     <div class="table-responsive">
                         <table id="data-table-basic" class="table table-striped">
                             <thead>
                                 <tr>
                                     <th>Kode Produk</th>
                                     <th>Nama</th>
                                     <th>Harga</th>
                                     <th>Berat</th>
                                     <th>Status Stok</th>
                                     <th>Tanggal</th>
                                     <th>Opsi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>KP000001</td>
                                     <td>Round Bowl Model Plates Piring Mangkok KAYU AREN Model Bulat 15 cm to MAKRIFATBUSINESS</td>
                                     <td>15000</td>
                                     <td>0.35 kg</td>
                                     <td>Tersedia</td>
                                     <td>8/9/2019</td>
                                     <td>
                                         <a href="<?= base_url() ?>admin/produk/data_produk/edit_data"> <i class="btn btn-default fa fa-pencil-square"></i></a>
                                         <a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-default fa fa-trash"></i></a>
                                     </td>
                                 </tr>

                                 <tr>
                                     <td>KP000002</td>
                                     <td>Uleg Uleg Wood Uleg Uleg Kayu Jati to</td>
                                     <td>5000</td>
                                     <td>0.25 kg</td>
                                     <td>Tersedia</td>
                                     <td>8/9/2019</td>
                                     <td>
                                         <a href="<?= base_url() ?>admin/produk/data_produk/edit_data"> <i class="btn btn-default fa fa-pencil-square"></i></a>
                                         <a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-default fa fa-trash"></i></a>
                                     </td>
                                 </tr>

                                 <tr>
                                     <td>KP000003</td>
                                     <td>Tasbih Antik Crocodile Tasbih GAHARU BUAYA Grad B 33</td>
                                     <td>10000</td>
                                     <td>1 kg</td>
                                     <td>Tersedia</td>
                                     <td>8/9/2019</td>
                                     <td>
                                         <a href="<?= base_url() ?>admin/produk/data_produk/edit_data"> <i class="btn btn-default fa fa-pencil-square"></i></a>
                                         <a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-default fa fa-trash"></i></a>
                                     </td>
                                 </tr>

                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>Kode Produk</th>
                                     <th>Nama</th>
                                     <th>Harga</th>
                                     <th>Berat</th>
                                     <th>Status Stok</th>
                                     <th>Tanggal</th>
                                     <th>Opsi</th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Data Table area End-->