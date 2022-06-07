<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
        <div class="pull-right">
            <a href="<?= site_url('admin/users/add') ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Tambah
            </a>
            <!-- <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"><i class="fa fa-user-plus"></i> Tambah</button> -->
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Aksi(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($users->result() as $key => $data) {
                        if ($data->role != 1) :
                    ?>
                            <tr>
                                <td style="width:10%;"><?= $no++ ?>.</td>
                                <td><?= $data->nama ?></td>
                                <td><?= $data->alamat ?></td>
                                <td><?= $data->username ?></td>
                                <td class="text-center" width="160px">

                                    <a href="<?= site_url('admin/users/edit/' . $data->id_user) ?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                    <input type="hidden" name="id_user" value="<?= $data->id_user ?>">
                                    <!-- <button onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i> Hapus
                                </button> -->
                                    <a href="<?= site_url('admin/users/del/' . $data->id_user) ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-pencil"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                    <?php
                        endif;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Default Modal</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="nama_jenis_perumahan">Nama Jenis Perumahan</label>
                                <input type="text" class="form-control" id="nama_jenis_perumahan" name="nama_jenis_perumahan" placeholder="Enter email">
                            </div>
                            <!-- /.box-body -->
                            <div class="modal-footer">
                                <button class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->