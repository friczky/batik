<?php
include 'part/header.php';
include 'part/navbar.php';
?>
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url()?>uploads/system/bg-1.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Category <?= $category['kategori'] ?></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">STORE</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- shop-area -->
            <section class="shop-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8">
                            <div class="shop-top-meta mb-35">
                                <div class="row">
                                    <div class="col-md-6">
                                       <b>Show By</b>
                                       <hr>
                                    </div>
                                    <div class="col-md-6 text-right">
                                       <b><?= $category['kategori'] ?></b>
                                       <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <?php foreach($produk as $p) {?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="new-arrival-item text-center mb-50">
                                        <div class="thumb mb-25">
                                            <a href="<?= base_url()?>detail/<?= $p->slug?>"><img src="<?= base_url()?>uploads/produk/<?= $p->foto?>" alt="" width="100%"></a>
                                            <div class="product-overlay-action">
                                                <ul>
                                                    
                                                    <li><a href="<?= base_url()?>detail/<?= $p->slug?>"><i class="far fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="shop-details.html"><?= $p->nama?></a></h5>
                                            <span class="price">Rp.<?= $p->harga?></span>
                                        </div>
                                    </div>
                                </div>
                             <?php }?>

                            </div>
                            
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <aside class="shop-sidebar">
                                
                                <div class="widget">
                                    <h4 class="widget-title">Product Categories</h4>
                                    <div class="shop-cat-list">
                                        <ul>
                                           <?php foreach($kategori as $k){?>
                                            <li><a href="<?= base_url()?>category/<?= $k->id?>"><?= $k->kategori?></a></li>
                                           <?php }?>
                                        </ul>
                                    </div>
                                </div>
                               
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

        </main>
<?php 
include 'part/footer.php';
include 'part/js.php' ;
?>
