<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Precious Lite
 */

get_header(); 
?>

    <div class="content-area">
            	<h2 class="section-title"><?php _e('Our Blog','corporate-lite'); ?></h1>
				<?php
				$n = 0;
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
					$n++; ?>
                    
                       <div class="blogposts <?php if($n%3==0) {?>lastcols<?php } ?>" <?php if(is_sticky()) {?> style="background-color:#d7d7d7;"<?php } ?>>
						<div class="blog-thumb">							
                			<a href="<?php the_permalink(); ?>" class="blogthumbs">
                            	<?php if(has_post_thumbnail()) { ?>
									<?php the_post_thumbnail(); ?>
                                <?php } else { ?>
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/no-image.jpg" />
                                <?php } ?>
                            </a>
							<div class="blog-date">
                                <div class="date"><?php echo get_the_date('j'); ?></div> 
                                <div class="month"><?php echo get_the_time('M'); ?></div>  
							</div>
                            <div class="blog-author">
                                <div class="blog-author-name"><?php the_author(); ?></div>
                                <div class="comment-count"><?php comments_number(); ?></div><div class="clear"></div>
                            </div>
						</div>
                			<h2><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>
                        	<p><?php the_excerpt(); ?></p>
                    		<a class="blog-more" href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More','corporate-lite'); ?></a>
                            </div>
                    <?php endwhile;
                    // Previous/next post navigation.
                    corporate_lite_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
    </div>


<?php get_footer(); ?>