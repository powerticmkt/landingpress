<?php get_header();  ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php echo do_shortcode( get_theme_mod("pzl_404_shortcode") ); ?>

				<?php endwhile; ?>

<?php get_footer(); ?>
