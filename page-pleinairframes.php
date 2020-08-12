<?php
/*
Template Name: Plein Air Frames
*/
?>
<?php get_header(); ?>
	<?php require 'headingbg.php'; ?>
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-8 columns" role="main">
		    <section class="catlop"><h1 class="page-title">Plein Air Frames</h1>
					<div class="section-c lokp">
					<h2 class="titlesub">815-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '815-style',
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
<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">815l-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '815l-style',
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
<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">820-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '820-style',
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
<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">851-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '851-style',
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
  <section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">830-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '830-style',
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
<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">650-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '650-style',
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
<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">690-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '690-style',
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
<section class="catlop">


					<div class="section-c lokp">
					<h2 class="titlesub">528 Style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '528-style',
						);
						$the_query = new WP_Query( $args );
					?>

				<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<li class="product-category hvr-underline-reveal product ">
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


<section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">800-style</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '800-style',
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

<!-- <section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">815l-style-frame</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '815l-style-frame',
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
						
</section> -->

<!-- <section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">820-style-frame</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '820-style-frame',
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
						
</section> -->

<!-- <section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">830-style-frames-5-wide</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '830-style-frames-5-wide',
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
						
</section> -->

<!-- <section class="catlop">
					<div class="section-c lokp">
					<h2 class="titlesub">851-style-frame</h2>
				</div>
				<ul class="products">
		   			<?php 
						$args = array( 
						'post_type' => 'product',
						'product_cat' => '851-style-frame',
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
						
</section> -->
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>