<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
                <h1><?php the_title() ?></h1>
                <div class="d-flex">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail single-img">
                <?php endif;?>
                    <div>
                        <?php get_template_part('includes/section','blog') ?>
                        Family: <?php the_field('family'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 widget">
                <?php if(is_active_sidebar('page-sidebar')) :
                    dynamic_sidebar('page-sidebar');
                endif; ?>
            </div>
        </section>
    </div>
</section>
<?php get_footer(); ?>