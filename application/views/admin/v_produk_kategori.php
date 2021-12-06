<?php 

include 'part/header.php';

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
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i class="bx bxs-t-shirt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Categroy</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Category</h5>
                <hr/>
                <div class="form-body">
                    <?= $this->session->flashdata('sukses')?>
                    <form
                        action="<?= base_url()?>admin/produk/kategori"
                        method="POST"
                        enctype="multipart/form-data">
                        <div class="col col-sm-12 row">
                            <div class="col-sm-3">

                                <input
                                    type="text"
                                    name="kategori"
                                    placeholder="Insert Category Name"
                                    class="form-control">
                                <br>
                            
                                <input type="submit" name="simpan" class="btn btn-primary" value="Add Category">

                            </div>

                            <div class="col col-sm-9">
                                <table class="table">
                                    <tr>
                                        <th>No.</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $no =1 ; foreach ($kategori as $k){?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $k->kategori?></td>
                                        <td>
                                            <a href="#edit<?= $k->id?>">
                                                <i
                                                    class="bx bxs-edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit<?= $k->id?>"></i>
                                            </a>
                                            &nbsp
                                            <a
                                                href="#hapus<?= $k->id?>"
                                                data-bs-toggle="modal"
                                                data-bs-target="#hapus<?= $k->id?>">
                                                <i class="bx bxs-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php }?>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>

</div>
</div>

<!-- MOdal Edit -->
<?php foreach($kategori as $k){?>
<div class="modal fade" id="edit<?= $k->id?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Category :
                <?= $k->kategori ?></h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form
                action="<?= base_url()?>admin/produk/kategori"
                method="POST" name="update"
                enctype="multipart/form-data">
                <input
                    type="text"
                    name="kategori"
                    placeholder="Insert Category Name"
                    class="form-control"
                    value="<?= $k->kategori?>">
                <br>
                <input type="hidden" name="id" value="<?= $k->id?>">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="update" class="btn btn-primary" value="Update">
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php }?>

<!-- Modal Hapus-->
<?php foreach ($kategori as $k) {?>
<div class="modal fade" id="hapus<?= $k->id?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content bg-danger">
    <div class="modal-header">
        <h5 class="modal-title text-white">Delete Category</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body text-white">
        <p>Do you want to delete
            <b><?= $k->kategori?>
                ?</b>
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
        <form action="<?= base_url()?>admin/kategori/delete/<?= $k->id?>">
		<input type="hidden" name="id" value="<?= $k->id?>">
		<input type="submit" name="hapus" value="Yes" class="btn btn-warning">
        </form>
    </div>
</div>
</div>
</div>
<?php }?>
<?php include 'part/footer.php';?>
