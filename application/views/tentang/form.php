<!-- Horizontal Form -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="<?= site_url('admin/tentang/proses') ?>" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Tentang Kami</label>
                <div class="col-sm-10">
                    <input type="hidden" value="<?= $row->id_tentangKami ?>" name="id_tentangKami">
                    <textarea id="editor1" name="tentang_kami" rows="10" cols="80"><?= $this->input->post('tentang_kami') ?? $row->tentang_kami ?></textarea>
                </div>
            </div><br>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Foto Halaman Tentang Kami</label>
                <?php

                if ($page == 'edit') {
                    if ($row->foto != null) { ?>
                        <!-- <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" value="<?= $row->foto ?>" required>
                        </div> -->
                        <div class="col-sm-10">
                            <img src="<?= base_url() ?>assets/uploads/tentang/<?= $row->foto ?>" alt="" width="50%" style="margin-top: 10px;">
                            <input type="file" class="form-control" name="image" value="<?= $row->foto ?>" style="margin-top: 10px;">
                            <p class="help-block">Hiraukan form upload jika tidak ada perubahan gambar</p>
                        </div>
                    <?php }
                } else { ?>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                        <p class="help-block">Digunakan untuk halaman sampul Tentang Kami</p>
                    </div>
                <?php } ?>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" name="<?= $page ?>" class="btn btn-info pull-right">Selesai</button>
            <a class="btn btn-primary pull-right" href="<?= site_url('admin/tentang')?>" role="button">Batal</a>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->