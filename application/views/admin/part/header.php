
<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor3 color-header headercolor1">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<?php $system = $this->db->where('id',1)->get('tb_tentang')->row_array()?>

	<link rel="icon" href="<?= base_url()?>uploads/system/<?= $system['foto']?>" type="image/png" />
	<!--plugins-->
	<link href="<?= base_url()?>assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/admin/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="<?= base_url()?>assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="<?= base_url()?>assets/admin/css/pace.min.css" rel="stylesheet" />
	<script src="<?= base_url()?>assets/admin/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/admin/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?= base_url()?>assets/admin/css/app.css" rel="stylesheet">
	<link href="<?= base_url()?>assets/admin/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/dark-theme.css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/semi-dark.css" />
	<link rel="stylesheet" href="<?= base_url()?>assets/admin/css/header-colors.css" />
	
	<title>Admin : <?= $system['judul']?></title>
</head>

<?php 
    $status = $this->session->userdata('status');
    if ($status != 'login') {
        $this->session->set_flashdata('alert','<div class="alert alert-danger">Silahkan login terlebih dahulu untuk masuk ke halaman admin !</div>');
        redirect (base_url('login'));
    }

?>
