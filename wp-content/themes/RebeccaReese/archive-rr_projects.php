<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div>
    <img src="<?=get_field('thumbnail_image'); ?>">
    <h6>Technology <br /><? the_field('technology_used') ?></h6>
    <br /><br />
    <blockquote><? the_field('credits_of_coworkers') ?></blockquote>
    <br /><br />
    <blockquote><? the_field('url_to_project') ?></blockquote>
    <br /><br />

    <blockquote><? the_field('url_to_github') ?></blockquote>
  </div>


<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
