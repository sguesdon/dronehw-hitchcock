<?php get_header(); ?>
<h1 class="title-content">Services proposés</h1>
<div class="content section-inner">
	<?php if ( have_posts() ) : ?>
		<div class="posts" id="posts">
			<?php
            $posts = query_posts('tag=accueil');
            foreach($posts as $post) {
                setup_postdata($post);
                get_template_part( 'content', get_post_format() );
            }
			?>
	        <div class="clear"></div>
		</div><!-- .posts -->
	<?php endif; ?>
	<div class="clear"></div>
	<!-- <?php hitchcock_archive_navigation(); ?> -->
</div><!-- .content -->
<h1 class="title-content top">Un service personnalisé</h1>
<?php get_footer(); ?>
