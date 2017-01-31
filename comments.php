<?php get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

							<?php wp_list_comments(); ?>

				<?php endwhile; ?>

<?php get_footer(); ?>
