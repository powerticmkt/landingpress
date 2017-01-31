<?php get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

							<p><?php the_tags(); ?></p>

				<?php endwhile; ?>

<?php get_footer(); ?>
