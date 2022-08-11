<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Data Mahasiswa <?=$apps?></h2>

				<table class="table table-sm display" id="data">
					<thead>
						<tr>
							<th>Nama MHS</th>
							<th>MK</th>
							<th>Nilai</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($datatable as $row) {
								echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
							}
						?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

	

<?= $this->endSection() ?>