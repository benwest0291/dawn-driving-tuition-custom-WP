<?php get_header(); ?>
<?php include get_stylesheet_directory() . '/blocks/masthead.php'; ?>

<?php include get_stylesheet_directory() . '/blocks/front-page-content.php'; ?>

<?php include get_stylesheet_directory() . '/blocks/courses-cards.php'; ?>

<?php include get_stylesheet_directory() . '/blocks/test-centre.php'; ?>

<?php include get_stylesheet_directory() . '/blocks/slider.php'; ?>



<!--<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else : ?>

<h1><?php esc_html_e( '404', 'energyacadamy' ); ?></h1>

<?php endif; ?> -->


<?php get_footer(); ?>
