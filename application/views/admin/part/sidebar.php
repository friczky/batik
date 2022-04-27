<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
					<?php $system = $this->db->where('id',1)->get('tb_tentang')->row_array()?>
                    <img src="<?= base_url()?>uploads/system/<?= $system['foto']?>" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <a href="<?= base_url()?>" target="_blank"><h4 class="logo-text">AB ADMIN</h4></a>
                </div>
                <div class="toggle-icon ms-auto">
                    <i class='bx bx-first-page'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?= base_url()?>admin/dashboard">
                        <div class="parent-icon">
                            <i class='bx bx-home'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li class="menu-label">Store</li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon">
                            <i class='bx bx-cart-alt'></i>
                        </div>
                        <div class="menu-title">Product</div>
                    </a>
                    <ul>
                        <li>
                            <a href="<?= base_url()?>admin/produk">
                                <i class="bx bx-right-arrow-alt"></i>All Product</a>
                        </li>
                        <li>
                            <a href="<?= base_url()?>admin/produk/kategori">
                                <i class="bx bx-right-arrow-alt"></i>Category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/slide">
                        <div class="parent-icon">
                            <i class='bx bx-file'></i>
                        </div>
                        <div class="menu-title">Slide</div>
                    </a>
                </li>
				<li>
                    <a href="<?= base_url()?>admin/komentar">
                        <div class="parent-icon">
                            <i class='bx bx-comment'></i>
                        </div>
                        <div class="menu-title">Komentar</div>
                    </a>
                </li>

                <li class="menu-label">SYSTEM</li>

                <li>
                    <a href="<?= base_url()?>admin/user">
                        <div class="parent-icon">
                            <i class='bx bx-user-circle'></i>
                        </div>
                        <div class="menu-title">User</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/kontak">
                        <div class="parent-icon">
                            <i class='bx bxs-contact'></i>
                        </div>
                        <div class="menu-title">Contact</div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url()?>admin/tentang">
                        <div class="parent-icon">
                            <i class='bx bx-info-circle'></i>
                        </div>
                        <div class="menu-title">About</div>
                    </a>
                </li>
				<li>
                    <a href="<?= base_url()?>admin/profil">
                        <div class="parent-icon">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="menu-title">Profile</div>
                    </a>
                </li>
				<li>
                    <a href="<?= base_url()?>logout">
                        <div class="parent-icon">
                            <i class='bx bx-power-off'></i>
                        </div>
                        <div class="menu-title">Logout</div>
                    </a>
                </li>
            </ul>

            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
