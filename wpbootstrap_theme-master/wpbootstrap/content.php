<div class="container-fluid">
    <div class="row">
          <div class="col-md-9">
              <div class="panel panel-default">
                   <?php if(is_single()) : ?>
      <?php the_title(); ?>
    <?php else : ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    <?php endif; ?>
  </h2>
  <p class="blog-post-meta">
    <?php the_time('F j, Y g:i a'); ?>
     by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
       <?php the_author(); ?>
     </a>
  </p>
  <?php if(has_post_thumbnail()) : ?>
    <div class="post-thumb">
      <?php the_post_thumbnail(); ?>
    </div>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    <?php the_content(); ?>
  <?php else : ?>
    <?php the_excerpt(); ?>
  <?php endif; ?>

  <?php if(is_single()) : ?>
    
  <?php endif; ?>   
               </div>
          </div>

          <div class="col-md-3">
              <div class="panel panel-default" style="background-color: #f2f2f2">
              <div class="fb-page" data-href="https://www.facebook.com/pontodeculturacaicaras/?fref=ts" data-tabs="timeline" data-width="400" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pontodeculturacaicaras/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pontodeculturacaicaras/?fref=ts">Facebook</a></blockquote></div>
                    <?php get_sidebar();?>   
               </div>
          </div>

           
      </div>
</div>
