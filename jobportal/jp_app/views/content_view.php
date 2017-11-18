<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
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
            <div class="col-md-10"><!--Job Detail-->
                <div class="boxwraper">
                    <div class="titlebar">
                        <div class="row">
                            <div class="col-md-12"><h1 class="subheading"><?php echo $row->pageTitle;?></h1></div>
                        </div>
                    </div>

                    <!--Job Description-->
                    <div class="companydescription">
                        <div class="row">
                            <div class="col-md-12">
                                <p><?php echo $row->pageContent;?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/Job Detail-->
            <?php $this->load->view('base/right_ads');?>
        </div>
    </div>

    <?php $this->load->view('base/bottom_ads');?>
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