<?php
	$video = false;
	$meta = get_post_meta($post->ID);
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumb');
	if(isset($meta['enclosure'])) {
		$params = explode("\n", $meta['enclosure'][0]);
		$video = [
			'href' => $params[0],
			'type' => $params[2]
		];
	}
?>


<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?> style="background-image: url(<?php echo $thumb['0']; ?>);">
	<div class="post-overlay">
		<?php if($video): ?>
		<video autoplay muted loop>
	  		<source src="<?php echo $video['href']; ?>" type="<?php echo $video['type']; ?>">
		</video>
		<?php endif; ?>
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
