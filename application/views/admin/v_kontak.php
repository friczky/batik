
<?php 

include 'part/header.php';

?>

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">System</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bxs-t-shirt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Contact</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body">
					  <h5 class="card-title">Contact Page</h5>
					  <hr/>
                       <div class="form-body">
                       	<?= $this->session->flashdata('contact')?>
					   <div class="col-sm-12 row">
						
					
						<form action="<?= base_url()?>admin/kontak/update" method="POST" enctype="multipart/form-data">
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Store Name</div>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control" value="<?= $contact['nama']?>">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Address</div>
							<div class="col-sm-10">
								<textarea name="alamat" class="form-control" id="" cols="30" rows="5"><?= $contact['alamat']?></textarea>
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Email</div>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control" value="<?= $contact['email']?>">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Phone</div>
							<div class="col-sm-10">
								<input type="text" name="telpon" class="form-control" value="<?= $contact['telpon']?>">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Maps Url</div>
							<div class="col-sm-10">
								<textarea name="maps" class="form-control" id="" cols="30" rows="5"><?= $contact['maps']?></textarea>
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1"></div>
							<div class="col-sm-11"><input type="submit" class="btn btn-primary" value="Update" name="update"></div>
						</div>
						</form>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>

			</div>
		</div>


<?php include 'part/footer.php';?>
