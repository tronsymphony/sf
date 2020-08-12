<?php
/*
Template Name: Catalog All
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-8 medium-12 columns" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>



				<h1 class="clol">click samples to see the rest</h1>



<?php 
    $get_parent_cats = array(
        'parent' => '0', //get top level categories only
        'taxonomy'=>'product_cat',
        'hide_empty' => false
    ); 

    $all_categories = get_categories( $get_parent_cats );//get parent categories 
    foreach( $all_categories as $single_category ){
        //for each category, get the ID
        $catID = $single_category->cat_ID;

?>
				<div class="section-c lokp">
					<h2 class="titlesub"><?php echo '<br /><a href="'. get_category_link( $catID ) .'">'. $single_category->name .'</a>'; ?></h2>
				</div>

              <?php 
        $cat_thumb_id = get_woocommerce_term_meta( $catID, 'thumbnail_id', true );
        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
               ?>


		<ul class="products">

<li class="product-category hvr-underline-reveal product">
                  <a href="<?php echo get_category_link( $catID ); ?>">
                    <img width="972" height="1147" src="<?php echo $shop_catalog_img[0]; ?>" class="attachment-full size-full wp-post-image" alt="815 walnut" >
                    <h3><?php echo  $single_category->name ; ?></h3>
                  </a>
                </li>
      
		<?php

        $get_children_cats = array(
            'child_of' => $catID, //get children of this parent using the catID variable from earlier
            'taxonomy'=>'product_cat',
            'hide_empty' => false
        );
        wp_reset_postdata();
        $child_cats = get_categories( $get_children_cats );//get children of parent category
        if(count($child_cats)>0){

            // echo '<ul class="children">';
                foreach( $child_cats as $child_cat ){
                    //for each child category, get the ID
                    $childID = $child_cat->cat_ID;
			?>
							<?php 
        $cat_thumb_id = get_woocommerce_term_meta( $childID, 'thumbnail_id', true );
        $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'shop_catalog' );
							 ?>
								<li class="product-category hvr-underline-reveal product">
									<a href="<?php echo get_category_link( $childID ); ?>">
										<img width="972" height="1147" src="<?php echo $shop_catalog_img[0]; ?>" class="attachment-full size-full wp-post-image" alt="815 walnut" >
										<h3><?php echo  $child_cat->name ; ?></h3>
									</a>
								</li>
			<?php
                   
                }

        }else{
            //$catID
            wp_reset_postdata();
          

        }
        ?>
        </ul><?php
    } //end of categories logic ?>


			</main> <!-- end #main -->
		    <?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
