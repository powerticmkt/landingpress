<?php get_header(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

						<?php the_post_thumbnail(); ?>

							<?php the_content(); ?>

							<p><?php the_tags(); ?></p>

							<?php wp_link_pages( $args ); ?>

							<?php comment_form(); ?>

							<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
							<ul id="sidebar">
								<?php dynamic_sidebar( 'left-sidebar' ); ?>
							</ul>
							<?php endif; ?>

							<?php

								next_posts_link();

								previous_posts_link();

							 ?>

							 <?php paginate_comments_links() ?>

							 <?php comments_template( $file, $separate_comments ); ?>

				<?php endwhile; ?>

<?php get_footer(); ?>
