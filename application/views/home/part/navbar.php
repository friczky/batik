<!-- preloader  -->
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-five header-style-eight">
            <div class="header-top-wrap">
                <!-- <div class="container custom-container-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-sm-6">
                            <div class="header-top-link">
                                <ul>
                                    <li><a href="about-us.html">About US</a></li>
                                    <li><a href="#">FAQS</a></li>
                                    <li><a href="tel:123456789">PH +1 325 362 3521</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="header-top-right">
                                <div class="lang">
                                    <select name="select">
                                        <option value="">English</option>
                                        <option value="">Spanish</option>
                                        <option value="">Turkish</option>
                                        <option value="">Russian</option>
                                        <option value="">Chinese</option>
                                    </select>
                                </div>
                                <div class="currency">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">USD</option>
                                            <option value="">AUE</option>
                                            <option value="">SAR</option>
                                            <option value="">INR</option>
                                            <option value="">BDT</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div id="sticky-header" class="main-header menu-area">
                <div class="container custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo d-block d-lg-none">
                                        <?php $system = $this->db->where('id',1)->get('tb_tentang')->row_array()?>
                                        <a href="<?= base_url()?>"><img src="<?= base_url()?>uploads/system/logo-vertikal-ab.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation left">
                                            <li class=" menu-item-has-children has--mega--menu"><a href="<?= base_url()?>">Home</a>
                                            </li>
                                            <li class="has--mega--menu"><a href="<?= base_url()?>shop">Store</a>
                                            <li class="has--mega--menu"><a href="#"></a>
                                                <li class="has--mega--menu"><a href="#"></a>
                                                    <li class="has--mega--menu"><a href="#"></a>
                                
                                            </li>
                                        </ul>
                                        <div class="logo">
                                            <a href="<?= base_url()?>"><img src="<?= base_url()?>uploads/system/<?= $system['foto']?>" width="100" height="100" alt="Logo"></a>
                                        </div>
                                        <ul class="navigation right">
                                            <li class="menu-item-has-children"><a href="<?= base_url()?>about">About</a>
                                               
                                            </li>
                                            <li><a href="<?= base_url()?>contact">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-profile"><a href="<?= base_url()?>login"><i class="flaticon-user"></i></a></li>
                                           
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="close-btn"><i class="flaticon-targeting-cross"></i></div>
                                <nav class="menu-box">

                                    <div class="nav-logo responsive"><a href="<?= base_url()?>"><img src="<?= base_url()?>uploads/system/logo-vertikal-ab.png"  alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <ul class="navigation">
                                            <li class=" menu-item-has-children"><a href="<?= base_url()?>">Home</a>
                                            </li>
                                            <li class="menu-item-has-children"><a href="<?= base_url()?>shop">Shop</a>
                                            </li>
                                            <li><a href="<?= base_url()?>about">About Us</a></li>
                                            <li class="menu-item-has-children"><a href="<?= base_url()?>contact">Contact</a>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                    
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>

           

           

        </header>
        <!-- header-area-end -->
