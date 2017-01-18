<?php require_once 'parceiros.php'?>
<?php require_once 'mosaico.php'?>

<style>
    .panel-default h3 a{
        color: #410f70;
        text-decoration:none;
    }
    .panel-default .btn {
        width: 100%;
        margin-left: 0%;
    }
    .link-title{
        color: #3c763d;
    }
    .widgets {
    box-shadow: 2px 2px 2px 2px #888888;
    background-color: white; 
    font-size: 20px;
    color: #333333;   
    margin-bottom: 2%;
}
 .widgets ul li a{
    text-decoration:none;
    color:black; 
}
.uper {
margin-top: -3%;
}
#lineDowPost {
background-color:#e77723;
height:10px;
}
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <?php
            //for each category, show all posts
            $cat_args = array(
                'orderby' => 'name',
                'order' => 'DESC'
            ); ?>

            <?php $categories = get_categories($cat_args); ?>

            <?php  foreach($categories as $category): ?>
                <?php    $args = array(
                    'showposts' => 12,
                    'category__in' => array($category->term_id),
                    'caller_get_posts'=> 1
                ); ?>

                <?php  $posts=get_posts($args); ?>

                <?php if ($posts): ?>

                    <div class="panel panel-default ">
                        <?php  echo '<h3 class=" uper">&nbsp&nbsp<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h3> '; ?>

                        <?php   foreach($posts as $post): ?>
                            <div class="col-sm-4">
                                <div class="thumbnail">
                                    <?php    setup_postdata($post); ?>
                                    <?php echo the_post_thumbnail(array(700,700)); ?>
                                    <li class="text-center"><a class="link-title" href=" <?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link to '. the_title_attribute('echo=0') . '"> <?php echo get_the_title() ?>  </a></li>

                                    <li><?php echo the_excerpt(); ?></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn btn-info" role="button" >LEIA MAIS</a></li>
                                </div>
                                
                            </div>

                        <?php endforeach; ?>

                        <div class="panel-body">
                        </div>
                        <hr id="lineDown">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="col-md-4"> 
              
        <div class="fb-page" 
        data-href="https://www.facebook.com/pontodeculturacaicaras/?fref=ts" 
         data-width="500">
         
        data-small-header="false" 
       
        data-hide-cover="false" 
        data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/pontodeculturacaicaras/?fref=ts" 
        class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/pontodeculturacaicaras/?fref=ts">Facebook</a>
        </blockquote></div>
            <br>
           <div class="panel-panel-default">                 
                <?php get_sidebar();?>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>