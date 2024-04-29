<?php
// require_once("../../wp-load.php");

function shr_extra_profile_fields( $user ) {

    $profile_pic = ($user!=='add-new-user') ? get_user_meta($user->ID, 'wp_user_avatar', true): false;

    if( !empty($profile_pic) ){
        $image = wp_get_attachment_image_src( $profile_pic, 'thumbnail' );

    } ?>

<table class="form-table fh-profile-upload-options">
  <tr>
    <th>
      <label for="image"><?php _e('Main Profile Image', 'shr') ?></label>
    </th>

    <td>
      <input type="button" data-id="shr_image_id" data-src="shr-img" class="button shr-image" name="shr_image" id="shr-image" value="Upload" />
      <input type="hidden" class="button" name="shr_image_id" id="shr_image_id" value="<?php echo !empty($profile_pic) ? $profile_pic : ''; ?>" />
      <img id="shr-img" src="<?php echo !empty($profile_pic) ? $image[0] : ''; ?>" style="<?php echo  empty($profile_pic) ? 'display:none;' :'' ?> max-width: 100px; max-height: 100px;" />
    </td>
  </tr>
</table><?php

}
//add_action( 'show_user_profile', 'shr_extra_profile_fields' );

// css
function nyc_scripts()
{

  if (is_page('home')) {

	wp_register_style('lyc_owl_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css?' . time(), array(), '1');
 	wp_enqueue_style('lyc_owl_css');

  wp_register_style('lyc_home_css', get_stylesheet_directory_uri() . '/assets/css/main.min.css?' . time(), array(), '1');
 	wp_enqueue_style('lyc_home_css');

  } else if (is_page('about-us')) {
    wp_register_style('lyc_owl_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css?' . time(), array(), '1');
 	  wp_enqueue_style('lyc_owl_css');

    wp_register_style('lyc_home_css', get_stylesheet_directory_uri() . '/assets/css/main.min.css?' . time(), array(), '1');
    wp_enqueue_style('lyc_home_css');

  } else {
    wp_register_style('lyc_owl_css', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.min.css?' . time(), array(), '1');
 	  wp_enqueue_style('lyc_owl_css');

    wp_register_style('lyc_home_css', get_stylesheet_directory_uri() . '/assets/css/main.min.css?' . time(), array(), '1');
    wp_enqueue_style('lyc_home_css');
  }
}
add_action('wp_enqueue_scripts', 'nyc_scripts');

// scripts
add_action('wp_enqueue_scripts', 'career_crft_script');
function career_crft_script()
{
    wp_register_script("script-owl", get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script-owl');

    wp_register_script("boostra-js", 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', '', '', true);
    wp_enqueue_script('boostra-js');

    wp_register_script("script-main", get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script-main');

    wp_register_script("jquery-validate", 'https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js', '', '', true);
    wp_enqueue_script('jquery-validate');

    wp_register_script("contact-script", get_stylesheet_directory_uri() . '/assets/js/contact.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('contact-script');

    wp_register_script("apply-script", get_stylesheet_directory_uri() . '/assets/js/apply.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('apply-script');

    wp_register_script("booking-script", get_stylesheet_directory_uri() . '/assets/js/booking.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('booking-script');
    wp_localize_script('booking-script', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

    wp_register_script("conu-script", get_stylesheet_directory_uri() . '/assets/js/counsellor.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('conu-script');
    wp_localize_script('conu-script', 'customAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

  if (is_page('home')) {

    //wp_register_script("script-owl", get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-owl');

    //wp_register_script("script-main", get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-main');



  } else if (is_page('about-us')) {
    //wp_register_script("script-owl", get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-owl');

    //wp_register_script("script-main", get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-main');

  } else{
    //wp_register_script("script-owl", get_stylesheet_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-owl');

    //wp_register_script("boostrap-script", 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', '', '', true);
    //wp_enqueue_script('boostrap-script');

    //wp_register_script("script-main", get_stylesheet_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
    //wp_enqueue_script('script-main');
  }

}

// unhooks
function unhook_parent_style(){
  wp_dequeue_style('twenty-twenty-one-style');
  wp_deregister_style('twenty-twenty-one-style');

  wp_dequeue_style('twenty-twenty-one-print-style');
  wp_deregister_style('twenty-twenty-one-print-style');
  wp_dequeue_style('parent-style');
  wp_deregister_style('parent-style');
}
add_action('wp_enqueue_scripts', 'unhook_parent_style', 20);

function project_dequeue_unnecessary_scripts(){
  wp_dequeue_script('twenty-twenty-one-primary-navigation-script');
  wp_deregister_script('twenty-twenty-one-primary-navigation-script');

  wp_dequeue_script('twenty-twenty-one-responsive-embeds-script');
  wp_deregister_script('twenty-twenty-one-responsive-embeds-script');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts');

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

if (function_exists('acf_add_options_page')) {
acf_add_options_page(array(
	'page_title'  => 'Contact Info',
	'menu_title'  => 'Theme Settings',
	'menu_slug'   => 'contact-info',
	'capability'  => 'edit_posts',
	'redirect'    => true
	));

	// acf_add_options_sub_page(array(
	// 	'page_title'  => 'Header Option',
	// 	'menu_title'  => 'Header',
	// 	'parent_slug' => 'theme-options',
	// 	'menu_slug'   => 'header-options',
	//   ));

}

//add SVG to allowed file uploads
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');


add_action( 'after_setup_theme', 'setup_woocommerce_support' );
function setup_woocommerce_support(){
  add_theme_support('woocommerce');
}


add_action('wp_ajax_booking_form', 'booking_form');
add_action('wp_ajax_nopriv_booking_form', 'booking_form');
function booking_form()
{
  global $wpdb;
  $table = 'wp_booking_form';

  $s_name = $_POST['s_name'];
  $s_type = $_POST['s_type'];
  $s_age = $_POST['s_age'];
  $s_roll = $_POST['s_roll'];
  $s_address = $_POST['s_address'];
  $s_postcode = $_POST['s_postcode'];
  $s_borough = $_POST['s_borough'];
  $s_cname = $_POST['s_cname'];
  $s_cjob = $_POST['s_cjob'];
  $s_cphone = $_POST['s_cphone'];
  $s_cemail = $_POST['s_cemail'];
  $o_name = $_POST['o_name'];
  $o_job = $_POST['o_job'];
  $o_phone = $_POST['o_phone'];
  $o_email = $_POST['o_email'];
  $s_session = $_POST['s_session'];
  $s_week = $_POST['s_week'];
  $other = $_POST['other'];
  $notes = $_POST['notes'];


  // echo json_encode(array('result' => true, 's_name' => true, 'captcha_match' => true));
  // exit;

  $sql = "INSERT INTO $table (s_name, s_type, s_age, s_roll, s_address, s_postcode, s_borough, s_cname, s_cjob, s_cphone, s_cemail, o_name, o_job, o_phone, o_email, s_session, s_week, other, notes)
        VALUES ('$s_name','$s_type', '$s_age', '$s_roll', '$s_address', '$s_postcode', '$s_borough', '$s_cname', '$s_cjob','$s_cphone', '$s_cemail', '$o_name', '$o_job', '$o_phone', '$o_email', '$s_session', '$s_week', '$other', '$notes')";

  $result = $wpdb->query($sql);



  $sms = '<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
  <tbody>
     <tr>
        <td>
<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
  <tr>
     <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">Booking Detail</th>
  </tr>
  <tr>
     <td style="padding: 10px;">
        <table width="100%" cellspacing="10" cellpadding="0">
           <h2>School information</h2>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">School name</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_name . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">  School type  </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_type . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Age range of students </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_age . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Number of peoples on roll</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_roll . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    School address
                       </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_address . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Postcode</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_postcode . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    London borough
                       </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_borough . '</span>
              </td>
           </tr>
           <h2> School contact </h2>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Name </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_cname . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Job title</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_cjob . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Telephone </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_cphone . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Email address
                       </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_cemail . '</span>
              </td>
           </tr>
           <h2> Safeguarding Officer</h2>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Name</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $o_name . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Job title   </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $o_job . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Telephone</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $o_phone . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Email address </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $o_email . '</span>
              </td>
           </tr>
           <h2>Services</h2>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    1:1 Counselling sessions for </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_session . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Amount of sessions per week </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $s_week . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Other </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $other . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Notes </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $notes . '</span>
              </td>
           </tr>
           </tr>
        </table>
     </td>
  </tr>
</table>
        </td>
     </tr>
  </tbody>
</table>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  <test15.igex@gmail.com>' . "\r\n";

  //info@igexsolutions.com
  $subject = 'Booking Details';


  $admin_email = get_option('admin_email');


  if (wp_mail($admin_email, $subject, $sms, $headers)) {
    echo json_encode(array('result' => true, 'email' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false));
    die();
  }
  die();
}




// applying_form

add_action('wp_ajax_applying_form', 'applying_form');
add_action('wp_ajax_nopriv_applying_form', 'applying_form');
function applying_form()
{
  global $wpdb;
  $table = 'wp_apply_online';

  $apply_for = $_POST['apply_for'];
  $title = $_POST['title'];
  $first_name = $_POST['first_name'];
  $surname = $_POST['surname'];
  $address = $_POST['address'];
  $postcode = $_POST['postcode'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $eligible_work = $_POST['eligible_work'];
  $disability = $_POST['disability'];
  $placement = $_POST['placement'];
  $role_applying = $_POST['role_applying'];
  $locations_placement = $_POST['locations_placement'];
  $qualifications_training = $_POST['qualifications_training'];
  $membership_number = $_POST['membership_number'];
  $children_workforce = $_POST['children_workforce'];
  $insurance_certificate = $_POST['insurance_certificate'];
  $counselling_hours = $_POST['counselling_hours'];
  $training_relevant = $_POST['training_relevant'];
  $list_supervisor = $_POST['list_supervisor'];
  $list_reference = $_POST['list_reference'];
  $weekly_basis = $_POST['weekly_basis'];
  $able_commit = $_POST['able_commit'];
  $commit_placement = $_POST['commit_placement'];
  $supporting_information = $_POST['supporting_information'];
  $documents_certificates = $_POST['documents_certificates'];
  $hear_about = $_POST['hear_about'];
  $signature = $_POST['signature'];
  $apply_date = $_POST['apply_date'];
  $mail_attachment_url = '';
  $mail_attachment = array();
  $mail_attachment_file = array();
  if ($_FILES) {
    if (!function_exists('wp_handle_upload')) require_once("../../../wp-admin/includes/file.php");
    $avatar = wp_handle_upload($_FILES['documents_certificates'], array('test_form' => false));
    $mail_attachment_url = $avatar['url'];
    $mail_attachment_file = $avatar['file'];
    $mail_attachment = array($avatar['file']);
  }


  $sql = "INSERT INTO $table (apply_for, title, first_name, surname, address, postcode, number, email, eligible_work, disability, placement, role_applying, locations_placement, qualifications_training, membership_number, children_workforce, insurance_certificate, counselling_hours, training_relevant, list_supervisor, list_reference, weekly_basis, able_commit, commit_placement, supporting_information, documents_certificates, hear_about, signature, apply_date)
        VALUES ('$apply_for', '$title', '$first_name', '$surname', '$address', '$postcode', '$number', '$email', '$eligible_work', '$disability', '$placement', '$role_applying', '$locations_placement', '$qualifications_training', '$membership_number', '$children_workforce', '$insurance_certificate', '$counselling_hours', '$training_relevant', '$list_supervisor', '$list_reference', '$weekly_basis', '$able_commit', '$commit_placement', '$supporting_information', '$mail_attachment_url', '$hear_about', '$signature', '$apply_date' )";

  $result = $wpdb->query($sql);



  $sms = '<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
  <tbody>
     <tr>
        <td>
<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
  <tr>
     <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">
        Apply Online Detail</th>
  </tr>
  <tr>
     <td style="padding: 10px;">
        <table width="100%" cellspacing="10" cellpadding="0">
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Applying for</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $apply_for . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Title</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $title . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">First name</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $first_name . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Surname</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $surname . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Address</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $address . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Postcode</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $postcode . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Telephone number</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $number . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Email address </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $email . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Please confirm you are eligible to work in the UK ?</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $eligible_work . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Do you consider yourself to have a disability or condition? If so, please specify </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $disability . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Please list any requirements you will need for your placement
                       </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $placement . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)"> Role you are applying for</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $role_applying . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Locations you would consider a placement in  </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $locations_placement . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Counselling Qualifications and Training</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $qualifications_training . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Professional membership number </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $membership_number . '</span>
              </td>
           </tr>
           <h2>Services</h2>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Are you on the Children Workforce DBS update system? </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $children_workforce . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Do you currently have a valid insurance certificate? </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $insurance_certificate . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Number of supervised counselling hours </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $counselling_hours . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Additional training relevant to working with young people </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $training_relevant . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Please list the Name, Job Title, Telephone Number and Email Address of your first reference (must be tutor or supervisor)</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $list_supervisor . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Please list the Name, Job Title, Telephone Number and Email Address of your second reference </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $list_reference . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Days you can commit to on a weekly basis </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $weekly_basis . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    I am able to commit to </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $able_commit . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    I am able to commit to one year on placement </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $commit_placement . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Supporting statement and additional information </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $supporting_information . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Please attach any relevant documents such as qualification certificates </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $documents_certificates . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    How did you hear about London Young Counselling? </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $hear_about . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Signature</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $signature . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">
                    Date </label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $apply_date . '</span>
              </td>
           </tr>

           </tr>
        </table>
     </td>
  </tr>
</table>
        </td>
     </tr>
  </tbody>
</table>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  <test15.igex@gmail.com>' . "\r\n";
  $subject = 'Apply Online Details';
  $admin_email = get_option('admin_email');

  if (wp_mail($admin_email, $subject, $sms, $headers,$mail_attachment_file)) {
    echo json_encode(array('result' => true, 'email' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false));
    die();
  }
  die();
}




// Contact Form

add_action('wp_ajax_contact_form', 'contact_form');
add_action('wp_ajax_nopriv_contact_form', 'contact_form');
function contact_form()
{
  global $wpdb;
  $table = 'wp_contact_list';

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];


  $sql = "INSERT INTO $table (name, email, phone, msg)
        VALUES ('$name', '$email', '$phone', '$msg')";

  $result = $wpdb->query($sql);



  $sms = '<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #F6F9FC;padding: 20px; font-family: Arial, Helvetica,Calibri, sans-serif">
  <tbody>
     <tr>
        <td>
<table width="100%" cellspacing="0" cellpadding="0" style="background-color: #fff;box-shadow: 0 0 5px rgba(0,0,0,0.07);border-radius: 5px;">
  <tr>
     <th colspan="3" style="background-color:rgba(18,17,74,0.03); color: #12114A; font-size: 24px;text-align: left;padding: 20px;">
        Contact Detail</th>
  </tr>
  <tr>
     <td style="padding: 10px;">
        <table width="100%" cellspacing="10" cellpadding="0">
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Name</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $name . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Email Address</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $email . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Telephone</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $phone . '</span>
              </td>
           </tr>
           <tr>
              <td width="100%">
                 <label style="width:100%;margin-bottom:5px;font-size:12px;float:left;color:rgba(0,0,0,0.65)">Message</label>
                 <span style="width:100%;box-sizing: border-box;font-size:14px;float:left;padding: 5px;border-radius:3px;border:2px solid #dce4ec;margin-bottom:10px;min-height:30px;">' . $msg . '</span>
              </td>
           </tr>
           </tr>
        </table>
     </td>
  </tr>
</table>
        </td>
     </tr>
  </tbody>
</table>';

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From:  <test15.igex@gmail.com>' . "\r\n";
  $subject = 'Contact Inquiry';
  $admin_email = get_option('admin_email');

  if (wp_mail($admin_email, $subject, $sms, $headers)) {
    echo json_encode(array('result' => true, 'email' => true));
    die();
  } else {
    echo json_encode(array('result' => false, 'email' => false));
    die();
  }
  die();
}


// Images size all support
add_filter( 'big_image_size_threshold', '__return_false' );


//product cart item count without refresh
add_filter( 'woocommerce_add_to_cart_fragments', 'refresh_cart_count', 50, 1 );
 function refresh_cart_count( $fragments ){
     ob_start();
     ?>
<span id="cart-count"><?php
     $cart_count = WC()->cart->get_cart_contents_count();
     echo sprintf ( _n( '%d', '%d', $cart_count ), $cart_count );
     ?> items
</span>
<?php
      $fragments['#cart-count'] = ob_get_clean();

     return $fragments;
 }

 remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );


 function shortcode_user_avatar() {
   if(is_user_logged_in()) {
   global $current_user;
   get_currentuserinfo();
   return get_avatar( $current_user -> ID, 120 );
   }
   else {
   // If not logged in then show default avatar. Change the URL to show your own default avatar
   return get_avatar( 'http://1.gravatar.com/avatar/ad524503a11cd5ca435acc9bb6523536?s=64', 120 );
   }
   }

   add_shortcode('display-user-avatar','shortcode_user_avatar');


// // Re-add 'editor_plus' role with updated capabilities
// add_role( 'editor_plus', 'Editor Plus', array(
//     'read' => true,
//     'edit_posts' => true, // Updated capability
//     // Add more capabilities as needed
// ));

// remove_role( 'editor_plus' );


add_filter('woocommerce_login_redirect', 'login_redirect');

function login_redirect($redirect_to) {
    wp_redirect( site_url('volunteerarea') );
}

add_action('wp_logout','logout_redirect');

function logout_redirect(){
    wp_redirect( home_url() );
    exit;
}


// Redirect Rolewise
add_action( 'template_redirect', 'custom_role_redirect' );

function custom_role_redirect() {

    if ( is_page( 'volunteerarea' ) || is_page( 'uploaded-documents' ) || is_page( 'download-a-template' ) || is_page( 'upload-forms' ) || is_page( 'your-profile' ) || is_page( 'counsellor-handbook' ) || is_page( 'counsellor-handbook' ) || is_page( 'counsellor-handbook' ) || is_page( 'id-card' ) || is_page( 'safeguarding-and-child' ) || is_page( 'training' ) || is_page( 'handbook' ) ) {
        // Get the current user's roles
        if (!is_user_logged_in()) {
         wp_redirect( home_url() );
        }
        $user = wp_get_current_user();
        $roles = (array) $user->roles;


        $redirects = array(
            'administrator' => '',
            'um_counsellor' => '',
            'bbp_participant' => ''
        );


        foreach ( $roles as $role ) {

            if ( !isset( $redirects[ $role ] ) ) {

                wp_redirect( home_url() );
                exit();
            }
        }

         //wp_redirect( site_url('volunteerarea') );
        //exit();
    }
}


// icon change
function kp_get_icon_url( $path ) {
   $info = pathinfo( $path );
   switch ( strtolower( rgar( $info, 'extension' ) ) ) {

      case 'css' :
         $file_name = 'icon_css.gif';
         break;

      case 'doc' :
      case 'docx' :
         $file_name = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 2.00318V2H19.9978C20.5513 2 21 2.45531 21 2.9918V21.0082C21 21.556 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5501 3 20.9932V8L9 2.00318ZM5.82918 8H9V4.83086L5.82918 8ZM11 4V9C11 9.55228 10.5523 10 10 10H5V20H19V4H11Z"></path>
                          </svg>';
         break;

      case 'fla' :
         $file_name = 'icon_fla.gif';
         break;

      case 'html' :
      case 'htm' :
      case 'shtml' :
         $file_name = 'icon_html.gif';
         break;

      case 'js' :
         $file_name = 'icon_js.gif';
         break;

      case 'log' :
         $file_name = 'icon_log.gif';
         break;

      case 'mov' :
         $file_name = 'icon_mov.gif';
         break;

      case 'pdf' :
         $file_name = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M5 4H15V8H19V20H5V4ZM3.9985 2C3.44749 2 3 2.44405 3 2.9918V21.0082C3 21.5447 3.44476 22 3.9934 22H20.0066C20.5551 22 21 21.5489 21 20.9925L20.9997 7L16 2H3.9985ZM10.4999 7.5C10.4999 9.07749 10.0442 10.9373 9.27493 12.6534C8.50287 14.3757 7.46143 15.8502 6.37524 16.7191L7.55464 18.3321C10.4821 16.3804 13.7233 15.0421 16.8585 15.49L17.3162 13.5513C14.6435 12.6604 12.4999 9.98994 12.4999 7.5H10.4999ZM11.0999 13.4716C11.3673 12.8752 11.6042 12.2563 11.8037 11.6285C12.2753 12.3531 12.8553 13.0182 13.5101 13.5953C12.5283 13.7711 11.5665 14.0596 10.6352 14.4276C10.7999 14.1143 10.9551 13.7948 11.0999 13.4716Z"></path>
                          </svg>';
         break;

      case 'php' :
         $file_name = 'icon_php.gif';
         break;

      case 'ppt' :
         $file_name = 'icon_ppt.gif';
         break;

      case 'psd' :
         $file_name = 'icon_psd.gif';
         break;

      case 'sql' :
         $file_name = 'icon_sql.gif';
         break;

      case 'swf' :
         $file_name = 'icon_swf.gif';
         break;

      case 'txt' :
         $file_name = 'icon_txt.gif';
         break;

      case 'xls' :
         $file_name = 'icon_xls.gif';
         break;

      case 'xml' :
         $file_name = 'icon_xml.gif';
         break;

      case 'zip' :
         $file_name = 'icon_zip.gif';
         break;

      case 'gif' :
      case 'jpg' :
      case 'jpeg':
      case 'png' :
      case 'bmp' :
      case 'tif' :
      case 'eps' :
         $file_name = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 13C18.3221 13 16.7514 13.4592 15.4068 14.2587C16.5908 15.6438 17.5269 17.2471 18.1465 19H20V13ZM16.0037 19C14.0446 14.3021 9.4079 11 4 11V19H16.0037ZM4 9C7.82914 9 11.3232 10.4348 13.9738 12.7961C15.7047 11.6605 17.7752 11 20 11V3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H6V1H8V5H4V9ZM18 1V5H10V3H16V1H18ZM16.5 10C15.6716 10 15 9.32843 15 8.5C15 7.67157 15.6716 7 16.5 7C17.3284 7 18 7.67157 18 8.5C18 9.32843 17.3284 10 16.5 10Z"></path>
                          </svg>';
         break;

      case 'mp3' :
      case 'wav' :
      case 'wma' :
         $file_name = 'icon_audio.gif';
         break;

      case 'mp4' :
      case 'avi' :
      case 'wmv' :
      case 'flv' :
         $file_name = 'icon_video.gif';
         break;

      default:
         $file_name = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 13C18.3221 13 16.7514 13.4592 15.4068 14.2587C16.5908 15.6438 17.5269 17.2471 18.1465 19H20V13ZM16.0037 19C14.0446 14.3021 9.4079 11 4 11V19H16.0037ZM4 9C7.82914 9 11.3232 10.4348 13.9738 12.7961C15.7047 11.6605 17.7752 11 20 11V3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H6V1H8V5H4V9ZM18 1V5H10V3H16V1H18ZM16.5 10C15.6716 10 15 9.32843 15 8.5C15 7.67157 15.6716 7 16.5 7C17.3284 7 18 7.67157 18 8.5C18 9.32843 17.3284 10 16.5 10Z"></path>
                          </svg>';
         break;
   }
   return $file_name;
   // return GFCommon::get_base_url() . "/images/doctypes/$file_name";
}



// Add new contact methods and user meta fields
function custom_user_contact_methods( $contactmethods ) {
   
   $contactmethods['lyc_phone'] = 'Phone Number';  
   $contactmethods['lyc_school'] = 'School';
   $contactmethods['lyc_city'] = 'City';
   $contactmethods['lyc_position'] = 'Position';
   return $contactmethods;
}
add_filter( 'user_contactmethods', 'custom_user_contact_methods', 10, 1 );


function modify_user_table_columns( $column ) {
   
   $column['lyc_phone'] = 'Phone';
   $column['lyc_school'] = 'School';
   $column['lyc_city'] = 'City';
   $column['lyc_position'] = 'Position';
   return $column;
}
add_filter( 'manage_users_columns', 'modify_user_table_columns' );


function modify_user_table_row( $val, $column_name, $user_id ) {
   switch ($column_name) {
       case 'lyc_phone' :
           return get_the_author_meta( 'lyc_phone', $user_id );
       case 'lyc_school' :
           return get_the_author_meta( 'lyc_school', $user_id );
       case 'lyc_city' :
            return get_the_author_meta( 'lyc_city', $user_id );
      case 'lyc_position' :
            return get_the_author_meta( 'lyc_position', $user_id );
       default:
           return $val; 
   }
}
add_filter( 'manage_users_custom_column', 'modify_user_table_row', 10, 3 );
 







