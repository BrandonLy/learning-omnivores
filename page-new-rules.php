<?php 
/*

	Template Name: New Rules

*/
?>


<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
  			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  			<div id="custom-bg" style="background-image: url('<?php echo $image[0]; ?>')">
				<header class="entry-header custom-header">
					<h1 class="entry-title">New Rules</h1>
					<p class="heading-quote">If you don’t adopt New Rules, drop the “f” in Shift!</p>
				</header>
  			</div>
  			
		<?php endif; ?>

		<!-- <div class="rules-card teal">
			<p>“We are currently preparing students for jobs that don’t exist yet...using technologies that haven’t been invented...
in order to solve problems that we don’t even know are problems yet…”</p>
			<p>-Richard Riley, former U.S. Education Secretary.</p>
		</div>

		<div class="rules-card blue">
			<p>“If you don't like change, you're going to like irrelevance even less.”</p>
			<p>General Eric Shinseki, former Chief of Staff, U.S. Army.</p>
		</div>

		<div class="rules-card gray">
			<p>“It is not necessary to change. Survival is not mandatory.”</p>
			<p>W. Edwards Deming, noted engineer, statistician, professor, author, lecturer, and management consultant.</p>
		</div>

		<div class="rules-page"> -->

		<?php echo do_shortcode("[show-testimonials orderby='menu_order' order='ASC' layout='slider' options='transition:fade,adaptive:false,controls:pager,pause:3500,auto:on,columns:1,theme:none,info-position:info-below,text-alignment:center,quote-content:short,charlimitextra: (...),image-size:ttshowcase_small,image-shape:circle,image-effect:none,image-link:on']"); ?>


		<div class="rules-page">

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

		</div>
		
<?php get_footer(); ?>