<?php get_header(); ?>
<h1 class="title-content">Nos prestations</h1>
<div class="content section-inner">
    <div class="left-col">
        <p>DroneHW est une entreprise polyvalente capable de travailler dans le domaine audiovisuel et technique.</p>
        <p>Les  clips, vidéos promotionnelles de sociétés, vidéos de mariages ou photos pourraient être la valeur ajoutée de vos projets audiovisuels.</p>
        <p>Avec une flotte de drones optimisés pour les services techniques nous sommes capables d’inspecter les moindres recoins, clochers d’églises, ponts, nous irons là où vous en avez besoin.</p>
        <p>Grâce à leurs batteries longues durées (31 minutes) nous pouvons réaliser suffisamment de prises de vue afin de créer un nuage de points et ainsi réaliser de la photogrammétrie :</p>
        <p>La modélisation 3D et la cartographie de surface ou de façade, vous permettront de réaliser vos mesures sur des plans à l’échelle.</p>
        <p>Nos devis personnalisés seront adaptés à vos besoins, demandez nous un devis gratuit !</p>
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
