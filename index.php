<?php
/**
 * index.php
 *
 * The main template file
 */
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Versover &amp; blog</title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico">
</head>

<body class="blog-home-page">
<div class="header-wrapper header-wrapper-blog-home">
	<!-- ******HEADER****** -->
	<header id="header" class="header navbar-fixed-top">
		<div class="container">
			<h1 class="logo">
				<a href="index.html"><span class="highlight">Dev</span>Studio</a>
			</h1><!--//logo-->
			<nav class="main-nav navbar-right" role="navigation">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button><!--//nav-toggle-->
				</div><!--//navbar-header-->
				<div id="navbar-collapse" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="nav-item"><a href="index.html">Home</a></li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="work.html">Work <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="work.html">Our Work</a></li>
								<li><a href="case-study-1.html">Single Case Study 1</a></li>
								<li><a href="case-study-2.html">Single Case Study 2</a></li>
								<li><a href="blog-post.html">Single Blog Post</a></li>
								<li><a href="404.html">404 Page</a></li>
							</ul>
						</li><!--//dropdown-->
						<li class="nav-item"><a href="about.html">About</a></li>
						<li class="active nav-item"><a href="blog.html">Blog</a></li>
						<li class="nav-item last"><a href="contact.html">Contact</a></li>
					</ul><!--//nav-->
				</div><!--//navabr-collapse-->
			</nav><!--//main-nav-->
		</div><!--//container-->
	</header><!--//header-->
	<section class="promo section">
		<div class="container text-center">
			<h2 class="title">Blog</h2>
			<p class="intro">Lorem ipsum dolor sit amet consectetuer adipiscing elit massa sociis natoque penatibus et magnis dis parturient montes</p>
		</div><!--//container-->
	</section><!--//promo-->
</div><!--//header-wrapper-->

<!-- ******Blog list Section****** -->
<section id="blog-list" class="blog-list section">
	<div class="container">
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">DevStudio helps XYZ launch</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">18</span>
							<span class="month">Feb</span>
						</li>
						<li class="post-author"><a href="#">James Lee</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">5</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis et enim at lacus pharetra mollis molestie nec magna. Maecenas tristique laoreet tristique. Ut pellentesque diam nec odio hendrerit euismod...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
		</article><!--//item-->
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">6</span>
							<span class="month">Jan</span>
						</li>
						<li class="post-author"><a href="#">James Lee</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">8</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et sagittis metus, in cursus nulla. Quisque quam eros, luctus at dolor eu, fermentum convallis diam. Donec consequat nulla quis ipsum suscipit convallis. Pellentesque id aliquet ante. <a href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">Download now</a> fusce id sodales ligula. Fusce at erat rutrum nulla scelerisque consectetur et eget mauris...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
		</article><!--//item-->
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">DevStudio Team Lorem Ipsum</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">21</span>
							<span class="month">Dec</span>
						</li>
						<li class="post-author"><a href="#">Vincent Fowler</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">8</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Aliquam quis nibh id lorem fringilla scelerisque. Etiam euismod lectus at arcu ultrices suscipit. Ut eu mi in lectus viverra scelerisque. Nulla non commodo est. Aenean id tristique est. Pellentesque hendrerit tortor nulla, dapibus consequat orci convallis vitae. Vivamus at odio fermentum justo...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
		</article><!--//item-->
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">Our Consectetur Adipiscing</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">17</span>
							<span class="month">Nov</span>
						</li>
						<li class="post-author"><a href="#">Sara Valdez</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">8</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Aliquam quis nibh id lorem fringilla scelerisque. Etiam euismod lectus at arcu ultrices suscipit. Ut eu mi in lectus viverra scelerisque. Nulla non commodo est. Aenean id tristique est. Pellentesque hendrerit tortor nulla, dapibus consequat orci convallis vitae. Vivamus at odio fermentum justo...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
		</article><!--//item-->
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">UX Workshop</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">26</span>
							<span class="month">Oct</span>
						</li>
						<li class="post-author"><a href="#">Sara Valdez</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">8</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Aliquam quis nibh id lorem fringilla scelerisque. Etiam euismod lectus at arcu ultrices suscipit. Ut eu mi in lectus viverra scelerisque. Nulla non commodo est. Aenean id tristique est. Pellentesque hendrerit tortor nulla, dapibus consequat orci convallis vitae. Vivamus at odio fermentum justo...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
		</article><!--//item-->
		<article class="item">
			<div class="row">
				<h3 class="post-title col-md-10 col-sm-9 col-xs-12 col-md-push-2 col-sm-push-3 col-xs-push-0"><a href="blog-post.html">Design aenean vulputate eleifend tellus</a></h3>
				<div class="clearfix"></div>
				<div class="meta col-md-2 col-sm-3 col-xs-12 text-right">
					<ul class="meta-list list-unstyled">
						<li class="post-time post_date date updated">
							<span class="date">12</span>
							<span class="month">Sep</span>
						</li>
						<li class="post-author"><a href="#">Sara Valdez</a></li>
						<li class="post-comments-link">
							Comments: <a href="blog-post.html#comment-area">8</a>
						</li>
					</ul><!--//meta-list-->
				</div><!--//meta-list-->
				<div class="content-wrapper col-md-10 col-sm-9 col-xs-12">
					<figure class="figure">
						<a href="blog-post.html"></a>
					</figure>
					<div class="content">
						<div class="desc">
							<p>Aliquam quis nibh id lorem fringilla scelerisque. Etiam euismod lectus at arcu ultrices suscipit. Ut eu mi in lectus viverra scelerisque. Nulla non commodo est. Aenean id tristique est. Pellentesque hendrerit tortor nulla, dapibus consequat orci convallis vitae. Vivamus at odio fermentum justo...</p>
							<a class="read-more" href="blog-post.html">Read more <i class="fa fa-long-arrow-right"></i></a>
						</div><!--//desc-->
					</div><!--//content-->
				</div><!--//content-wrapper-->
			</div><!--//row-->
			<div class="pagination-container text-center">
				<ul class="pagination">
					<li class="disabled"><a href="#">«</a></li>
					<li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">»</a></li>
				</ul><!--//pagination-->
			</div>
		</article><!--//item-->
	</div><!--//container-->
</section><!--//blog-list-->

<!-- ******FOOTER****** -->
<footer class="footer">
	<div class="footer-content">
		<div class="container">
			<div class="row">
				<div class="footer-col col-md-3 col-sm-4 links-col">
					<div class="footer-col-inner">
						<h3 class="sub-title">Quick Links</h3>
						<ul class="list-unstyled">
							<li><a href="about.html">About us</a></li>
							<li><a href="work.html">Our work</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Privacy policy</a></li>
							<li><a href="#">Terms &amp; Conditions</a></li>
						</ul>
					</div><!--//footer-col-inner-->
				</div><!--//foooter-col-->
				<div class="footer-col col-md-6 col-sm-8 blog-col">
					<div class="footer-col-inner">
						<h3 class="sub-title">Latest From Our Blog</h3>
						<div class="item">
							<figure class="figure">

							</figure>
							<div class="content">
								<h4 class="post-title"><a href="blog-post.html">DevStudio helps XYZ launch</a></h4>
								<p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus...</p>
								<ul class="meta list-inline">
									<li>18 Feb 2015</li>
									<li>James Lee</li>
								</ul>
							</div><!--//content-->
						</div>
						<div class="item">
							<figure class="figure">

							</figure>
							<div class="content">
								<h4 class="post-title"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h4>
								<p class="intro">Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla ultricies...</p>
								<ul class="meta list-inline">
									<li>21 Dec 2014</li>
									<li>Vincent Fowler</li>
								</ul>
							</div><!--//content-->
						</div>
					</div><!--//footer-col-inner-->
				</div><!--//foooter-col-->
				<div class="footer-col col-md-3 col-sm-12 contact-col">
					<div class="footer-col-inner">
						<h3 class="sub-title">Get In Touch</h3>
						<p class="intro"></p>
						<div class="row">
							<p class="adr clearfix col-md-12 col-sm-4">
								<span class="fs1" aria-hidden="true" data-icon="&#xe01d;"></span>
                                    <span class="adr-group">
                                        <span class="street-address">56 College Green Road</span><br />
                                        <span class="city">Bristol</span><br />
                                        <span class="postal-code">BS1 XR18</span><br />
                                        <span class="country-name">UK</span>
                                    </span>
							</p>
							<p class="tel col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><a href="tel:+380675623777">0675623777</a></p>
							<p class="email col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><a href="#">versoverteam@gmail.com</a></p>
						</div>
					</div><!--//footer-col-inner-->
				</div><!--//foooter-col-->
			</div>
		</div>
	</div><!--//footer-content-->
	<div class="bottom-bar">
		<div class="container center">
			<ul class="social-icons list-inline">
				<li><a href="https://twitter.com/3rdwave_themes"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://www.facebook.com/3rdwavethemes"><i class="fa fa-instagram"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li class="last"><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
			<small class="copyright text-center">Copyright @ 2015 <a href="https://versover.com" target="_blank">Versover</a></small>
		</div><!--//container-->
	</div><!--//bottom-bar-->
</footer><!--//footer-->

</body>
</html>


