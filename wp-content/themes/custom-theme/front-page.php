<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
                <?php get_template_part('includes/section','content'); ?>
            </div>
            <div class="col-lg-3 widget">
                <?php if(is_active_sidebar('home-sidebar')) :
                    dynamic_sidebar('home-sidebar');
                endif; ?>
            </div>
        </section>
    </div>
</section>
<?php get_footer(); ?>