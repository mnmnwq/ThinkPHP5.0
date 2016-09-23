<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"/Applications/MAMP/htdocs/ThinkPHP5.0/tp5/public/../application/index/view/layouts/index.html";i:1474613426;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>首页</title>
    <!-- ALL STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="/static/node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/index/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/index/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/index/css/responsive.css" />
    <!-- ALL JAVASCRIPT -->
    <script type="text/javascript" src="/static/node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/static/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/static/index/js/custom.js"></script>
    <script type="text/javascript" src="/static/node_modules/angular/angular.min.js"></script>
    <!--link href="css/blog-single.css" rel="stylesheet">-->
</head>
<body>

<!-- header -->
<header class="header">
    <!-- header top -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <ul class="list-inline">
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="/static/index/images/china.jpg" alt="" /> 中文
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">货币 ￥RMB</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="list-inline">
                        <li><a href="#" ><i class="fa fa-mobile"></i> +88018374345</a></li>
                        <li><a href="#" ><i class="fa fa-envelope-o"></i> example@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <ul class="list-inline pull-right">
                        <li><a href="#" ><i class="fa fa-user"></i> 个人中心</a></li>
                        <li><a href="#" ><i class="fa fa-heart-o"></i> Wishlist (0)</a></li>
                        <li><a href="#" ><i class="fa fa-file-o"></i> Compare (0)</a></li>
                        <li><a class="register" href="#" >注册</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- logo and adds -->
    <div class="logo-add">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo"><i class="fa fa-diamond"></i>电子商城</div>
                </div>
                <div class="col-sm-8">
                    <h3 class="add bb-year-end-ribbon hidden-xs"><img src="/static/index/images/red-tablet.png" width="40px;" alt="" />
                        <span>Hi! We Can <span>Help</span> Your Business</span> <button class="btn btn-default"> Get Stared </button></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- header bottom -->
    <div class="header-bottom">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-default">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bottom" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="header-bottom">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo url('/'); ?>">Home Page</a></li>
                                        <li><a href="<?php echo url('index/index/index2'); ?>">Home Page 2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="../spdn_13_Emarket/product-detail.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <span class="label label-danger text-center hidden-xs">New <i class="fa fa-caret-right"></i>
											</span>
                                    <ul class="dropdown-menu">
                                        <li><a href="../spdn_13_Emarket/product.html">Products</a></li>
                                        <li><a href="../spdn_13_Emarket/product-detail.html">Product Details</a></li>
                                        <li><a href="../spdn_13_Emarket/new-product.html">New Products</a></li>
                                    </ul>
                                </li>
                                <li><a href="../spdn_13_Emarket/faq.html">FAQ</a></li>
                                <li><a href="../spdn_13_Emarket/blog.html">论坛</a></li>
                                <li><a href="../spdn_13_Emarket/blog-details.html">Blog Detail</a></li>
                                <li>
                                    <a href="<?php echo url('index/index/about_us'); ?>">关于我们</a>
                                    <span class="label label-info text-center hidden-xs">New <i class="fa fa-caret-right"></i></span>
                                </li>
                                <li><a href="../spdn_13_Emarket/contact-us.html">联系我们</a></li>
                            </ul>
                            <form class="navbar-form navbar-right" action="" method="" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="nav-search"><a href="#"><i class="fa fa-search"></i></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>



<!-- social icons -->
<section class="social-icons">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-inline text-center">
                    <li><a href="#" ><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" ><i class="fa fa-spotify"></i></a></li>
                    <li><a href="#" ><i class="fa fa-tumblr"></i></a></li>
                    <li><a href="#" ><i class="fa fa-share-alt"></i></a></li>
                    <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" ><i class="fa fa-delicious"></i></a></li>
                    <li><a href="#" ><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" ><i class="fa fa-dropbox"></i></a></li>
                    <li><a href="#" ><i class="fa fa-soundcloud"></i></a></li>
                    <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" ><i class="fa fa-github-alt"></i></a></li>
                    <li><a href="#" ><i class="fa fa-skype"></i></a></li>
                    <li><a href="#" ><i class="fa fa-stumbleupon"></i></a></li>
                    <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2>About E-Market</h2>
                    <div class="heading-border b-color-1"></div>
                    <p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Te eam exerci vulputate consetetur, 								causae consulatu eaper,  apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Te eam exerci 								vulputate consetetur, causae consulatu eaper</p>
                    <div><a href="">Read More <i class="fa fa-angle-double-right"></i></a></div>
                    <strong>Newsletter</strong>
                    <form class="navbar-for" role="email">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address">
                            <span class="nav-search"><a href="#"><i class="fa fa-envelope"></i></a></span>
                        </div>
                    </form>
                    <small>Eros posse verterem congue saperet.</small>
                </div>
                <div class="col-sm-3">
                    <h2>Featured Products</h2>
                    <div class="heading-border b-color-1"></div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left"><img src="/static/index/images/featured-1.jpg" alt=""></div>
                            <div class="media-body">
                                <p class="media-heading">Lorem ipsum dolor sit amet</p>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><img src="/static/index/images/featured-1.jpg" alt=""></div>
                            <div class="media-body">
                                <p class="media-heading">Lorem ipsum dolor sit amet</p>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left"><img src="/static/index/images/featured-1.jpg" alt=""></div>
                            <div class="media-body">
                                <p class="media-heading">Lorem ipsum dolor sit amet</p>
                                <div class="category">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <strong>$899.99</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2>Latest News</h2>
                    <div class="heading-border b-color-1"></div>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left text-center">
                                <img src="/static/index/images/featured-1.jpg" alt="">
                                <span><i class="fa fa-search"></i></span>
                            </div>
                            <div class="media-body">
                                <p class="f-border">Lorem ipsum dolor sit amet, an animal feugait</p>
                                <p class="f-date">23 August 2015</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center">
                                <img src="/static/index/images/featured-1.jpg" alt="">
                                <span><i class="fa fa-search"></i></span>
                            </div>
                            <div class="media-body">
                                <p class="f-border">Lorem ipsum dolor sit amet, an animal feugait</p>
                                <p class="f-date">23 August 2015</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left text-center">
                                <img src="/static/index/images/featured-1.jpg" alt="">
                                <span><i class="fa fa-search"></i></span>
                            </div>
                            <div class="media-body">
                                <p class="f-border">Lorem ipsum dolor sit amet, an animal feugait</p>
                                <p class="f-date">23 August 2015</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h2>Contact us</h2>
                    <div class="heading-border b-color-1"></div>
                    <strong class="media-heading">Address</strong>
                    <p>Lebel 2, 13 Elezabe St, Melbounire, Victoria 3000, +8492575, USA</p>

                    <strong class="media-heading">Phone & Fax</strong>
                    <p>+880183947930</p>
                    <p>+(980)1839479</p>

                    <strong class="media-heading">E-Mail Address</strong>
                    <p>support@gmail.com</p>
                    <p>example@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Copyright 2015 made by <a href="#">Bootultra.com</a> & Disign by Shaifuddin. All Rights Reserved.</p>
                    <ul class="list-inline center-block">
                        <li><a href="#"><img src="/static/index/images/card-1.png"></a></li>
                        <li><a href="#"><img src="/static/index/images/card-2.png"></a></li>
                        <li><a href="#"><img src="/static/index/images/card-3.png"></a></li>
                        <li><a href="#"><img src="/static/index/images/card-4.png"></a></li>
                        <li><a href="#"><img src="/static/index/images/card-5.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>