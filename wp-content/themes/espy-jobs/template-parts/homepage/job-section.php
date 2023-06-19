<?php
$espyjobs_options = espyjobs_theme_options();

$job_section_title = $espyjobs_options['job_title'];
$job_desc = $espyjobs_options['job_desc'];
$check_job          = in_array('wp-job-manager/wp-job-manager.php', apply_filters('active_plugins', get_option('active_plugins'))) ? true : false;

?>

<section class="job-listings section">

    <div class="container">
      <div class="row">
          <?php if ($job_section_title || $job_desc): ?>
            <div class="section-title">
                <?php 
                    $total_job_count = 198;
                    $apply_list_count = 5; 
                    $not_for_me_list_count = 3;
                    echo '<p> We have <b>' . $total_job_count . ' Jobs</b> for Marketing in Munich</p>';
                    echo "<p>Just press <b>'Apply Now'</b> or <b>'Not for me'</b></p>";
                    echo "<h4 class='underline'> <p>".$apply_list_count. " Jobs in 'Apply Later List'</p> <p>" . $not_for_me_list_count . " Jobs in 'Not for me list'</p></h4>"
                ?>
            </div>
              <div class="section-title">
                  <?php
                  if ($job_section_title)
                      echo '<h2>' . esc_html($job_section_title) . '</h2>';
                      echo '<div>' . esc_html($job_desc) . '</div>';
                  ?>
              </div>
          <?php endif; ?>
      </div>
   </div>
             
             
    <div class="container">
        <div class="row">
          
        <?php
          if($check_job){
          echo do_shortcode('[jobs show_filters="false"]'); } ?>
    </div>
    </div>
</section>