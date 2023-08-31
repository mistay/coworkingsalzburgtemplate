<?php
$image = "";
if (has_post_thumbnail($page->ID)) {
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
	$image = 'background-image: url("' . $image[0] . '")';
}
//echo get_the_post_thumbnail($page ->ID, 'medium');

?>
<section id="dwyl" class="blackbg yellow coworkandbaby" lang="de-de">
    <div class="yellowbox-left">
        <div class="divider light">
            <div class="inner-divider"><h2><?php echo ($page -> post_title); ?></h2></div>
            <?php echo nl2br($page -> post_content); ?>
        </div>
    </div>
</section>
