<?php
/**
 * The template for displaying the header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecapp
 */

?>
<!DOCTYPE HTML>
<html <?php language_attributes();?>>


<head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" charset="<?php bloginfo( 'charset' );?>" />

<script> 
addEventListener("load", function() { 
	setTimeout(hideURLbar, 0); 
	}, false);
function hideURLbar(){ 
	window.scrollTo(0,1); 
	} 
</script>
<!-- //for-mobile-apps -->
<?php wp_head();?>
<!---//-slider---->
</head>
<body>
<!-- header -->
	<div class="header_bg">
		<div class="container">
			<!-----start-header----->
			<div class="header">
				<div class="logo">
					<a href="index-2.html"><img src="<?php echo get_template_directory_uri();?>/images/logo1.png" alt=" " /></a>
				</div>
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="act"><a href="<?php echo site_url('/');?>">Home</a></li>
							<li><a href="<?php echo site_url('/elections/');?>">Elections</a></li>
							<li><a href="<?php echo site_url('/results/');?>">Results</a></li>
							
							<li><a href="<?php echo site_url('/about/');?>">About</a></li>
							<li><a href="<?php echo site_url('/contact-us/');?>">Contact Us</a></li>
							<?php if(is_user_logged_in()){?>
							<li class="dropdown">
							<a href="<?php echo site_url('/myprofile/')?>" class="dropdown-toggle" data-toggle="dropdown">My Profile <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
									<div class="row">
										<div class="party">
											<ul class="multi-column-dropdown">
												<li><a href="about.html">Current Elections</a></li>
												<li class="divider"></li>
												<li><a href="about.html">My Profile</a></li>
												<li class="divider"></li>
												<li><a href="<?php echo wp_logout_url( home_url() ); ?>">Log Out</a></li>
											</ul>
										</div>
									</div>
								</ul>
							</li>
                             <?php } else{ ?>
							<li><a href="<?php echo site_url('/login/');?>">Login</a></li>
							<?php }?>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
	<div class="header_bottom">
	</div>
<!-- //end-header -->