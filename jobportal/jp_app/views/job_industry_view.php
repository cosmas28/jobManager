<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('base/meta_tags'); ?>
    <meta name="keywords" content="<?php echo $param;?> Jobs" />
    <meta name="description" content="<?php echo $param;?> Jobs ,Find best Jobs. Jobs at "<?php echo SITE_NAME;?> />
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
    <!--Search Block-->
    <div class="top-colSection" style="background: url(<?php echo base_url('public/images/search-bg.jpg');?>) no-repeat right;">
        <div class="container">
            <div class="row">
                <?php $this->load->view('common/home_search');?>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--/Search Block-->

    <!--Latest Jobs Block-->
    <div class="container">
        <!--Left Col-->
        <!--Mid Col-->
        <div class="searchjoblist col-md-10">
            <!--Jobs List-->
            <div class="boxwraper">
                <div class="titlebar">
                    <div class="row">
                        <div class="col-md-6"><b><?php echo $param;?> Jobs </b></div>
                        <div class="col-md-6 text-right"><strong>Jobs <?php echo $from_record.' - '.$page;?> of <?php echo $total_rows;?></strong> </div>
                    </div>
                </div>
                <div class="row searchlist">
                    <!--Job Row-->
                    <?php if($result):
                        $CI =& get_instance();
                        foreach($result as $row):
                            $company_logo = ($row->company_logo)?$row->company_logo:'no_logo.jpg';
                            $is_already_applied = $CI->is_already_applied_for_job($this->session->userdata('user_id'), $row->ID);
                            ?>
                            <div class="col-md-12">
                                <div class="intlist">
                                    <div class="col-md-2"><a href="<?php echo base_url('jobs/'.$row->job_slug);?>" class="thumbnail" title="<?php echo $row->job_title;?>"><img src="<?php echo base_url('public/uploads/employer/thumb/'.$company_logo);?>" alt="<?php echo base_url('company/'.$row->company_slug);?>" /></a></div>
                                    <div class="col-md-10">
                                        <div class="col-md-7"> <a href="<?php echo base_url('jobs/'.$row->job_slug);?>" class="jobtitle" title="<?php echo $row->job_title;?>"><?php echo word_limiter(strip_tags(str_replace('-',' ',$row->job_title)),7);?></a>
                                            <div class="location"><a href="<?php echo base_url('company/'.$row->company_slug);?>" title="Jobs in <?php echo $row->company_name;?>"><?php echo $row->company_name;?></a> &nbsp;-&nbsp; <?php echo $row->city;?></div>
                                        </div>
                                        <div class="col-md-5">
                                            <?php
                                            if($is_already_applied=='yes'):
                                                ?>
                                                <a href="javascript:;" class="applybtngray">Already Applied</a>
                                            <?php else:?>
                                                <a href="<?php echo base_url('jobs/'.$row->job_slug.'?apply=yes');?>" class="applybtn">Apply Now</a>
                                            <?php endif;?>
                                            <div class="date"><?php echo date_formats($row->dated, 'M d, Y');?></div>
                                        </div>
                                        <div class="clear"> </div>
                                        <p><?php echo word_limiter(strip_tags(str_replace('-',' ',$row->job_description)),22);?></p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <?php
                        endforeach;
                    else: ?>
                        <div class="err" align="center">
                            <p><strong> <?php echo ($param=='')?'Please enter keywords above to display the relevant opened jobs.':'Sorry, no record found';?> </strong></p>
                        </div>
                    <?php endif;?>
                </div>
            </div>
            <!--Pagination-->
            <div class="paginationWrap"> <?php echo ($result)?$links:'';?> </div>
        </div>
        <?php $this->load->view('common/right_ads');?>
    </div>
    <!--/Latest Jobs Block-->
    <!--Footer-->
    <?php $this->load->view('base/footer'); ?>
</div>
<?php $this->load->view('base/before_body_close'); ?>
<?php $this->load->view('common/before_body_close'); ?>
    <script type="text/javascript">
        $(function() {
            $( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
        });
    </script>
</body>
</html>