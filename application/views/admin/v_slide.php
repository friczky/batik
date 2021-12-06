<?php 

include 'part/header.php';

?>

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Store</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item">
                            <a href="javascript:;">
                                <i class="bx bxs-t-shirt"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Slide</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Slide</h5>
                <hr/>
                <div class="form-body">
                    <?= $this->session->flashdata('sukses')?>
                    <form
                        action="<?= base_url()?>admin/slide/store"
                        method="POST"
                        enctype="multipart/form-data">
                        <div class="col col-sm-12 row">
                            <div class="col-sm-3">
								Title
                                <input
                                    type="text"
                                    name="judul"
                                    placeholder="Insert Title"
                                    class="form-control">
                                <br>
								Sub-Title
								<input type="text" name="subjudul" class="form-control" placeholder="Inser sub title">
								<br>
								Link
								<select name="link" id="" class="form-control">
                                    <option value=""></option>
                                    <?php foreach($product as $p){?>
                                        <option value="<?= base_url()?>detail/<?= $p->slug?>"><?= $p->nama?></option>
                                    <?php }?>
                                </select>
								<br>
								Foto
								<input type="file" name="foto" id="" class="form-control">
                                <br>
                                <input type="submit" name="simpan" class="btn btn-primary" value="Add Slide">

                            </div>

                            <div class="col col-sm-9">
                                <table class="table">
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>SubTitle</th>
										<th>Image</th>
										<th>Link</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $no =1 ; foreach ($slide as $s){?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $s->judul?></td>
                                        <td><?= $s->subjudul?></td>
										<td><img src="<?= base_url()?>uploads/slide/<?= $s->foto?>" width="50px" alt=""></td>
										<td><?= $s->link?></td>
                                        <td>
                                            <a href="#edit<?= $s->id?>">
                                                <i
                                                    class="bx bxs-edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#edit<?= $s->id?>"></i>
                                            </a>
                                            &nbsp
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
<?php foreach($slide as $s){?>
<div class="modal fade" id="edit<?= $s->id?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Slide :
                <?= $s->judul ?></h5>
            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form
                action="<?= base_url()?>admin/slide/update/<?= $s->id?>"
                method="POST" name="update"
                enctype="multipart/form-data">
               					 Title
                                <input
                                    type="text"
                                    name="judul"
                                    placeholder="Insert Title"
                                    class="form-control" value="<?= $s->judul?>">
                                <br>
								Sub-Title
								<input type="text" name="subjudul" class="form-control" placeholder="Inser sub title" value="<?= $s->subjudul?>">
								<br>
								Link
								<select name="link" id="" class="form-control">
                                    <option value=""></option>
                                    <?php foreach($product as $p){?>
                                        <option value="<?= base_url()?>detail/<?= $p->slug?>"><?= $p->nama?></option>
                                    <?php }?>
                                </select>
								<br>
								Image (Size : 682x670)
								<input type="file" name="foto" id="" class="form-control">
								<input type="hidden" value="<?= $s->foto?>">
                                <br>
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
<?php foreach ($slide as $s) {?>
<div class="modal fade" id="hapus<?= $s->id?>" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content bg-danger">
    <div class="modal-header">
        <h5 class="modal-title text-white">Delete Slide</h5>
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"></button>
    </div>
    <div class="modal-body text-white">
        <p>Delete  
            <b><?= $s->judul?>
                ?</b>
        </p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
        <form action="<?= base_url()?>admin/slide/delete/<?= $s->id?>">
		<input type="hidden" name="id" value="<?= $s->id?>">
		<input type="submit" name="hapus" value="Yes" class="btn btn-warning">
        </form>
    </div>
</div>
</div>
</div>
<?php }?>
<?php include 'part/footer.php';?>
