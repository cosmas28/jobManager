<header id="header" class="full-header dark">
  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url('public/images/logo-dark.png');?>">
          <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="TaskJET Kenya"></a>
        <a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url('public/images/logo-dark.png');?>">
          <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="TaskJET Kenya"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu">

          <ul class="one-page-menu">
              <?php
              if($this->session->userdata('is_employer')==TRUE):
                  ?>
                  <li <?php echo active_link('');?>><a href="<?php echo base_url();?>">Home</a></li>
                  <li <?php echo active_link('employer');?>><a href="<?php echo base_url('employer/dashboard');?>" title="My Dashboard">My Dashboard</a></li>
                  <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Jobseeker</a> </li>
                  <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
              <?php elseif($this->session->userdata('is_job_seeker')==TRUE):?>
                  <li <?php echo active_link('');?>><a href="<?php echo base_url();?>">Home</a></li>
                  <li <?php echo active_link('jobseeker');?>><a href="<?php echo base_url('jobseeker/dashboard');?>" title="My Dashboard">My Dashboard</a> </li>
                  <li <?php echo active_link('search-jobs');?>><a href="<?php echo base_url('search-jobs');?>" title="Search Jobs">Search Jobs</a></li>
                  <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
              <?php else:?>
                  <li <?php echo active_link('');?>><a href="<?php echo base_url();?>">Home</a></li>
                  <li <?php echo active_link('search-jobs');?>><a href="<?php echo base_url('search-jobs');?>" title="Search Government jobs in USA">Search a Job</a> </li>
                  <li <?php echo active_link('search-resume');?>><a href="<?php echo base_url('search-resume');?>" title="Search Resume">Search Jobseekers</a></li>
                  <li <?php echo active_link('about-us');?>><a href="<?php echo base_url('about-us');?>" title="USA jobs free website">About Us</a></li>
                  <li <?php echo active_link('contact-us');?>><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
              <?php endif;?>

              <?php if($this->session->userdata('is_user_login')!=TRUE): ?>
                  <li><a href="<?php echo base_url('employer-signup');?>" class="lookingbtn">Post a Job</a></li>
                  <li><a href="<?php echo base_url('jobseeker-signup');?>" class="hiringbtn">Job Seeker</a></li>
                  <li><a href="<?php echo base_url('login');?>" class="loginBtn" title="Jobs openings">Login</a></li>
              <?php else:
                  $c_folder = ($this->session->userdata('is_employer')==TRUE)?'employer':'jobseeker';
                  ?>
                  <li><a href="<?php echo base_url('user/logout');?>"  class="regBtn">Logout</a></li>
                  <li><a href="<?php echo base_url($c_folder.'/dashboard');?>" class="username"><?php echo $this->session->userdata('first_name');?>!</a></li>
              <?php endif;?>
              <li></li>
          </ul>

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header>
