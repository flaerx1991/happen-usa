<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package react-blocks
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
 $logo = get_field('logo_image', 'option');
 $logo_mobile = get_field('logo_image_mobile','option'); 
 $nav = get_field('menu', 'option');
 $login_bnt = get_field('login_button', 'option');
 $partners_bnt = get_field('partners_button', 'option');
 $banner_text = get_field('banner_text','option');
?>
<div id="page">
	<?php if ($banner_text) { ?>
	<div class="upper-header-banner">
		<div class="banner-text"><?php echo $banner_text; ?></div>
		<div id="close-banner" class="close-banner"></div>
	</div>
	<?php } ?>
	<header id="masthead" class="site-header">
		
		<div class="container flex">
			<div class="logo-col"><a href="/"><img  src="<?php echo $logo['url'] ;?>" alt="<?php echo $logo['alt'] ;?>" class="site-logo"></a></div>
			<div class="navigation">
				<nav class="menu">
				<?php foreach( $nav as $link) {?>
					<div class="nav-item">
						<a href="<?php echo $link['parent_link']['url']?>" class="nav-link"><?php echo $link['parent_link']['title']?></a>
						
						<?php if ($link['sub_links']) { ?>
							<span class="sub-menu-btn"></span>
							<div class="sub-links">
								<?php foreach( $link['sub_links'] as $sub_link) {?>
									<div class="nav-item">
										<a href="<?php echo $sub_link['link']['url']?>" class="nav-link"><?php echo $sub_link['link']['title']?></a>
											<?php if ($sub_link['sub_links']) { ?>
												<span class="sub-2">❯</span>
												<div class="sub-sub-links">
													<?php foreach( $sub_link['sub_links'] as $sub_sub_link) {?>
														
															<a href="<?php echo $sub_sub_link['link']['url']?>" class="nav-link"><?php echo $sub_sub_link['link']['title']?></a>
														
													<?php } ?>	
												</div>
											<?php } ?>
									</div>
									
								<?php } ?>
							</div>
							
						<?php } ?>
					</div>
					
				<?php };?>	
				</nav>
				<div class="button-col">
					<a href="" class="btn btn__md secondary">Community Login</a>
					<a href="" class="btn btn__md primary">Partner With Us</a>
				</div>
				
			</div>
			<div id="open" class="burger-button">
					<span></span>
					<span></span>
					<span></span>
			</div>
		</div>
		<div class="mobile-menu">
			<div class="upper-container">
				<div class="logo-col"><a href="/"><img  src="<?php echo $logo_mobile['url'] ;?>" alt="<?php echo $logo_mobile['alt'] ;?>" class="site-logo"></a></div>
				<div id="close" class="close-button" ></div>
			</div>
			<div class="mobile-menu-container">
				<?php foreach( $nav as $link) {?>
						<div class="nav-item">
							<a href="<?php echo $link['parent_link']['url']?>" class="nav-link"><?php echo $link['parent_link']['title']?></a>
							
							<?php if ($link['sub_links']) { ?>
								<span class="sub-menu-btn"></span>
								<div class="sub-links">
									<?php foreach( $link['sub_links'] as $sub_link) {?>
										<div class="nav-item">
											<a href="<?php echo $sub_link['link']['url']?>" class="nav-link"><?php echo $sub_link['link']['title']?></a>
												<?php if ($sub_link['sub_links']) { ?>
													<span class="sub-menu-btn"></span>
													<div class="sub-links">
														<?php foreach( $sub_link['sub_links'] as $sub_sub_link) {?>
															
																<a href="<?php echo $sub_sub_link['link']['url']?>" class="nav-link"><?php echo $sub_sub_link['link']['title']?></a>
															
														<?php } ?>	
													</div>
												<?php } ?>
										</div> 
										
									<?php } ?>
								</div>
								
							<?php } ?>
						</div>
						
				<?php };?>										
			</div>
			<div class="button-container">
				<a href="" class="btn btn__md secondary">Community Login</a>
				<a href="" class="btn btn__md primary">Partner With Us</a>
			</div>
		
		</div>
	</header><!-- #masthead -->
