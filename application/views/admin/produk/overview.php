<?php $this->load->view('admin/_partial/header'); ?>

    <?php 
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>
      <div class="container-fluid bg-white">
        <?= $this->session->flashdata('message'); ?>
        <div class="row" >
          <div class="col-md-12">
              <a href="<?= base_url() ?>/admin/product/add" class="btn btn-success mb-3"> <i class="fas fa-plus"></i> Add product</a>
            <div class="table table-responsive">
              <table class="table table-striped table-bordered data mt-3" id="pagetable">
                <thead>
                  <tr class="text-center bg-primary">
                    <th style="width:5%">No</th>
                    <th style="width:10%">gambar</th>
                    <th style="width:15%">Nama Product</th>
                    <th style="width:30%">Deskripsi</th>
                    <th style="width:10%">Kategori</th>
                    <th style="width:10%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                  $no = 1;
                  foreach ($products->result() as $row) {
                  ?>
                  <tr>
                    <td><?= $no ?></td>
                    <td><img src="<?= base_url() ?>assets/home/img/product/<?= $row->image ?>" alt="<?= $row->name ?> PT Josan Multipangan" width="120"></td>
                    <td><?= $row->name ?></td>
                    <td><?= $row->description ?></td>
                    <td><center><?= $row->category ?></center></td>
                    <td> 
                      <!-- <a href="#" class="btn btn-sm btn-success m-1"><span class="fas fa-eye"></span></a> -->
                      <!-- <a href="#" class="btn btn-sm btn-warning m-1"><span class="fas fa-lock"></span></a> -->
                      <a href="<?= base_url() ?>admins/product/edit/<?= $row->id ?>" class="btn btn-block btn-primary m-1"><span class="fas fa-edit"></span> Edit</a>
                      <a href="<?= base_url() ?>admins/product/delete/<?= $row->id ?>" class="btn btn-block btn-danger m-1"><span class="fas fa-trash"></span> Hapus</a>
                    </td>
                  </tr>
                  <?php 
                  $no++; }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->


      </div><!--/. container-fluid -->
    <?php $this->load->view('admin/_partial/footer') ?>
    <script>
      $(document).ready( function () {
          $('#pagetable').DataTable();
      } );
    </script>