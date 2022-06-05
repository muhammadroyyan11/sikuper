<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIKUPER | <?= $title ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>


<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?= base_url() ?>assets/uploads/fotoProfil/<?= userdata('foto_profil') ?>" alt="User profile picture">

                    <h3 class="profile-username text-center"><?= userdata('nama') ?></h3>

                    <p class="text-muted text-center"><?= userdata('username') ?></p>

                    <a href="<?= site_url('auth/logout') ?>" class="btn btn-primary btn-block"><b>Logout</b></a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <div class="box-header">
                    <h3 class="box-title">Edit profil</h3>
                    <div class="pull-right">
                        <a href="<?= site_url('home') ?>" class="btn btn-warning btn-flat">
                            <i class="fa fa-undo"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="settings">
                    <form class="form-horizontal" action="<?= site_url('user/prosesEdit/') ?>" method="post" enctype="multipart/form-data">
                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Nama</label>

                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="inputnama" value="<?= userdata('nama') ?>" placeholder="Nama Lengkap">
                                <input type="hidden" name="id_user" class="form-control" id="inputnama" value="<?= userdata('id_user') ?>" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Username</label>

                            <div class="col-sm-10">
                                <input type="username" readonly name="username" class="form-control" value="<?= userdata('username') ?>" id="inputEmail" placeholder="Username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Alamat</label>

                            <div class="col-sm-10">
                                <input type="text" name="alamat" class="form-control" id="inputalamat" value="<?= userdata('alamat') ?>" placeholder="Alamat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputalamat" placeholder="Password">
                                <small>Biarkan kosong jika tidak ada perubahan password</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Foto Profil</label>

                            <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" value="<?= userdata('foto_profil') ?>" style="margin-top: 10px;">
                            <small>Biarkan kosong jika tidak ada perubahan</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Data yang saya masukkan sudah benar</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Edit Profil</button>
                            </div>
                        </div>
                    </form>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="<?= base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>
</body>

<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script>
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor2')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor3')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

</html>