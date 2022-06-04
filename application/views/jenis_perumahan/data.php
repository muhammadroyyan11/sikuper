<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
        <div class="pull-right">
            <!-- <a href="#" class="btn btn-primary btn-flat"  data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-user-plus"></i> Tambah
                </a> -->
            <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"><i class="fa fa-user-plus"></i> Tambah</button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jenis Perumahan</th>
                    <th>Aksi(s)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($jenis->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:10%;"><?= $no++ ?>.</td>
                        <td><?= $data->nama_jenis ?></td>
                        <td class="text-center" width="160px">
                            <form action="<?= site_url('admin/jenisPerumahan/del') ?>" method="post">
                                <a href="<?= site_url('admin/jenisPerumahan/edit/' . $data->id_jenis_perumahan) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <input type="hidden" name="id_jenis_perumahan" value="<?= $data->id_jenis_perumahan ?>">

                                <a href="<?= site_url('admin/jenisPerumahan/del/' . $data->id_jenis_perumahan) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin ?')">
                                    <i class="fa fa-trash"></i> Hapus
                                </a>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
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
                <form action="<?= site_url('admin/jenisPerumahan/proses') ?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="nama_jenis_perumahan">Nama Jenis Perumahan</label>
                            <input type="text" class="form-control" id="nama_jenis_perumahan" value="" name="nama_jenis_perumahan" placeholder="Masukkan Nama Jenis">
                        </div>
                        <!-- /.box-body -->
                        <div class="modal-footer">
                            <button name="edit" class="btn btn-primary">Save changes</button>
                        </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->