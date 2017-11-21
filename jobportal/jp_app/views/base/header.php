<header id="header" class="transparent-header page-section dark">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="<?php echo base_url();?>" class="standard-logo" data-dark-logo="<?php echo base_url('public/images/logo-dark.png');?>">
          <img src="<?php echo base_url('public/images/logo-dark.png');?>" alt="TaskJET Kenya"></a>
        <a href="<?php echo base_url();?>" class="retina-logo" data-dark-logo="<?php echo base_url('public/images/logo.png');?>">
          <img src="<?php echo base_url('public/images/logo.png');?>" alt="TaskJET Kenya"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu">

        <ul class="one-page-menu">
          <li <?php echo active_link('');?>><a href="<?php echo base_url();?>">Home</a></li>
          <li <?php echo active_link('search-jobs');?>><a href="<?php echo base_url('search-jobs');?>" title="Search jobs in Kenya">Search a Job</a> </li>
          <li <?php echo active_link('indeed_jobs');?>><a href="<?php echo base_url('indeed_jobs');?>" title="Indeed Jobs">Indeed Jobs</a></li>
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
