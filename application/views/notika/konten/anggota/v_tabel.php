 <!-- Breadcomb area Start-->
 <?php $this->load->view("notika/konten/anggota/_partials/breadcomb.php") ?>
 <!-- Breadcomb area End-->

 <!-- Data Table area Start-->
 <div class="data-table-area">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="data-table-list">
                     <div class="basic-tb-hd">
                         <a href="<?= base_url() ?>pegawai/anggota" class="btn btn-default">Kembali</a>
                     </div>
                     <div class="table-responsive">
                         <table id="data-table-basic" class="table table-striped">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>NIK</th>
                                     <th>NAMA</th>
                                     <th>ALAMAT</th>
                                     <th>AKSI</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>1</td>
                                     <td>012830121231238</td>
                                     <td>Rizkika Zakka Palindungan</td>
                                     <td>Kab Jember, jawa timur</td>
                                     <td>
                                         <a href="<?= base_url() ?>admin/produk/data_produk/edit_data"> <i class="btn btn-default fa fa-pencil-square"></i></a>
                                         <a onclick="return confirm('Yakin ingin menghapus data ?')" href=""><i class="btn btn-default fa fa-trash"></i></a>
                                     </td>
                                 </tr>
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>No</th>
                                     <th>NIK</th>
                                     <th>NAMA</th>
                                     <th>ALAMAT</th>
                                     <th>AKSI</th>
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