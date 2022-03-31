<?php $this->load->view('admin/_partial/header'); ?>

<?php
function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}
?>

<?= $this->session->flashdata('message'); ?>
<section class="content bg-white p-3">
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-6">
                <form method="post" action="<?= base_url() ?>admin/site" enctype="multipart/form-data">

                    <div class="form-group mb-3 row">
                        <label for="title" class="col-sm-2 text-capitalize">site title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" placeholder="Your site name " value="<?= $profile['title'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="slogan" class="col-sm-2 text-capitalize">slogan</label>
                        <div class="col-sm-10">
                            <input type="text" name="slogan" class="form-control" placeholder="Your site slogan " value="<?= $profile['slogan'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="logo" class="col-sm-2 text-capitalize">logo</label>
                        <div class="col-sm-10">
                            <input type="file" name="logo" class="form-control" placeholder="Your site logo ">
                            <img src="<?= base_url() ?>assets/images/<?= $profile['logo'] ?>" width="150" class="p-2 border mt-1 mb-1">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="icon" class="col-sm-2 text-capitalize">icon</label>
                        <div class="col-sm-10">
                            <input type="file" name="icon" class="form-control" placeholder="Your site icon ">
                            <img src="<?= base_url() ?>assets/images/<?= $profile['icon'] ?>" width="150" class="p-2 border mt-1 mb-1">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="address" class="col-sm-2 text-capitalize">address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" placeholder="Your site address " value="<?= $profile['address'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="description" class="col-sm-2 text-capitalize">description</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" placeholder="Your site description"><?= $profile['description'] ?></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="email" class="col-sm-2 text-capitalize">email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" placeholder="Your site email " value="<?= $profile['email'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="phone" class="col-sm-2 text-capitalize">phone</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" placeholder="Your site phone " value="<?= $profile['phone'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="facebook" class="col-sm-2 text-capitalize">facebook</label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook" class="form-control" placeholder="Your site facebook " value="<?= $profile['facebook'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="twitter" class="col-sm-2 text-capitalize">twitter</label>
                        <div class="col-sm-10">
                            <input type="text" name="twitter" class="form-control" placeholder="Your site twitter " value="<?= $profile['twitter'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="instagram" class="col-sm-2 text-capitalize">instagram</label>
                        <div class="col-sm-10">
                            <input type="text" name="instagram" class="form-control" placeholder="Your site instagram " value="<?= $profile['instagram'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="whatsapps" class="col-sm-2 text-capitalize">whatsapps</label>
                        <div class="col-sm-10">
                            <input type="text" name="whatsapps" class="form-control" placeholder="Your site whatsapps " value="<?= $profile['whatsapps'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="youtube" class="col-sm-2 text-capitalize">youtube</label>
                        <div class="col-sm-10">
                            <input type="text" name="youtube" class="form-control" placeholder="Your site youtube " value="<?= $profile['youtube'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="students" class="col-sm-2 text-capitalize">students</label>
                        <div class="col-sm-10">
                            <input type="text" name="students" class="form-control" placeholder="Your site students " value="<?= $profile['students'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="teachers" class="col-sm-2 text-capitalize">teachers</label>
                        <div class="col-sm-10">
                            <input type="text" name="teachers" class="form-control" placeholder="Your site teachers " value="<?= $profile['teachers'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="employee" class="col-sm-2 text-capitalize">employee</label>
                        <div class="col-sm-10">
                            <input type="text" name="employee" class="form-control" placeholder="Your site employee " value="<?= $profile['employee'] ?>">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="extra" class="col-sm-2 text-capitalize">extra</label>
                        <div class="col-sm-10">
                            <input type="text" name="extra" class="form-control" placeholder="Your site extra " value="<?= $profile['extra'] ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm float-sm-right">Save</button>
                    <a href="<?= base_url() ?>admin/profile" class="btn btn-secondary btn-sm float-sm-right mr-2">Cancel</a>
                </form>
            </div><!-- /.col-6 -->
            <div class="col-md-6">
                <div class="p-3 border">
                    <p><b>Site Setting :</b> custom your site with your style, you can edit site title, slogan, logo, icon, and your social media link in your website</p>

                    <img src="<?= base_url() ?>assets/images/<?= $profile['logo'] ?>" alt="{{ $site->title }}" width="200">
                    <b>
                        <h3 class="mt-2" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><?= $profile['title'] ?></h3>
                    </b>
                    <h6><?= $profile['slogan'] ?></h6>
                    <p><b>Alamat: </b><?= $profile['address'] ?></p>
                    <p class="text-justify"><?= $profile['description'] ?></p>
                    <center><img src="<?= base_url() ?>assets/images/<?= $profile['icon'] ?>" alt="<?= $profile['title'] ?>" width="200" class="mb-3"></center>
                    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue. Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue. Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
<?php $this->load->view('admin/_partial/footer') ?>
<script>
    $(document).ready(function() {
        $('#pagetable').DataTable();
    });
</script>