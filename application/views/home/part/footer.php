	<?php
	$kontak = $this->db->where('id',1)->get('tb_kontak')->row_array();
	?>
        <!-- footer-area -->
        <footer class="dark-bg pt-55 pb-80">
            <div class="container">
                <div class="footer-top-wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logo/w_logo.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="footer-link-wrap">
                                <nav class="menu-links">
                                    <ul>
                                        <li><a href="<?= base_url()?>">Home</a></li>
										<li><a href="<?= base_url()?>shop">Shop</a></li>
										<li><a href="<?= base_url()?>about">About</a></li>
										<li><a href="<?= base_url()?>contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="mailto:<?= $kontak['email']?>"><i class="fab fa-google"></i></a></li>
                                        <li><a href="https://instagram.com/<?= $kontak['instagram']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://wa.me/<?= $kontak['telpon']?>"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                <div class="copyright-wrap">
                    <div class=" text-center">
							<center>
							<div class="copyright-text">
                                <p>&copy; <?= date('Y')?> <a href="<?= base_url()?>"><?= $about['judul']?></a>. All Rights Reserved</p>
                            </div>
							</center>
					</div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->
