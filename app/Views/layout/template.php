<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  -->
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>My First CI4 Web App</h1>			
			</div>
		</div>

		<div class="row">
			<div class="col">
				<ul>
					<li><a href="<?= base_url('/')?>">Home</a></li>
					<li><a href="<?= base_url('/mhs')?>">Mahasiswa</a></li>
					<li><a href="<?= base_url('/prodi')?>">Prodi</a></li>
					<li><a href="<?= base_url('/peserta')?>">Peserta Diklat</a></li>
					<li><a href="<?= base_url('/gallery')?>">Galeri</a></li>
				</ul>				
			</div>
		</div>
	</div>
	

	<?= $this->renderSection('table') ?>

</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
		    $('#data').DataTable();
		});		
	</script>

</html>

