 <?php

 include 'part/header.php';
 include 'part/navbar.php';
 ?>

  <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
              <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url()?>uploads/system/bg-1.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>About <?= $about['judul']?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <section>

                <div class="container">
                    <hr>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <img src="<?= base_url()?>uploads/system/<?= $about['foto']?>" width="50%" alt="">
                            </div>
                            <div class="col-sm-6">
                                <?= $about['deskripsi']?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </section>

           

        </main>
        <!-- main-area-end -->

<?php 

include 'part/footer.php';
include 'part/js.php';
?>