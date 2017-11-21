<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('base/meta_tags'); ?>
    <title><?php echo $title;?></title>
    <?php $this->load->view('base/before_head_close'); ?>
  </head>
  <body class="stretched">
    <?php $this->load->view('base/after_body_open'); ?>
    <div class="clearfix" id="wrapper">
      <!--Header-->
      <?php $this->load->view('base/page-header'); ?>
      <!--/Header-->
      <section id="content">
        <div class="content-wrap">
          <div class="container clearfix">
            <?php $this->load->view('base/bottom_ads');?>
            <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>
              <div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="panel panel-default nobottommargin">
                  <div class="panel-body" style="padding: 40px;">
                    <form class="nobottommargin" action="" id="login-form" method="post">
                      <h3>Login to your Account</h3>
                      <?php if($msg): ?>
                        <div class="alert alert-danger"><?php echo $msg;?></div>
                      <?php endif; ?>
                      <?php echo validation_errors(); ?>
                      <?php echo $this->session->flashdata('success_msg');?>
                      <div class="col_full">
                        <label for="login-form-username">Email:</label>
                        <input placeholder="Email" type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" />
                      </div>

                      <div class="col_full">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="pass" name="pass" value="<?php echo set_value('pass'); ?>" placeholder="Password" class="form-control" />
                      </div>
                      <div class="col_full">
                          <input id="checkbox-10" class="checkbox-style" name="checkbox-10" type="checkbox" checked>
                          <label for="checkbox-10" class="checkbox-style-3-label">Remember My Password</label>
                      </div>

                      <div class="col_full nobottommargin">
                        <button type="submit" class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                        <a href="<?php echo base_url('forgot');?>" class="fright">Forgot Password?</a>
    					</div>
                    </form>
                    <div class="line line-sm"></div>
                    <div class="center">
                        <h4 style="margin-bottom: 15px;">Or create a new account:</h4>
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
      <!--Footer-->
      <?php $this->load->view('base/footer'); ?>
      <!--Footer End-->
    </div>
    <?php $this->load->view('base/before_body_close'); ?>
    <script type="text/javascript">
      $(function() {
        $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
      });
    </script>
  </body>
</html>
