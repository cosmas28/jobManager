<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
    <title>Page not found</title>
    <?php $this->load->view('base/before_head_close'); ?>
    <?php $this->load->view('common/before_head_close'); ?>
</head>
<body class="stretched">
<?php $this->load->view('base/after_body_open'); ?>
<!-- Document Wrapper ============================================= -->
<div id="wrapper" class="clearfix">
    <!--Header-->
    <?php $this->load->view('base/page-header'); ?>
    <!--/Header-->
    <!--Detail Info-->
    <div class="container detailinfo">
        <div class="row">
            <div class="col-md-12"><!--Job Detail-->

                <div class="row">
                    <div class="col-md-12 text-center"><a href="<?php echo base_url();?>"><img src="<?php echo base_url() ;?>/public/images/not-found.jpg" /></a></div>
                </div>
            </div>
            <!--/Job Detail-->

        </div>
    </div>
    <?php $this->load->view('common/bottom_ads');?>
    <!--Footer-->
    <?php $this->load->view('base/footer'); ?>
</div>
<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<?php $this->load->view('base/before_body_close'); ?>
<?php $this->load->view('common/before_body_close'); ?>
</body>
</html>