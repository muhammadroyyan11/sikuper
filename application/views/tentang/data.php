<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
        <div class="pull-right">
            <!-- <a href="<?= site_url('admin/tentang/add') ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Tambah
            </a> -->
            <!-- <button class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambah</button> -->
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
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
                foreach ($tentang->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:10%;"><?= $no++ ?>.</td>
                        <td><?= $data->tentang_kami ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?= site_url('admin/tentang/edit/' . $data->id_tentangKami) ?>" class="btn btn-warning btn-xs">
                                <i class="fa fa-pencil"></i> Edit
                            </a>
                            <input type="hidden" name="id_tentangKami" value="<?= $data->id_tentangKami ?>">

                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.modal -->