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
							<p>
								With TASKjet, the employer signup process only takes a couple of minutes and once your registration is complete, you have access to search the Job Seekers and post the Job openings in your company/home. The candidates who have opted to receive Job Alerts will receive your Job Opening in their Email. Give us a chance to provide you top quality service for free!
							</p>
							<div class="well well-lg nobottommargin">
								<?php echo form_open_multipart('employer_signup',array('name' => 'emp_form', 'id' => 'emp_form', 'onSubmit' => 'return validate_employer_form(this);'));?>
								<div class="col_full <?php echo (form_error('email'))?'has-error':'';?>">
									<label for="login-form-username">Email<span>*</span></label>
									<input type="email" id="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" maxlength="150" />
									<?php echo form_error('email'); ?>
								</div>
                                <div class="col_full <?php echo (form_error('company_name'))?'has-error':'';?>">
                                    <label for="login-form-username">Company Name/Your Name<span>*</span></label>
                                    <input type="text" id="company_name" placeholder="Your name Or Company name" name="company_name" value="<?php echo set_value('company_name'); ?>" class="form-control" maxlength="150" />
                                    <?php echo form_error('email'); ?>
                                </div>
								<div class="col_full <?php echo (form_error('pass_code'))?'has-error':'';?>">
									<label for="login-form-username">Password <span>*</span></label>
									<input type="password" id="pass" name="pass" placeholder="Password" value="<?php echo set_value('pass_code'); ?>" class="form-control"  maxlength="100" />
									<?php echo form_error('pass_code'); ?>
								</div>
								<div class="col_full <?php echo (form_error('confirm_pass'))?'has-error':'';?>">
									<label for="login-form-username">Confirm Password <span>*</span></label>
									<input type="password" id="confirm_pass" name="confirm_pass" placeholder="Confirm Password" value="<?php echo set_value('confirm_pass'); ?>" class="form-control" maxlength="100" />
									<?php echo form_error('confirm_pass'); ?>
								</div>
								<div class="col_one_fourth <?php echo (form_error('captcha'))?'has-error':'';?>">
									<label for="login-form-username">Please enter <span><?php echo $cpt_code;?></span>in the text box below:</label>
									<input type="text" id="captcha" name="captcha" value="" class="form-control" maxlength="10" />
								</div>
								<div class="col_full nobottommargin">
									<button type="submit" class="button button-3d button-blue nomargin" id="submit_button" name="submit_button" value="Sign Up">Sign Up</button>

								</div>
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
