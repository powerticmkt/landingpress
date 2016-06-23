<?php
/**
 * Template Name: Full Width Background
 *
 * @package WordPress
 * @subpackage Elementor Naked
 * @since 0.1.0
 */
 get_header();
?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

              <?
              	// carrega o background da página
              	$fwb_background_image = get_field( "fwb_background_image" );
              ?>

          		<style>
          		html {
          		  background: url(<?php echo $fwb_background_image; ?>) no-repeat center center fixed;
          		  -webkit-background-size: cover;
          		  -moz-background-size: cover;
          		  -o-background-size: cover;
          		  background-size: cover;
          		}
          		</style>

							<?php the_content(); ?>

				<?php endwhile; ?>

			<?php else :  ?>

				<article>
					<h1>Nenhuma informação na página</h1>
				</article>

			<?php endif; ?>

<?php get_footer(); ?>
