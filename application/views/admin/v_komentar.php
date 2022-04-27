<?php 

include 'part/header.php';

?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Comment</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i class="bx bxs-t-shirt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Comment</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">All Comments</h5>
                <hr/>
                <div class="form-body">
                    <?= $this->session->flashdata('sukses')?>
                    <form
                        action="<?= base_url()?>admin/slide/store"
                        method="POST"
                        enctype="multipart/form-data">
                        <div class="col col-sm-12 row">
                                <table class="table">
                                    <tr>
                                        <th>No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
										<th>Product</th>
										<th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $no =1 ; foreach ($komentar as $s){?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s->nama?></td>
										<td><?= $s->email?></td>
										<td><a href="komentar/product/<?= $s->id_produk?>" target="_blank">Show Product</a></td>
                                        <td><?= $s->komentar?></td>
                                        <td>
                                            <a
                                                href="#hapus<?= $s->id?>"
                                                data-bs-toggle="modal"
                                                data-bs-target="#hapus<?= $s->id?>">
                                                <i class="bx bxs-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                            
                        </div>
                    </form>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

</div>
</div>

<!-- Modal Hapus-->
<?php foreach ($komentar as $s) {?>
<div class="modal fade" id="hapus<?= $s->id?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content bg-danger">
    <div class="modal-header">
        <h5 class="modal-title text-white">Delete Comment</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body text-white">
        <p>Delete comment
            <b><?= $s->nama?>
                ?</b>
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
        <form action="<?= base_url()?>admin/komentar/delete/<?= $s->id?>">
		<input type="hidden" name="id" value="<?= $s->id?>">
		<input type="submit" name="hapus" value="Yes" class="btn btn-warning">
        </form>
    </div>
</div>
</div>
</div>
<?php }?>
<?php include 'part/footer.php';?>
