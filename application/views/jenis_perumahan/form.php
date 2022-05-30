<!-- Horizontal Form -->
<div class="box">
    <div class="box-header">
        <h3 class="box-title"><?= $title ?></h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="<?= site_url('admin/jenisPerumahan/proses') ?>" method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group">
                <input type="hidden" value="<?= $row->id_jenis_perumahan ?>" name="id_jenis_perumahan" class="form-control">
                <label for="inputEmail3" class="col-sm-2 control-label">Judul Berita</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" value="<?= $row->nama_jenis ?>" name="nama_jenis" placeholder="Masukkan Judul Berita">
                </div>
            </div><br>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-info pull-right">Selesai</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>
<!-- /.box -->