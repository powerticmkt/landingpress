<?php get_header();  ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div><?php the_content(); ?></div>

					<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>

				<?php endwhile; ?>

<?php get_footer(); ?>
