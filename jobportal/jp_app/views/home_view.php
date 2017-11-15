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
      <div class="container clearfix notopmargin nobottommargin">
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
      <div class="section dark notopmargin nobottommargin" style="padding-top: 60px;padding-bottom: 150px;">
          <div class="container clearfix">
              <div id="section-features" class="heading-block title-center page-section">
                  <h2>How TaskJet works</h2>
                  <span>TaskJet is a trusted community marketplace for people and businesses to outsource tasks,
								find local services or hire flexible staff in minutes - online or on your mobile.
							</span>
              </div>

              <div class="col_one_third">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon">
                          <a href="#"><i class="icon-screen"></i></a>
                      </div>
                      <h3>post your task</h3>
                      <p>Tell us what you need. It's FREE to post.</p>
                  </div>
              </div>

              <div class="col_one_third">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon">
                          <a href="#"><i class="icon-eye"></i></a>
                      </div>
                      <h3>Review Resume</h3>
                      <p>Receive offers from trusted Airtasker Workers.</p>
                  </div>
              </div>

              <div class="col_one_third col_last">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon">
                          <a href="#"><i class="icon-line2-wrench"></i></a>
                      </div>
                      <h3>Get more done</h3>
                      <p>Choose the right person for the task and get more done.</p>
                  </div>
              </div>
          </div>
      </div>
    <!-- top employers ============================================= -->
      <div class="section notopmargin nobottommargin" style="padding-top: 100px;">
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

      <!-- ./top employers ============================================= -->
    <div class="section dark notopmargin" style="padding-top: 60px;">
        <div class="container clearfix">
            <div id="section-features" class="heading-block title-center page-section">
                <h2>Top Rated Insurance</h2>
                <span>taskJet Insurance provided by CGU covers the taskJet Worker for their liability to
								third parties for personal injury or property damage whilst performing certain task activities.
							</span>
            </div>

            <div class="col_half">
                <div class="feature-box fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-circle-plus"></i></a>
                    </div>
                    <h3>Free to post</h3>
                    <p>It's completely free to post your task on Airtasker. Then you'll start receiving offers from Airtasker Workers who want to do it for you.</p>
                </div>
            </div>

            <div class="col_half col_last">
                <div class="feature-box fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-square-check"></i></a>
                    </div>
                    <h3>You’re in control</h3>
                    <p>When you're happy with the offers you decide which taskJet Worker you'd like to complete the task.</p>
                </div>
            </div>

            <div class="col_half">
                <div class="feature-box fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-wallet"></i></a>
                    </div>
                    <h3>Secure payment</h3>
                    <p>taskJet Pay makes it simple and safe to pay for your task. Payment is held securely until you're happy the task is complete.</p>
                </div>
            </div>

            <div class="col_half col_last">
                <div class="feature-box fbox-plain">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line2-badge"></i></a>
                    </div>
                    <h3>Trusted workers</h3>
                    <p>Read their verified Reviews and check the Completion Rate to make sure you hire the best person for the task.</p>
                </div>
            </div>
        </div>
    </div>
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
                        <div class="col-md-2 col-xs-2" style="padding: 0px;">
                          <div class="job-box">
                            <a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>" class="thumbnail">
    												  	<img alt="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" src="<?php echo base_url('public/uploads/employer/thumb/'.$image_name);?>" style="height: 80px; width: 100%; display: block;">
    												</a>
                          </div>
                        </div>
                        <div class="col-md-6 col-xs-6" style="padding: 0px;">
                          <div class="job-box">
                            <div class="jb-title"><a href="<?php echo base_url('jobs/'.$row_latest_jobs->job_slug);?>" title="<?php echo $row_latest_jobs->job_title;?>"><?php echo $job_title;?></a>&nbsp;-&nbsp; <?php echo $row_latest_jobs->pay;?></div>
                              <div class="jb-city"><a href="<?php echo base_url('company/'.$row_latest_jobs->company_slug);?>" title="Jobs in <?php echo $row_latest_jobs->company_name;?>"><?php echo $row_latest_jobs->company_name;?></a>&nbsp;-&nbsp; <?php echo $row_latest_jobs->city;?></div>
                          </div>
                        </div>
                        <div class="col-md-4 col-xs-4" style="padding: 0px;margin: 0px;">
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
            <div class="clear"></div>
        </div>
      </div>
      <!--./Latest Jobs Block-->
      <!--Cities-->
    <div class="section parallax dark nobottommargin" style="background-image: url(<?php echo base_url('public/images/webdesign/home-testi-bg.jpg'); ?>); padding: 100px 0;" data-stellar-background-ratio="0.4">
        <div class="container clearfix">
            <div class="heading-block center">
                <h3>Kenya Top Cities</h3>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/nairobi');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/nairobi');?>">Nairobi</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/nakuru');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/nakuru');?>">Nakuru</a></h3>
                </div>
            </div>

            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/mombasa');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/mombasa');?>">Mombasa</a></h3>
                </div>
            </div>
            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/kitale');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/kitale');?>">Kitale</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/narok');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/narok');?>">Narok</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/lamu');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/lamu');?>">Lamu</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/malindi');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/malindi');?>">Malindi</a></h3>
                </div>
            </div>
            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/kisumu');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/kisumu');?>">Kisumu</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/machakos');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/machakos');?>">Machakos</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/eldoret');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/eldoret');?>">Eldoret</a></h3>
                </div>
            </div>
            <div class="col_one_fourth">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/athi-river');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/athi-river');?>">Athi River</a></h3>
                </div>
            </div>
            <div class="col_one_fourth col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="<?php echo base_url('search/naivasha');?>"><i class="icon-location"></i></a>
                    </div>
                    <h3><a href="<?php echo base_url('search/naivasha');?>">Naivasha</a></h3>
                </div>
            </div>
        </div>
    </div>
    <!--./Cities-->

      <!--Featured Jobs-->
      <div class="container clearfix notopmargin" style="padding-top: 60px;padding-bottom: 60px;">
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

           <?php
              endforeach;
             endif;
            ?>
        </div>
        </div>
      <!--./Featured Jobs End-->
      <div class="section dark notopmargin nobottommargin" style="padding-top: 60px;">
          <div class="container clearfix">
              <div id="section-features" class="heading-block title-center page-section">
                  <h2>Earn up to Ksh. 20000 per week completing tasks</h2>
              </div>

              <div class="col_one_third col_last">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon" data-animate="bounceIn" data-delay="400">
                          <a href="#"><img src="<?php echo base_url('public/images/features/performance.png'); ?>" alt="Powerful Performance"></a>
                      </div>
                      <h3>You're the boss</h3>
                      <p>With over 1k of tasks posted every month on taskJet there are lots of opportunities to earn.
                          Choose the tasks you’d like to complete for people that you're happy to work with.
                      </p>
                  </div>
              </div>

              <div class="col_one_third">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon" data-animate="bounceIn" data-delay="800">
                          <a href="#"><img src="<?php echo base_url('public/images/features/tick.png'); ?>" alt="Retina Graphics"></a>
                      </div>
                      <h3>Payments</h3>
                      <p>With your task payment held secure with taskJet Pay, you're able to complete the task knowing payment will be made when you're done.</p>
                  </div>
              </div>

              <div class="col_one_third col_last">
                  <div class="feature-box fbox-plain">
                      <div class="fbox-icon" data-animate="bounceIn" data-delay="1600">
                          <a href="#"><img src="<?php echo base_url('public/images/features/support.png'); ?>" alt="Powerful Performance"></a>
                      </div>
                      <h3>Top rated insurance</h3>
                      <p>taskJet Insurance provided by CGU covers the taskJet Worker for their liability to
                          third parties for personal injury or property damage whilst performing certain task activities.*
                      </p>
                  </div>
              </div>
              <a href="#" class="button button-circle button-3d button-light button-white">Start Earning</a>
          </div>
      </div>
      <div class="section footer-stick" style="padding-bottom: 60px;">

          <div class="container clearfix">

              <div id="section-buy" class="heading-block title-center nobottomborder page-section">
                  <h2>Enough? Start Your Task!</h2>
                  <span></span>
              </div>

              <div class="center">

                  <a href="#" data-animate="tada" class="button button-3d button-teal button-xlarge nobottommargin"><i class="icon-star3"></i>Start your Tasks</a> - OR - <a href="#" data-scrollto="#section-pricing" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-user2"></i>Sign Up To Post Tasks</a>

              </div>

          </div>

      </div>
  </div>
</section>
<!-- ./Content ============================================= -->
<!--Footer-->
<?php $this->load->view('base/footer'); ?>
</div>
<?php $this->load->view('base/before_body_close'); ?>
<script type="text/javascript">
  $(function() {
    $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
  });
</script>
</body>
</html>
