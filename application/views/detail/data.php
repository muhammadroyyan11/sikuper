<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
        <div class="pull-right">
            <a href="<?= site_url('admin/detailPerumahan/add') ?>" class="btn btn-primary btn-flat">
                <i class="fa fa-user-plus"></i> Tambah
            </a>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <?= $this->session->flashdata('pesan'); ?>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perumahan</th>
                    <th>Jenis</th>
                    <th>Lokasi</th>
                    <!-- <th>Keterangan</th> -->
                    <th>Fasilitas</th>
                    <th>Alamat</th>
                    <th>Luas Tanah</th>
                    <th>Tentang</th>
                    <th>Ketersedian</th>
                    <th>Pengembang</th>
                    <th>Total Unit</th>
                    <th>Aksi(s)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($detail->result() as $key => $data) { ?>
                    <tr>
                        <td style="width:10%;"><?= $no++ ?>.</td>
                        <td><?= $data->nama_perumahan ?></td>
                        <td><?= character_limiter($data->nama_jenis, 5) ?></td>
                        <td><?= $data->lokasi ?></td>
                        <!-- <td><?= character_limiter($data->ket_perumahan, 100) ?></td> -->
                        <td><?= $data->fasilitas ?></td>
                        <td><?= $data->alamat ?></td>
                        <td><?= $data->luas_tanah ?></td>
                        <td><?= character_limiter($data->tentang_perumahan, 5) ?></td>
                        <td><?= $data->ketersediaan ?></td>
                        <td><?= $data->nama_pengembang ?></td>
                        <td><?= $data->total_unit_perumahan ?></td>
                        <td class="text-center" width="160px">
                            <a href="<?= site_url('admin/detailPerumahan/edit/' . $data->id_perumahan) ?>" class="btn btn-warning btn-xs">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?= site_url('admin/detailPerumahan/del/' . $data->id_perumahan) ?>" onclick="return confirm('Apakah Anda Yakin ?')" class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </a>
                            <input type="hidden" name="id_perumahan" value="<?= $data->id_perumahan ?>">

                        </td>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>