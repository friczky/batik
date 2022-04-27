
<?php 

include 'part/header.php';
include 'part/sidebar.php';
include 'part/navbar.php';

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
								<li class="breadcrumb-item active" aria-current="page">About</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

              <div class="card">
				  <div class="card-body">
					  <h5 class="card-title">About Page</h5>
					  <hr/>
                       <div class="form-body">
					   <div class="col-sm-12 row">
							<div class="col-sm-1">Logo</div>
							<div class="col-sm-10">
								<img src="<?= base_url()?>uploads/system/<?= $about['foto']?>" alt="" width="300px" class="card-image">
							</div>
							
						</div>
						<form action="<?= base_url()?>admin/tentang" method="POST" enctype="multipart/form-data">
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Title</div>
							<div class="col-sm-10">
								<input type="text" name="judul" class="form-control" value="<?= $about['judul']?>">
							</div>
						</div>
						<br>
						
						<div class="col-sm-12 row">
							<div class="col-sm-1">New Logo</div>
							<div class="col-sm-10">
								<input type="file" name="foto" class="form-control">
								<input type="hidden" name="foto_old" class="form-control" value="<?= $about['foto']?>">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Description</div>
							<div class="col-sm-11">
								<textarea name="deskripsi" id="editor" cols="30" rows="10"><?= $about['deskripsi']?></textarea>
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1"></div>
							<div class="col-sm-11"><input type="submit" class="btn btn-primary" value="Update" name="update"></div>
						</div>
					  <hr/>
						</form>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>

			</div>
		</div>


<?php include 'part/footer.php';?>
