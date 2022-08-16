<?= $this->extend('layout/template')?>
<?= $this->section('table') ?>

<div class="container">
		<div class="row">
			<div class="w-50">
				
				<h2>Photo Gallery</h2>

				<!-- Carousel -->

				<div id="demo" class="carousel slide" data-bs-ride="carousel">

				  <!-- Indicators/dots -->
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
				  </div>
				  
				  <!-- The slideshow/carousel -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="images/image1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>UNS Tower</h5>
				        <p>Gedung di UNS sebagai tempat exhibition dan meeting room</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="images/image2.webp" alt="Chicago" class="d-block" style="width:100%">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Gerbang UNS</h5>
				        <p>Pintu gerbang masuk utama ke dalam Kampus UNS</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="images/image3.jpg" alt="New York" class="d-block" style="width:100%">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Danau UNS</h5>
				        <p>Tempat nyaman nan eksotis untuk istirahat dan rekreasi</p>
				      </div>
				    </div>
				  </div>
				  
				  <!-- Left and right controls/icons -->
				  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </button>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>Video</h2>
				<div>
					<video width="320" height="240" controls>
					  <source src="videos/sample.mp4" type="video/mp4">
					Your browser does not support the video tag.
					</video>
				</div>
			</div>
		</div>
</div>


<?= $this->endSection() ?>