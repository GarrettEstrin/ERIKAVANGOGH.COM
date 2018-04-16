<?php 
  // the query
  $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); 
  $i = 0;
?>
<section class="blog" id="jsScrollCont">
  <div class="container">
  <?php if ( $wpb_all_query->have_posts() ) : ?>
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <article class="post">
      <div class="post__title-cont">
      <p class="post__title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
      <div class="post__info-cont">
        <?php the_category(', ') ?>
        <p class="post__author">
          by <?php the_author() ?>
        </p>
      </div>
      </div>
      <hr>
      <div class="post_content-cont <?php if($i % 2 == 0 ){echo 'post-right';} else {echo 'post-left';} ?>">
        <?php the_content(); ?>
      </div>
    </article>
    <?php $i++ ?>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
