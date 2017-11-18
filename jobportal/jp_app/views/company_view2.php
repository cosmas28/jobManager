<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
    <title><?php echo $title;?></title>
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
            <div class="col-md-10">
                <div class="row">
                    <!--Company Info-->
                    <div class="col-md-7">
                        <div class="companyinfoWrp">

                            <div class="socialWedget" style="top:10px;">
                                facebook like & share button
                                <div class="fb-share-button" data-href="<?php echo current_url();?>" style="float:left; margin-left:5px;"></div>
                                <div class="clearfix"></div>
                            </div>

                            <h1 class="jobname"><?php echo $row_company->company_name;?></h1>
                            <?php
                            //echo "T".file_exists($real_path = realpath(APPPATH . '../public/uploads/employer/'.$company_logo));
                            ?>
                            <div class="col-sm-3"><img src="<?php echo base_url('public/uploads/employer/'.$company_logo);?>" width="100%" alt="<?php echo base_url('company/'.$row_company->company_slug);?>" /></div>
                            <div class="col-sm-9">


                                <div class="location"><?php echo ($row_company->city)?$row_company->city.',':'';?> <?php echo ($row_company->country)?$row_company->country:'';?></div>

                                <div class="comtxt"><span>Current Openings :</span> <strong><?php echo $total_opened_jobs;?></strong> </div>
                                <?php if($row_company->no_of_employees):?>
                                    <div class="comtxt"><span>Staff Members :</span> <strong><?php echo $row_company->no_of_employees;?> Employees</strong></div>
                                <?php endif;?>
                                <?php if($company_website):?>
                                    <div class="comtxt"><span>Company Url :</span> <strong><a href="<?php echo $company_website;?>" target="_blank" rel="nofollow"><?php echo $company_website;?></a></strong></div>
                                <?php endif;?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>

                    <!--Apply-->
                    <?php if($this->session->userdata('is_user_login')!=TRUE): ?>
                        <div class="col-md-5 actionBox">
                            <h4>Become a Member</h4>
                            <p>Click on Login if you are already member.</p>
                            <a href="<?php echo base_url('jobseeker-signup');?>" class="applyjob"><span>Register</span></a> <a href="<?php echo base_url('login');?>" class="refferbtn"><span>Login</span></a> </div>
                    <?php endif;?>
                    <div class="clear"></div>
                </div>

                <!--Job Detail-->
                <?php if($row_company->company_description):?>
                    <div class="boxwraper">
                        <div class="titlebar">About <?php echo $row_company->company_name;?></div>

                        <!--Job Description-->
                        <div class="companydescription">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="normal-details"><?php
                                        echo strip_tags($row_company->company_description);
                                        ?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
                <div class="searchjoblist">
                    <!--Jobs List-->
                    <div class="boxwraper">
                        <div class="titlebar">
                            <div class="row">
                                <div class="col-md-6"><b>Current Jobs in <?php echo $row_company->company_name;?></b></div>
                                <div class="col-md-6 text-right"><strong>Jobs <?php echo $total_opened_jobs;?></strong> </div>
                            </div>
                        </div>
                        <div class="row searchlist">
                            <!--Job Row-->
                            <?php
                            if($result_posted_jobs):
                                $CI =& get_instance();
                                foreach($result_posted_jobs as $row_jobs):
                                    $is_already_applied = $CI->is_already_applied_for_job($this->session->userdata('user_id'), $row_jobs->ID);
                                    ?>
                                    <div class="col-md-12">
                                        <div class="intlist">
                                            <div class="col-md-12">
                                                <div class="col-md-8"> <a href="<?php echo base_url('jobs/'.$row_jobs->job_slug);?>" class="jobtitle" title="<?php echo $row_jobs->job_title;?>"><?php echo word_limiter(strip_tags(str_replace('-',' ',$row_jobs->job_title)),9);?></a>
                                                    <div class="location"><a href="<?php echo base_url('company/'.$row_company->company_slug);?>" title="<?php echo $row_jobs->company_name;?>"><?php echo $row_company->company_name;?></a> &nbsp;-&nbsp; <?php echo $row_jobs->city;?></div>
                                                </div>
                                                <div class="col-md-4">

                                                    <?php
                                                    if($is_already_applied=='yes'):
                                                        ?>
                                                        <a href="javascript:;" class="applybtngray">Already Applied</a>
                                                    <?php else:?>
                                                        <a href="<?php echo base_url('jobs/'.$row_jobs->job_slug.'?apply=yes');?>" class="applybtn">Apply Now</a>
                                                    <?php endif;?>

                                                    <div class="date"><?php echo date_formats($row_jobs->dated, 'd M Y');?></div>
                                                </div>
                                                <div class="clear"> </div>
                                                <p><?php echo word_limiter(strip_tags(str_replace('-',' ',$row_jobs->job_description)),40);?></p>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                    <?php
                                endforeach;
                            else:
                                ?>
                                <div align="center" class="text-red">No job opened.</div>
                            <?php endif;?>
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