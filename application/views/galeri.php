	<style>
		@media (min-width: 765px) {
			.card-img-fit {
				width: 100%;
				height: 14vw;
				object-fit: cover;
			}
		}
	</style>
	
	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(assets/images/smp_24.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Galeri &amp; Photo</h1>
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
		<div class="container">
			<div class="row text-center">
				<h2><span>Gallery Photo</span></h2>
			</div>
			<?= alert(); ?>
			<div class="row" style="margin-bottom: 40px;">
				<?php foreach ($galeri->result() as $x => $d): ?>
				<div class="col-md-3 col-padded text-center">
					<a href="#!" data-toggle="modal" data-target="#komen_<?=$d->id?>">
						<img src="<?= base_url($d->image) ?>" class="img-thumbnail card-img-fit">
					</a>
					<br>
					<?=$d->caption?>
				</div>
				<?php endforeach ?>
			</div>
		</div>
    </div>

<?php foreach ($galeri->result() as $x => $d): 
	$komen = $this->db->where('foreign_id', $d->id)->where('jenis', 'galeri')->where('status', 1)->get('komentar');
?>
<div class="modal fade" id="komen_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header border-0">
				<h5 class="modal-title">Detail</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="padding-top: 0;">
				<div class="text-center">
					<img src="<?= base_url($d->image) ?>" class="img-thumbnail card-img-fit">
					<p><?=$d->caption?></p>
				</div>

				<?php $this->load->view('user/komentar', ['jenis_komentar' => 'galeri', 'komen' => $komen, 'd' => $d]); ?>
			</div>
		</div>
	</div>
</div>
	
<?php endforeach ?>