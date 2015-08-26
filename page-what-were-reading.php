<?php 
/*

	Template Name: What We're Reading

*/
?>


<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
				<header class="entry-header custom-header"><h1 class="entry-title">What We're Reading</h1></header>
  			</div>
  			
		<?php endif; ?>

		<div class="books">

		<?php $loop = new WP_Query( array( 'post_type' => 'what-were-reading', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php if ( !get_field( "on_the_bookshelf" ) ) { ?>
				<div class="book">

					<div class="post-link"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_meta(get_the_ID(), 'book_cover', TRUE) );?>"/></a></div>

				</div>
				<?php } ?>
		<?php endwhile; wp_reset_query(); ?>

		</div>
		
<?php get_footer(); ?>