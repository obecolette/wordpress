<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h1><? the_title(); ?></h1>

  <h2><em></em><? the_field('country'); ?></h2>

  <? the_content(); ?>

  <? $flag_image = get_field("flag_image");?>
  <img src="<?=$flag_image['sizes']['medium'] ;?>">

  <? //print_r( get_field('flag_image') ); ?>

<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>