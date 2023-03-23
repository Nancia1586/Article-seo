<?php 
    $this->load->helper('url_helper');
    $url = base_url('index.php');
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
			<ul class="setting-area">
				
			</ul>
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
							<div class="col-lg-9">
								<div class="central-meta">
									<div class="editing-info">
										<h5 class="f-title"><i class="ti-info-alt"></i> Add a new article</h5>

										<form action="<?php echo $url?>/ArticleController/insertArticle" method="get">
											<div class="form-group">	
											  <input type="text" id="input" name="titre" required="required" />
											  <label class="control-label" for="input">Title</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <textarea rows="4" id="textarea" name="resume" required="required"></textarea>
											  <label class="control-label" for="textarea">Resume</label><i class="mtrl-select"></i>
											</div>
											<div class="form-group">	
											  <select name="categorie">
												<option value="">Category</option>
                                                <?php foreach($categorie as $row){ ?>
												  <option value="<?php echo $row['id']; ?>"><?php echo $row['type']; ?></option>
                                                <?php } ?>
											  </select>
											</div>
											<br/><br/>
											<div class="form-group">	
											  <textarea  class="ckeditor" id="editeur" name="contenu" rows="10" id="textarea" required="required"></textarea>
											  <label class="control-label" for="textarea">Content</label><i class="mtrl-select"></i>
											</div>
											<div class="submit-btns">
												<button type="button" class="mtr-btn"><span>Validate</span></button>
											</div>
										</form>
									</div>
								</div>	
							</div><!-- centerl meta -->
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
	
	<script src="<?php echo base_url('assets/js/main.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/map-init.js'); ?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>	

</html>