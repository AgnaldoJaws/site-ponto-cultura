
   <!-- Ajax Jequery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style type="text/css">
    @media (min-width:990px) and (max-width:2000px) {
        a.control_prev {
            margin-top: 8%;
        }

        a.control_next {
            margin-top: 8%;
        }
        #resumoSlider {

            margin-left: 14%;
            width: 79%;


        }
    }
    @media (max-width: 768px) {
        #resumoSlider {
            visibility: hidden;
        }

        #resumoSlider > .title-slider {
            visibility: visible;
        }

    }
  #imgSlider  img{
    width: 100%;
    margin-left: 50px;
      height: auto;
  }

  /*SLIDER*/
.wp-caption {
  max-width: 100%;
  height: 200px;
}

#slider {
  overflow: hidden;
  margin-left:-90px;
  margin-top: -20px;
}

#slider ul {
  position: relative;
  list-style: none;
}

#slider ul li {
  text-align: center;

}

a > h2 {}

a.control_prev, a.control_next {
  position: absolute;
  top: 41%;
  z-index: 999;
  display: block;
  padding: 4% 3%;
  width: 50px;
  height: 150px;
  background:  rgba(255, 255, 255, 0.30) none repeat scroll 0 0;
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 18px;
  opacity: 0.8;
  cursor: pointer;
  margin-left: 96px;
  margin-right: 8px;
    border-radius: 0 0 10px 10px;

}

a.control_prev:hover, a.control_next:hover {
  opacity: 1;
  -webkit-transition: all 0.2s ease;
}

a.control_prev {
  border-radius: 0 2px 2px 0;
}

a.control_next {
  right: 0;
  border-radius: 2px 0 0 2px;
}

.slider_option {
  position: relative;
  margin: 10px auto;
  width: 160px;
  font-size: 18px;
}

.control_next > h2 {
margin-right: 10px;
}
.control_prev > h2 {
margin-right: 10px;
}
 

#resumoSlider {
    background: rgba(255, 255, 255, 0.30) none repeat scroll 0 0;
    border: 1px solid rgba(255, 255, 255, 0.4);

    color: #fff;
    cursor: default;
    transition: border-color 0.3s ease 0s, background 0.3s ease 0s;
    opacity: 0.8;
    margin-top: -200px;
    height: 150px;
    margin-bottom: 5px;
    text-transform: uppercase;
}

#resumoSlider:HOVER {
   background-color: #2e266a;
    transition: border-color 0.3s ease 0s, background 0.3s ease 0s;
}
#titleSlider {
  margin-top: -172px;
margin-bottom: 53px;

}

/*FIM SLIDER*/


}
</style>


<div id="slider">
   <a href="#" class="control_next"><h2 class="control_next_h2">>></h2></a>
  <a href="#" class="control_prev"><h2 class="control_next_h2"><<</h2></a>
  <ul>

        <?php
        $carouselPosts = new WP_Query();
        $carouselPosts->query('showposts=6');
        ?>
        <?php while ($carouselPosts->have_posts()) : $carouselPosts->the_post(); ?>

        <li id="imgSlider">
            <?php echo get_the_post_thumbnail(); ?></a>



            <div id="resumoSlider">
                <br>
                <p class="text-center title-slider"> <?php the_title(); ?> </p>
                <?php the_excerpt(); ?>
            </div>
            <br>
        </li>

        <?php endwhile; ?>

     </ul>

</div>


 <script type="text/javascript">

   $(document).ready(function ($) {

  setInterval(function () {
    moveRight();
}, 10000);

  var slideCount = $('#slider ul li').length;
  var slideWidth = $('#slider ul li').width();
  var slideHeight = $('#slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;

  $('#slider').css({ width: "", height: slideHeight });

  $('#slider ul').css({ width: "", marginLeft: ""});

    $('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        $('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            $('#slider ul li:last-child').prependTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        $('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            $('#slider ul li:first-child').appendTo('#slider ul');
            $('#slider ul').css('left', '');
        });
    };

    $('a.control_prev').click(function () {
        moveLeft();
    });

    $('a.control_next').click(function () {
        moveRight();
    });

});
 </script>

