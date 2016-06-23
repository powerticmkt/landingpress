<?php get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

				<?php endwhile; ?>

			<?php else :  ?>

				<article>
					<h1>Nenhuma informação na página</h1>
				</article>

			<?php endif; ?>

<?php get_footer(); ?>
