<?php get_header(); ?>
<h1 class="title-content">Nos prestations</h1>
<div class="content section-inner">
    <div class="left-col">
        <p>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a
        </p>
    </div>
    <div class="right-col">
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
    </div>
	<div class="clear"></div>
</div><!-- .content -->
<h1 class="title-content">Ils nous font confiance</h1>
<div class="content section-inner">
    <?php
        require(__DIR__ . '/partners.php');
    ?>
	<div class="clear"></div>
	<!-- <?php hitchcock_archive_navigation(); ?> -->
</div><!-- .content -->

<?php get_footer(); ?>
