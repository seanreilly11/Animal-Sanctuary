<?php get_header(); ?>

<section class="page-wrap">
  <div class="container">
    <section class="row">
      <div class="col-lg-9">
        <h1 class="title"> <?php echo single_cat_title(); ?> </h1>
        <?php get_template_part('includes/section','archive'); ?>
        <?php previous_posts_link();  ?>
        <?php next_posts_link();  ?>
      </div>
      <div class="col-lg-3 widget">
        <?php if(is_active_sidebar('blog-sidebar')) :
          dynamic_sidebar('blog-sidebar');
        endif; ?>
      </div>
    </section>
  </div>
</section>
<?php get_footer(); ?>