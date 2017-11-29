<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<section class="page-header">
				<h1>
				<?php 
					single_term_title( '<h1 class="page-title">', '</h1>' );
					?>
				</h1>
				<?php
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</section><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<ul>
      <?php while ( have_posts() ) : the_post(); ?>
      
      <div class="category-blocks">
          <li>
						<div class="thumbnail-bg">
          	<a href="<?php the_permalink(); ?>" rel="product"> 
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
						</div>
						<div class"product-text">
            	<p><?php the_title(); ?>
								<?php echo CFS()->get('price'); ?>
							</p>
						</div>
          </li>
        
			</div>
      
			<?php endwhile; ?>
			</ul>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>