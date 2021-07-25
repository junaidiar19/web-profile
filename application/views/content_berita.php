	
	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span><a data-fancybox="gallery" href="<?= base_url($d->gambar) ?>"><img src="<?= base_url($d->gambar) ?>" style="height: 200px; margin-bottom: 20px; weight:200px"></a></span>
					<h2><?= $d->judul ?></h2>
					<p class="text-justify"><?= $d->isi ?></p>
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

