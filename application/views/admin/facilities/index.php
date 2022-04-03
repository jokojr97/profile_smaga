<?php $this->load->view('admin/_partial/header'); ?>

<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    $words = str_replace('<p>', '', $words);
    $words = str_replace('</p>', '', $words);
    return implode(" ", array_splice($words, 0, $word_limit));
}
function make_slug($string)
{
    $slug = strtolower($string);
    $slug = str_replace(" ", "-", $slug);
    $slug = str_replace(";", "", $slug);
    $slug = str_replace(",", "", $slug);
    $slug = str_replace("?", "", $slug);
    $slug = str_replace("!", "", $slug);
    $slug = str_replace(".", "", $slug);
    $slug = str_replace("'", "", $slug);
    $slug = str_replace('"', "", $slug);
    $slug = str_replace('&', "", $slug);
    return $slug;
}

?>
<div class="container-fluid bg-white">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="table table-responsive">
                <a href="<?= base_url('admin/facilities/add') ?>"><button class="btn btn-primary"><span class="fas fa-plus"></span> Tambah Fasilitas</button></a>
                <br>
                <br>
                <table class="table table-responsive table-striped table-bordered data mt-3" id="myTable">
                    <thead>
                        <tr class="text-center bg-primary">
                            <!-- <th style="width:5%">No</th> -->
                            <th style="width:20%"></th>
                            <th style="width:30%">Judul</th>
                            <th style="width:30%">Description</th>
                            <th style="width:10%">tanggal upload</th>
                            <th style="width:10%">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($facilities->result() as $row) {
                            $isi = limit_words($row->description, 20);
                        ?>
                            <tr>
                                <!-- <td><?= $no ?></td> -->
                                <td><img src="<?= base_url()  ?>assets/home/img/<?= $row->image ?>" class="img img-fluid"></td>
                                <td class="berita-table text-orange"><?= $row->name ?></td>
                                <td class="berita-table">
                                    <p><?= $isi ?></p>
                                </td>
                                <td class="berita-table"><i class="far fa-calendar-alt"></i>&nbsp; <?= $row->date_created ?></td>
                                <td>
                                    <center>
                                        <a href="<?= base_url() ?>admin/facilities/edit/<?= $row->id ?>" class="btn btn-sm btn-primary btn-block m-1"><span class="fas fa-edit"></span> Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger  btn-block m-1" onclick="konfirmasi(<?= $row->id ?>)" id="hapus<?= $row->id ?>"><span class="fas fa-trash"></span> Hapus</a>
                                    </center>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->


</div>
<!--/. container-fluid -->
<?php $this->load->view('admin/_partial/footer') ?>
<script>
    function konfirmasi(id) {
        const konfirm = confirm("Apakah Anda yakin ingin menghapus Fasilitas ini?");
        if (konfirm == true) {
            window.location.replace("<?= base_url() ?>admin/facilities/delete/" + id);
        }
    }

    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>