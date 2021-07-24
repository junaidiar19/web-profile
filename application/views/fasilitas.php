	<aside id="fh5co-hero">
		<div class="flexslider">
			<ul class="slides">
		   	<li style="background-image: url(assets/images/smp_24.jpeg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					<h1 class="heading-section">Fasilitas Tersedia</h1>
									<h2>Selamat Datang Di Halaman Fasilitas SMPN 24 Banjarmasin</h2>
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>
	
    <div id="fh5co-fasilitas" class="fh5co-bg-section">
		<div class="container">
        <div class="row text-center">
            <h2><span>Data Fasilitas</span></h2>
        </div>
        <div class="row">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Gambar</th>
                          <th>Jumlah</th>                                 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fasilitas->result() as $x => $d): ?>
                        <tr>
                              <td><?=$x+1?></td>
                              <td><?=$d->name?></td>
                              <td><button data-toggle="modal" data-target="#detail_<?=$d->id?>"><img src="<?= base_url($d->image) ?>"  height="100px" weight="100px"></button></td>
                              <td><?=$d->jmh?></td>
                            
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

<?php foreach ($fasilitas->result() as $x => $d): ?>
<div class="modal fade" id="detail_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Detail Gambar</h2>
                                <center><a data-fancybox="gallery" href="<?= base_url($d->image) ?>"> <img src="<?= base_url($d->image) ?>"  height="250px" weight="100px"></a>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">
              </center><br><p>Nama: <?=$d->name?><br>Jumlah: <?=$d->jmh?></p><br>
          
          </div>
          </div>
        </div>
    </div>
</div>
<?php endforeach ?>