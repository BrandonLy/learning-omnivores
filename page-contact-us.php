<?php 

/*

	Template Name: About Us

*/
get_header();?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
				<header class="entry-header custom-header"><h1 class="entry-title">Contact Us</h1></header>
  			</div>
  			
		<?php endif; ?>
	<div class="entry-content">
		<?php while (have_posts()) : the_post();/* Start loop */ ?>
	        <?php the_content(); ?>
		<?php endwhile; /* End loop */ ?>
	</div>

<?php get_footer(); ?>