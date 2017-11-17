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
      
      <header class="page-header">
        
        <div class="shop-container">  
				  <?php
            // the_archive_description( '<div class="taxonomy-description">', '</div>' );
            echo CFS()->get('price');

          
            if ( has_post_thumbnail() ) : ?>

          <ul>
            <?php 
            $args = array( 'posts_per_page' => '15', 'post_type'=> 'product' );
    	      $product_posts = get_posts( $args );?>
    	      <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
            <li>
            <div class="shop-thumbnail">  
            <?php the_post_thumbnail( 'large' ); ?>
            </div>
            </li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
        </div>
        
        <?php endif; ?>

		    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    
      </header><!-- .page-header -->

	

			  <?php the_posts_navigation(); ?>

      <?php else : ?>
    
        <?php get_template_part( 'template-parts/content', 'none' ); ?>

		  <?php endif; ?> 

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>