<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div>
    <img src="<?=get_field('image_of_them')['sizes']['thumbnail']; ?>">
    <blockquote><? the_field('what_they_said') ?></blockquote>
    <? the_field('name_for_testimonial_giver'); ?>, <? the_field('their_occupation'); ?>
  </div>


<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>