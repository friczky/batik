
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
					<div class="breadcrumb-title pe-3">Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bxs-t-shirt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
					  <h5 class="card-title">Add New Product</h5>
					  <hr/>
                       <div class="form-body">
					   
						<form action="<?= base_url()?>admin/produk/update/<?= $p['id']?>" method="POST" enctype="multipart/form-data">
						<div class="col-sm-12 row">
							<div class="col-sm-1">Name</div>
							<div class="col-sm-10">
								<input type="text" name="nama" class="form-control" value="<?= $p['nama']?>" placeholder="Insert Product Name">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Category</div>
							<div class="col-sm-10">
								<select name="kategori" id="" class="form-control">
									<option value="<?= $p['kategori']?>"> <?= $p['nama']?> </option>
									<option value="SSSS">SSSSS</option>
								</select>
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Price</div>
							<div class="col-sm-10">
								<input type="text" name="harga" value="<?= $p['harga']?>" class="form-control" placeholder="Insert Price">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Picture</div>
							<div class="col-sm-10">
								<input type="file" name="foto" class="form-control">
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1">Description</div>
							<div class="col-sm-11">
								<textarea name="deskripsi" id="editor" cols="30" rows="10"><?= $p['deskripsi']?></textarea>
							</div>
						</div>
						<br>
						<div class="col-sm-12 row">
							<div class="col-sm-1"></div>
							<div class="col-sm-11"><input type="submit" class="btn btn-primary" value="Update"></div>
						</div>
						</form>
					   </div><!--end row-->
					</div>
				  </div>
			  </div>

			</div>
		</div>


<?php include 'part/footer.php';?>
