<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
        <div class="pull-right">
            <a href="<?= site_url('admin/berita/add')?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i> Tambah
                </a>
            <!-- <button class="btn btn-primary btn-flat" data-toggle="modal" data-target="#modal-default"><i class="fa fa-user-plus"></i> Tambah</button> -->
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Upload</th>
                    <th>Aksi(s)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($berita->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:10%;"><?= $no++ ?>.</td>
                        <td><?= $data->judul ?></td>
                        <td><?= character_limiter($data->isi, 100) ?></td>
                        <td><?= $data->tgl_berita ?></td>
                        <td class="text-center" width="160px">
                            <form action="<?= site_url('admin/berita/del') ?>" method="post">
                                <a href="<?= site_url('admin/berita/edit/' . $data->id_berita) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-pencil"></i> Edit
                                </a>
                                <input type="hidden" name="id_berita" value="<?= $data->id_berita ?>">
                                <a href="<?= site_url('admin/berita/del/' . $data->id_berita) ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
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
