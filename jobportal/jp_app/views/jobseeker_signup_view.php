<!DOCTYPE html>
<html>
	<head>
		<?php $this->load->view('base/meta_tags'); ?>
    <title><?php echo $title;?></title>
    <?php $this->load->view('base/before_head_close'); ?>
	</head>
	<body class="stretched">
		<?php $this->load->view('base/after_body_open'); ?>
		<div class="clearfix"  id="wrapper">
			<!--Header-->
      <?php $this->load->view('base/page-header'); ?>
      <!--/Header-->
			<!-- Content begins -->
			<section id="content">
				<div class="content-wrap">
					<div class="container clearfix">
						<!-- Post content -->
						<div class="postcontent nobottommargin clearfix">
							<h2>Create New Account</h2>
							<p>The Job Seeker sign up process takes no more than a couple of minutes. Why not join TASKjet today? it's free and you are only one step away from finding that ideal job!
							</p>
							<div class="well well-lg nobottommargin">
								<?php echo form_open_multipart('jobseeker_signup',array('name' => 'seeker_form', 'class' => 'nobottommargin', 'id' => 'seeker_form', 'onSubmit' => 'return validate_form(this);'));?>
								<div class="col_full <?php echo (form_error('email'))?'has-error':'';?>">
                                    <label for="login-form-username">Email<span>*</span></label>
									<input type="email" id="email" name="email" placeholder="Email" class="form-control" value="<?php echo set_value('email'); ?>" maxlength="150" />
									<?php echo form_error('email'); ?>
								</div>
								<div class="col_full <?php echo (form_error('pass'))?'has-error':'';?>">
									<label for="login-form-username">Password<span>*</span></label>
									<input type="Password" id="pass" name="pass" autocomplete="off" placeholder="Password" class="form-control" value="<?php echo set_value('pass'); ?>" maxlength="100" />
									<?php echo form_error('pass'); ?>
								</div>
                                <div class="col_full <?php echo (form_error('confirm_pass'))?'has-error':'';?>">
									<label for="login-form-username">Confirm Password<span>*</span></label>
									<input type="password" id="confirm_pass" name="confirm_pass" class="form-control" placeholder="Confirm Password" value="<?php echo set_value('confirm_pass'); ?>" maxlength="100" />
									<?php echo form_error('confirm_pass'); ?>
								</div>
								<div class="col_one_fourth <?php echo (form_error('captcha'))?'has-error':'';?>">
									<label for="login-form-username">Please enter <span><?php echo $cpt_code;?></span>in the text box below:</label>
									<input type="text" id="captcha" name="captcha" value="" class="form-control" maxlength="10" autocomplete="off" />
									<?php echo form_error('captcha'); ?>
								</div>
								<div class="col_full nobottommargin">
									<button type="submit" class="button button-3d button-blue nomargin" id="submit_button" name="submit_button" value="Sign Up">Sign Up</button>
								</div>
								<?php echo form_close();?>
							</div>
						</div>
						<!-- ./Post content -->

						<!-- Sidebar -->
						<div class="sidebar nobottommargin col_last clearfix">
							<div class="widget widget_links clearfix">

							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ./Content begins -->

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
