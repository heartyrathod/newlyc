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
      <!-- entry header -->
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
      <!-- entry header -->
      <section class="lyc-apply-online-content my-xxl-7 my-xl-7 my-lg-5 my-md-5 my-sm-3 my-3">
        <div class="container">
          <form class="lyc-apply-online-form" id="applying_form" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="lyc-form-group">
                    <label for="apply_for" class="lyc-required">Applying for</label>
                    <select class="form-select" name="apply_for" id="apply_for" required>
                      <option disabled="" selected="">select position</option>
                      <option value="Volunteer Placement">Volunteer Placement</option>
                      <option value="Paid Counsellor Role ">Paid Counsellor Role</option>
                      <option value="Other">Other </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="title" class="lyc-required">Title</label>
                  <input type="text" name="title" id="title" class="form-control" placeholder="enter title" required>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="first_name" class="lyc-required">First name</label>
                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="enter your first name" required>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="surname" class="lyc-required">Surname</label>
                  <input type="text" name="surname" id="surname" class="form-control" placeholder="enter your surname" required>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="address" class="lyc-required">Address</label>
                  <textarea id="address" name="address" class="form-control" required placeholder="enter address"></textarea>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label for="postcode" class="lyc-required">Postcode</label>
                  <input type="text" name="postcode" id="postcode" class="form-control" placeholder="enter postcode" required>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label for="number" class="lyc-required">Telephone number</label>
                  <input type="text" name="number" id="number" class="form-control" placeholder="enter your telephone number" required>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label for="email" class="lyc-required">Email address</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="enter your email address" required>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label class="lyc-required">Please confirm you are eligible to work in the UK ?</label>
                  <div class="lyc-form-check d-flex align-items-center gap-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="eligible_work" id="yes" value="yes">
                      <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="eligible_work" id="no" value="no">
                      <label class="form-check-label" for="no">No</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="disability" class="lyc-required">Do you consider yourself to have a disability or condition? If so, please specify</label>
                  <textarea id="disability" name="disability" class="form-control" required placeholder="write your word here"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="requirements" class="lyc-required">Please list any requirements you will need for your placement</label>
                  <textarea id="placement" name="placement" class="form-control" required placeholder="write your word here"></textarea>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="role" class="lyc-required">Role you are applying for</label>
                  <select class="form-select" name="role_applying" id="role_applying" required>
                    <option disabled="" selected="">select position</option>
                    <option value="Volunteer counsellor">Volunteer counsellor</option>
                    <option value="Paid counsellor">Paid counsellor</option>
                  </select>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="lyc-form-group">
                  <label for="location" class="lyc-required">Locations you would consider a placement in</label>
                  <select class="form-select" name="locations_placement" id="locations_placement" required>
                    <option disabled="" selected="">enter your locations</option>
                    <option value="location">Location 1</option>
                    <option value="location 2">Location 2</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="training" class="lyc-required">Counselling Qualifications and Training</label>
                  <textarea id="qualifications_training" name="qualifications_training" class="form-control" required placeholder="enter your counselling qualifications and training"></textarea>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label for="membership" class="lyc-required">Professional membership number</label>
                  <input type="text" name="membership_number" id="membership_number" class="form-control" placeholder="enter your professional membership number" required>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label class="lyc-required">Are you on the Children Workforce DBS update system?</label>
                  <div class="lyc-form-check d-flex align-items-center gap-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="children_workforce" id="yes" value="yes">
                      <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="children_workforce" id="no" value="no">
                      <label class="form-check-label" for="no">No</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="lyc-form-group">
                  <label class="lyc-required">Do you currently have a valid insurance certificate?</label>
                  <div class="lyc-form-check d-flex align-items-center gap-3">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="insurance_certificate" id="yes" value="yes">
                      <label class="form-check-label" for="yes">Yes</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="insurance_certificate" id="no" value="no">
                      <label class="form-check-label" for="no">No</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="hours">Number of supervised counselling hours</label>
                  <input type="text" name="counselling_hours" id="counselling_hours" class="form-control" placeholder="enter number of supervised counselling hours">
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="people">Additional training relevant to working with young people</label>
                  <textarea type="text" name="training_relevant" id="training_relevant" class="form-control" placeholder="write your word here"></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="list_supervisor" class="lyc-required">Please list the Name, Job Title, Telephone Number and Email Address of your first reference (must be tutor or supervisor)</label>
                  <textarea type="text" name="list_supervisor" id="list_supervisor" class="form-control" placeholder="write your word here" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="list_reference" class="lyc-required">Please list the Name, Job Title, Telephone Number and Email Address of your second reference</label>
                  <textarea type="text" name="list_reference" id="list_reference" class="form-control" placeholder="write your word here" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="weekly_basis" class="lyc-required">Days you can commit to on a weekly basis</label>
                  <textarea type="text" name="weekly_basis" id="weekly_basis" class="form-control" placeholder="write your word here" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="lyc-form-group">
                      <label class="lyc-required">I am able to commit to</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="able_commit" id="able_commit" value="day">
                        <label class="form-check-label" for="day">a school day</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="lyc-form-group">
                      <label class="lyc-required">I am able to commit to one year on placement</label>
                      <div class="lyc-form-check d-flex align-items-center gap-3">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="commit_placement" id="yes" value="yes">
                          <label class="form-check-label" for="yes">Yes</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="commit_placement" id="no" value="no">
                          <label class="form-check-label" for="no">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="supporting_information" class="lyc-required">Supporting statement and additional information</label>
                  <textarea type="text" name="supporting_information" id="supporting_information" class="form-control" placeholder="write your word here" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="documents_certificates" class="lyc-required">Please attach any relevant documents such as qualification certificates</label>
                  <input type="file" name="documents_certificates" id="documents_certificates" required placeholder="No file choosen" class="form-control file-input">
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-form-group">
                  <label for="hear_about" class="lyc-required">How did you hear about London Young Counselling?</label>
                  <textarea type="text" name="hear_about" id="hear_about" class="form-control" placeholder="write your word here" required></textarea>
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="lyc-form-group">
                      <label for="signature" class="lyc-required">Signature</label>
                      <input type="text" name="signature" id="signature" class="form-control" placeholder="enter your signature" required>
                    </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="lyc-form-group">
                      <label for="date" class="lyc-required">Date</label>
                      <input type="date" name="apply_date" id="apply_date" class="form-control" placeholder="select date" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="lyc-submit-btn d-flex justify-content-end align-items-center gap-3">
                <div class="contactsuccess"></div>
                  <input type="hidden" name="action" value="applying_form">
                  <button type="submit" id="applying_btn" name="applying_btn" class="btn btn-primary d-flex flex-wrap justify-content-center align-items-center gap-2 btn-processi">
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
                    <span class="btn-ringiq"></span>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>






<?php
get_footer();
?>