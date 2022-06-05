<!-- Horizontal Form -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?= form_open(); ?>
    <div class="box-body">
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="username">Username</label>
            <div class="col-md-6">
                <input value="<?= $row->username ?>" type="text" id="username" name="username" class="form-control" placeholder="Username">
                <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <hr>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="nama">Nama</label>
            <div class="col-md-6">
                <input value="<?= $row->nama ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="email">alamat</label>
            <div class="col-md-6">
                <input value="<?= $row->alamat  ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat">
                <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <!--  -->
        <br>
       
        <br>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-success pull-right">Selesai</button>
        <a class="btn btn-primary pull-right" href="<?= site_url('admin/users')?>" role="button">Batal</a>
    </div>
    <!-- /.box-footer -->
    <?= form_close(); ?>
</div>
<!-- /.box -->