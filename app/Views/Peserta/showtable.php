<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Data Peserta</h2>
				<h4>Total Data Peserta: <?=$total?></h4>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<a href="<?= base_url('peserta/create')?>" class="btn btn-primary">Tambah Data</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<table class="table table-sm display" id="data">
				<thead>
					<tr>
						<th>Nama Peserta</th>
						<th>Email</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($peserta as $row) {
							echo "<tr><td>".$row->name."</td><td>".$row->email."</td><td><a href='".base_url('peserta/edit/'.$row->id)."' class='btn btn-info'>Edit</a> <a href='".base_url('peserta/delete/'.$row->id)."' class='btn btn-danger'>Del</a></td></tr>";

						}
					?>
				</tbody>
				</table>
			</div>
		</div>
		
	</div>

<?= $this->endSection() ?>