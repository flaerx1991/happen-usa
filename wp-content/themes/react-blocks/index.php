<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package react-blocks
 */

get_header();

$categories = get_categories('');
 

?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="title-only-hero long-left">
				<div class="container">
					<div class="page-title" ><?php echo single_post_title();?></div>
				</div>
				
			</div>
			<div class="category-grid">
				<div class="container">
					<div class="category-navigation flex">
						<p class="category current">All</p>
						<?php foreach ($categories as $category) { ?>
							<p class="category"><?php echo $category->name; ?></p>
						<?php	}?>
						
					</div>
					<div class="posts-grid grid">
					
					
			
							<?php endif;
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/post-content', get_post_type() );

							endwhile;  ?>
        <?php else :

						get_template_part( 'template-parts/content', 'none' );

		endif;?>		
					
					</div>
					<?php the_posts_pagination( array(
						'mid_size'  => 2,
						'prev_text' => __( 'Prev', 'textdomain' ),
						'next_text' => __( 'Next', 'textdomain' ),
					) ); ?>
					
				</div>
			</div>
	</main><!-- #main -->

<?php

get_footer();
