<!-- Horizontal Form -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="<?= site_url('admin/berita/proses') ?>" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <input type="hidden" value="<?= $row->id_berita ?>" name="id_berita" class="form-control">
                <label for="inputEmail3" class="col-sm-2 control-label">Judul Berita</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" value="<?= $row->judul ?>" name="judul" placeholder="Masukkan Judul Berita">
                </div>
            </div><br>
            <div class="form-group" style="margin-top: 10px;">
                <label for="inputPassword3" class="col-sm-2 control-label">Isi Berita</label>
                <div class="col-sm-10">
                    <textarea id="editor1" name="isi" rows="10" cols="80"><?= $this->input->post('konten') ?? $row->isi ?></textarea>
                </div>
            </div><br>
            <div class="form-group" style="margin-top: 20px;">
                <label for="inputEmail3" class="col-sm-2 control-label">Foto Berita</label>

                <div class="col-sm-10">
                    <?php

                    if ($row->foto_berita != null) {
                        if ($page == 'edit') { ?>
                            <img src="<?= base_url() ?>assets/uploads/Berita/<?= $row->foto_berita ?>" alt="" width="50%" style="margin-top: 10px;">
                        <?php }
                    }
                    if ($page == 'add') { ?>
                        <input type="file" class="form-control" name="image" value="<?= $row->foto_berita ?>" style="margin-top: 10px;" required>
                    <?php } else { ?>
                        <input type="file" class="form-control" name="image" value="<?= $row->foto_berita ?>" style="margin-top: 10px;">
                    <?php } ?>

                    <input type="hidden" value="<?= $row->tgl_berita ?>" name="tgl_berita" id="">
                    <p class="help-block"><?= $page == 'edit' ? 'Biarkan kosong jika tidak ada perubahan gambar' : 'Digunakan untuk halaman sampul berita ' ?></p>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" name="<?= $page ?>" class="btn btn-info pull-right">Selesai</button>
            <a class="btn btn-primary pull-right" href="<?= site_url('admin/berita')?>" role="button">Batal</a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->