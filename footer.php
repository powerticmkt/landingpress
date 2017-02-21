
  </div>

      <?php if (get_theme_mod('pzl_footer_show') == 'Yes') : ?>
        <?php echo do_shortcode( get_theme_mod("pzl_footer_shortcode") ); ?>
      <?php endif; ?>

      <?php wp_footer(); ?>

  </body>

</html>
