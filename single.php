<?php
/**
 * The template for displaying all single posts.
 *
 * @package Learning Omnivores
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="single-post post">
			
				<div class="post top-margin">
				<div class="line single-line"></div>

						<span class="post-author">By <?php echo get_the_author(); ?></span>

						<span class="post-date"><?php echo get_the_date(); ?></span>

				</div>

				<h1 class="post-title"><?php the_title(); ?></h1>

				<div class="post-content"><?php the_content(); ?></div>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

			</div>

		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
