<!-- Horizontal Form -->
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama Perumahan</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="nama_perumahan" value="<?= $row->nama_perumahan ?>" placeholder="Nama Perumahan">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Jenis Perumahan</label>
                <div class="col-sm-10">
                    <select class="form-control">
                        <?php foreach ($jenis as $key => $data) { ?>
                            <option><?= $data->nama_jenis ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Lokasi</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="lokasi" value="<?= $row->lokasi ?>" placeholder="Lokasi">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>

                <div class="col-sm-10">
                    <textarea id="editor1" name="keterangan" rows="10" cols="80"><?= $this->input->post('keterangan') ?? $row->ket_perumahan ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Fasilitas</label>

                <div class="col-sm-10">
                    <textarea id="editor2" name="fasilitas" rows="10" cols="80"><?= $this->input->post('fasilitas') ?? $row->fasilitas ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="Alamat" value="<?= $row->alamat ?>" placeholder="Alamat">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Luas tanah</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="Luas tanah" value="<?= $row->luas_tanah ?>" placeholder="Luas tanah">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Tentang</label>

                <div class="col-sm-10">
                    <textarea id="editor3" name="tentang" rows="10" cols="80"><?= $this->input->post('tentang') ?? $row->tentang_perumahan ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Ketersediaan</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="ketersediaan" value="<?= $row->ketersediaan ?>" placeholder="ketersediaan">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Pengembang</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="nama_pengembang" value="<?= $row->nama_pengembang ?>" placeholder="nama_pengembang">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Total Unit</label>

                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" name="total_unit_perumahan" value="<?= $row->total_unit_perumahan ?>" placeholder="total_unit_perumahan">
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" name="<?= $page ?>" class="btn btn-info pull-right">Sign in</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>