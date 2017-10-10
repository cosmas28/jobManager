<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('base/meta_tags'); ?>
<meta name="keywords" content="jobs in Kenya, government jobs, online jobs in Kenya, latest jobs in Kenya,  job in Kenya, latest jobs">
<title><?php echo $title;?></title>
<?php $this->load->view('base/before_head_close'); ?>
</head>
<body class="stretched">
<?php $this->load->view('base/after_body_open'); ?>
<!-- Document Wrapper ============================================= -->
<div id="wrapper" class="clearfix">
<!--Header-->
<?php $this->load->view('base/header'); ?>
<!--/Header-->
<!--Search Block-->
<section id="slider" class="slider-parallax full-screen dark" style="background: url(<?php echo base_url('public/images/webdesign/landing-1.png');?>) center center no-repeat; background-size: cover">

  <div class="slider-parallax-inner">

    <div class="container vertical-middle clearfix">

      <?php $this->load->view('base/home_search'); ?>

    </div>

  </div>

</section>
<!-- Content ============================================= -->
<section id="content">
  <div class="content-wrap">
    <!-- Job categories ============================================= -->
      <div class="container clearfix">
        <div id="section-features" class="heading-block title-center page-section">
          <h2>Find a job you love</h2>
          <span>Each month, more than 7 million jobseekers turn to website in their search for work</span>
        </div>

        <div class="portfolio grid-container portfolio-nomargin portfolio-ajax clearfix" id="portfolio">
          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search-jobs/delivery');?>">
                <img src="<?php echo base_url('public/images/webdesign/delivery-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/delivery');?>">Delivery</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search/hospitality');?>">
                <img src="<?php echo base_url('public/images/webdesign/hospitality-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/hospitality');?>">Hospitality</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search/handyman');?>">
                <img src="<?php echo base_url('public/images/webdesign/handyman-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/handyman');?>">Handyman</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-4" data-loader="include/ajax/portfolio-ajax-slider.php" class="portfolio-item pf-icons pf-illustrations">
            <div class="portfolio-image">
              <div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide"><a href="<?php echo base_url('search/furniture-assembly');?>"><img src="<?php echo base_url('public/images/webdesign/furniture-1.png'); ?>" alt="Morning Dew"></a></div>
                    <div class="slide"><a href="<?php echo base_url('search/furniture-assembly');?>"><img src="<?php echo base_url('public/images/webdesign/furniture-2.png'); ?>" alt="Morning Dew"></a></div>
                  </div>
                </div>
              </div>

            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/furniture-assembly');?>">Furniture Assembly</a></h3>
              <span><a href="#"><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search/it-services');?>">
                <img src="<?php echo base_url('public/images/webdesign/webdesign-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/it-services');?>">IT services</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-6" data-loader="include/ajax/portfolio-ajax-gallery.php" class="portfolio-item pf-graphics pf-illustrations">
            <div class="portfolio-image">
              <div class="fslider" data-arrows="false">
                <div class="flexslider">
                  <div class="slider-wrap">
                    <div class="slide"><a href="<?php echo base_url('search/house-and-garden-cleaning');?>"><img src="<?php echo base_url('public/images/webdesign/garden-1.png'); ?>" alt="Shake It"></a></div>
                    <div class="slide"><a href="<?php echo base_url('search/house-and-garden-cleaning');?>"><img src="<?php echo base_url('public/images/webdesign/lawn-mowing.png'); ?>" alt="Shake It"></a></div>
                    <div class="slide"><a href="<?php echo base_url('search/house-and-garden-cleaning');?>"><img src="<?php echo base_url('public/images/webdesign/window-cleaning.png'); ?>" alt="Shake It"></a></div>
                    <div class="slide"><a href="<?php echo base_url('search/house-and-garden-cleaning');?>"><img src="<?php echo base_url('public/images/webdesign/floor-cleaning.png'); ?>" alt="Shake It"></a></div>
                  </div>
                </div>
              </div>

            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/house-and-garden-cleaning');?>">House and Garden cleaning</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search/furniture-removals');?>">
                <img src="<?php echo base_url('public/images/webdesign/removalist-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/furniture-removals');?>">Furniture Removals</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>

          <article id="portfolio-item-1" data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image">
              <a href="<?php echo base_url('search/laundry-services');?>">
                <img src="<?php echo base_url('public/images/webdesign/laundry-1.png'); ?>" alt="Open Imagination">
              </a>
            </div>
            <div class="portfolio-desc">
              <h3><a href="<?php echo base_url('search/laundry-services');?>">Laundry Services</a></h3>
              <span><a href="#"></a><a href="#"></a></span>
            </div>
          </article>
        </div>
      </div>
    <!-- ./Job categories ============================================= -->
    <!-- top employers ============================================= -->
      <div class="section">
        <div class="container clearfix">
          <div id="section-testimonials" class="heading-block title-center page-section">
            <h2>Top Employers</h2>
            <span>Total <?php echo $total_employers;?></span>
          </div>

          <div class="id="oc-clients" class="section nobgcolor notopmargin owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget"
          data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6"">
            <?php
              if($top_employer_result):
                foreach($top_employer_result as $row_top_employer):
                  $company_image_name = ($row_top_employer->company_logo)?$row_top_employer->company_logo:'no_logo.jpg';
            ?>
                  <div class="oc-item">
                    <a href="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" title="Jobs in <?php echo $row_top_employer->company_name;?>"><img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_image_name);?>" alt="<?php echo base_url('company/'.$row_top_employer->company_slug);?>" /></a>
                  </div>
            <?php
                endforeach;
              endif;
             ?>
          </div>
        </div>
      </div>

      <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

      <div class="container clearfix">
      <!-- ./top employers ============================================= -->

      <!--Latest Jobs Block-->
      <div class="container clearfix">
        <div id="section-specs" class="heading-block title-center page-section">
          <h2>Latest jobs</h2>
          <span>Total - <?php echo $total_posted_jobs;?></span>
        </div>

        <div class="container clearfix">
          <div class="row">
            <?php
              if($latest_jobs_result):
                foreach($latest_jobs_result as $row_latest_jobs):
                  $job_title = ellipsize(humanize($row_latest_jobs->job_title),34,1);
          				$image_name = ($row_latest_jobs->company_logo)?$row_latest_jobs->company_logo:'no_logo.jpg';
             ?>
                  <div class="col-md-6 col-xs-12">
                    <div class="well">
                      <div class="row">
                        <div class="col-md-2 col-xs-2">
                          <div class="job-box">
                            <a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>" class="thumbnail">
    												  	<img alt="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" src="<?php echo base_url('public/uploads/employer/thumb/'.$image_name);?>" style="height: 80px; width: 100%; display: block;">
    												</a>
                          </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                          <div class="job-box">
                            <h4><a href="<?php echo base_url('jobs/'.$row_latest_jobs->job_slug);?>" title="<?php echo $row_latest_jobs->job_title;?>"><?php echo $job_title;?></a></h4>
    												<a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>"><?php echo $row_latest_jobs->company_name;?></a>&nbsp;-&nbsp; <?php echo $row_latest_jobs->city;?>
                          </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                          <div class="job-box">
                            <a href="<?php echo base_url('jobs/'.$row_latest_jobs->job_slug.'?apply=yes');?>" class="job-box-btn" title="<?php echo $row_latest_jobs->industry_name.' Job in '.$row_latest_jobs->city;?>"><i class="icon-ok"></i>apply now</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
             <?php
                endforeach;
              endif;
              ?>
          </div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>
      <!--./Latest Jobs Block-->
      <!--Cities-->

      <div class="container clearfix" style="background: url(<?php echo base_url('public/images/webdesign/loc-2.png');?>) center center no-repeat; background-size: cover; padding: 80px 10px 80px 10px;">
        <div class="heading-block title-center page-section" id="section-specs">
          <h2 style="color: #C0C0C0;">Kenya Top Cities</h2>
        </div>

        <div class="nobottommargin">
          <ul class="iconlist row">
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/nairobi');?>" title="Jobs in Nairobi">
                <i class="icon-location"></i> Nairobi
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/nakuru');?>" title="Jobs in Nakuru">
                <i class="icon-location"></i> Nakuru
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/kitale');?>" title="Jobs in Kitale">
                <i class="icon-location"></i> Kitale
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/kisumu');?>" title="Jobs in Kisumu">
                <i class="icon-location"></i> Kisumu
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/machakos');?>" title="Jobs in machakos">
                <i class="icon-location"></i> Machakos
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/nairobi');?>" title="Jobs in Nairobi">
                <i class="icon-location"></i> Nairobi
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/nanyuki');?>" title="Jobs in Nanyuki">
                <i class="icon-location"></i> Nanyuki
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/nairobi');?>" title="Jobs in Nairobi">
                <i class="icon-location"></i> Nairobi
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/eldoret');?>" title="Jobs in Eldoret">
                <i class="icon-location"></i> Eldoret
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/mombasa');?>" title="Jobs in Mombasa">
                <i class="icon-location"></i> Mombasa
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/athi-river');?>" title="Jobs in Athi River">
                <i class="icon-location"></i> Athi River
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/naivasha');?>" title="Jobs in Naivasha">
                <i class="icon-location"></i> Naivasha
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/malindi');?>" title="Jobs in Malindi">
                <i class="icon-location"></i> Malindi
              </a>
            </li>
            <li class="col-md-3 col-xs-6">
              <a class="city-links" href="<?php echo base_url('search/narok');?>" title="Jobs in Narok">
                <i class="icon-location"></i> Narok
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="clear"></div>
      <div class="divider divider-short divider-center"><i class="icon-circle"></i></div>
      <!--./Cities-->

      <!--Featured Jobs-->
      <div class="container clearfix">
        <div id="section-specs" class="heading-block title-center page-section">
          <h2>Most Amazing Featured Jobs</h2>
          <span>Join us and Start posting Companies that do things differently and think outside the box.</span>
        </div>

        <div class="row">
          <?php
            if($featured_job_result):
              foreach($featured_job_result as $row_featured_job):
           ?>
              <div class="col-md-6 col-xs-12">
                <div class="well">
                  <div class="row">
                    <div class="col-md-8 col-xs-8">
                      <div class="job-box">
                        <h4><a href="<?php echo base_url('jobs/'.$row_featured_job->job_slug);?>" title="<?php echo $row_featured_job->job_title;?>"><?php echo $row_featured_job->job_title;?></a></h4>
                        <a href="<?php echo base_url('company/'.$row_featured_job->company_slug);?>" title="Jobs in <?php echo $row_featured_job->company_name;?>"><?php echo $row_featured_job->company_name;?></a><span>&nbsp;-&nbsp; <?php echo $row_featured_job->city;?></span>
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-4">
                      <div class="job-box fright">
                        Apply by <br />
                        <?php echo date_formats($row_latest_jobs->last_date, 'M d, Y');?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           <?php
              endforeach;
             endif;
            ?>
        </div>
      </div>
      <!--./Featured Jobs End-->
  </div>
</section>
<!-- ./Content ============================================= -->
<!--Footer-->
<?php $this->load->view('base/footer'); ?>
<?php $this->load->view('base/before_body_close'); ?>
<script type="text/javascript">
  $(function() {
    $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
  });
</script>
</body>
</html>
