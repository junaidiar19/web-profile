<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Admin</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
                <li class="breadcrumb-item active">Komentar</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container">
    <?= alert(); ?>
    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <div class="col-md-6">
                    <h6>Data Komentar Kegiatan</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th width="10">No</th>
                          <th>Email</th>
                          <th>Isi Komentar</th>
                          <th width="200px">Judul Berita</th>
                          <th>Status</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($komentar as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                            <td><?=$d->email?></td>
                            <td><?=$d->isi?></td>
                            <td><?=$d->judul?></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" id="status-<?=$d->id?>" onclick="checkStatus(<?=$d->id?>)" <?=($d->status == 1) ? 'checked' : '' ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="delete_komentar(<?=$d->id?>)"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#balas_<?=$d->id?>"><i class="fas fa-reply"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-white">
            <div class="row">
                <div class="col-md-6">
                    <h6>Data Komentar Galeri</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-reponsive">
                <table class="table table-striped dataTable">
                    <thead>
                        <tr>
                          <th width="10">No</th>
                          <th>Email</th>
                          <th>Isi Komentar</th>
                          <th>Caption</th>
                          <th>Status</th>
                          <th>Aksi</th>                                     
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($komen as $x => $d): ?>
                        <tr>
                            <td><?php echo $x+1 ?></td>
                            <td><?=$d->email?></td>
                            <td><?=$d->isi?></td>
                            <td><?=$d->caption?></td>
                            <td>
                                <label class="switch">
                                    <input type="checkbox" id="status-<?=$d->id?>" onclick="checkStatus(<?=$d->id?>)" <?=($d->status == 1) ? 'checked' : '' ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm" onclick="delete_komentar(<?=$d->id?>)"><i class="fas fa-trash"></i></button>
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#balas_<?=$d->id?>"><i class="fas fa-reply"></i></button>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach($komentarAll as $x => $d): ?>
<div class="modal fade" id="balas_<?=$d->id?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title">Balas Komentar</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo base_url('komentar/balas/' . $d->id) ?>" method="post">
            <input type="hidden" name="user_id" value="<?= $this->auth->user()->id ?>">
            <div class="modal-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" value="<?= $d->email ?>" readonly>
                </div>
                <p class="mb-0">Komentar:</p>
                <p><?=$d->isi?></p>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" value="<?= $this->auth->user()->name ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Balasan</label>
                    <textarea name="balas" class="form-control" cols="30" rows="4"><?=$d->balas?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach ?>

<script>
function delete_komentar(id) {
    var check = confirm('Yakin ingin menghapus data ?');

    if(check) {
        $.ajax({
            type: 'post',
            url : '<?=base_url('komentar/delete')?>',
            data : {id:id},
            success: function(res) {
                location.reload();
            }, error: function(err) {
                console.log(err);
            }
        })
    }
}

function checkStatus(id) {
    var check = $("#status-"+id);
    var val   = check.is(":checked") ? '1' : null;

    $.ajax({
        type: 'post',
        url: "<?= base_url('komentar/update_status') ?>",
        data : {
            "id" : id,
            "val" : val,
        }, success: function(data) {
            console.log(data)
        }, error: function(err) {
            console.log(err);
        }
    });
}
</script>