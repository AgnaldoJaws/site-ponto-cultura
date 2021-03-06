<?php get_header();?>
<?php //get_header('personalizado'); ?>
<br>
<div class="container">
 <h1>Posts da categoria - <?php single_cat_title();?></h1>
    <div class="row">
        <div class="col-md-9">
          <hr>          
            <?php
            if (have_posts()):

                while(have_posts()): the_post();
                    $image = '';
                    if(has_post_thumbnail()) {
                        $image = sprintf('<div class="post-thumb"><a href="%s">%s</a></div>',
                            get_the_permalink(), get_the_post_thumbnail());
                    }

                    $body = sprintf('<div class="post-excerpt"><h3 class="post-excerp-title"><a href="%s">%s</a></h3><p>%s</p></div>',
                        get_the_permalink(), get_the_title(), get_the_excerpt(  ));

                    printf('<li class="media">%s%s</li>',$image, $body);
                    echo '<hr>';

                endwhile;

            else:
                echo "<p>Ainda não temos post.</p>";
            endif;
            ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar() ?>
        </div>
        <!--<div class="col-md-3">
            <?php //get_sidebar('personalizado') ?>
        </div>-->
    </div>
</div>

<?php get_footer('personalizado'); ?>
<?php get_footer(); ?>
