<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Akıllı Otopark Sistemi</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Akıllı Otopark Sistemi Girişi</div>
        <?php echo display_message();?>

        <div class="card-body">
            <form action="<?= site_url("login/post");?>" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Adresi</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" name="email" aria-describedby="emailHelp" placeholder="Email Adresini Giriniz...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Şifre</label>
                    <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Şifre Giriniz...">
                </div>
                <button class="btn btn-primary btn-block" >Giriş</button>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
