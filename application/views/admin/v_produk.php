
<?php 

include 'part/header.php';
include 'part/sidebar.php';
include 'part/navbar.php';

?>

<!-- Content -->
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
								<li class="breadcrumb-item active" aria-current="page">Data Product</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<a href="<?= base_url()?>admin/produk/add" class="btn btn-primary"><i class="bx bx-plus"></i> Add Product</a>
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase">Data Product</h6>
				<hr/>
				<?= $this->session->flashdata('sukses')?>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered text-center" style="width:100%">
								<thead>
									<tr>
										<th>No.</th>
										<th>Images</th>
										<th>Product Name</th>
										<th>Category</th>
										<th>Price</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1 ; foreach($produk as $p) {?>
									<tr>
										<td><?= $no++ ?></td>
										<td><img src="<?= base_url()?>uploads/produk/<?= $p->foto?>" width="50px" alt=""></td>
										<td><?= $p->nama ?></td>
										<td><?= $p->kategori?></td>
										<td>Rp.<?= $p->harga ?>;-</td>
										<td><a href="<?= base_url()?>admin/produk/edit/<?= $p->id?>"><i class="bx bxs-edit"></i></a> &nbsp <a href="#hapus<?= $p->id?>"  data-bs-toggle="modal" data-bs-target="#hapus<?= $p->id?>"><i class="bx bxs-trash"></i></a></td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Model  -->
			<!-- Button trigger modal -->
										<?php foreach ($produk as $p) {?>
										<!-- Modal -->
										<div class="modal fade" id="hapus<?= $p->id?>" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-lg modal-dialog-centered">
												<div class="modal-content bg-danger">
													<div class="modal-header">
														<h5 class="modal-title text-white">Delete Product</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body text-white">
														<p>Do you want to delete <b><?= $p->nama?> ?</b> </p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
														<form action="<?= base_url()?>admin/produk/delete/<?= $p->id?>">
														<button type="submit" class="btn btn-warning"><i class="bx bx-trash"></i> Yes</button>
														</form>
													</div>
												</div>
											</div>
										</div>
										<?php }?>
<?php include 'part/footer.php';?>
