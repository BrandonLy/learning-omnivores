<?php 
/*

	Template Name: Thoughts on Fire

*/
?>


<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
				<header class="entry-header custom-header"><h1 class="entry-title">Thoughts on Fire</h1></header>
  			</div>
  			
		<?php endif; ?>
			

		<div class="fire-posts">
		<?php // Display blog posts on any page @ http://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(); $wp_query->query('showposts=7' . '&paged='.$paged);
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
		<div class="post">

			<div class="line"></div>
			
			<div class="post-info">

				<span class="post-author"><?php the_author(); ?></span>

				<span class="post-date"><?php the_date(); ?></span>

			</div>

			<h2 class="post-title"><?php the_title(); ?></h2>

			<span class="excerpt"><?php the_excerpt(); ?></span>

			<div class="post-link"><a href="<?php echo the_permalink(); ?>">Continue Reading ></a></div>

			<?php endwhile; ?>

			<?php if ($paged > 1) { ?>

			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
			</nav>

			<?php } else { ?>

			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			</nav>

		</div>

		<?php } ?>

		<?php wp_reset_postdata(); ?>

		</div>
		
<?php get_footer(); ?>