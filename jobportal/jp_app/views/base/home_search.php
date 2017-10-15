<?php if($this->session->userdata('is_user_login')!=TRUE): ?>
  <div class="heading-block title-center nobottomborder">
    <h1>Hire &amp; Get Hiring-Holder</h1>
    <span>Each month, more than 7 million jobseekers turn to
    website in their search for work, making over 160,000 applications every day.</span>
  </div>
  <div class="center bottommargin">
    <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
      <div class="row">
        <div class="col-md-5">
          <div class="input-fld">
            <input type="text" required name="job_params" id="job_params" placeholder="Enter Job Title Or Skill" name="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="input-fld">
            <select id="jcity" name="jcity">
              <option value="" selected>Select City</option>
              <?php if($cities_res): foreach($cities_res as $cities):?>
              	<option value="<?php echo $cities->city_name;?>"><?php echo $cities->city_name;?></option>
              <?php endforeach; endif;?>
            </select>
          </div>
        </div>

        <div class="col-md-2">
          <div class="input-fld">
            <button type="submit" name="job_submit" id="job_submit">Search Job</button>
          </div>
        </div>
      </div>
    <?php echo form_close();?>
  </div>

  <div class="clear"></div>

  <div class="center bottommargin">
    <a href="<?php echo base_url('login');?>" class="button button-3d button-teal button-xlarge nobottommargin">
      <i class="icon-star3"></i>Start your tasks
    </a>
       - OR -
    <a href="<?php echo base_url('employer/post_new_job');?>" class="button button-3d button-red button-xlarge nobottommargin">
      <i class="icon-user2"></i>sign up to Post tasks
    </a>
  </div>

<?php else:

   if($this->session->userdata('is_employer')==TRUE): ?>
   <div class="center bottommargin">
     <h1>Search Resume</h1>
     <?php echo form_open_multipart('resume_search/search',array('name' => 'rsearch', 'id' => 'rsearch'));?>
      <div class="row">
        <div class="col-md-10">
          <div class="input-fld">
            <input type="text" placeholder="Search Resume with Skill or Job Title" name="resume_params" id="resume_params">
          </div>
        </div>

        <div class="col-md-2">
          <div class="input-fld">
            <button type="submit" name="resume_submit" id="resume_submit">Search</button>
          </div>
        </div>
      </div>
     <?php echo form_close();?>
   </div>

   <div class="center bottommargin">
     <a href="<?php echo base_url('employer/post_new_job');?>" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-user2"></i>Post tasks</a>
   </div>
<?php else: ?>
  <div class="center bottommargin">
    <h1>Search Job</h1>
    <?php echo form_open_multipart('job_search/search',array('name' => 'jsearch', 'id' => 'jsearch'));?>
      <div class="row">
        <div class="col-md-10">
          <div class="input-fld">
            <input type="text" name="job_params" id="job_params" placeholder="Job title or Skill" name="">
          </div>
        </div>

        <div class="col-md-2">
          <div class="input-fld">
            <button type="submit" name="job_submit" id="job_submit">Find</button>
          </div>
        </div>
      </div>
    <?php echo form_close();?>
  </div>

  <div class="center bottommargin">
    <a href="<?php echo base_url('login');?>" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-user2"></i>Upload Resume</a>
  </div>

<?php endif;?>
<?php endif;?>
