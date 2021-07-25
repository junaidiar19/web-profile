<div class="fh5co-contact-info" style="padding-top: 0px;">
    <h4>Komentar</h4>

    <?php if($komen->num_rows() > 0): ?>
    <?php foreach ($komen->result() as $x => $r): ?>	

    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object avatar avatar-sm rounded-circle" src="<?= base_url('assets/avatar.jpg') ?>" alt="...">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading"><?= $r->email ?></h4>
            <?= $r->isi ?>
            
            <?php 
                $balasan = $this->model->get_balasan($r->id);
                if(@$balasan->balas) {
            ?>
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object avatar avatar-sm rounded-circle" src="<?= base_url($balasan->image) ?>" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?= $balasan->name ?></h4>
                    <?= $balasan->balas ?>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

    <?php endforeach ?>
    <?php else: ?>
        <p>belum ada komentar</p>
    <?php endif ?>
    </div>
    <div><br><br>
    <?= alert(); ?>
    <h4>Sampaikan Komentar Anda</h4>
    <form action="<?php echo base_url('komentar/store/' . $jenis_komentar) ?>" method="post">

    <div class="row form-group">						
        <div class="col-md-12">
            <input type="hidden" name="id" value="<?=$d->id?>">
            <input type="text" class="form-control" value="<?=$d->judul ?? $d->caption ?>" readonly>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <input type="email" name="email" id="email" class="form-control" placeholder="Email Anda">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-12">
            <textarea name="isi" id="message" cols="30" rows="10" class="form-control" placeholder="Masukkan Komentar Anda"></textarea>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Kirim Komentar" class="btn btn-primary">
    </div>

    </form>	
</div>
