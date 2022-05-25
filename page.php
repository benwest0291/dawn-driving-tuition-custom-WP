<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container">

    <main>

        <h3> <?php echo the_content(); ?> </h3>

    <?php endwhile; else : ?>

	  <h1><?php esc_html_e( '404', 'dawndrivingtuition' ); ?></h1>

  <?php endif; ?>

    </main>

    </div><!--End of Bootstrap container -->




<?php get_footer(); ?>
