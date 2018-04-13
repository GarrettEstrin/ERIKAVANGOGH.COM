<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
<section class="blog">
  <div class="container">
  <?php if ( $wpb_all_query->have_posts() ) : ?>
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <article class="post">
      <div class="post__title-cont">
      <p class="post__title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
      </div>
      <hr>
      <div class="post_content-cont">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
