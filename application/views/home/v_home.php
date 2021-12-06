<?php
include 'part/header.php';
include 'part/navbar.php';
?>




        <!-- main-area -->
        <main>

            <!-- slider-area -->
            <section class="h9-slider-area">
                <br>
                <div class="h9-slider-active">
					<?php foreach($slide as $s){?>
                    <div class="h9-slider-item" data-background="<?= base_url()?>assets/home/img/slider/h9_slider_bg.jpg" >
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <div class="h9-slider-img" data-animation-in="fadeInLeft" data-delay-in=".2" data-duration-in="1.5">
                                        <img src="<?= base_url()?>uploads/slide/<?= $s->foto?>" width="682" height="670" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="h7-slider-content">
                                        <span class="sub-title" data-animation-in="fadeInUp" data-delay-in=".4" data-duration-in="1.5">new arrival</span>
                                        <h2 class="title" data-animation-in="fadeInUp" data-delay-in=".6" data-duration-in="1.5"><?= $s->judul ?> <span>!</span></h2>
                                        <p data-animation-in="fadeInUp" data-delay-in=".8" data-duration-in="1.5"><?= $s->subjudul ?></p>
                                        <a href="<?= base_url()?>" class="btn" data-animation-in="fadeInUp" data-delay-in="1.2" data-duration-in="1.5">Check Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php }?>
                </div>
            </section>
            <!-- slider-area-end -->


            <!-- cat-area -->
                <div class="container">
                    <div class="cat-title-line">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-9">
                                <div class="cat-section-title text-center">
                                    <div class="icon"><img src="img/icon/logo_icon.png" alt=""></div>
                                    <span class="sub-title">About <?= $about['judul']?></span>
                                    <h2 class="title">
                                        <?= $about['deskripsi']?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    </div>
                </div>
            <!-- cat-area-end -->

            <!-- new-arrival-area -->
            <section class="new-arrival-area h9-arrival-product pt-95 pb-45">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-6">
                            <div class="section-title title-style-two text-center mb-45">
                                <h3 class="title">New Arrival Collection</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">

                    </div>

                    <div class="row new-arrival-active">
                        <?php foreach($produk as $p){?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-two">
                            
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <a href="<?= base_url()?>detail/<?= $p->slug?>"><img src="<?= base_url()?>uploads/produk/<?= $p->foto?>" width="100" height="100" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="<?= base_url()?>detail/<?= $p->slug?>"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html"><?= $p->nama?></a></h5>
                                    <span class="price">Rp.<?= $p->harga?></span>
                                    <div class="rating" style="color:red">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php }?>
                    </div>
                </div>
            </section>
            <!-- new-arrival-area-end -->

            



        </main>
        <!-- main-area-end -->



<?php
include 'part/footer.php';
include 'part/js.php' ;
?>
