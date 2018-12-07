<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="page-header">
    <h1><?php the_title();?></h1>
    <div class="page-header" id="container-image-header" style="background-image: url('<?php echo chabriole_get_featured_image();?>')">
      <!--<img  class="header-image" src="<?php //echo chabriole_get_featured_image();?>" alt="">-->
<div class="page-header-overlay"></div>
</div>
</div>
</header>
<?php
global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $cat = $category->term_id;
        }
	if ($cat === 4) {
		include 'template-parts/history-single.php';
	} else {?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
					<?php the_post_thumbnail();?>
					<h1><?php the_title();?></h1>
					<p><?php the_content();?></p>


				<?php // If comments are open or we have at least one comment, load up the comment template.
				 if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->
<?php }  ?>
<?php get_footer();
?>
