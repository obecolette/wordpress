<div class="clear"></div>
  </div>
    <footer id="footer" role="contentinfo">
    <ul>
     <? // WP_Query arguments
      $args = array (
        'post_type'              => array( 'rr_testimonials' ),
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();?>

          <li><? the_title(); ?></li>
          <li><? the_field('what_they_said'); ?></li>
          <li><? the_field('their_occupation'); ?></li>
          <li><img src="<?=get_field('image_of_them')['sizes']['thumbnail']; ?>"></li>
          <br /><br />

        <?}
      } else {
        // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();
      ?>
    </ul>

    </footer>
  </div>
<?php wp_footer(); ?>
</body>
</html>