<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
    <meta name="keywords" content="<?php echo $param;?> Jobs" />
    <meta name="description" content="<?php echo $param;?> Jobs ,Find best Jobs. Jobs at "<?php echo SITE_NAME;?> />
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