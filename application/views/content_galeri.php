	
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"><img src="<?= base_url($d->image) ?>" style="height: 300px; margin-bottom: 20px; weight:300px"></a></span>
					<p class="text-center"><?= $d->caption ?></p>
				</div>
			</div>	

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<?php $this->load->view('user/komentar', ['jenis_komentar' => 'berita']); ?>
				</div>
			</div>

		</div>
	</div>




<!--	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(<?=base_url('assets/images/smp_24.jpeg')?>);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Detail Galeri &amp; Komentar</h1>
									<h2>Selamat Datang Di Halaman Galeri SMPN 24 Banjarmasin</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Gallery</span></h2>
        </div>
        <div class="row">
        	 <?php foreach ($galeri->result() as $x => $d): ?>
            <center>
            	<a data-fancybox="gallery" href="<?= base_url($d->image) ?>"> <img src="<?= base_url($d->image) ?>"  height="500px" weight="500px"></a>
            	<p class="text-center"><?= ($d->caption) ?></p></center><br>
            </div>
                        <?php endforeach ?>
        </div>

        <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Komentar</span></h2>
        </div>
        <div class="row">
        	 <ul>
						<?php foreach ($komen->result() as $x => $d): ?>	
							<center>
							<b><?= $d->id_user ?></b> : 
							<?= $d->isi_komen?>
							<hr />
							</center>
			  			<?php endforeach ?>
			  			</ul>
        </div>

