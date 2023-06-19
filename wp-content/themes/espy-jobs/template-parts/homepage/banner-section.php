<?php
$espyjobs_options = espyjobs_theme_options();

$banner_section_title = $espyjobs_options['banner_title'];
$banner_desc = $espyjobs_options['banner_desc'];
$banner_bg_image = $espyjobs_options['banner_bg_image'];
$check_job          = in_array('wp-job-manager/wp-job-manager.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;

if(!empty($banner_bg_image)){
  $background_style = "style='background-image:url(".esc_url($banner_bg_image).")'";
}
else{
  $background_style = '';
}
?>

<section id="header-slider" class="header-slider">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            </div>
        </div>
    </div>
</section>