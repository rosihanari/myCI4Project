<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>



<div class="container">
	<div class="row">
			<div class="col">
				<h2>Input Data Peserta</h2>
			</div>
	</div>
	<div class="row">
			<div class="col">
				<?php
					if (!empty(session()->getFlashdata('error'))){
						echo "<h4>Cek kembali isian Anda</h4>";
						echo session()->getFlashdata('error');
					}
				?>
			</div>
	</div>
	<div class="row">
			<div class="col">
				<form method="post" action="<?= base_url('/peserta/store') ?>">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="<?=old('name')?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?=old('email')?>">
					</div>
					<div class="form-group">
						<label for="email">Gender</label>
						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" id="gender1" value="L">
						  <label class="form-check-label" for="gender1">
						    Laki-laki
						  </label>
						</div>

						<div class="form-check">
						  <input class="form-check-input" type="radio" name="gender" id="gender2" value="P">
						  <label class="form-check-label" for="gender2">
						    Perempuan
						  </label>
						</div>
						    
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>			
			</div>
	</div>
</div>


<?= $this->endSection() ?>