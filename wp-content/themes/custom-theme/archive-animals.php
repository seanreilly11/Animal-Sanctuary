<?php get_header(); ?>
<section class="page-wrap">
    <div class="container">
        <section class="row">
            <div class="col-lg-9">
                <h1 class="title"> <?php echo post_type_archive_title() ?> </h1>
                <?php get_template_part('includes/section','archive'); ?>
                <?php
                    global $wp_query;
                    $big = 99999999999;
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format'=>'?paged-%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $wp_query -> max_num_pages
                    ));
                ?>
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