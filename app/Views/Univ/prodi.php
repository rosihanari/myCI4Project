<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>

	<div class="container">
		<div class="row">
			<div class="col">
				<h2>Data Program Studi</h2>

				<table class="table table-sm display" id="data">
					<thead>
						<tr>
							<th>Fakultas</th>
							<th>Jurusan</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($prodi as $row) {
								echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
							}
						?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>

<?= $this->endSection() ?>