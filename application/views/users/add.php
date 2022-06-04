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
                <input value="<?= set_value('username'); ?>" type="text" id="username" name="username" class="form-control" placeholder="Username">
                <?= form_error('username', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="password">Password</label>
            <div class="col-md-6">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="password2">Konfirmasi Password</label>
            <div class="col-md-6">
                <input type="password" id="password2" name="password2" class="form-control" placeholder="Konfirmasi Password">
                <?= form_error('password2', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <hr>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="nama">Nama</label>
            <div class="col-md-6">
                <input value="<?= set_value('nama'); ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="email">Alamat</label>
            <div class="col-md-6">
                <input value="<?= set_value('alamat'); ?>" type="text" id="alamat" name="alamat" class="form-control" placeholder="alamat">
                <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-4 text-md-right" for="role">Role</label>
            <div class="col-md-6">
                <div class="custom-control custom-radio">
                    <input <?= set_radio('role', '1'); ?> value="admin" type="radio" id="admin" name="role" class="custom-control-input">
                    <label class="custom-control-label" for="admin">Admin</label>
                </div>
                <div class="custom-control custom-radio">
                    <input <?= set_radio('role', '2'); ?> value="user" type="radio" id="user" name="role" class="custom-control-input">
                    <label class="custom-control-label" for="user">User</label>
                </div>
                <?= form_error('role', '<span class="text-danger small">', '</span>'); ?>
            </div>
        </div>
        <br>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <button type="submit" class="btn btn-success pull-right">Selesai</button>
    </div>
    <!-- /.box-footer -->
    <?= form_close(); ?>
</div>
<!-- /.box -->