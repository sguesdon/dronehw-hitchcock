<?php
	$embed = false;
	$postClasses = ['post'];
	$embeds = get_media_embedded_in_content(do_shortcode(apply_filters( 'the_content', $post->post_content)));
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumb');
	if($embeds && !$thumb) {
		$postClasses[] = 'has-post-thumbnail';
		$embed = $embeds[0];
	}
?>


<a
    href="<?php the_permalink(); ?>"
    id="post-<?php the_ID(); ?>"
    <?php post_class($postClasses); ?>
    style="background-image: url(<?php echo $thumb['0']; ?>);"
>
    <div class="post-embed">
        <?php
        if($embed) {
            echo $embed;
        }
        ?>
    </div>
	<div class="post-overlay">
		<?php if ( is_sticky() && !is_single() ) : ?>
		<p><span class="fa fw fa-star"></span><?php _e( 'Sticky', 'hitchcock' ); ?></p>
		<?php endif; ?>
		<div class="archive-post-header">
		    <?php if ( get_the_title() ) : ?>
		    	<h2 class="archive-post-title"><?php the_title(); ?></h2>
		    <?php endif; ?>
		</div>
	</div>
</a><!-- .post -->
