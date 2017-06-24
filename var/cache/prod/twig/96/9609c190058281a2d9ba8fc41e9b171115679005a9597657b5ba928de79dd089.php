<?php

/* :default:index.html.twig */
class __TwigTemplate_479c3ae60a7f7324188d102b3a0cc3da3daa272a54d76815479ecb7a445e659a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- preloader START -->
\t<div class=\"preloader\">
\t\t<div class=\"spinner-wrap\">
\t\t\t<div class=\"spinner\"></div>
\t\t\t<span class=\"preloader-text\">loading...</span>
\t\t</div>
\t</div>
\t<!-- preloader END -->


\t<!-- body wrapper START -->
\t<div class=\"body-wrapper row-offcanvas\">
\t\t
\t\t<!--[if lt IE 8]>
\t\t\t<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
\t\t<![endif]-->
\t\t
\t\t
\t\t<!-- page header START -->
\t\t<header>
\t\t\t
\t\t\t<!-- main navigation START -->
\t\t\t<nav class=\"navbar navbar-inverse navbar-fixed-top mega-menu\" role=\"navigation\">
\t\t\t  <div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t  </button>
\t\t\t\t  <a class=\"navbar-brand logo\" href=\"./\"><img src=\"img/logo.png\" width=\"98\" alt=\"Dream Arts\"></a>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- extra navigatinon START -->
\t\t\t\t<ul class=\"nav navbar-nav navbar-right extra-nav\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"contact.html\" title=\"Contact Us\">
\t\t\t\t\t\t\t<i style=\"color: #f19c16; font-size: 18px;\" class=\"fa fa-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"hidden-xs\">
\t\t\t\t\t\t<a class=\"nav-toggle\" href=\"javascript:void(0)\" data-toggle=\"offcanvas\">
\t\t\t\t\t\t\t<span class=\"bars-wrapper\">
\t\t\t\t\t\t\t\t<span class=\"first bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"second bar\"></span>
\t\t\t\t\t\t\t\t<span class=\"third bar\"></span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<!-- extra navigation END -->
\t\t\t\t
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right ux-hash-nav\">
\t\t\t\t\t\t<!--dream arts-->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dream Arts</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"./about\">About</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-portfolio.html\">Mission, Vision & Values</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-personal.html\">The Brochure</a></li>
\t\t\t\t\t\t\t\t<li role=\"separator\" class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"link title\">Already a Dreamer !</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">My DA BUCK\$ (<small class=\"em text-info\">coming soon</small>)</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\">Make a Payment (<small class=\"em text-info\">coming soon</small>)</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--end dream arts-->
\t\t\t\t\t\t<!--services -->
\t\t\t\t\t\t<li class=\"dropdown mega-element\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Services & Pricing</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu full-width\" role=\"menu\">
\t\t\t\t\t\t\t\t<li class=\"container\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"nav-title\">Web Development</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-list icons-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-text\"></i><a href=\"typography.html\" title=\"Typography\">Websites</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-slice\"></i><a href=\"elements.html\" title=\"Elements\">E-Commerce</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-direction\"></i><a href=\"404.html\" title=\"404 Error\">Pricing</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"nav-title\">App Development</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-list icons-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-image\"></i><a href=\"post-image.html\" title=\"Image\">Mobile Apps</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-control-play\"></i><a href=\"post-video.html\" title=\"Video\">Desktop Apps</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-music-alt\"></i><a href=\"post-audio.html\" title=\"Audio\">Pricing</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"nav-title\">Design</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-list icons-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-image\"></i><a href=\"post-image.html\" title=\"Image\">Logo Design</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-control-play\"></i><a href=\"post-video.html\" title=\"Video\">Graphic Design</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-music-alt\"></i><a href=\"post-audio.html\" title=\"Audio\">Pricing</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-3\">
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"nav-title\">Videography</h3>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-list icons-list\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-image\"></i><a href=\"post-image.html\" title=\"Image\">Ideas & Story Boards</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-control-play\"></i><a href=\"post-video.html\" title=\"Video\">Video for Business</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><i class=\"ti-music-alt\"></i><a href=\"post-audio.html\" title=\"Audio\">Pricing</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--end services-->
\t\t\t\t\t\t<!--work-->
\t\t\t\t\t\t<!--<li><a href=\"#ux-register\">Work</a></li>-->
\t\t\t\t\t\t<!--end work-->
\t\t\t\t\t\t<!--Connect-->
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Connect</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"home-portfolio.html\">Things we do for Fun</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-portfolio.html\">Sharing is Caring</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"home-personal.html\">Affiliation</a></li>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!--end connect-->
\t\t\t\t\t\t<li><a href=\"#ux-benefits\">Careers</a></li>
\t\t\t\t\t\t<li><a href=\"#ux-testimonials\">647.988.9448</a></li>
\t\t\t\t\t</ul>\t\t\t
\t\t\t\t</div><!--/.navbar-collapse -->
\t\t\t  </div>
\t\t\t</nav>
\t\t\t<!-- main navigation END -->
\t\t\t
\t\t\t<!-- page title START -->
\t\t\t<div id=\"ux-intro\" class=\"page-title ux-hero full-screen parallax\" style=\"background-image:url(img/bg/landing-bg.jpg);\">
\t\t\t\t<div class=\"title-body\">
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<a href=\"https://vimeo.com/221619219\" title=\"MADE IN DREAM ARTS\" class=\"mfp-iframe lightbox play-it\" data-toggle=\"tooltip\" title=\"BY DREAM ARTS TEAM\"><i class=\"fa fa-play\"></i></a>
\t\t\t\t\t\t\t\t<!--<a href=\"http://www.youtube.com/watch?v=kuceVNBTJio\" class=\"mfp-iframe lightbox play-it\" data-toggle=\"tooltip\" title=\"Watch an intro video\"><i class=\"fa fa-play\"></i></a>-->
\t\t\t\t\t\t\t\t<h1 class=\"title-xl\"><em class=\"text-light\">Recent Case Study</em> <strong class=\"text-info\">Watch it <span class=\"text-uppercase text-success check-after\">now</span></strong></h1>
\t\t\t\t\t\t\t\t<p class=\"title-text\">Receive your free customized online Quote</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"#page-content\" class=\"btn btn-circle bounce page-scroll\">
\t\t\t\t\t<i class=\"ti-arrow-down\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<!-- page title END -->
\t\t\t
\t\t</header>
\t\t<!-- page header END -->
\t\t
\t\t<!-- page content START -->
\t\t<div class=\"page-content\" id=\"page-content\">\t\t\t
\t\t\t
\t\t\t<!-- why register START -->
\t\t\t<div id=\"ux-register\" class=\"section half-section-right\">
\t\t\t\t<div class=\"section-bg hidden-xxs img-bg\" data-bg=\"img/half-section-bg/right-img-3.jpg\">&nbsp;</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-4 col-lg-offset-1 col-sm-5 hidden-xs\">
\t\t\t\t\t\t\t<h2 class=\"h1\">Why Choose Us</h2>
\t\t\t\t\t\t\t<p><mark>100% Transparency.  No wizard behind the curtain</mark></p>
\t\t\t\t\t\t\t<ul class=\"custom-list icon-list\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-check\"></i>
\t\t\t\t\t\t\t\t\tExperienced, Creative & Technical
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-check\"></i>
\t\t\t\t\t\t\t\t\tAlways seeking originality
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-check\"></i>
\t\t\t\t\t\t\t\t\tYou Talk, We Listen
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<i class=\"ti-check\"></i>
\t\t\t\t\t\t\t\t\tWe Deliver On Time
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p><a href=\"#featured-projects\" class=\"btn btn-info ux-btn btn-semi-rounded page-scroll\" title=\"Check out our work\"><span>Check out our work</span><i class=\"ti-arrow-right\"></i></a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-5 col-lg-offset-1 col-md-6 col-sm-7 col-sm-offset-0 col-xs-8 col-xs-offset-2 xxs-block\">
\t\t\t\t\t\t\t<div class=\"form-wrapper\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<fieldset>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<legend>Get your free online quote</legend>\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"ux-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"ux-field\" type=\"text\" name=\"name\" id=\"name\" required />
\t\t\t\t\t\t\t\t\t\t\t<label class=\"ux-label\" for=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ux-label-content\">Name</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ux-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"ux-field\" type=\"email\" name=\"email\" id=\"email\" required />
\t\t\t\t\t\t\t\t\t\t\t<label class=\"ux-label\" for=\"email\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ux-label-content\">Email</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ux-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"ux-field\" type=\"text\" name=\"phone\" id=\"phone\" required />
\t\t\t\t\t\t\t\t\t\t\t<label class=\"ux-label\" for=\"phone\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"ux-label-content\">Phone #</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary ux-btn btn-rounded pull-right\">Start</button>
\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- why register END -->\t\t
\t\t\t
\t\t\t<!--featured projects-->
\t\t\t<div id=\"featured-projects\" class=\"section img-bg parallax\" style=\"background-image:url(img/bg/bg13.jpg);\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<a href=\"home-portfolio.html\" class=\"btn btn-success ux-btn btn-rounded btn-sm pull-right hidden-xs\" title=\"More projects from Dream Arts\"><span>Click for more</span><i class=\"ti-arrow-right\"></i></a>
\t\t\t\t\t\t\t<h3 class=\"page-header\">Some of Our Portfolio Work</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<!-- featured projects START -->
\t\t\t\t<div id=\"portfolio-wrapper\" class=\"portfolio-wrapper cbp cbp-l-grid-mosaic-projects\">
\t\t\t\t
\t\t\t\t\t<!-- project 1 START -->
\t\t\t\t\t<div class=\"cbp-item design front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p1-thumb.jpg\" alt=\"project one\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"http://www.youtube.com/watch?v=kuceVNBTJio\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"ARCHITECTURE - Archi Sign\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">ARCHITECTURE - Archi Sign</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 1 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 2 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p2-thumb.jpg\" alt=\"project two\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"img/portfolio/p2.jpg\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"FASHION - Wings of Freedom\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">FASHION - Wings of Freedom</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 2 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 3 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p3-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://vimeo.com/222104843\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Logo design by Dream Arts\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Logo Design - Le Saphir</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 3 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 4 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p4-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://vimeo.com/222463409\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Teaser Ad - Storyboard & Montage\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Teaser Ad</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 4 END -->
\t\t\t\t\t
\t\t\t\t\t<!-- project 5 START -->
\t\t\t\t\t<div class=\"cbp-item design front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p5-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"img/portfolio/p5.jpg\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Restaurant - Photography\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Restaurant - Photography</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 5 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 6 START -->
\t\t\t\t\t<div class=\"cbp-item mobile design\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p6-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"img/portfolio/p6.jpg\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"An other random project with long title\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Dental Clinic Website</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 6 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 7 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress design\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p7-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"img/portfolio/p7.jpg\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Story Telling - Videography\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Story Telling - Videography</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 7 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 8 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress design front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p8-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"img/portfolio/p8.jpg\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"UX creative portfolio theme\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Architectural 3D</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 8 END -->
\t\t\t\t
\t\t\t\t\t<!-- project 9 START -->
\t\t\t\t\t<div class=\"cbp-item wordpress front-end\">
\t\t\t\t\t\t<div class=\"cbp-caption\">
\t\t\t\t\t\t\t<div class=\"cbp-caption-defaultWrap\">
\t\t\t\t\t\t\t\t<img src=\"img/portfolio/p9-thumb.jpg\" alt=\"project three\" width=\"480\" height=\"356\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cbp-caption-activeWrap\">
\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-alignCenter\">
\t\t\t\t\t\t\t\t\t<div class=\"cbp-l-caption-body\">
\t\t\t\t\t\t\t\t\t\t<a href=\"project1.html\" class=\"cbp-l-caption-buttonLeft\" rel=\"nofollow\">project details</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"https://vimeo.com/222104866\" class=\"cbp-lightbox cbp-l-caption-buttonRight\" data-title=\"Video Commercial - Travel agency\">view larger</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"project-title\">Video Commercial - Travel agency</h2>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"love-it\" title=\"Love It!\"><i class=\"fa fa-heart-o\"></i><span>Dream Arts</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- project 9 END -->
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<!-- featured projects END -->
\t\t\t\t
\t\t\t</div>
\t\t\t<!--end featured projects-->

\t\t\t<!-- project with case study START -->
\t\t\t<div class=\"section\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<figure class=\"text-center\">
\t\t\t\t\t\t\t\t<img src=\"img/brochure/dreamarts_einstein_gioconda.png\" alt=\"Dream Arts Einstein Gioconda Brochure\">
\t\t\t\t\t\t\t\t<figcaption class=\"sr-only\">Dream Arts Brochure</figcaption>
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-0 col-lg-5\">
\t\t\t\t\t\t\t<h2>Dream Arts Brochure</h2>
\t\t\t\t\t\t\t<h5><span class=\"em text-success\">The sky isn't the limit… You Are</span></h5>
\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi purus libero, faucibus adipiscing, commodo quisst. Sed lectus. Vestibulum volutpat ultrices sagittis euismod dui pulvinar. Phase llus  dapibus eu, fermentum, dapus sedurna.</p>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"project4.html\" download class=\"btn btn-danger ux-btn btn-rounded\" title=\"View Dream Arts Brochure\"><span>Download Brochure</span><i class=\"ti-arrow-right\"></i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- project with case study END -->
\t\t\t
\t\t\t<!-- Services -->
\t\t\t<div class=\"section dark-bg half-section-left\">
\t\t\t\t<div class=\"section-bg img-bg hidden-xs\" data-bg=\"img/half-section-bg/right-img-1.jpg\">&nbsp;</div>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-7 col-sm-offset-5 col-lg-6 col-lg-offset-6\">
\t\t\t\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h2 class=\"text-center section-header visible-xs\">Services</h2>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"icon-box-4\">
\t\t\t\t\t\t\t\t\t<i class=\"number\">1</i>
\t\t\t\t\t\t\t\t\t<h4 class=\"box-title\">Web Development <br><small><span class=\"em text-primary\">Preliminary Interviewing</span></small></h4>
\t\t\t\t\t\t\t\t\t<p>At this stage an initial inverview is conducted with client in a cofee meeting. Project requirements are analyzed and scope is defined. At this stage a great envolvment of client is required to get an exact idea of the project.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"icon-box-4\">
\t\t\t\t\t\t\t\t\t<i class=\"number\">2</i>
\t\t\t\t\t\t\t\t\t<h4 class=\"box-title\">Mobile Development <br><small><span class=\"em text-primary\">Creative Phase</span></small></h4>
\t\t\t\t\t\t\t\t\t<p>This phase is further divided into to steps, 1st one is to create initial mockups and present it to client for initial approval. At 2nd step ideas are converted into a real world creative design, covering all aspects of the project.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"icon-box-4\">
\t\t\t\t\t\t\t\t\t<i class=\"number\">3</i>
\t\t\t\t\t\t\t\t\t<h4 class=\"box-title\">Design <br><small><span class=\"em text-primary\">Giving Life to Ideas</span></small></h4>
\t\t\t\t\t\t\t\t\t<p>At this step entire project is devided into several modules and handed over to development team. This step envolves a repeated process of coding and initial testing of modules and finally all modules are integrated.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"icon-box-4\">
\t\t\t\t\t\t\t\t\t<i class=\"number\">4</i>
\t\t\t\t\t\t\t\t\t<h4 class=\"box-title\">Videography <br><small><span class=\"em text-primary\">No Compromise with Quality</span></small></h4>
\t\t\t\t\t\t\t\t\t<p>Quality assurance is the most important step in our development process. We do comparison with original design, optimize images, proof read all content, test menu, links & forms, and cross browser compatibility.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End Services -->

\t\t\t<!-- Technologies -->
\t\t\t<div id=\"ux-clients\" class=\"section gray-bg\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<h2 class=\"text-center section-header\">Technologies We Use <br><span class=\"em\">Robust, Powerful & Scalable</span></h2>
\t\t\t\t\t\t\t<div class=\"ux-carousel clients-carousel ux-theme\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/1.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/2.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/3.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/4.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/5.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/6.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/7.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/8.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/9.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/10.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/11.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/12.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div><div>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" title=\"Client Name\">
\t\t\t\t\t\t\t\t\t\t<img src=\"img/technologies/13.png\" alt=\"Image 1\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- End technologies -->\t\t\t
\t\t\t
\t\t\t<!-- cta box START -->
\t\t\t<div class=\"section gray-bg no-padding\">
\t\t\t\t<div class=\"cta-box\">
\t\t\t\t\t<span class=\"cta-text\">Receive your online quote now</span>
\t\t\t\t\t<a class=\"btn btn-primary ux-btn btn-rounded\"><span>Start here</span><i class=\"ti-arrow-right\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- cta box END -->
\t\t</div>
\t\t<!-- page content END -->
\t\t
\t\t
\t\t<!-- page footer START -->
\t\t<footer class=\"ux-footer\">
\t\t\t<div class=\"container ft-widgets\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-6 xxs-block\">
\t\t\t\t\t\t<div class=\"ux-widget\">
\t\t\t\t\t\t\t<h5 class=\"widget-title\">Get in Touch</h5>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t<strong>Dream Arts</strong><br>
\t\t\t\t\t\t\t\tPO Box 1234<br>
\t\t\t\t\t\t\t\tMississauga, ON L4R 5G8, Canada<br>
\t\t\t\t\t\t\t\t<abbr title=\"Phone\">P:</abbr> +1 (647) 645-7890
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t<a href=\"mailto:enquiries@dreamarts.ca\">enquiries@dreamarts.ca</a>
\t\t\t\t\t\t\t</address>
\t\t\t\t\t\t\t<p class=\"em no-margin\">We are available Monday to Friday: <br> 09:00am - 06:00pm</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 col-sm-4 col-xs-6 hidden-xs\">
\t\t\t\t\t\t<div class=\"ux-widget\">
\t\t\t\t\t\t\t<h5 class=\"widget-title\">Company</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"about.html\" title=\"About Us\">About Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Why UX?\">The Mission</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Culture at UX\">Vision</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"portfolio.html\" title=\"Portfolio\">Values</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Our Clients\">Work</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Frequently Asked Questions\">FAQ</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Privacy Policy\">Privacy Policy</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3 col-sm-4 col-xs-6 visible-lg visible-md\">
\t\t\t\t\t\t<div class=\"ux-widget\">
\t\t\t\t\t\t\t<h5 class=\"widget-title\">Services</h5>
\t\t\t\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Web Design &amp; Front End\">Web Design &amp; Front End</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Responsive THML5 Templates\">Responsive THML5 Templates</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Custom WordPress Themes\">Custom WordPress Themes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Search Engine Optimization\">Search Engine Optimization</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Android Development\">Android Development</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Social Media Marketing\">Social Media Marketing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"javascript:void(0);\" title=\"Front End Optimization\">Front End Optimization</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-sm-4 col-xs-6 xxs-block\">
\t\t\t\t\t\t<div class=\"ux-widget\">
\t\t\t\t\t\t\t<h5 class=\"widget-title\">Newsletter</h5>
\t\t\t\t\t\t\t<p>Subscribe to get updates right in your inbox. We promise to not send you spams.</p>
\t\t\t\t\t\t\t<form class=\"subscription-form\" role=\"form\" id=\"mailchimp\">
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" name=\"subscriber-email\" id=\"subscriber-email\" placeholder=\"Enter email...\" required />
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-rounded btn-sm\" name=\"submit\" type=\"submit\" value=\"Submit\">Subscribe</button>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!-- success and error messages -->
\t\t\t\t\t\t\t\t<div class=\"subscription-success text-success\"></div>
\t\t\t\t\t\t\t\t<div class=\"subscription-error text-danger\"></div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"container ft-btm-bar\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<h5 class=\"no-margin\">&nbsp;</h5>
\t\t\t\t\t\t<p>Copyright &copy; Dream Arts <script type=\"text/javascript\">var year = new Date();document.write(year.getFullYear());</script>. All rights reserved.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t<div class=\"social-links text-right\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a class=\"facebook\" href=\"javascript:void(0);\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"twitter\" href=\"javascript:void(0);\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"linkedin\" href=\"javascript:void(0);\" title=\"Linkedin\"><i class=\"fa fa-linkedin\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"pinterest\" href=\"javascript:void(0);\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"skype\" href=\"javascript:void(0);\" title=\"Skype\"><i class=\"fa fa-skype\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- page footer END -->
\t
\t
\t\t<!-- sidebar offcanvas START -->
\t\t<div class=\"sidebar-offcanvas\">
\t\t
\t\t\t\t<!-- animated close button -->
\t\t\t\t<a class=\"nav-toggle close-it\" href=\"javascript:void(0)\" title=\"Close It\" data-toggle=\"offcanvas\">
\t\t\t\t\t<span class=\"bars-wrapper\">
\t\t\t\t\t\t<span class=\"first bar\"></span>
\t\t\t\t\t\t<span class=\"second bar\"></span>
\t\t\t\t\t\t<span class=\"third bar\"></span>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t
\t\t\t<div class=\"scroll-bar-wrapper\">\t\t\t\t
\t\t\t\t<!-- logo -->
\t\t\t\t<a class=\"logo\" href=\"#\"><img src=\"img/logo.png\" width=\"78\" alt=\"Dream Arts\"></a>
\t\t\t\t<p>We are a team of experts dedicated to providing the best possible service to our clients. We bring technical, creative & strategic expertise to every project we undertake.</p>
\t\t\t\t<p>Our clients choose us because we deliver for them; Creatively, strategically, functionally and commercially.</p>
\t\t\t\t<ul class=\"list-unstyled\">
\t\t\t\t  <li><a href=\"about-us.html\" title=\"Our Work\">Our Work</a></li>
\t\t\t\t  <li><a href=\"team.html\" title=\"About Our Team\">Our Philosophy</a></li>
\t\t\t\t  <li><a href=\"hiring.html\" title=\"We are Hiring\">Things We Do 4 Fun</a></li>
\t\t\t\t  <li><a href=\"about-us-alt.html\" title=\"Why Choose Us?\">Why Choose Us?</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<hr>
\t\t\t\t
\t\t\t\t<address>
\t\t\t\t\t<strong>Get in Touch</strong><br>
\t\t\t\t\t<abbr title=\"Phone\">P:</abbr> 1800 456-7890<br>
\t\t\t\t\t<abbr title=\"Phone\">P:</abbr> (438) 929-0000 (Quebec)<br>
\t\t\t\t</address>
\t\t\t\t
\t\t\t\t<address>
\t\t\t\t\t<p><strong>Enquiries</strong><br>
\t\t\t\t\t<a href=\"mailto:#\">enquiries@dreamarts.ca</a></p>
\t\t\t\t\t<p><strong>Support</strong><br>
\t\t\t\t\t<a href=\"mailto:#\">support@dreamarts.ca</a></p>
\t\t\t\t</address>
\t\t\t\t
\t\t\t\t<div class=\"social-links text-center\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a class=\"facebook\" href=\"javascript:void(0);\" title=\"Facebook\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"twitter\" href=\"javascript:void(0);\" title=\"Twitter\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"pinterest\" href=\"javascript:void(0);\" title=\"Pinterest\"><i class=\"fa fa-pinterest\"></i></a></li>\t\t\t\t\t
\t\t\t\t\t\t<li><a class=\"dribbble\" href=\"javascript:void(0);\" title=\"Dribbble\"><i class=\"fa fa-dribbble\"></i></a></li>
\t\t\t\t\t\t<li><a class=\"reddit\" href=\"javascript:void(0);\" title=\"Reddit\"><i class=\"fa fa-reddit-alien\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr>
\t\t\t\t
\t\t\t\t<p>&copy; Dream Arts
\t\t\t\t<script type=\"text/javascript\"> var year = new Date(); document.write(year.getFullYear());</script>
\t\t\t\t\t. All rights reserved.
\t\t\t\t</p>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<!-- sidebar offcanvas END -->
\t\t
\t\t
\t</div>
\t<!-- body wrapper END -->
\t
\t
\t
\t<!-- search pop-up START -->
\t<div class=\"custom-popup search-popup\">
\t\t\t\t
\t\t<!-- animated close button -->
\t\t<a class=\"nav-toggle close-it\" href=\"javascript:void(0)\" title=\"Close It\">
\t\t\t<span class=\"bars-wrapper\">
\t\t\t\t<span class=\"first bar\"></span>
\t\t\t\t<span class=\"second bar\"></span>
\t\t\t\t<span class=\"third bar\"></span>
\t\t\t</span>
\t\t</a>
\t\t
\t\t<div class=\"popup-wrapper\">
\t\t\t<div class=\"form-wrapper\">
\t\t\t\t<form method=\"post\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" id=\"exampleInputEmail3\" placeholder=\"Search...\">
\t\t\t\t\t\t<span class=\"animated-bar\"></span>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t<!-- search pop-up END -->
\t<!-- shopping cart pop-up START -->
\t<div class=\"custom-popup cart-popup\">
\t\t\t\t
\t\t<!-- animated close button -->
\t\t<a class=\"nav-toggle close-it\" href=\"javascript:void(0)\" title=\"Close It\">
\t\t\t<span class=\"bars-wrapper\">
\t\t\t\t<span class=\"first bar\"></span>
\t\t\t\t<span class=\"second bar\"></span>
\t\t\t\t<span class=\"third bar\"></span>
\t\t\t</span>
\t\t</a>
\t\t
\t\t<div class=\"popup-wrapper\">
\t\t\t<div class=\"cart-wrapper\">
\t\t\t\t<h3 class=\"cart-title\">Cart Summary</h3>
\t\t\t\t<!-- shoppin cart dropdown START -->
\t\t\t\t<div class=\"cart-items\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">
\t\t\t\t\t\t\t\t<img src=\"img/shop/p1-thumb.jpg\" alt=\"Product One\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5 class=\"product-title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">Woocommerce CD Audio</a>
\t\t\t\t\t\t\t\t<small class=\"quantity\">1 x \$15.00</small>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"remove-item\" title=\"Remove from Cart\"><i class=\"fa fa-remove\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">
\t\t\t\t\t\t\t\t<img src=\"img/shop/p2-thumb.jpg\" alt=\"Product One\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5 class=\"product-title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">Woocommerce Product Title two</a>
\t\t\t\t\t\t\t\t<small class=\"quantity\">1 x \$15.00</small>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"remove-item\" title=\"Remove from Cart\"><i class=\"fa fa-remove\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">
\t\t\t\t\t\t\t\t<img src=\"img/shop/p3-thumb.jpg\" alt=\"Product One\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5 class=\"product-title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">Another Product Title Here</a>
\t\t\t\t\t\t\t\t<small class=\"quantity\">1 x \$15.00</small>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"remove-item\" title=\"Remove from Cart\"><i class=\"fa fa-remove\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">
\t\t\t\t\t\t\t\t<img src=\"img/shop/p1-thumb.jpg\" alt=\"Product One\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5 class=\"product-title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">This is a Product Title</a>
\t\t\t\t\t\t\t\t<small class=\"quantity\">1 x \$15.00</small>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"remove-item\" title=\"Remove from Cart\"><i class=\"fa fa-remove\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">
\t\t\t\t\t\t\t\t<img src=\"img/shop/p2-thumb.jpg\" alt=\"Product One\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<h5 class=\"product-title\">
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"product\" title=\"link title\">Menu Item One</a>
\t\t\t\t\t\t\t\t<small class=\"quantity\">1 x \$15.00</small>
\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"remove-item\" title=\"Remove from Cart\"><i class=\"fa fa-remove\"></i></a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"container-fluid cart-controls\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-6 xxs-block\">
\t\t\t\t\t\t\t<div class=\"sub-total\">Subtotal: <span>\$345.00</span></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-xs-6 xxs-block\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-primary btn-sm hidden-sm btn-rounded hidden-xs\" title=\"View Cart\">View Cart</a>
\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"btn btn-success btn-sm btn-rounded\" title=\"Checkout\">Checkout</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- shoppin cart dropdown END -->
\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t<!-- shopping cart pop-up END -->
\t\t
\t
\t<a href=\"#0\" class=\"go-top\"><i class=\"fa fa-angle-up\"></i></a>
";
    }

    // line 850
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 851
        echo "    <!-- Google fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700|Cookie\" rel=\"stylesheet\" type=\"text/css\">
    
    <!-- Preloader stylesheet -->
    <link rel=\"stylesheet\" href=\"css/preloader.css\">\t\t
    
    <!-- RS5.0 Main stylesheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/settings.css\">\t\t 
    <!-- RS5.0 navigation styles -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"revolution/css/navigation.css\">
    
    <!-- Bootstrap v3.3.6 stylesheet -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
    
    <!-- Portfolio stylesheet -->
    <link rel=\"stylesheet\" href=\"portfolio/css/portfolio.css\">
    
    <!-- UX theme stylesheet -->
    <link rel=\"stylesheet\" href=\"css/theme.css\">

";
    }

    // line 873
    public function block_javascript($context, array $blocks = array())
    {
        // line 874
        echo "    
\t
\t<script>
\t\$(document).ready(function(){\t\t\t
\t\t//closes main menu on menu item click
\t\t//NOTE: use it only on single page navigation
\t\t\$('.navbar-collapse ul li a').click(function() {
\t\t\t\$('.navbar-toggle:visible').click();
\t\t});\t\t\t
\t});
\t</script>
\t<!-- Portfolio init function -->
\t<script type=\"text/javascript\">
\t\t\$(document).ready( function() {
\t\t\t \$('#portfolio-wrapper').cubeportfolio({
\t\t\t\t// options
\t\t\t\tlayoutMode: 'slider',
\t\t\t\tdrag: true,
\t\t\t\tauto: true,
\t\t\t\tautoTimeout: 5000,
\t\t\t\tautoPauseOnHover: true,
\t\t\t\tshowNavigation: false,
\t\t\t\tshowPagination: false,
\t\t\t\trewindNav: false,
\t\t\t\tscrollByPage: false,
\t\t\t\tcaption: 'fadeIn',
\t\t\t\tgapHorizontal: 0,
\t\t\t\tgapVertical: 0,
\t\t\t\tgridAdjustment: 'responsive',
\t\t\t\tmediaQueries: [{
\t\t\t\t\twidth: 1500,
\t\t\t\t\tcols: 6
\t\t\t\t}, {
\t\t\t\t\twidth: 1100,
\t\t\t\t\tcols: 4
\t\t\t\t}, {
\t\t\t\t\twidth: 800,
\t\t\t\t\tcols: 3
\t\t\t\t}, {
\t\t\t\t\twidth: 480,
\t\t\t\t\tcols: 2
\t\t\t\t}, {
\t\t\t\t\twidth: 320,
\t\t\t\t\tcols: 1
\t\t\t\t}],
\t\t\t\tdisplayType: 'sequentially',
\t\t\t\tdisplayTypeSpeed: 80
\t\t\t });
\t\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  911 => 874,  908 => 873,  884 => 851,  881 => 850,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/Applications/AMPPS/www/DREAMARTS/DA_DOT_CA_2017/app/Resources/views/default/index.html.twig");
    }
}
