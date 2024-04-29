<?php
/**
 * The header.

 * @package WordPress
 * @subpackage lyc
 * @since lyc 1.0.0
 */

?>

<!-- Footer -->
<Footer class="lyc-footer bg-primary-900 py-xxl-7 py-xl-7 py-lg-5 py-md-5 py-sm-3 py-3">
  <?php if( have_rows('footers', 'option') ): ?>
  <?php while( have_rows('footers', 'option') ): the_row();

        $title = get_sub_field('title', 'option');
        $copy_right = get_sub_field('copy_right', 'option');
        $design = get_sub_field('design', 'option');

        ?>
  <div class="container">
    <div class="lyc-footer-content d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-4 gap-md-4 gap-sm-4 gap-4">
      <h5 class="text-white"><?php echo $title; ?></h5>
      <div class="row">
        <?php
              if (have_rows('social')) : ?>
        <?php while (have_rows('social')) : the_row();

                  $title = get_sub_field('title');
                  $phone = get_sub_field('phone');
                  $index = get_row_index();
              ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
          <div class="lyc-footer-box d-flex flex-column gap-1 p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-2">
            <h6 class="text-white"><?php echo $title;  ?></h6>
            <?php
                 if($index==1){ ?>
            <p class="text-white"><?php echo $phone; ?></p>
            <?php }else{ ?>
            <a href="tel:+<?php echo $phone; ?>"><?php echo $phone; ?></a>
            <?php }?>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="lyc-footer-links d-flex flex-wrap justify-content-between pb-xxl-4 pb-xl-4 pb-lg-4 pb-md-3 pb-sm-3 pb-3 gap-3">
        <!-- <ul class="lyc-footer-list d-flex flex-wrap align-items-center gap-3">
              <li class="lyc-footer-item">
                <a href="index.html">Home</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">About London Young Counselling</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Our School Service</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Counsellors</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Children</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Apply Online</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Shop</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Contact Us</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Supervisors</a>
              </li>
              <li class="lyc-footer-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul> -->
        <?php
          echo wp_nav_menu(array(
            'container' => '',
            'menu'        => 'Footer Menu',
            'menu_id'     => '',
            'menu_class'  => 'lyc-footer-list d-flex flex-wrap align-items-center gap-3',
            'fallback_cb' => false,
            'depth'       => 0,
          ));
          ?>
        <?php
              if (have_rows('quick')) : ?>
        <?php while (have_rows('quick')) : the_row();

                  $quick_link = get_sub_field('quick_link');
                  $quick_icon = get_sub_field('quick_icon');
              ?>
        <a href="<?php echo esc_url( $quick_link['url'] ); ?>" class="lyc-footer-social-link">
          <span class="d-flex justify-content-center align-items-center">
            <?php
                    $formatted_text = str_replace(['<p>', '</p>'], '', $quick_icon);
                  //  echo esc_html($formatted_text);
                ?>
            <?php echo htmlspecialchars_decode($formatted_text); ?>
          </span>
        </a>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="lyc-footer-bottom d-flex flex-wrap justify-content-between gap-2 w-100 pt-xxl-4 pt-xl-4 pt-lg-4 pt-md-3 pt-sm-3 pt-3">
        <p class="m-0"><?php echo $copy_right; ?></p>
        <!-- <p class="m-0">© 2024 <span class="text-secondary">London Young Counselling.</span> All right Reserved</p> -->
        <!-- <p class="m-0">Design & Developed by <a href="https://www.igexsolutions.com/">iGex Solutions</a></p> -->
        <?php
                    $formatted_text = str_replace(['<p>', '</p>'], '', $design);
                  //  echo esc_html($formatted_text);
                ?>
        <?php echo htmlspecialchars_decode($formatted_text); ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</Footer>
<!-- Footer -->
<!-- Offcanvas -->
<div class="offcanvas offcanvas-end" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="bookingform" aria-labelledby="bookingformLabel">
  <div class="offcanvas-header d-flex justify-content-between align-items-center py-xxl-3 py-xl-3 py-lg-3 py-md-2 py-sm-2 py-2 px-xxl-4 px-xl-4 px-lg-4 px-md-3 px-sm-3 px-3">
    <h5 class="offcanvas-title" id="bookingformLabel">Booking form</h5>
    <button type="button" class="btn btn-light d-flex justify-content-center align-items-center p-2" data-bs-dismiss="offcanvas" aria-label="Close">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
        <path d="M8.5859 10.0001L0.792969 2.20718L2.20718 0.792969L10.0001 8.58582L17.793 0.792969L19.2072 2.20718L11.4143 10.0001L19.2072 17.7929L17.793 19.2072L10.0001 11.4143L2.20718 19.2072L0.792969 17.7929L8.5859 10.0001Z" fill="#004AAD" />
      </svg>
    </button>
  </div>
  <div class="offcanvas-body p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3">
    <form class="lyc-booking-form" id="booking_form" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-12">
          <h6>School information</h6>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_name" class="lyc-required">School name</label>
            <input type="text" name="s_name" id="s_name" class="form-control" placeholder="enter school name" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_type" class="lyc-required">School type</label>
            <select class="form-select" name="s_type" id="s_type" required>
              <option disabled="" selected="">select school type</option>
              <option value="school type">School Type1</option>
              <option value="school type2">School Type2</option>
            </select>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_age" class="lyc-required">Age range of students</label>
            <select class="form-select" name="s_age" id="s_age" required>
              <option disabled="" selected="">select age of student</option>
              <option value="18">18</option>
              <option value="20">20</option>
            </select>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_roll">Number of peoples on roll</label>
            <select class="form-select" name="s_roll" id="s_roll">
              <option disabled="" selected="">select peoples on roll</option>
              <option value="roll">Roll</option>
              <option value="roll2">Roll</option>
            </select>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_address" class="lyc-required">School address</label>
            <input name="s_address" id="s_address" class="form-control" required placeholder="write address here">
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="lyc-form-group">
            <label for="s_postcode" class="lyc-required">Postcode</label>
            <input type="text" name="s_postcode" id="s_postcode" class="form-control" placeholder="enter postcode" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="lyc-form-group">
            <label for="s_borough">London borough</label>
            <input type="text" name="s_borough" id="s_borough" class="form-control" placeholder="enter london borough">
          </div>
        </div>
        <div class="col-12">
          <h6>School contact</h6>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_cname" class="lyc-required">Name</label>
            <input type="text" name="s_cname" id="s_cname" class="form-control" placeholder="enter name" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_cjob" class="lyc-required">Job title</label>
            <input type="text" name="s_cjob" id="s_cjob" class="form-control" placeholder="enter job title" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_cphone" class="lyc-required">Telephone</label>
            <input type="text" name="s_cphone" id="s_cphone" class="form-control" placeholder="enter telephone" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="s_cemail">Email address</label>
            <input type="email" name="s_cemail" id="s_cemail" class="form-control" placeholder="enter email address">
          </div>
        </div>
        <div class="col-12">
          <h6>Safeguarding Officer</h6>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="o_name" class="lyc-required">Name</label>
            <input type="text" name="o_name" id="o_name" class="form-control" placeholder="enter name" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="o_job" class="lyc-required">Job title</label>
            <input type="text" name="o_job" id="o_job" class="form-control" placeholder="enter job title" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="o_phone" class="lyc-required">Telephone</label>
            <input type="text" name="o_phone" id="o_phone" class="form-control" placeholder="enter telephone" required>
          </div>
        </div>
        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="o_email">Email address</label>
            <input type="email" name="o_email" id="o_email" class="form-control" placeholder="enter email address">
          </div>
        </div>
        <div class="col-12">
          <h6>Services</h6>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="lyc-form-group">
                <label for="s_session" class="lyc-required">1:1 Counselling sessions for</label>
                <select class="form-select" name="s_session" id="s_session" required>
                  <option disabled="" selected="">select sessions for</option>
                  <option value="session">Session1</option>
                  <option value="session2">Session2</option>
                </select>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="lyc-form-group">
                <label for="s_week" class="lyc-required">Amount of sessions per week</label>
                <select class="form-select" name="s_week" id="s_week" required>
                  <option disabled="" selected="">select sessions per week</option>
                  <option value="session">Session1</option>
                  <option value="session2">Session2</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="other" class="lyc-required">Other</label>
            <textarea name="other" id="other" class="form-control" required placeholder="write your words here"></textarea>
          </div>
        </div>
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="lyc-form-group">
            <label for="notes" class="lyc-required">Notes</label>
            <textarea name="notes" id="notes" class="form-control" required placeholder="write your words here"></textarea>
          </div>
        </div>
        <div class="col-12">
          <div class="lyc-submit-btn d-flex justify-content-end align-items-end">
            <!-- <a href="#" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2">
                  Submit
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <g clip-path="url(#clip0_282_3041)">
                      <mask id="mask0_282_3041" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                        <path d="M12 0.5H0V12.5H12V0.5Z" fill="white" />
                      </mask>
                      <g mask="url(#mask0_282_3041)">
                        <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="white" />
                      </g>
                    </g>
                    <defs>
                      <clipPath id="clip0_282_3041">
                        <rect width="12" height="12" fill="white" transform="translate(0 0.5)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a> -->
            <div class="contactsuccess"></div>
            <input type="hidden" name="action" value="booking_form">
            <button type="submit" id="booking_btn" name="booking_btn" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2 btn-processi">Submit
              <span class="btn-ring"></span>
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- Owl -->
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery-3.6.1.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/script.js"></script> -->
<!-- Custom -->

<?php wp_footer(); ?>
<script>
jQuery(document).on('change', '#filter_city', function(e) {
  var filter_city = jQuery('#filter_city').val();
  console.log(filter_city);
  window.location.href = '<?php echo site_url('counsellors'); ?>?lyc_city=' + filter_city;
})
</script>
</body>

</html>