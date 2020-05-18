<div class="row">
<?php
  if (have_posts()) :
    while (have_posts()):
      the_post();
    ?>
      <div class="card mb-3 bg-light col-12 col-md-6">
        <div class="card-body"> 
          <h1> <?php the_title(); ?> </h1>
          <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-thumbnail">
          <?php endif; the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" class="text-dark"> Read more </a>
        </div>
      </div>
    <?php endwhile;
  else:
  endif;
?>
</div>