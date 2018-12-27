<?php echo form_open ('login/simpan_data'); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(''); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(''); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url(''); ?>assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Daftar Akun Baru</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <?php echo form_input ('dpn', ''); ?>
                    <label for="namaDepan">Nama depan</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <?php echo form_input ('blkg', ''); ?>
                    <label for="lastName">Nama belakang</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <?php echo form_input ('email', ''); ?>
                <label for="inputEmail">Alamat E-mail</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <?php echo form_input ('pass', ''); ?>
                    <label for="inputPassword">Kata Sandi</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <?php echo form_input ('ko_pas', ''); ?>
                    <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                  </div>
                </div>
              </div>
            </div>
            <?php echo form_submit ('Daftar', 'Daftar'); ?>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="index">Masuk</a>
            <a class="d-block small" href="forgot-password.html">Lupa Kata Sandi?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(''); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(''); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
