<?php $this->load->view('admin/_partial/header') ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">

			<?= $this->session->flashdata('message'); ?>
			<form action="<?= base_url() ?>auth/gantipassword" method="post" enctype="multipart/form-data">

				<div class="form-group mb-3">
					<label for="passwordlama">Password Lama</label>
					<input type="password" name="passwordlama" class="form-control" placeholder="Masukkan Password Lama Anda ..." id="passwordlama">
					<input type="checkbox" value="" id="showpwd1" onclick="myFunction()">
					<label class="form-check-label" for="defaultCheck1" onclick="myFunction()">
						Show Password
					</label>
					<?= form_error('passwordlama', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group mb-3">
					<label for="passwordbaru1">Password Baru</label>
					<input type="password" name="passwordbaru1" class="form-control" placeholder="Masukkan Password Baru Anda ..." id="passwordbaru">
					<input type="checkbox" value="" id="showpwd2" onclick="myFunction()">
					<label class="form-check-label" for="defaultCheck1" onclick="myFunction()">
						Show Password
					</label>
					<?= form_error('passwordbaru1', '<small class="text-danger">', '</small>') ?>
				</div>
				<div class="form-group mb-3">
					<label for="passwordbaru2">Ulangi Password</label>
					<input type="password" name="passwordbaru2" class="form-control" placeholder="Ulangi Password Anda ..." id="ulangipassword">
					<input type="checkbox" value="" id="showpwd3" onclick="myFunction()">
					<label class="form-check-label" for="defaultCheck1" onclick="myFunction()">
						Show Password
					</label>
					<?= form_error('passwordbaru2', '<small class="text-danger">', '</small>') ?>
				</div>
				<!-- <div class="form-group"> -->
				<button type="submit" class="btn btn-danger float-right"><i class="fa fa-lock"></i>&nbsp;&nbsp; Ganti Password</button>
				<!-- </div> -->
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('admin/_partial/footer') ?>
<script>
	function myFunction() {
		var x = document.getElementById("passwordlama");
		var y = document.getElementById("passwordbaru");
		var z = document.getElementById("ulangipassword");
		if (x.type === "password" && y.type === "password") {
			x.type = "text";
			y.type = "text";
			z.type = "text";
			document.getElementById("showpwd1").checked = true;
			document.getElementById("showpwd2").checked = true;
			document.getElementById("showpwd3").checked = true;
		} else {
			x.type = "password";
			z.type = "password";
			y.type = "password";
			document.getElementById("showpwd1").checked = false;
			document.getElementById("showpwd2").checked = false;
			document.getElementById("showpwd3").checked = false;
		}
	}
</script>