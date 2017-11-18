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
    <?php $this->load->view('base/page-header'); ?>
    <!--/Header-->

    <!-- Page Title
		============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Contact</h1>
            <span>Get in Touch with Us</span>
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li class="active">Contact</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
		============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin">
                    <!-- Google Map
                    ============================================= -->
                    <section id="google-map" class="gmap bottommargin" style="height: 300px;"></section>

                    <!-- Contact Form
                    ============================================= -->
                    <h3>Send us an Email</h3>
                    <div class="contact-widget">

                        <div class="contact-form-result"><?php echo $this->session->flashdata('success_msg');?></div>
                        <form class="nobottommargin">
                            <?php echo form_open_multipart('contact_us',array('name' => 'frm_contact_us', 'id' => 'frm_contact_us', 'onSubmit' => 'return validate_contact_form(this);'));?>
                            <div class="col_ful <?php echo (form_error('full_name') || $msg)?'has-error':'';?>">
                                <label for="template-contactform-name">Name <small>*</small></label>
                                <input type="text" id="full_name" name="full_name" value="<?php echo set_value('full_name'); ?>" class="sm-form-control required" />
                                <?php echo form_error('full_name'); ?>
                            </div>
                            <div class="clear"></div>

                            <div class="col_one_third <?php echo (form_error('email') || $msg)?'has-error':'';?>">
                                <label for="template-contactform-email">Email <small>*</small></label>
                                <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" class="required email sm-form-control" />
                                <?php echo form_error('email'); ?>
                            </div>

                            <div class="col_one_third <?php echo (form_error('phone') || $msg)?'has-error':'';?>">
                                <label for="template-contactform-phone">Phone<small>*</small></label>
                                <input type="text" id="phone" name="phone" value="<?php echo set_value('phone'); ?>" class="sm-form-control" />
                                <?php echo form_error('phone'); ?>
                            </div>

                            <div class="col_one_third col_last <?php echo (form_error('phone') || $msg)?'has-error':'';?>">
                                <label for="template-contactform-name">City <small>*</small></label>
                                <input type="text" id="city" name="city" value="<?php echo set_value('city'); ?>" class="sm-form-control required" />
                                <?php echo form_error('city'); ?>
                            </div>
                            <div class="clear"></div>

                            <div class="col_full <?php echo (form_error('message') || $msg)?'has-error':'';?>">
                                <label for="template-contactform-message">Message / Question<small>*</small></label>
                                <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"><?php echo set_value('message'); ?></textarea>
                                <?php echo form_error('message'); ?>
                            </div>
                            <div class="line line-sm"></div>

                            <div class="col_half <?php echo (form_error('captcha'))?'has-error':'';?>">
                                <label for="template-contactform-name">Please enter: <?php echo $cpt_code;?>  in the text box below: <small>*</small></label>
                                <input type="text" id="captcha" name="captcha" value="" class="sm-form-control required" maxlength="10" autocomplete="off" />
                                <?php echo form_error('captcha'); ?>
                            </div>

                            <div class="col_full">
                                <button class="button button-3d nomargin" type="submit" id="submit_button" name="submit_button" value="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="line"></div>
                    <?php $this->load->view('base/bottom_ads');?>
                </div><!-- .postcontent end -->

                <!-- Sidebar
               ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget_links clearfix">
                            <div class="row center">
                                <?php echo $ads_row->right_side_1.'<div class="clear">&nbsp;</div>'.$ads_row->right_side_2;?>
                            </div>

                            <div class="line line-sm"></div>

                            <div class="col_full nobottommargin">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    Ngumba Estate, Nairobi<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@taskjet.com
                            </div><!-- Contact Info End -->
                        </div>
                    </div>
                </div><!-- .sidebar end -->

            </div>
        </div>
    </section>
    <!--Footer-->
    <?php $this->load->view('base/footer'); ?>
</div><!-- #wrapper end -->
<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<?php $this->load->view('base/before_body_close'); ?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI"></script>
<script type="text/javascript">

    $('#google-map').gMap({
        address: 'Ngumba Estate, Nairobi, Kenya',
        maptype: 'ROADMAP',
        zoom: 14,
        markers: [
            {
                address: "Melbourne, Australia",
                html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Envato</span></h4><p class="nobottommargin">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day, and a network of educational blogs where millions learn <strong>creative skills</strong>.</p></div>',
                icon: {
                    image: "images/icons/map-icon-red.png",
                    iconsize: [32, 39],
                    iconanchor: [32,39]
                }
            }
        ],
        doubleclickzoom: false,
        controls: {
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: false,
            streetViewControl: false,
            overviewMapControl: false
        }
    });
</script>

</body>
</html>