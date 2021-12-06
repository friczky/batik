
<?php 

include 'part/header.php';
include 'part/navbar.php';

?>

<!-- Content -->
<main>

            <!-- breadcrumb-area -->
             <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url()?>uploads/system/bg-1.svg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Contact Us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?= base_url()?>">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="contact-wrap">
                                <div class="section-title title-style-three mb-30">
                                    <span class="sub-title">Contact Us Now</span>
                                    <h2 class="title">Write a Message</h2>
                                </div>
                               <div class="widget">
                                    <div class="contact-info-wrap">
                                        <ul>
                                            <li>
                                                <div class="icon"><i class="flaticon-phone-call"></i></div>
                                                <div class="content">
                                                    <h5>Phone</h5>
                                                    <p><a href="tel:0321654987"><?= $contact['telpon']?></a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="flaticon-email"></i></div>
                                                <div class="content">
                                                    <h5>Email</h5>
                                                    <p><a href="mailto:<?= $contact['email']?>"><?= $contact['email']?></a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon"><i class="flaticon-place"></i></div>
                                                <div class="content">
                                                    <h5>Address</h5>
                                                    <p><?= $contact['alamat']?></p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <section class="breadcrumb-area">
            	<div class="container-fluid">
            		<div class="maps">
            			<?= $contact['maps']?>
            		</div>
            	</div>
            </section>

        </main>

<?php 
include 'part/js.php';
include 'part/footer.php';

?>