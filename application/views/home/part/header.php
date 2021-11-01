
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php $system = $this->db->where('id',1)->get('tb_tentang')->row_array()?>

        <title><?= $system['judul']?> - Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>uploads/system/<?= $system['foto']?>">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/animate.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/magnific-popup.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/jquery.mCustomScrollbar.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/jquery-ui.min.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/jarallax.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/flaticon.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/slick.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/default.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/style.css">
        <link rel="stylesheet" href="<?= base_url()?>assets/home/css/responsive.css">
    </head>
    <body>