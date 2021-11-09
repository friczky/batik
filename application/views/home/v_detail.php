<?php
include 'part/header.php';
include 'part/navbar.php';
?>
        <!-- main-area -->
        <main>
            <br>
            <br>
            <!-- breadcrumb-area -->
            <div class="breadcrumb-area breadcrumb-style-two" data-background="<?= base_url()?>uploads/system/bg-2.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="previous-product">
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>shop">Store</a></li>
                                        <li class="breadcrumb-item active" aria-current="page"><?= $produk['nama']?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <div class="next-product">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <!-- shop-details-area -->
            <section class="shop-details-area pt-100 pb-95">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="shop-details-flex-wrap">
                                <div class="shop-details-nav-wrap">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="item-one-tab" data-toggle="tab" href="#item-one" role="tab" aria-controls="item-one" aria-selected="true"><img src="<?= base_url()?>uploads/produk/<?= $produk['foto']?>" alt=""></a>
                                        </li>
                                     
                                    </ul>
                                </div>
                                <div class="shop-details-img-wrap">
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="item-one" role="tabpanel" aria-labelledby="item-one-tab">
                                            <div class="shop-details-img">
                                                <img src="<?= base_url()?>uploads/produk/<?= $produk['foto']?>" alt="" width="400" height="400">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-two" role="tabpanel" aria-labelledby="item-two-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details_img02.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="item-three" role="tabpanel" aria-labelledby="item-three-tab">
                                            <div class="shop-details-img">
                                                <img src="img/product/shop_details_img03.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="shop-details-content">
                                <a href="#" class="product-cat"><?= $produk['kategori']?></a>
                                <h3 class="title"><?= $produk['nama']?></h3>
                                <div class="rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                               
                                <div class="price">Price : Rp.<?= $produk['harga']?></div>
                               
                                <div class="perched-info" >
                                    
                                    <a href="#" class="btn"><i class="fab fa-whatsapp"></i> Checkout</a>
                                    <div class="wishlist-compare">
                                      
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-desc-wrap">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description"
                                            aria-selected="true">Description Guide</a>
                                    </li>
                                   
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        
                                            <h4 class="title">Additional information :</h4>
                                        
                                        <?= $produk['deskripsi']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </section>
            <!-- shop-details-area-end -->
        </main>
        <!-- main-area-end -->

<?php 
include 'part/footer.php';
include 'part/js.php' ;
?>
