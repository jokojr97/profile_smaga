<?php $this->load->view('admin/_partial/header'); ?>
<!-- container-fluid -->
<div class="container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <!-- form -->
    <form action="<?= base_url() ?>admin/galeri/foto/add" method="post" enctype="multipart/form-data">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-md-7">

                <!-- form-group -->
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="post_content" name="deskripsi" class="form-control ckeditor">
                        <?= set_value('deskripsi') ?>
                    </textarea>
                </div>
                <!-- // form-group -->
            </div>
            <div class="col-md-5">

                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="hidden" name="nama_user" value="<?= $nama_user ?>">
                <!-- form-group -->

                <div class="form-group mb-3">
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" class="form-control" value="<?= set_value('gambar') ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul Post ..." value="<?= set_value('judul') ?>">
                    <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
                </div>
                <!-- // form-group -->

                <!-- form-group -->
                <div class="form-group mb-3">
                    <label for="tanggal">Tanggal Upload</label>
                    <input type="date" name="tanggal" class="form-control" value="<?= date('Y-m-d'); ?>">
                </div>
                <!-- // form-group -->

                <button type="submit" class="btn btn-danger float-right ml-3"><i class="fas fa-upload"></i>&nbsp;&nbsp;Publish</button>
                <a href="<?= base_url() ?>admin/berita" class="text-bold btn btn-default float-right"><i class="fa fa-close"></i>&nbsp;&nbsp;Cancel</a>
                <!-- </div> -->
            </div>
            <!-- // col -->
            <!-- col -->
            <!-- //.col -->
        </div>
        <!-- /.row -->
    </form>
    <!-- // form -->
</div>
<!--/. container-fluid -->
<?php $this->load->view('admin/_partial/footer') ?>

<script>
    // WYSIWIG
    CKEDITOR.replace('post_content', {
        filebrowserBrowseUrl: '<?= base_url('assets/js/kcfinder/browse.php') ?>',
        height: '600px',

        allowedContent: {
            script: true,
            div: true,
            $1: {
                // This will set the default set of elements
                elements: CKEDITOR.dtd,
                attributes: true,
                styles: true,
                classes: true
            }
        }
    });

    // keyword jquery
    const btnAdd = document.querySelector('#btnAdd');
    const btnRemove = document.querySelector('#btnRemove');
    const sb = document.querySelector('#list');
    const name = document.querySelector('#tag');
    const hid = document.querySelector('#hid');
    var i = 2;

    btnAdd.onclick = (e) => {
        e.preventDefault();

        // validate the option
        if (name.value == '') {
            alert('Please enter the name.');
            return;
        }
        // create a new option
        const option = new Option(name.value, name.value);
        // add it to the list
        sb.add(option, undefined);

        var x = document.createElement("INPUT");
        x.setAttribute("type", "hidden");
        x.setAttribute("name", "tags[]");
        x.setAttribute("value", name.value);
        trimname = name.value;
        trimname = trimname.replaceAll(' ', '-');
        trimname = trimname.replaceAll('-', '');
        trimname = trimname.replaceAll(',', '');
        trimname = trimname.replaceAll(';', '');
        trimname = trimname.replaceAll('.', '');
        trimname = trimname.replaceAll('?', '');
        x.setAttribute("id", trimname);
        hid.appendChild(x);
        i++;

        // reset the value of the input
        name.value = '';
        name.focus();
    };

    // remove selected option
    btnRemove.onclick = (e) => {
        e.preventDefault();

        // save the selected option
        let selected = [];

        for (let i = 0; i < sb.options.length; i++) {
            selected[i] = sb.options[i].selected;
        }

        // remove all selected option
        let index = sb.options.length;
        while (index--) {
            if (selected[index]) {
                trimname = sb.options[index].value;
                trimname = trimname.replaceAll(' ', '');
                trimname = trimname.replaceAll('-', '');
                trimname = trimname.replaceAll(',', '');
                trimname = trimname.replaceAll(';', '');
                trimname = trimname.replaceAll('.', '');
                trimname = trimname.replaceAll('?', '');

                const tagdihapus = document.getElementById(trimname);
                tagdihapus.remove();
                console.log(trimname);
                sb.remove(index);
            }
        }
    };

    // REPLACE KATEGORI
    function catfunction(category) {
        const Kategori = document.querySelector('#kategoriinput');
        Kategori.value = category.value;
    }
</script>

<!-- For Bootstrap 4 -->
<script src="<?= base_url() ?>assets/plugin/dist/js/BsMultiSelect.bs4.min.js"></script>
<script>
    $(function() {
        $("#selectprogram").bsMultiSelect();
    });
</script>