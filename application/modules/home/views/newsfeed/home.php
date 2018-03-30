<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('home/meta') ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'templates/newsfeed/'?>assets/css/style.css">
<!--[if lt IE 9]>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/html5shiv.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="<?php echo base_url()?>#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="<?php echo base_url()?>">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="<?php echo base_url().''?>">Contact</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="<?php echo base_url().''?>" class="logo"><img src="<?php echo image_upload('logo.png');?>" alt=""></a></div>
          <div class="add_banner"><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/addbanner_728x90_V1.jpg" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="<?php echo base_url().''?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <li><a href="<?php echo base_url()?>#">Technology</a></li>
          <li class="dropdown"> <a href="<?php echo base_url()?>#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mobile</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="<?php echo base_url()?>#">Android</a></li>
              <li><a href="<?php echo base_url()?>#">Samsung</a></li>
              <li><a href="<?php echo base_url()?>#">Nokia</a></li>
              <li><a href="<?php echo base_url()?>#">Walton Mobile</a></li>
              <li><a href="<?php echo base_url()?>#">Sympony</a></li>
            </ul>
          </li>
          <li><a href="<?php echo base_url()?>#">Laptops</a></li>
          <li><a href="<?php echo base_url()?>#">Tablets</a></li>
          <li><a href="<?php echo base_url().'templates/newsfeed/'?>pages/contact.html">Contact Us</a></li>
          <li><a href="<?php echo base_url().'templates/newsfeed/'?>pages/404.html">404 Page</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Latest News</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My First News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Second News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Third News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Four News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Five News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Six News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Seven News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail3.jpg" alt="">My Eight News Item</a></li>
            <li><a href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/news_thumbnail2.jpg" alt="">My Nine News Item</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="<?php echo base_url()?>#"></a></li>
              <li class="twitter"><a href="<?php echo base_url()?>#"></a></li>
              <li class="flickr"><a href="<?php echo base_url()?>#"></a></li>
              <li class="pinterest"><a href="<?php echo base_url()?>#"></a></li>
              <li class="googleplus"><a href="<?php echo base_url()?>#"></a></li>
              <li class="vimeo"><a href="<?php echo base_url()?>#"></a></li>
              <li class="youtube"><a href="<?php echo base_url()?>#"></a></li>
              <li class="mail"><a href="<?php echo base_url()?>#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="<?php echo '#'?>"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/slider_img4.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo '#'?>">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="<?php echo '#'?>"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/slider_img2.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo '#'?>">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="<?php echo '#'?>"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/slider_img3.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo '#'?>">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="<?php echo '#'?>"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/slider_img1.jpg" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="<?php echo '#'?>">Fusce eu nulla semper porttitor felis sit amet</a></h2>
              <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Latest post</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Business</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="<?php echo '#'?>" class="featured_img"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/featured_img1.jpg"> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?php echo '#'?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Fashion</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="<?php echo '#'?>" class="featured_img"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/featured_img2.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo '#'?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Technology</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="<?php echo '#'?>" class="featured_img"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/featured_img3.jpg"> <span class="overlay"></span> </a>
                      <figcaption> <a href="<?php echo '#'?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>Photography</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img2.jpg" title="Photography Ttile 1"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img2.jpg" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img3.jpg" title="Photography Ttile 2"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img4.jpg" title="Photography Ttile 3"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img4.jpg" title="Photography Ttile 4"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img4.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img2.jpg" title="Photography Ttile 5"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img2.jpg" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img3.jpg" title="Photography Ttile 6"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/photograph_img3.jpg" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Games</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="<?php echo '#'?>"> <img src="<?php echo base_url().'templates/newsfeed/'?>images/featured_img1.jpg" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?php echo '#'?>">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                    <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                  <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="<?php echo base_url()?>#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
              <li role="presentation"><a href="<?php echo base_url()?>#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="<?php echo base_url()?>#comments" aria-controls="messages" role="tab" data-toggle="tab">Comments</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Sports</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Fashion</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Business</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Technology</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Games</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Life &amp; Style</a></li>
                  <li class="cat-item"><a href="<?php echo base_url()?>#">Photography</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="<?php echo base_url().'templates/newsfeed/'?>http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img1.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="<?php echo '#'?>" class="media-left"> <img alt="" src="<?php echo base_url().'templates/newsfeed/'?>images/post_img2.jpg"> </a>
                      <div class="media-body"> <a href="<?php echo '#'?>" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Sponsor</span></h2>
            <a class="sideAdd" href="<?php echo base_url()?>#"><img src="<?php echo base_url().'templates/newsfeed/'?>images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Select Category</option>
              <option>Life styles</option>
              <option>Sports</option>
              <option>Technology</option>
              <option>Treads</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="<?php echo base_url()?>#">Blog</a></li>
              <li><a href="<?php echo base_url()?>#">Rss Feed</a></li>
              <li><a href="<?php echo base_url()?>#">Login</a></li>
              <li><a href="<?php echo base_url()?>#">Life &amp; Style</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="<?php echo base_url()?>#">Games</a></li>
              <li><a href="<?php echo base_url()?>#">Sports</a></li>
              <li><a href="<?php echo base_url()?>#">Fashion</a></li>
              <li><a href="<?php echo base_url()?>#">Business</a></li>
              <li><a href="<?php echo base_url()?>#">Life &amp; Style</a></li>
              <li><a href="<?php echo base_url()?>#">Technology</a></li>
              <li><a href="<?php echo base_url()?>#">Photo</a></li>
              <li><a href="<?php echo base_url()?>#">Slider</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <!-- <p class="copyright">Copyright &copy; 2045 <a href="<?php echo base_url().''?>">NewsFeed</a></p> -->
      <p class="copyright">Copyright &copy; <?php echo date('Y') ?> <a href="http://esoftgreat.com">esoftgreat</a></p>
      <p class="developer">Design By Wpfreeware</p>
    </div>
  </footer>
</div>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/wow.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/slick.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/jquery.li-scroller.1.0.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/jquery.newsTicker.min.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url().'templates/newsfeed/'?>assets/js/custom.js"></script>
</body>
</html>