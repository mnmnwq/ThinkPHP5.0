<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:91:"/Applications/MAMP/htdocs/ThinkPHP5.0/tp5/public/../application/index/view/index/index.html";i:1474614892;s:93:"/Applications/MAMP/htdocs/ThinkPHP5.0/tp5/public/../application/index/view/layouts/index.html";i:1474873731;}*/ ?>
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
                <?php if(\think\Session::get('is_login') != true): ?>
                    <div class="col-sm-4">
                        <ul class="list-inline">
                            <li><a href="#" ><i class="fa fa-mobile"></i> 请登录</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        <ul class="list-inline pull-right">
                            <li><a class="register" href="#" >注册</a></li>
                        </ul>
                    </div>
                    <?php else: ?>
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
                <?php endif; ?>
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
                                <li <?php if(\think\Request::instance()->action() == 'index'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('/'); ?>" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">主页</a>
                                </li>
                                <li <?php if(\think\Request::instance()->action() == 'product_list'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('index/productlist/product_list'); ?>" class="dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false">商品列表</a>
                                </li>
                                <li <?php if(\think\Request::instance()->action() == 'question_info'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('index/question/question_info'); ?>">问题汇总</a>
                                </li>
                                <li <?php if(\think\Request::instance()->action() == 'blog'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('index/blog/blog'); ?>">论坛</a>
                                </li>
                                <li <?php if(\think\Request::instance()->action() == 'blog_detail'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('index/blog/blog_detail'); ?>">论坛详情</a>
                                </li>
                                <li <?php if(\think\Request::instance()->action() == 'about_us'): ?>class="active"<?php endif; ?>>
                                    <a href="<?php echo url('index/index/about_us'); ?>">关于我们</a>
                                </li >
                                <li <?php if(\think\Request::instance()->action() == 'contac_us'): ?>class="active"<?php endif; ?> >
                                    <a href="<?php echo url('index/contacus/contac_us'); ?>">联系我们</a>
                                </li>
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

		<!-- home -->
		<section class="home">
			<div class="intro">
				<div id="home" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#home" data-slide-to="0" class="active"></li>
						<li data-target="#home" data-slide-to="1"></li>
						<li data-target="#home" data-slide-to="2"></li>
						<li data-target="#home" data-slide-to="3"></li>
						<li data-target="#home" data-slide-to="4"></li>
						<li data-target="#home" data-slide-to="5"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/person.png" height="742" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/person.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/option.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
						<div class="item">
							<div class="container">
								<div class="row">
									<div class="col-sm-7">
										<div class="intro-content">
											<h1>Last Chance</h1>
											<h2>Biggest <span class="highlight">Sale</span></h2>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet. Teer eam exerci vputate consetetur.</p>
											<a class="btn btn-default">Shop Now</a>
										</div>
									</div>
									<div class="col-sm-5">
										<img class="img-responsive" src="static/index/images/person.png" alt="" />
									</div>	
								</div>	
							</div>	
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#home" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
					<a class="right carousel-control" href="#home" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>
			</div>
		</section>	
		
		<!-- service -->
		<section class="service">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-android"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-apple"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-html5"></i></span>
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
					<div class="col-sm-3 text-center">
						<div class="service-detail">
							<span class=" fa diamond"> <i class="fa fa-css3"></i></span>
							<!--span><i class="fa fa-folder-o s-icon"></i></span-->
							<h3>Choose a product</h3>
							<p>Cicero famously orated against his political opponent Lucius Sergius Catilina type. </p>
						</div>
					</div>
				</div>
			</div>
		</section>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" title="121212">1212121</a></div>
		
		<!-- featured product -->
		<section class="featured-product">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="">
							<h1><span class="t-color-1">Featured</span> Products
								<small class="btn-group hidden-xs">
									<a class=" btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
									   aria-expanded="false">All Categries <i class="fa fa-bars"></i></a>
									<ul class="dropdown-menu">
										<li><a href="#">Option 1</a></li>
										<li><a href="#">Option 2</a></li>
									</ul>
								</small>
							</h1>
							<div class="heading-border b-color-1"></div>
						</div>
					</div>
				</div> <!-- section title -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="thumbnail">
										<!--span class="e-label"><div>Sale</div></span-->
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<span class="service-link text-center">
											<img class="img-responsive" src="static/index/images/f-pro-1.jpg" alt="">
											<div class="list-inline">
												<a href=""><i class="fa fa-eye"></i></a>
												<a href=""><i class="fa fa-link"></i></a>
											</div>
										</span>
										<div class="caption">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>		
		
		<!-- emarket adds -->
		<section class="emarket-adds">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="single-add">
							<h4>Get <span>50%</span> Discount</h4>
							<a href="#" class="btn btn-default" role="button">Learn More</a>
							<span class="img-add">
								<img src="static/index/images/red-tablet.png" alt="" />
							</span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-add">
							<h4>Best <span>Offer</span> for You</h4>
							<a href="#" class="btn btn-default" role="button">Learn More</a>
							<span class="img-add"><img src="static/index/images/red-tablet.png" alt="" /></span>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-add">
							<h4><span>Only</span> Best smartphone</h4>
							<a href="#" class="btn btn-default" role="button">Learn More</a>
							<span class="img-add"><img src="static/index/images/red-tablet.png" alt="" /></span>
						</div>
					</div>
				</div>
			</div>
		</section>	
		
		<!-- best selling -->
		<section class="best-selling">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1><span class="t-color-2">Best</span> Selling
							<small class="btn-group hidden-xs">
								<a class=" btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
								   aria-expanded="false">All Categries <i class="fa fa-bars"></i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Option 1</a></li>
									<li><a href="#">Option 2</a></li>
								</ul>
							</small>
						</h1>
						<div class="heading-border b-color-2"></div>
					</div>
				</div> <!-- section title -->
				<div id="best-selling" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#best-selling" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
						<li data-target="#best-selling" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left">
											<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										</div>
										<div class="media-body">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><img src="static/index/images/e-add-1.jpg" alt=""></div>
										<div class="media-body">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><img src="static/index/images/e-add-1.jpg" alt=""></div>
										<div class="media-body">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="media">
										<div class="media-left"><img src="static/index/images/e-add-1.jpg" alt=""></div>
										<div class="media-body">
											<div class="category"> category
												<div class="pull-right">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<h3>Lorem ipsum dolor sit amet dolorem molestie</h3>
											<strong>$899.00</strong>
											<div>
												<a href="#" class="btn btn-default" role="button">Add to Cart</a>
												<span class="pull-right"><i class="fa fa-heart-o"></i> Add to Wishlist</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		
		<!-- special price -->
		<section class="special-price">
			<div class="price-intro">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="pull-left">
								<blockquote>
								<h1> iPhone 6 16Gb Gold</h1>
								<p>Cicero famously orated against his political opponent Lucius Sergius against his political. </p>								</div>
							</blockquote>
							<div class="pull-right"><a class="btn btn-default btn-lg"> Call to Action</a>
							</div> 
						</div>
					</div> <!-- section title -->

				</div>
			</div>
		</section>	
			
		<!-- product info -->
		<section class="product-info">
			<div class="container">
				<div class="row">	
					<div class="col-sm-4">
						<h1><span class="t-color-3">New</span> Arrival</h1>
						<div class="heading-border b-color-3"></div>
						<ul class="media-list">
							<li class="media">
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
					<div class="col-sm-4">
						<h1><span class="t-color-4">Special</span> Product</h1>
						<div class="heading-border b-color-4"></div>
						<ul class="media-list">
							<li class="media">
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
					<div class="col-sm-4">
						<h1><span class="t-color-5">Top</span> Rated</h1>
						<div class="heading-border b-color-5"></div>
						<ul class="media-list">
							<li class="media">
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
								<div class="media-left text-center"><img src="static/index/images/product-1.jpg" alt="">
									<a href="#"><i class="fa fa-eye"></i></a>
								</div>
								<div class="media-body">
							    <h3 class="media-heading">Lorem ipsum dolor sit amet</h3>
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
				</div>
			</div>
		</section>	
		
		<!-- Recent Post -->
		<section class="recent-post">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h1><span class="t-color-6">Recent</span> Post</h1>
						<div class="heading-border b-color-6"></div>
					</div>
				</div> <!-- section title -->
				<div id="recent-post" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#recent-post" data-slide-to="0" class="active"><i class="fa fa-angle-left"></i></li>
						<li data-target="#recent-post" data-slide-to="1"><i class="fa fa-angle-right"></i></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">	
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">	
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
							  </div>
								<div class="col-sm-3">
									<div class="thumbnail">
										<img class="img-responsive" src="static/index/images/e-add-1.jpg" alt="">
										<div class="text-center"><i class="fa fa-search"></i></div>
										<div class="caption">
											<h3 class="media-heading">Lorem ipsum dolor sit amet dolorem molestie</h3>
											<span><a href="#"> 5 July 2014</a><a href="#"><i class="fa fa-user"></i> Arif</a></span>
											<p>Nam apeirian assentior ei, utquo eros posse verterem. Cum eu error congue saperet treer eam exerci 												utquo eros posse verterem error.</p>
											<span class="comment"><i class="fa fa-comments"></i> 5 comments</span>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
			
		<!-- sponsor -->
		<section class="sponsor">
			<div class="container">			
				<div id="sponsor" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">	
								<div class="col-sm-12">
									<ul class="list-inline text-center">
										<li><img class="" src="static/index/images/1.gif" /></li>
										<li><img class="" src="static/index/images/2.png" /></li>
										<li><img class="" src="static/index/images/3.png" /></li>
										<li><img class="" src="static/index/images/4.png" /></li>
										<li><img class="" src="static/index/images/5.png" /></li>
										<li><img class="" src="static/index/images/6.png" /></li>
										<li><img class="" src="static/index/images/7.png" /></li>
										<li><img class="" src="static/index/images/8.png" /></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">	
								<div class="col-sm-12">
									<ul class="list-inline text-center">
										<li><img class="" src="static/index/images/1.gif" /></li>
										<li><img class="" src="static/index/images/2.png" /></li>
										<li><img class="" src="static/index/images/3.png" /></li>
										<li><img class="" src="static/index/images/4.png" /></li>
										<li><img class="" src="static/index/images/5.png" /></li>
										<li><img class="" src="static/index/images/6.png" /></li>
										<li><img class="" src="static/index/images/7.png" /></li>
										<li><img class="" src="static/index/images/8.png" /></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Controls -->
				<a class="control-left" href="#sponsor" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="control-right" href="#sponsor" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				</div>			
			</div>
		</section>



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