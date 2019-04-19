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
    <link href="<?= site_url("vendor/bootstrap/css/bootstrap.min.css");?>" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?= site_url("vendor/font-awesome/css/font-awesome.min.css");?>" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?= site_url("vendor/datatables/dataTables.bootstrap4.css");?>" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= site_url("css/sb-admin.css");?>" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<div class="content-wrapper" style="min-height:0">
    <?php echo display_message();?>
</div>

<?php partial('header.php');?>
    <?php echo $body;?>
<?php partial('footer.php');?>

</body>

</html>
