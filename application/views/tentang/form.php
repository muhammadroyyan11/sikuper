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
                    <textarea id="editor1" name="tentang_kami" rows="10" cols="80"><?= $this->input->post('tentang_kami') ?? $row->tentang_kami ?></textarea>
                </div>
            </div><br>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Foto Halaman Tentang Kami</label>

                <div class="col-sm-10">
                    <input type="file" class="form-control" name="userfile">
                    <p class="help-block">Digunakan untuk halaman sampul Tentang Kami</p>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" name="<?= $page ?>" class="btn btn-info pull-right">Selesai</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->