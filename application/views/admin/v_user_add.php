
<?php 

include 'part/header.php';

?>

<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bxs-t-shirt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add User</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="<?= base_url()?>admin/produk" class="btn btn-primary"><i class="bx bx-arrow-back"></i> Back</a>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body">
					  <h5 class="card-title">Add New User</h5>
					  <hr/>
                       <div class="form-body">
					   
						<form action="<?= base_url()?>admin/user/store" method="POST" enctype="multipart/form-data">
						<div class="col-sm-12 row">
							<div class="col-sm-1">Name</div>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control" placeholder="Insert Full Name">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Username</div>
							<div class="col-sm-10">
								<input type="text" name="username" class="form-control" placeholder="Insert Username ">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Password</div>
							<div class="col-sm-10">
								<input type="password" name="password" class="form-control" placeholder="Insert Password">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Email</div>
							<div class="col-sm-10">
								<input type="text" name="email" class="form-control" placeholder="Insert Email">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Role</div>
							<div class="col-sm-10">
								<select name="role" class="form-control" id="">
									<option value="Super Admin">Super Admin</option>
									<option value="Karyawan">Karyawan</option>
								</select>
							</div>
						</div>
						<br>
		
						<div class="col-sm-12 row">
							<div class="col-sm-1">Images</div>
							<div class="col-sm-10">
								<input type="file" name="foto" class="form-control">
							</div>
						</div>
						<br>
						
						<div class="col-sm-12 row">
							<div class="col-sm-1"></div>
							<div class="col-sm-11"><input type="submit" class="btn btn-primary" value="Save"></div>
						</div>
						</form>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>

			</div>
		</div>


<?php include 'part/footer.php';?>
