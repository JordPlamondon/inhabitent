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
      
      <header class="shop-page">

      <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        
        <ul class="product-list">
        <?php    
          $terms = get_terms( array(
            'taxonomy' => 'product-type',
            'order' => 'ASC',
						'hide_empty' => false,
          ));

          foreach ($terms as $term) :
          $url = get_term_link ($term->slug , 'product-type'); ?>    
					<li class="shop-stuff-item">                   
            <a href='<?php echo $url ?>' class='button'><?php echo $term->name; ?></a>
					</li>
        <?php
          endforeach; ?>  
          
				  <?php
  
            if ( has_post_thumbnail() ) : ?>
        </ul>

        <div class="shop-container">  
          <ul>
            <?php 
            $args = array( 'posts_per_page' => '16', 'post_type'=> 'product' );
    	      $product_posts = get_posts( $args );?>
    	      <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
            <li>
            <a href="<?php the_permalink(); ?>" rel="product"> 
            <?php the_post_thumbnail( 'large' ); ?>
            </a>
            <?php the_title(); ?>
            <?php echo CFS()->get('price'); ?>
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