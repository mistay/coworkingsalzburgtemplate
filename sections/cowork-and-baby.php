<?php
$image = "";
if (has_post_thumbnail($page->ID)) {
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'single-post-thumbnail' );
	$image = 'background-image: url("' . $image[0] . '")';
}
//echo get_the_post_thumbnail($page ->ID, 'medium');

?>
<style>
.coworkandbaby {
	height: 480px;
	background: scroll ;
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	font-size: 8px;
	<?php echo $image; ?>
}
.coworkandbaby h2 {
	font-size: 30px;
}


</style>
<section id="coworkandbaby" class="blackbg yellow coworkandbaby">
    <div class="yellowbox">
        <div class="divider light">
            <div class="inner-divider"><h2><?php echo ($page -> post_title); ?></h2></div>
            <?php echo nl2br($page -> post_content); ?>
        </div>
    </div>
</section>
