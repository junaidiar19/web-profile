<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(assets/images/smp_24.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Berita SMP Negeri 24 Banjarmasin</h1>
		
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
</aside>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Halaman Berita</h2>
					<p>Berisi tentang informasi kegiatan sekolah atau informasi lainnya terkait SMPN 24 Banjarmasin.</p>
				</div>
			</div>

			
			<div class="row row-padded-mb">
					<?php foreach ($info->result() as $x => $d): ?>
						
				<div class="col-md-4 animate-box">
					<div class="fh5co-event">
						<div class="date text-center"><span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" height="50px" weight="50px"></a></span></div>
						<h3><a href="#"><?= $d->judul ?></a></h3>
						<p><?= substr($d->isi, 0,100) ?>...</p>
						<p><a  href="<?php echo base_url('DetailBerita/index/' .$d->id); ?>">Read More</a></p>
					</div>
				</div>
			  <?php endforeach ?>
				</div>
				
		</div>
	</div>

