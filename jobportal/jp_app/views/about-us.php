<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
    <meta name="keywords" content="<?php echo $param;?> Jobs" />
    <meta name="description" content="<?php echo $param;?> Jobs ,Find best Jobs. Jobs at "<?php echo SITE_NAME;?> />
    <?php $this->load->view('base/before_head_close'); ?>
</head>
<body class="stretched">
<?php $this->load->view('base/after_body_open'); ?>
<!-- Document Wrapper ============================================= -->
<div id="wrapper" class="clearfix">
    <!--Header-->
    <?php $this->load->view('base/header'); ?>
    <!--/Header-->

    <!-- Page Title
		============================================= -->
    <section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url(<?php echo base_url('public/images/webdesign/landing-1.png');?>); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

        <div class="container clearfix">
            <h1>About Us</h1>
            <span>Everything you need to know about taskJet</span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li class="active">About Us</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_half">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>What is <span>taskJet</span>.</h4>
                    </div>

                    <p>
                        There are a range of tasks available on taskJet from tasks around the home like deliveries,
                        cleaning, gardening and handyman work to tasks for businesses like office admin, promotional work or computer & IT support.
                        There also a range of creative tasks like photography, graphic design and website & blog support which can help you earn money online.
                    </p>
                </div>

                <div class="col_half col_last">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Our <span>Vision</span>.</h4>
                    </div>

                    <p>
                        taskJet is a trusted community platform that connects people who need to outsource
                        tasks and find local services, with people who are looking to earn money and ready to work.
                    </p>
                </div>

            </div>

            <div class="section nomargin">
                <div class="container clearfix">
                    <div class="col_one_third nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="<?php echo $total_posted_jobs; ?>" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Posted jobs</h5>
                    </div>

                    <div class="col_one_third nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter icon-users"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="<?php echo $total_job_seekers; ?>" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Job Seekers</h5>
                    </div>

                    <div class="col_one_third col_last nobottommargin center" data-animate="bounceIn">
                        <i class="i-plain i-xlarge divcenter icon-line2-users"></i>
                        <div class="counter counter-lined"><span data-from="100" data-to="<?php echo $total_employers; ?>" data-refresh-interval="50" data-speed="2000"></span>K+</div>
                        <h5>Employers</h5>
                    </div>
                </div>
            </div>

            <div class="row common-height clearfix">
                <div class="col-sm-5 col-padding" style="background: url('images/team/3.jpg') center center no-repeat; background-size: cover;"></div>

                <div class="col-sm-7 col-padding">
                    <div>
                        <div class="heading-block">
                            <span class="before-heading color">CEO &amp; Co-Founder</span>
                            <h3>John Doe</h3>
                        </div>

                        <div class="row clearfix">

                            <div class="col-md-6">
                                <p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>
                                <p>Advancement, promising development John Lennon, our ambitions involvement underprivileged billionaire philanthropy save the world transform. Carbon rights maintain healthcare emergent, implementation inspire social change solve clean water livelihoods.</p>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon inline-block si-small si-light si-rounded si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                            </div>

                            <div class="col-md-6">
                                <ul class="skills">
                                    <li data-percent="80">
                                        <span>Wordpress</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="60">
                                        <span>CSS3</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="90">
                                        <span>HTML5</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="70">
                                        <span>jQuery</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                    <li data-percent="85">
                                        <span>Ruby</span>
                                        <div class="progress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="section black nobottommargin " style="padding-top: 60px;padding-right: 100px;padding-left: 100px;">

                <div class="clear"></div>

                <div class="heading-block center">
                    <h4>Our Clients</h4>
                </div>

                <ul class="clients-grid grid-6 nobottommargin clearfix">
                    <li><a href="#"><img src="<?php echo base_url('public/images/webdesign/clients/1.png'); ?>" alt="Clients"></a></li>
                    <li><a href=""><img src="<?php echo base_url('public/images/webdesign/clients/2.png'); ?>" alt="Clients"></a></li>
                    <li><a href=""><img src="<?php echo base_url('public/images/webdesign/clients/3.png'); ?>" alt="Clients"></a></li>
                    <li><a href=""><img src="<?php echo base_url('public/images/webdesign/clients/4.png'); ?>" alt="Clients"></a></li>
                    <li><a href=""><img src="<?php echo base_url('public/images/webdesign/clients/5.png'); ?>" alt="Clients"></a></li>
                </ul>
            </div>

            <div class="container clearfix" style="padding-top: 100px;">
                <div class="clear"></div>

                <div class="heading-block center">
                    <h4>FAQs</h4>
                </div>

                <div class="col_one_fourth">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>How much does it <span>cost?</span>.</h4>
                    </div>

                    <p>
                        Once the task has been completed, a 15% Service Fee will be deducted from the agreed offer price
                        cover all Insurance, Handling and Transaction costs. There are no hidden fees or additional costs.
                    </p>
                </div>

                <div class="col_one_fourth">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>How do I get <span>paid?</span>.</h4>
                    </div>

                   <p>
                       Begin working knowing the funds for the task are being securely held within an taskJet Trust Account until the task
                       is completed. Once the task is completed, the Service Fee (inclusive of all Insurance,
                       Handling and Transaction costs) is deducted and remaining funds are paid directly to your nominated Bank, M-Pesa or PayPal account.
                   </p>
                </div>

                <div class="col_one_fourth">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Who will I be working <span>with?</span>.</h4>
                    </div>

                    <p>
                        It's totally up to you! When browsing tasks, you can check out profiles,
                        reviews and recommendations to determine who you'll be working with.                    </p>
                </div>

                <div class="col_one_fourth col_last">

                    <div class="heading-block fancy-title nobottomborder title-bottom-border">
                        <h4>Is there <span>insurance?</span>.</h4>
                    </div>

                   <p>
                       When you hire on Airtasker, Workers are covered by a $20 million insurance policy placed by Lloyd’s approved
                       coverholder Savannah Insurance Agency Pty Ltd*.
                   </p>
                </div>

            </div>

            <div class="section footer-stick">

                <h4 class="uppercase center">What <span>Clients</span> Say?</h4>

                <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class="testi-meta">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class="testi-meta">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <div class="testi-image">
                                    <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                </div>
                                <div class="testi-content">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class="testi-meta">
                                        John Doe
                                        <span>XYZ Inc.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ./Content
		============================================= -->

    <!--Footer-->
    <?php $this->load->view('base/footer'); ?>
</div>
<?php $this->load->view('base/before_body_close'); ?>
</body>
</html>