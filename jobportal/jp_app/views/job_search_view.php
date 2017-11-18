<!DOCTYPE html>
<html>
  <head>
    <?php $this->load->view('base/meta_tags'); ?>
    <meta name="keywords" content="<?php echo $param;?> Jobs" />
    <meta name="description" content="<?php echo $param;?> Jobs ,Find best Jobs. Jobs at <?php echo SITE_NAME;?>." />
    <title><?php echo $title;?></title>
    <?php $this->load->view('base/before_head_close'); ?>
  </head>
  <body class="stretched">
    <?php $this->load->view('base/after_body_open'); ?>
    <div class="clearfix" id="wrapper">
      <!--Header-->
      <?php $this->load->view('base/page-header'); ?>
      <!--/Header-->
      <!-- job search section -->
      <div class="section parallax dark notopmargin noborder" style="padding: 80px 0; background-image: url(<?php echo base_url('public/images/webdesign/search-1.png');?>);center center no-repeat; background-size: 100% 400px;background-attachment: fixed;" data-stellar-background-ratio="0.4">
        <div class="container center clearfix">
          <div class="row search-container">
            <?php echo form_open_multipart('job_search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
            <div class="col-md-10 col-xs-8">
              <div class="input-fld">
    						<input type="text" placeholder="Job title or Skill" name="job_params" id="job_params" value="<?php echo $param;?>" />
              </div>
            </div>
            <div class="col-md-2 col-xs-4">
              <div class="input-fld">
    						<button type="submit" name="job_submit" id="job_submit" value="Find" />Search</button>
    					</div>
            </div>
            <?php echo form_close();?> </div>
          </div>
        </div>
      <!-- ./job search section -->

      <!-- Content begins -->
      <div id="content">
        <div class="content-wrap">
          <div class="container clearfix">
            <!-- left sidebar -->
            <div class="sidebar nobottommargin clearfix">
              <div class="sidebar-widgets-wrap">
                <div class="widget clearfix">
                  <?php
                  $col = '';
                  if($this->uri->segment(1)!='search'):
                    if($result):
                      $col = ' bothsidebar';
                    	$this->load->view('base/left_job_search');
                    endif;
                  endif;
                   ?>
                </div>
              </div>
            </div>
            <!-- ./left sidebar -->

            <!-- Post Content -->
            <div class="postcontent <?php echo $col;?> nobottommargin clearfix">
              <div class="row">
  							<div class="fancy-title title-bottom-border">
  								<h3><span><?php echo $param;?> Jobs</span><p class="fright">Jobs <?php echo $from_record.' - '.$page;?> of <?php echo $total_rows;?></p></h3>
  							</div>
  						</div>

              <!--Job Row-->
              <?php
                if($result):
                  $CI =& get_instance();
                  foreach($result as $row):
                    $company_logo = ($row->company_logo)?$row->company_logo:'no_logo.jpg';
                    $is_already_applied = $CI->is_already_applied_for_job($this->session->userdata('user_id'), $row->ID);
               ?>
                    <div class="well">
                      <div class="row">
                        <div class="col-md-2 col-xs-2" style="padding: 0px;">
                          <div class="job-box">
                            <a href="<?php echo base_url('jobs/'.$row->job_slug);?>" class="thumbnail" title="<?php echo $row->job_title;?>"><img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_logo);?>" alt="<?php echo base_url('company/'.$row->company_slug);?>" style="height: 80px; width: 100%; display: block;" /></a>
                          </div>
                        </div>
                        <div class="col-md-6 col-xs-6" style="padding: 0px;">
                          <div class="job-box">
                            <div id="jb-title"><a href="<?php echo base_url('jobs/'.$row->job_slug);?>" title="<?php echo $row->job_title;?>"><?php echo word_limiter(strip_tags(str_replace('-',' ',$row->job_title)),7);?></a>&nbsp;-&nbsp; <?php echo $row->pay;?></div>
        										<div id="jb-city"><a href="<?php echo base_url('company/'.$row->company_slug);?>" title="Jobs in <?php echo $row->company_name;?>"><?php echo $row->company_name;?></a>&nbsp;-&nbsp; <?php echo $row->city;?></div>
        										<div id="jb-date"><?php echo date_formats($row->dated, 'M d, Y');?></div>
                          </div>
                        </div>
                        <div class="col-md-4 col-xs-4">
                          <div class="job-box">
                            <?php
                            if($is_already_applied=='yes'):
                             ?>
                              <a href="javascript:;" class="job-box-btn"><i class="icon-ok"></i>Already Applied</a>
                             <?php else:?>
                               <a href="<?php echo base_url('jobs/'.$row->job_slug.'?apply=yes');?>" class="job-box-btn">Apply Now</a>
                              <?php endif;?>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <p><?php echo word_limiter(strip_tags(str_replace('-',' ',$row->job_description)),22);?></p>
                        </div>
                      </div>
                    </div>
               <?php
               endforeach;
             else:
                ?>
                <div class="divcenter nobottommargin clearfix">
                  <p><strong> <?php echo ($param=='')?'Please enter keywords above to display the relevant opened jobs.':'Sorry, no record found';?> </strong></p>
                </div>
                <?php endif;?>
              <!--./Job Row-->
              <!--Pagination-->
              <div class="nobottommargin clearfix">
                <ul class="pagination">
                  <li><?php echo ($result)?$links:'';?></li>
                </ul>
              </div>
              <!--./Pagination-->
            </div>
            <!-- ./Post Content -->

            <!-- Sidebar -->
            <div class="sidebar nobottommargin col_last clearfix">
              <div class="sidebar-widgets-wrap">
                <!--<div class="row center">
  								<a href="#" class="thumbnail">
  								<img alt="100%x180" src="images/extras/200x200.gif" style="height: 700px; width: 100%; display: block;"></a>
  							</div>

  							<div class="row center">
  								<a href="#" class="thumbnail">
  								<img alt="100%x180" src="images/extras/200x200.gif" style="height: 700px; width: 100%; display: block;"></a>
  							</div>-->
                <?php $this->load->view('base/right_ads');?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ./Content begins -->
      <!--Footer-->
      <?php $this->load->view('base/footer'); ?>
      <!--Footer End-->
    </div>
    <!-- Go To Top
  	============================================= -->
  	<div id="gotoTop" class="icon-angle-up"></div>
    <?php $this->load->view('base/before_body_close'); ?>
    <script type="text/javascript">
      $(function() {
        $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
      });
    </script>
  </body>
</html>
