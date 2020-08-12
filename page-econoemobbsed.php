<?php
/*
Template Name: ECONO EMBOSSED
*/
?>
<?php get_header(); ?>
	<?php require 'headingbg.php'; ?>
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">


				 <section class="catlop">
				 <h1 class="page-title">Econo Embossed</h1>
									<div class="section-c lokp">
									<h2 class="titlesub">econo-embossed</h2>
								</div>
								<ul class="products">
						   			<?php 
										$args = array( 
										'post_type' => 'product',
										'product_cat' => 'econo-embossed',
										);
										$the_query = new WP_Query( $args );
									?>

								<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li class="product-category hvr-underline-reveal product">
										<a href="<?php the_permalink(); ?> ">
											<?php the_post_thumbnail( 'full' );  ?>
											<h3><?php the_title() ;?></h3>
										</a>
									</li>
								<?php endwhile; else: ?>

									<p>Sorry, there are no frames to display</p>

								<?php endif; ?>
								</ul>	
										
				</section>
			    					

			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>