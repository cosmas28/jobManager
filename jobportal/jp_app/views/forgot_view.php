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

    <!-- Content
		============================================= -->
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row center">
                    <a href="index.html"><img src="<?php echo base_url('public/images/webdesign/ads-3.png') ?>" alt="Canvas Logo"></a>
                </div>

                <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>

                <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
                    <div class="panel panel-default nobottommargin">
                        <div class="panel-body" style="padding: 40px;">
                            <form id="login-form" name="login-form" class="nobottommargin" action="" method="post">
                                <h3>Account Recovery</h3>
                                <?php if($msg):?>
                                    <div class="alert alert-danger"><?php echo $msg;?></div>
                                <?php endif;?>
                                <?php echo validation_errors(); ?> <?php echo $this->session->flashdata('msg');?>
                                <div class="col_full">
                                    <label for="login-form-username">Email:<span>*</span></label>
                                    <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" />
                                </div>
                                <div class="col_full">
                                    <label for="login-form-password">Please enter: <?php echo $cpt_code;?> in the text box below:</label>
                                    <input type="text" id="captcha" name="captcha" value="" class="form-control" />
                                </div>
                                <div class="col_full nobottommargin">
                                    <button type="submit" class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Recover Password</button>
                                </div>
                            </form>
                            <div class="line line-sm"></div>
                            <div class="center">
                                <h4 style="margin-bottom: 15px;">Already a member?</h4>
                                <a href="<?php echo base_url('login');?>" class="button button-rounded si-facebook si-colored">Login</a>
                            </div>
                            <div class="line line-sm"></div>
                            <div class="center">
                                <h4 style="margin-bottom: 15px;">Not a member yet? Click Below to Sign Up</h4>
                                <a href="<?php echo $signup_link;?>" class="button button-rounded si-facebook si-colored">Job Seeker</a>
                                <span class="hidden-xs">or</span>
                                <a href="<?php echo base_url('employer-signup');?>" class="button button-rounded si-twitter si-colored">Employer</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>
                <?php $this->load->view('base/bottom_ads');?>
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