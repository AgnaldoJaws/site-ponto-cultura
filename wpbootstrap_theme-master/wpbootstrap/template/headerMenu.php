<style>
    @media (max-width: 600px) {
        /*Navegador Principal*/
        .container-fluid>.navbar-header {
            margin-right: -15px;
            margin-left: 11px;
        }

        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
            background-color: snow;
        }

         .navbar-toggle {
             border: #ddd;
             margin-top: -3%;
        }

        .navbar {
            margin-top: -15px;
        }

        .navIconSocial {
            margin-top: -35px;
        }

        .navbar-default .navbar-toggle {
           margin-top: 4px;
        }


        /*Fim navegador principal*/
    }

    @media (min-width:600px) and (max-width:768px) {
        body{

        }
        .menuTop ul{
            margin-left: -50%;
        }

        .navIconSocial {
            margin-top: -42px;
        }


    }

    @media (min-width:990px) and (max-width:2000px) {
        .navbar-default {
            background-color: #f8f8f8;
            border-color: #fcf8e3;
            margin-top: -20px;
            margin-bottom: -19px;
        }
        .menuTop {
            margin-top: 6%;
        }

        .row-primeiro-menu img{
            float: left;
            margin-left: 4px;
        }

        .navIconSocial {
            margin-top: -42px;
        }


    }
    @font-face {
        font-family: OpenSans;
        src: url(../font/open-sans/OpenSans-Semibolditalic.ttf);
    }
@font-face {
    font-family: OpenSans;
    src: url(../font/open-sans/OpenSans-Semibolditalic.ttf);
}
p, h1, h2, h3, h4, h5, a {

  font-family: MuseoSlab500, Sans-Serif, Arial;
  text-align: justify;
}

      .menuTop > ul li a:HOVER{
    color: #410f70;
  }

/*NAVEGADOR*/
  .menuTop > ul li {
    font-size: 17px;
    display: inline;
    margin-left: 10px;
    color:black;
    float: left;
  }
   #lineDown{
    width: 100%;
    background-color: #410f70;
    height: 13px;
  }



  #myNavbar > ul li a {
    color:black;
  }

  #myNavbar > ul li.active a {
    background-color:#410f70 !important;
    color: white;
  }

  #myNavbar > ul li a:HOVER{
     color: white;
     background-color:#410f70;
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:HOVER {
    background:#410f70;
    color: white;
  }
 .navbar-default .navbar-nav .open .dropdown-menu>li>a {
      color: #080808;
    }
.navbar-default .navbar-nav>li>a,
.navbar-default .navbar-nav .open .dropdown-menu>li>a {
  text-align: center;
  color: #080808;
  font-size: 18px;
 }
  }
.navbar-default .navbar-nav>li>a{
  color: #080808;
}
 .navbar-default .navbar-nav>.open>a:focus,
 .navbar-default .navbar-nav>.open>a:hover {
  background:#410f70;
  color: white;
 }
  .navbar-default .navbar-nav>li>a:HOVER{
    background:#410f70;
    color: white;
  }
  .navbar-default .navbar-nav>.active>a:HOVER {
    background:white;
    color: #410f70;
  }
  .navbar-default .navbar-nav>.active>a {
    background:#410f70;
    color: white;
  }
  /*FIM NAVEGADOR*/

  /*LOGO*/
  .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
    margin-left: 5px;
    margin-top: 0px;

  }
  /*FIM LOGO*/

  /*MENU SUPERIOR*/
  /*.menuTop{
   margin-left: 473px;
   margin-top: -38px;
  }*/
  .menuTop > ul li a{
    font-size: 16px;
    display: inline;
    color: black;
    text-decoration:none;
}  .navbar-nav > li {


    }

/*INONES REDES SOCIAIS*/
.navIconSocial {
   float: right;
   margin-right: -15px;
  }

.navIconSocial a{
margin-right: 22px;
}

/*widgets*/


/*Fim widgets*/


/*Fim widgets*/
button, input, select, textarea {
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
    width: 100%;
}
    #lineUp {
        width: 100%;
        height: 4px;
        margin-top: auto;
        background-color: #079348;
    }
.menuTop ul {
    float: right;
}


</style>

  </head>
  <body>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div class="container-fluid">
  <div class="row row-primeiro-menu">

    <div class="col-md-4 ">
     <a href="#"><img src="http://www.onthebass.com.br/cf/logo_ponto_cultura.jpg" id="imgLogo"class="img-responsive" alt="logo ponto de cultura"> </a>
    </div>
    <div class="col-md-1  ">


    </div>
    <div class="col-md-7 menuTop">
     <ul >
  <li><a href="#"><span class="glyphicon glyphicon-flag"></span>&nbsp;ATUAÇÃO</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;PUBLICAÇÕES</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-globe"></span>&nbsp;BLOG</a></li>
  <li><a href="http://localhost:8090/index.php/mapa/"><span class="glyphicon glyphicon-envelope"></span>&nbsp;MAPA</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-home"></span>&nbsp;Ao Vivo</a></li>

    </ul>
    </div>
  </div>
  </div>

<hr id="lineUp">

    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
    <div class = "navIconSocial">
    <a href="#"><img src="http://onthebass.com.br/pontodecultura/icon-fb.png"></a>
    <a href="#"><img src="http://onthebass.com.br/pontodecultura/icon-in.png"></a>
    <a href="#"><img src="http://onthebass.com.br/pontodecultura/icon-tw.png"></a>
    <a href="#"><img src="http://onthebass.com.br/pontodecultura/icon-yt.png"></a>
  </div>
</nav>

<hr id="lineDown">