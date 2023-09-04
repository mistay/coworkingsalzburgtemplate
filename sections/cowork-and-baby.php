<?php
/*
$image = "";
if (has_post_thumbnail($page->ID)) {
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
	$image = 'background-image: url("' . $image[0] . '")';
}*/
//echo get_the_post_thumbnail($page ->ID, 'medium');

?>
<section id="dwyl" class="blackbg yellow coworkandbaby" lang="de-de">
    <a href="https://www.euregio-salzburg.eu/dwyl-do-what-you-love-programm-bayern-salzburg-zum-aufbau-einer-grenzueberschreitenden-gruender-und-startup-kultur-sbg-187-ba0200061">
    <div class="sponsorbox">
    </div>
    </a>
    <div class="yellowbox left">
        <div class="divider light">
            <div class="inner-divider"><h2><?php echo ($page -> post_title); ?></h2></div>
            <?php echo nl2br($page -> post_content); ?>
        </div>
    </div>
</section>
