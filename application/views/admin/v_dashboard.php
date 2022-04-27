
<?php 

include 'part/header.php';

?>

		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-4">
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-gradient-cosmic">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Products</p>
										<h5 class="mb-0 text-white"><?= $this->db->get('tb_produk')->num_rows()?></h5>
									</div>
									<div class="ms-auto text-white"><i class='bx bxs-t-shirt font-30'></i>
									</div>
								</div>
								<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-gradient-burning">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Category Product</p>
										<h5 class="mb-0 text-white"><?= $this->db->get('tb_kategori')->num_rows()?></h5>
									</div>
									<div class="ms-auto text-white"><i class='bx bx-category font-30'></i>
									</div>
								</div>
								<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-gradient-Ohhappiness">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Users</p>
										<h5 class="mb-0 text-white"><?= $this->db->get('tb_user')->num_rows()?></h5>
									</div>
									<div class="ms-auto text-white"><i class='bx bx-user font-30'></i>
									</div>
								</div>
								<div class="progress bg-white-2 radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10 overflow-hidden bg-gradient-moonlit">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0 text-white">Slide</p>
										<h5 class="mb-0 text-white"><?= $this->db->get('tb_slide')->num_rows()?></h5>
									</div>
									<div class="ms-auto text-white"><i class='bx bx-window font-30'></i>
									</div>
								</div>
								<div class="progress  bg-white-2 radius-10 mt-4" style="height:4.5px;">
									<div class="progress-bar bg-white" role="progressbar" style="width: 100%"></div>
								</div>
							</div>
						</div>
					</div>
				</div><!--end row-->
				
			
				

				<div class="card radius-10">
					<div class="card-header border-bottom-0 bg-transparent">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="font-weight-bold mb-0">New Products</h5>
							</div>
							<div class="ms-auto">
								<a href="<?= base_url()?>admin/produk" class="btn btn-white radius-10">Show All</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive text-center">
							<table class="table mb-0 align-middle">
								<thead>
									<tr>
										<th>Picture</th>
										<th>Name</th>
										<th>Category</th>
										<th>Price</th>
										<th>Link</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($produk as $produk) {?>
									<tr>
										<td>	
										<img src="<?= base_url()?>uploads/produk/<?= $produk->foto?>" width="50px"  alt="">
										</td>
								 		<td><?= $produk->nama?></td>
										<td><?= $produk->kategori?></td>
										<td>Rp.<?= $produk->harga?>;-</td>
										<td><a href="<?= base_url()?>detail/<?= $produk->slug?> " target="_blank" class="btn btn-sm btn-success radius-30">Show Product </a>
										</td>
									</tr>
									<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
<?php include 'part/footer.php';?>
