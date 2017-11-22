<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('common/meta_tags'); ?>
<title><?php echo $title;?></title>
<link rel="stylesheet" href="http://jquery-ui.googlecode.com/svn/tags/1.8.7/themes/base/jquery.ui.all.css">
<link rel="stylesheet" href="<?php echo base_url('public/autocomplete/demo.css'); ?>">
<style>
.ui-button {
	margin-left: -1px;
}
.ui-button-icon-only .ui-button-text {
	padding: 0.35em;
}
.ui-autocomplete-input {
	margin: 0;
	padding: 0.48em 0 0.47em 0.45em;
}
</style>
<?php $this->load->view('common/before_head_close'); ?>
</head>
<body>
<?php $this->load->view('common/after_body_open'); ?>
<div class="siteWraper">
<!--Header-->
<?php $this->load->view('common/header'); ?>
<!--/Header-->
<div class="container detailinfo">
  <div class="row">
  <div class="col-md-3">
  <div class="dashiconwrp">
    <?php $this->load->view('employer/common/employer_menu');?>
  </div>
  </div>
  
    <div class="col-md-9"> <?php echo $this->session->flashdata('msg');?> 
      <!--Professional info-->
      
      <div class="formwraper">
        <div class="titlehead">Company Information</div>
        <div class="row"> <?php echo form_open_multipart('employer/edit_company',array('name' => 'emp_comp_form', 'id' => 'emp_comp_form', 'onSubmit' => 'return validate_employer_company_form(this);'));?>
          <div class="col-md-9">
            <div class="formint">
              <div class="input-group <?php echo (form_error('full_name'))?'has-error':'';?>">
                <label class="input-group-addon">Your Name <span>*</span></label>
                <input name="full_name" type="text" class="form-control" id="full_name" value="<?php echo $full_name; ?>" maxlength="40">
                <?php echo form_error('full_name'); ?> </div>
              <div class="input-group <?php echo (form_error('company_name'))?'has-error':'';?>">
                <label class="input-group-addon">Company Name <span>*</span></label>
                <input name="company_name" type="text" class="form-control" id="company_name" value="<?php echo $company_name; ?>" maxlength="50" />
                <?php echo form_error('company_name'); ?> </div>
              <div class="input-group <?php echo (form_error('industry_id'))?'has-error':'';?>">
                <label class="input-group-addon">Industry <span>*</span></label>
                <select name="industry_id" id="industry_id" class="form-control" style="max-width:350px;">
                  <option value="" selected>Select Industry</option>
                  <?php foreach($result_industries as $row_industry):
				  			$selected = ($industry_id==$row_industry->ID)?'selected="selected"':'';
				  ?>
                  <option value="<?php echo $row_industry->ID;?>" <?php echo $selected;?>><?php echo $row_industry->industry_name;?></option>
                  <?php endforeach;?>
                </select>
                <?php echo form_error('industry_id'); ?> </div>
              <div class="input-group <?php echo (form_error('ownership_type'))?'has-error':'';?>">
                <label class="input-group-addon">Org. Type </label>
                <select class="form-control" name="ownership_type" id="ownership_type">
                  <option value="Private" <?php echo ($ownership_type=='Private')?'selected="selected"':'';?>>Private</option>
                  <option value="Public" <?php echo ($ownership_type=='Public')?'selected="selected"':'';?>>Public</option>
                  <option value="Government" <?php echo ($ownership_type=='Government')?'selected="selected"':'';?>>Government</option>
                  <option value="Semi-Government" <?php echo ($ownership_type=='Semi-Government')?'selected="selected"':'';?>>Semi-Government</option>
                  <option value="NGO" <?php echo ($ownership_type=='NGO')?'selected="selected"':'';?>>NGO</option>
                </select>
                <?php echo form_error('ownership_type'); ?> </div>
              <div class="input-group <?php echo (form_error('company_location'))?'has-error':'';?>">
                <label class="input-group-addon">Address <span>*</span></label>
                <textarea class="form-control" name="company_location" id="company_location" ><?php echo $company_location; ?></textarea>
                <?php echo form_error('company_location'); ?> </div>
              <div class="input-group <?php echo (form_error('country'))?'has-error':'';?>">
                <label class="input-group-addon">Location <span>*</span></label>
                <select name="country" id="country" class="form-control"  style="width:50%">
                  <?php 
					foreach($result_countries as $row_country):
						$selected = ($country==$row_country->country_name)?'selected="selected"':'';
						
				?>
                  <option value="<?php echo $row_country->country_name;?>" <?php echo $selected;?>><?php echo $row_country->country_name;?></option>
                  <?php endforeach;?>
                </select>
                <?php echo form_error('country'); ?>
               
                <div class="demo">
                  
                
                <input name="city" type="text" placeholder="City" class="form-control" id="city_text" style="max-width:165px;" value="<?php echo $city; ?>" maxlength="50"></div>
                <?php echo form_error('city'); ?> </div>
              <div class="input-group <?php echo (form_error('company_phone'))?'has-error':'';?>">
                <label class="input-group-addon">Company Phone <span>*</span></label>
                <input type="phone" class="form-control" name="company_phone" id="company_phone" value="<?php echo $company_phone; ?>" maxlength="20" />
                <?php echo form_error('company_phone'); ?>
              </div>
              <div class="input-group <?php echo (form_error('company_description'))?'has-error':'';?>">
                <label class="input-group-addon">Company Description <span>*</span></label>
                <textarea class="form-control" name="company_description" id="company_description" rows="8" cols="30" ><?php echo $company_description; ?></textarea>
                <?php echo form_error('company_description'); ?> </div>
              <div align="center">
                <input type="submit" name="submit_button" id="submit_button" value="Update" class="btn btn-success" />
              </div>
            </div>
          </div>
          <?php echo form_close();?>
          <div class="col-md-3 uploadpic" style="padding-top:4px;">
            <div class="picinner">
              <?php $image_name = ($row->company_logo)?$row->company_logo:'no_logo.jpg';?>
              <img src="<?php echo base_url('public/uploads/employer/'.$image_name);?>"  />
              <div class="stripBox ">
                <form name="frm_emp_up" id="frm_emp_up" method="post" action="<?php echo base_url('employer/edit_employer/upload_logo');?>" enctype="multipart/form-data">
                  <input type="file" name="upload_logo" id="upload_logo" accept="image/*" style="display:none;">
                </form>
                <a href="javascript:;" class="upload" title="Upload Logo"><i class="fa fa-upload"></i></a>
                <?php if($row->company_logo!=''):?>
                <a href="javascript:;" onClick="document.location='<?php echo base_url('employer/edit_employer/delete_company_logo');?>'" class="remove" title="Delete Logo"><i class="fa fa-trash-o"></i></a>
                <?php endif;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/Job Detail-->
    
    
  </div>
</div>
<?php $this->load->view('common/bottom_ads');?>
<!--Footer-->
<?php $this->load->view('common/footer'); ?>
<script src="<?php echo base_url('public/oldstatic/js/bad_words.js'); ?>"></script>
<?php $this->load->view('common/before_body_close'); ?>
<script src="<?php echo base_url('public/oldstatic/js/validate_employer.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('public/autocomplete/jquery-1.4.4.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.core.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.widget.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.button.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.position.js'); ?>"></script> 
<script src="<?php echo base_url('public/autocomplete/jquery.ui.autocomplete.js'); ?>"></script> 
<script type="text/javascript"> var cy = '<?php echo $country;?>'; </script> 
<script src="<?php echo base_url('public/autocomplete/action-js.js'); ?>"></script> 
<script type="text/javascript">
$(document).ready(function(){
	
$(function() {
  $(".fa-upload").click(function(){
	  $("#upload_logo").click();
  });
  $("#upload_logo").change(function(){
	  ext_array = ['png','jpg','jpeg','gif'];	
	  var ext = $('#upload_logo').val().split('.').pop().toLowerCase();
	  if($.inArray(ext, ext_array) == -1) {
		  alert('Invalid file provided!');
		  return false;
	  }
	 this.form.submit();
  });
});
</script>
</body>
</html>