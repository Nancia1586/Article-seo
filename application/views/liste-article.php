<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
    $this->load->model('Article');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="<?php echo base_url('assets/images/fav.png'); ?>" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/color.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>">

    <script src="<?php echo base_url('ckeditor/ckeditor.js'); ?>"></script>

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	
	<div class="responsive-header">
		<div class="mh-head first Sticky">
			<span class="mh-btns-left">
				<a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
			</span>
			<span class="mh-text">
				<a href="newsfeed.html" title=""><img src="<?php echo base_url('assets/images/logo2.png'); ?>" alt=""></a>
			</span>
			<span class="mh-btns-right">
				<a class="fa fa-sliders" href="#shoppingbag"></a>
			</span>
		</div>
		<div class="mh-head second">
			<form class="mh-form">
				<input placeholder="search" />
				<a href="#/" class="fa fa-search"></a>
			</form>
		</div>
	</div><!-- responsive header -->
	
	<div class="topbar stick">
		<div class="logo">
			<a title="" href="newsfeed.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>
		</div>
		
		<div class="top-area">
			<div class="user-img">
				<img src="" alt="">
				
			</div>
			<span class="ti-menu main-menu" data-ripple=""></span>
		</div>
	</div><!-- topbar -->

	
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<h4 class="widget-title">Menu</h4>
										<ul class="naves">
											<li>
												<i class="ti-clipboard"></i>
												<a href="<?php echo $url?>/ArticleController/listeArticle" title="">Article</a>
											</li>
											<li>
												<i class="ti-files"></i>
												<a href="fav-page.html" title="">Category</a>
											</li>
											<li>
												<i class="ti-power-off"></i>
												<a href="landing.html" title="">Logout</a>
											</li>
										</ul>
									</div><!-- Shortcuts -->
								</aside>
							</div><!-- sidebar -->
							<div class="col-lg-6">
								<div class="central-meta">
									<div class="new-postbox">
										<div class="newpst-input">
											<form method="post">
												<textarea rows="2" placeholder="Search here..."></textarea>
												<div class="attachments">
													<ul>
														<li>
															<button type="submit">Search</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div><!-- add post new box -->
								<div class="loadMore">
                                <?php foreach($article as $row){ 
                                    $slug = $this->Article->create_slug($row['titre']);    
                                    $slug_link = $slug."/article-".$row['id'].".html";
                                ?>
								<div class="central-meta item">
									<div class="user-post">
										<div class="friend-info">
											<div class="post-meta">
												<img src="<?php echo base_url('assets/images/resources/user-post.jpg'); ?>" alt="">
												<div class="description">
													<strong>
                                                        <?php echo $row['titre']; ?>
                                                    </strong>
                                                    <br/>
													<p>
                                                        <?php echo $row['resume']; ?>
                                                    </p>
												</div>
												<div class="submit-btns">
													<!-- <a href="<?php //echo $slug; ?>/article-<?php //echo $row['id']; ?>.html"><button type="button" class="mtr-btn" data-ripple=""><span>View More</span></button></a> -->
                                                    <a href="<?php echo base_url($slug_link); ?>"><button type="button" class="mtr-btn" data-ripple=""><span>View More</span></button></a>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <?php } ?>
								</div>
							</div><!-- centerl meta -->
							<div class="col-lg-3">
								<aside class="sidebar static">
									<div class="widget">
										<div class="banner medium-opacity bluesh">
											<div class="bg-image" style="background-image: url(<?php echo base_url('assets/images/resources/baner-widgetbg.jpg'); ?>)"></div>
											<div class="baner-top">
												<span><img alt="" src="<?php echo base_url('assets/images/book-icon.png'); ?>"></span>
												<i class="fa fa-ellipsis-h"></i>
											</div>
											<div class="banermeta">
												<p>
													create your own article.
												</p>
												<a data-ripple="" title="" href="<?php echo $url?>/ArticleController/insertArticlePage">add now!</a>
                                            </div>
										</div>											
									</div>
								</aside>

							</div><!-- sidebar -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="widget">
						<div class="foot-logo">
							<div class="logo">
								<a href="index-2.html" title=""><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt=""></a>
							</div>	
							<p>
								The trio took this simple idea and built it into the world’s leading carpooling platform.
							</p>
						</div>
						<ul class="location">
							<li>
								<i class="ti-map-alt"></i>
								<p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
							</li>
							<li>
								<i class="ti-mobile"></i>
								<p>+1-56-346 345</p>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>follow</h4></div>
						<ul class="list-style">
							<li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
							<li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
							<li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
							<li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
							<li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>Navigate</h4></div>
						<ul class="list-style">
							<li><a href="about.html" title="">about us</a></li>
							<li><a href="contact.html" title="">contact us</a></li>
							<li><a href="terms.html" title="">terms & Conditions</a></li>
							<li><a href="#" title="">RSS syndication</a></li>
							<li><a href="sitemap.html" title="">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>useful links</h4></div>
						<ul class="list-style">
							<li><a href="#" title="">leasing</a></li>
							<li><a href="#" title="">submit route</a></li>
							<li><a href="#" title="">how does it work?</a></li>
							<li><a href="#" title="">agent listings</a></li>
							<li><a href="#" title="">view All</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-4">
					<div class="widget">
						<div class="widget-title"><h4>download apps</h4></div>
						<ul class="colla-apps">
							<li><a href="https://play.google.com/store?hl=en" title=""><i class="fa fa-android"></i>android</a></li>
							<li><a href="https://www.apple.com/lae/ios/app-store/" title=""><i class="ti-apple"></i>iPhone</a></li>
							<li><a href="https://www.microsoft.com/store/apps" title=""><i class="fa fa-windows"></i>Windows</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- footer -->
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="<?php echo base_url('assets/js/main.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/map-init.js'); ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>