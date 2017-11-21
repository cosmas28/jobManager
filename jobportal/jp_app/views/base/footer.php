<footer id="footer" class="dark">

  <div class="container">

    <!-- Footer Widgets
    ============================================= -->
    <div class="footer-widgets-wrap clearfix">

      <div class="col_two_third">

        <div class="col_one_third">

          <div class="widget clearfix">

            <img src="<?php echo base_url('public/images/footer-widget-logo.png');?>" alt="" class="footer-logo">

            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
              <address>
                <strong>Headquarters:</strong><br>
                Ngumba Estate, Nairobi<br>
              </address>
              <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>

              <abbr title="Email Address"><strong>Email:</strong></abbr> info@mtasker.com
            </div>

          </div>

        </div>

        <div class="col_one_third">

          <div class="widget widget_links clearfix">

            <h4>Quick Links</h4>

            <ul>
              <li><a href="<?php echo base_url('about-us');?>" title="About Us">About Us</a></li>
              <li><a href="<?php echo base_url('search-resume');?>" title="New Job Openings">Resume Search</a></li>
              <li><a href="<?php echo base_url('contact-us');?>" title="Contact Us">Contact Us</a></li>
            </ul>

          </div>

        </div>

        <div class="col_one_third col_last">

          <div class="widget widget_links clearfix">
            <h4>Popular Industries</h4>

            <ul>
              <?php
                $res_inds = $this->industries_model->get_top_industries();
                if($res_inds):
                  foreach($res_inds as $row_inds):
               ?>
                    <li><a href="<?php echo base_url('industry/'.$row_inds->slug);?>" title="<?php echo $row_inds->industry_name;?> Jobs"><?php echo $row_inds->industry_name;?> Jobs</a></li>
               <?php
                  endforeach;
                endif;
                ?>
            </ul>

          </div>

        </div>

      </div>

      <div class="col_one_third col_last">

        <div class="widget clearfix" style="margin-bottom: -20px;">

          <div class="row">

            <div class="col-md-6 bottommargin-sm">
              <div class="counter counter-small"><span data-from="100" data-to="<?php echo $total_job_seekers;?>" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
              <h5 class="nobottommargin">Job Seekers</h5>
            </div>

            <div class="col-md-6 bottommargin-sm">
              <div class="counter counter-small"><span data-from="100" data-to="<?php echo $total_employers;?>" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
              <h5 class="nobottommargin">Employers</h5>
            </div>

          </div>

        </div>

        <div class="widget clearfix" style="margin-bottom: -20px;">
          <h4>Popular cities</h4>
          <div class="row">

            <div class="col-md-6 clearfix bottommargin-sm">
              <ul>
                <li><a href="<?php echo base_url('search/nairobi');?>" title="Jobs in New York">Nairobi</a></li>
                <li><a href="<?php echo base_url('search/eldoret');?>" title="Jobs in 	Los Angeles">Eldoret</a></li>
                <li><a href="<?php echo base_url('search/kitale');?>" title="Jobs in Chicago">Kitale</a></li>
                <li><a href="<?php echo base_url('search/lamu');?>" title="Jobs in Houston">Lamu</a></li>
                <li><a href="<?php echo base_url('search/narok');?>" title="Jobs in San Diego">Narok</a></li>
                <li><a href="<?php echo base_url('search/kisumu');?>" title="Jobs in San Jose">Kisumu</a></li>


              </ul>
            </div>
            <div class="col-md-6 clearfix">
              <ul>
                <li><a href="<?php echo base_url('search/nakuru');?>" title="Jobs in Austin">Nakuru</a></li>
                <li><a href="<?php echo base_url('search/naivasha');?>" title="Jobs in San Francisco">	Naivasha</a></li>
                <li><a href="<?php echo base_url('search/machakos');?>" title="Jobs in Columbus">Machakos</a></li>
                <li><a href="<?php echo base_url('search/mombasa');?>" title="Jobs in Boston">Mombasa</a></li>
                <li><a href="<?php echo base_url('search/kiambu');?>" title="Jobs in Washington">Kiambu</a></li>
                <li><a href="<?php echo base_url('search/kilifi');?>" title="Jobs in Las Vegas">Kilifi</a></li>

              </ul>
            </div>

          </div>

        </div>

      </div>

    </div><!-- .footer-widgets-wrap end -->

  </div>

  <!-- Copyrights
  ============================================= -->
  <div id="copyrights">

    <div class="container clearfix">

      <div class="col_half">
        Copyrights &copy; <?php echo date('Y');?> All Rights Reserved by taskJET.<br>
        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
      </div>

      <div class="col_half col_last tright">
        <div class="fright clearfix">
          <a href="#" class="social-icon si-small si-borderless si-facebook">
            <i class="icon-facebook"></i>
            <i class="icon-facebook"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-twitter">
            <i class="icon-twitter"></i>
            <i class="icon-twitter"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-gplus">
            <i class="icon-gplus"></i>
            <i class="icon-gplus"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-pinterest">
            <i class="icon-pinterest"></i>
            <i class="icon-pinterest"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-vimeo">
            <i class="icon-vimeo"></i>
            <i class="icon-vimeo"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-github">
            <i class="icon-github"></i>
            <i class="icon-github"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-yahoo">
            <i class="icon-yahoo"></i>
            <i class="icon-yahoo"></i>
          </a>

          <a href="#" class="social-icon si-small si-borderless si-linkedin">
            <i class="icon-linkedin"></i>
            <i class="icon-linkedin"></i>
          </a>
        </div>

        <div class="clear"></div>

        <i class="icon-envelope2"></i> info@taskjet.co.ke <span class="middot">&middot;</span> <i class="icon-headphones"></i> +254731604325 <span class="middot">&middot;</span>
      </div>

    </div>

  </div><!-- #copyrights end -->

</footer><!-- #footer end -->
