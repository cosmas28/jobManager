<div class="panel panel-info">
  <div class="panel-heading">
    <h3>Job Title</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group col_full">
      <?php foreach($left_side_title as $row_titles): ?>
      <li class="list-group-item">
        <a href="<?php echo base_url('search-jobs/'.make_friendly_url($row_titles->job_title));?>">
          <span class="badge fright"><?php echo $row_titles->score;?></span><?php echo character_limiter($row_titles->job_title, 10);?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3>City</h3>
  </div>

  <div class="panel-body">
    <ul class="list-group col_full">
        <?php foreach($left_side_city as $row_city):?>
          <li class="list-group-item">
            <a href="<?php echo base_url('search-jobs/'.str_replace(' ','-',trim($param)).'/'.make_friendly_url($row_city->city));?>">
              <span class="badge fright"><?php echo $row_city->score;?></span><?php echo character_limiter($row_city->city, 14);?>
            </a>
          </li>
        <?php endforeach;?>
    </ul>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3>Top Companies</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group col_full">
      <?php foreach($left_side_company as $row_company):?>
        <li class="list-group-item">
          <a href="<?php echo base_url('company/'.$row_company->company_slug);?>">
            <span class="badge fright"><?php echo $row_company->score;?></span><?php echo character_limiter($row_company->company_name, 14);?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3>Salary Range</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group col_full">
      <?php foreach($left_side_salary_range as $row_range): ?>
        <li class="list-group-item">
          <a href="<?php echo base_url('search-jobs/'.$row_range->pay);?>">
            <span class="badge fright"><?php echo $row_range->score;?></span><?php echo character_limiter($row_range->pay, 14);?>
          </a>
        </li>
      <?php endforeach;?>
    </ul>
  </div>
</div>
