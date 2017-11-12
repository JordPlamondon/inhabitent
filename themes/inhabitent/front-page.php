<?php
/**
 * Front page (home page) template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="hero">
				<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/logos/inhabitent-logo-full.svg'; ?>" alt="Inhabitent Logo" />
			</section>
			<section class="shop-product-container">
				<h2>Shop Stuff</h2>
				<ul>
					<li>
					<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/product-type-icons/do.svg'; ?>" alt="Do Icon" />
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.	
						</p>
						<p>
							<a class="gb" href="linktopage">Do Stuff</a>
						</p>		
					</li>	
					<li>
					<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/product-type-icons/eat.svg'; ?>" alt="Eat Icon" />
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.	
						</p>
						<p>
							<a class="gb" href="linktopage">Eat Stuff</a>
						</p>		
					</li>	
					<li>
					<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/product-type-icons/sleep.svg'; ?>" alt="Sleep Icon" />
						<p>Get a good night's rest in the wild in a home away from home that travels well.	
						</p>
						<p>
							<a class="gb" href="linktopage">Sleep Stuff</a>
						</p>		
					</li>
					<li>
					<img src="<?php echo get_template_directory_uri() . '/assets/project-04/images/product-type-icons/wear.svg'; ?>" alt="Wear Icon" />
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.	
						</p>
						<p>
							<a class="gb" href="linktopage">Wear Stuff</a>
						</p>		
					</li>		
					
				
				
			
			</section>
						

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
      	<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>