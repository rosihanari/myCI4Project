<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>


<div class="container">
	<div class="row">
			<div class="col">
				<h2>Edit Data Peserta</h2>
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
				<form method="post" action="<?= base_url("/peserta/update/".$peserta->id) ?>">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" value="<?=$peserta->name?>">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" value="<?=$peserta->email?>">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
				</form>			
			</div>
	</div>
</div>


<?= $this->endSection() ?>