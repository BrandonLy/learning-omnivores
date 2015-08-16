<?php 
/*

	Template Name: New Rules

*/
?>


<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">

  			</div>
  			
		<?php endif; ?>

		<header class="entry-header"><h1 class="entry-title">New Rules</h1></header>

		<?php $loop = new WP_Query( array( 'post_type' => 'rules', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="post">

						<div class="line"></div>

						<span class="post-author">By <?php echo get_the_author(); ?></span>

						<span class="post-date"><?php echo get_the_date(); ?></span>

						<h2 class="post-title"><?php echo get_the_title(); ?></h2>

						<span class="excerpt"><?php the_excerpt(); ?></span>

						<div class="post-link"><a href="<?php echo get_permalink(); ?>"> Continue Reading ></a></div>

					</div>
		<?php endwhile; wp_reset_query(); ?>
		
<?php get_footer(); ?>