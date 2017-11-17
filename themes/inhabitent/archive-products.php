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

			<?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
      
      <header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
          // the_archive_description( '<div class="taxonomy-description">', '</div>' );
          echo CFS()->get('price');

         if ( has_post_thumbnail() ) : ?>
        
        <?php the_post_thumbnail( 'large' ); ?>
		    <?php endif; ?>

		    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      
      </header><!-- .page-header -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

    <?php else : ?>
    
      <?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>