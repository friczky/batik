<?php
include 'part/header.php';
include 'part/navbar.php';
?>
        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url()?>uploads/system/bg-1.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Our Products</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Store</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <section class="shop-area pt-95 pb-100">
                <div class="container">
                    <hr>
                    <div class="row">
                        <?php foreach ($produk as $s){ ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="new-arrival-item text-center mb-50">
                                <div class="thumb mb-25">
                                    <a href="<?= base_url()?>detail/<?= $s->slug ?>"><img src="<?= base_url()?>uploads/produk/<?= $s->foto?>" width="200" height="200" alt=""></a>
                                    <div class="product-overlay-action">
                                        <ul>
                                            <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                            <li><a href="<?= base_url()?>detail/<?= $s->slug ?>"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="content">
                                    <h5><a href="shop-details.html"><?= $s->nama?></a></h5>
                                    <span class="price">Rp.<?= $s->harga?></span>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-more-btn text-center">
                                <a href="shop.html" class="btn">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

        </main>
        <!-- main-area-end -->
<?php 
include 'part/footer.php';
include 'part/js.php' ;
?>
