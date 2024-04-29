<?php

/**
 * The header.

 * @package WordPress
 * @subpackage lyc
 * @since lyc 1.0 1.0
 */

get_header();
?>



<main>
  <!-- Breadcrum -->
  <section class="lyc-entry-header pt-xxl-5 pt-xl-4 pt-lg-3 pt-md-3 pt-sm-3 pt-3">
    <div class="container">
      <div class="lyc-entry-header-content d-flex flex-column gap-2 ps-xxl-4 ps-xl-4 ps-lg-4 ps-md-3 ps-sm-3 ps-3">
        <h1><?php echo $post->post_title; ?></h1>
        <ul class="d-flex align-items-center gap-2 pb-3">
          <li>
            <a href="<?php echo site_url('home'); ?>" class="lyc-home">Home</a>
          </li>
          <li>-</li>
          <li>
            <p><?php echo $post->post_title; ?></p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="lyc-testimonial my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
    <div class="container">
      <div class="row">
        <?php
        $args = array(
                    'numberposts' => -1,
                    'post_type'   => 'testimonials',
                    'post_status'     => 'publish',
                    'order' => 'ASC',
                );
                $testimonials = get_posts($args);
                if (count($testimonials) > 0) {
                  foreach ($testimonials as $testimonial) {
                  ?>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3><?php echo $testimonial->post_title; ?></h3>
                <p><?php echo $testimonial->post_excerpt; ?></p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <?php echo $testimonial->post_content; ?>
            </div>
          </div>
        </div>
        <?php } } ?>
        <!--<div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Head Teacher</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                London Young Counselling has provided our school with a safe space for our students. The support offered to our students through 1:1 counselling sessions has been invaluable. We are continuously grateful to have them on site!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Head Teacher</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                LYC offer counselling services to two schools across our trust. They have made a huge difference to the pastoral provision in our school.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Head Teacher</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                We have 4 LYC Counsellors in our schools supporting our students. They have made a huge difference across many areas of support needed and we continue to value their presence in our sites!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Safeguarding Lead</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                London Young Counselling are the counselling service for our students and they are excellent! They have also support staff when needed. Thanks LYC!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Safeguarding Lead</h3>
                <p>Primary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                London Young Counselling have fit really well in our school and with our students. Both the staff in the school and in the LYC admin team have been incredibly supportive. We are really glad we choose this service for our school!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Safeguarding Lead</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                It has been lovely to have a mental health provision in our school that has not added a strain to our HR department. LYC cover everything in their service, from the HR to the sessions! This has been hugely beneficial to all departments in our school.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Safeguarding Lead</h3>
                <p>Secondary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                Best service we have worked with!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>SENCO</h3>
                <p>Primary School</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                Highly recommended to work with students! They offer a range of therapies and their counsellors have been really flexible when working with what we need.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Head Teacher</h3>
                <p>SEMHS</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                LYC have been really helpful when working in our schools and adjusting to the needs of our students. We have seen a huge difference in our students thanks to the sessions the counsellors are providing with our students. Looking forward to our continued work together.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Head Teacher</h3>
                <p>SEMHS</p>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                LYC have been in our school for 7 years now supporting hundreds of our students. Thankful for all their support and work!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                Brilliant place for doing my placement as a counselling student. Really appreciate the benefits of being able to carry out the assessment for each client and the training workshops LYC provide. The support from Helen and Ami is efficient and comfortably welcomed, for the small issues and big. Super grateful to have had you to help me progress in my learning and given placement and also very grateful to be able to help so many children and young adults.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                London Young Counselling have been great in supporting me through a placement year, I was really pleased that they cover areas outside London too, being placed in a school in Bristol. The admin, management and supervision have all been so helpful! Thank you LYC!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                London Young Counselling has been an amazing placement for me. Ami, the counselling manager is always available to clarify any doubts you may have and guide you in the process. The required paperwork is easily accessible and maintained safely. The supervisors are experienced and add a lot of value to your learning.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                Started as a volunteer counsellor and I am now a qualified counsellor with a job! Great agency and lovely that they don't just work in the London area as I work in Leeds!
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                Highly organised agency who offer good support and training courses.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                A brilliant organisation. I have really loved having my counselling placement with them.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
          <div class="lyc-testimonial-box d-flex justify-content-between flex-column gap-3">
            <div class="lyc-box-heading d-flex align-items-center gap-3">
              <span class="d-flex justify-content-center align-items-center bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="28" viewBox="0 0 40 28" fill="none">
                  <path d="M16.3035 4.76716C15.2677 3.15558 13.7363 1.92342 11.9395 1.25587C10.1427 0.588315 8.17763 0.521435 6.33954 1.06529C4.50145 1.60914 2.88969 2.73433 1.74651 4.27175C0.603331 5.80918 -0.00950542 7.67577 0.000111478 9.59097C0.00106493 11.177 0.428299 12.7336 1.23718 14.0982C2.04607 15.4629 3.20692 16.5855 4.59845 17.3487C5.98999 18.112 7.56115 18.4879 9.14779 18.4372C10.7344 18.3865 12.2783 17.911 13.6182 17.0604C12.9216 19.127 11.6241 21.3317 9.48651 23.5418C9.07753 23.9645 8.85336 24.5322 8.86334 25.12C8.87331 25.7078 9.1166 26.2676 9.53968 26.6762C9.96277 27.0848 10.531 27.3088 11.1194 27.2988C11.7077 27.2888 12.268 27.0458 12.677 26.6231C20.5788 18.4417 19.5525 9.54847 16.3035 4.77779V4.76716ZM37.5735 4.76716C36.5377 3.15558 35.0063 1.92342 33.2095 1.25587C31.4127 0.588315 29.4476 0.521435 27.6095 1.06529C25.7714 1.60914 24.1596 2.73433 23.0165 4.27175C21.8733 5.80918 21.2604 7.67577 21.2701 9.59097C21.271 11.177 21.6982 12.7336 22.5071 14.0982C23.316 15.4629 24.4769 16.5855 25.8684 17.3487C27.2599 18.112 28.8311 18.4879 30.4177 18.4372C32.0044 18.3865 33.5483 17.911 34.8881 17.0604C34.1916 19.127 32.8941 21.3317 30.7565 23.5418C30.3475 23.9645 30.1233 24.5322 30.1333 25.12C30.1433 25.7078 30.3865 26.2676 30.8096 26.6762C31.2327 27.0848 31.8009 27.3088 32.3893 27.2988C32.9777 27.2888 33.538 27.0458 33.9469 26.6231C41.8487 18.4417 40.8225 9.54847 37.5735 4.77779V4.76716Z" fill="white" />
                </svg></span>
              <div class="lyc-box-title d-flex flex-column gap-1">
                <h3>Volunteer Counsellor</h3>
              </div>
            </div>
            <div class="lyc-box-content p-xxl-4 p-xl-4 p-lg-4 p-md-3 p-sm-3 p-3 w-100">
              <p>
                I did my placement with LYC and went on to be offered a counselling job with them once I completed my placement! I love working with them and supporting their schools!
              </p>
            </div>
          </div>
        </div>-->
      </div>

    </div>
  </section>
  <!-- cta -->
  <section class="lyc-cta bg-primary-500 position-relative pb-xxl-7 pb-xl-7 pb-lg-5 pb-md-5 pb-sm-3 pb-3 pt-xxl-11 pt-xl-11 pt-lg-10 pt-md-10 pt-sm-7 pt-7">
    <div class="container">
      <?php if( have_rows('head_over', 6) ): ?>
      <?php while( have_rows('head_over', 6) ): the_row();

        $title = get_sub_field('title');
        $content = get_sub_field('content');
        $button = get_sub_field('button');
        $image = get_sub_field('image');
        $every = get_sub_field('every');

        ?>
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-6 col-md-12 col-sm-12 col-12 d-flex justify-content-center align-items-center">
          <div class="lyc-heading d-flex flex-column gap-xxl-4 gap-xl-4 gap-lg-3 gap-md-3 gap-sm-2 gap-2">
            <h2 class="text-white"><?php echo $title;  ?></h2>
            <p class="text-white"><?php echo $content;  ?></p>
            <!-- <a href="<?php //echo esc_url( $button['url'] ); ?>" class="btn btn-secondary d-flex align-items-center gap-2">
              <?php //echo esc_attr( $button['title'] ); ?>
              <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_78_357)">
                  <mask id="mask0_78_357" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="12" height="13">
                    <path d="M12 0.5H0V12.5H12V0.5Z" fill="white"></path>
                  </mask>
                  <g mask="url(#mask0_78_357)">
                    <path d="M10.0034 3.90831L1.41176 12.5L0 11.0882L8.59169 2.49654H1.01905V0.5H12V11.481H10.0034V3.90831Z" fill="#004AAD"></path>
                  </g>
                </g>
                <defs>
                  <clipPath id="clip0_78_357">
                    <rect width="12" height="12" fill="white" transform="translate(0 0.5)"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a> -->
          </div>
        </div>
        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="lyc-cta-img position-relative d-flex justify-content-center align-items-center">
            <?php
                if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" title="<?php echo esc_attr($image['alt']); ?>" class="img-fluid" width="500" height="500">
            <?php endif; ?>
            <!-- <span class="lyc-cta-in d-flex flex-column justify-content-center align-items-center gap-xxl-2 gap-xl-2 gap-lg-2 gap-md-1 gap-sm-1 gap-1 text-white p-3 position-absolute">
              <?php //echo esc_html($every);  ?>
              <?php
                             //$formatted_text = str_replace(['<p>', '</p>'], '', $every);
                            //  echo esc_html($formatted_text);
                         ?>
              <?php //echo htmlspecialchars_decode($formatted_text); ?>
               <p class="text-white m-0">For every</p>
                  <h4 class="text-white">£1</h4>
                  <p class="text-white m-0">invested</p> 
            </span> -->
          </div>
        </div>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="lyc-background position-absolute bottom-0 top-0">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/media/cta/cta-bg.png" title="CTA" alt="CTA" class="img-fluid h-100" width="1920" height="660">
    </div>
  </section>
  <!-- cta -->
</main>







<?php
get_footer();
?>