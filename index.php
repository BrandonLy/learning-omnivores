<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Learning Omnivores
 */


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="home">
			
			<h1 class="learning-omnivores">Learning <span class="massive-o">O</span>mnivores</h1>

		</header>

		<div class="about">

			<h2>About</h2>	

			<p>Learning Omnivores is dedicated to giving teachers the tools and knowledge they need to better handle a classroom. Learning Omnivores provides New Rules that any teacher can follow as well as blog posts to inspire you.</p>		

		</div>     
		
		<div class="fire home-banner">
			<p class="banner-text">Igniting Learning</p>
				<p class="banner-quote">"Educating is not the filling of a pail, but the lighting of the fire."</p>
				<p class="banner-quote">-William Butler Yeats</p>
		</div>

		<div class="fire-posts">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="post">

					<div class="line"></div>

					<span class="post-author">By <?php echo get_the_author(); ?></span>

					<span class="post-date"><?php echo get_the_date(); ?></span>

					<a href="<?php echo get_permalink(); ?>"><h2 class="post-title"><?php echo get_the_title(); ?></h2></a>

					<span class="excerpt"><?php the_excerpt(); ?></span>

					<div class="post-link"><a href="<?php echo get_permalink(); ?>"> Continue Reading ></a></div>

				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div>

		<div class="rules-posts">

		<div class="rules home-banner"><p class="banner-text">New Rules</div>

		<?php $loop = new WP_Query( array( 'post_type' => 'rules', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="post">

						<div class="line"></div>

						<span class="post-author">By <?php echo get_the_author(); ?></span>

						<span class="post-date"><?php echo get_the_date(); ?></span>

						<a href="<?php echo get_permalink(); ?>"><h2 class="post-title"><?php echo get_the_title(); ?></h2></a>

						<span class="excerpt"><?php the_excerpt(); ?></span>

						<div class="post-link"><a href="<?php echo get_permalink(); ?>"> Continue Reading ></a></div>

					</div>
		<?php endwhile; wp_reset_query(); ?>

		</div>

		<div class="reading home-banner"><p class="banner-text">What We're Reading</div>

		<div class="books">

		<?php $loop = new WP_Query( array( 'post_type' => 'what-were-reading', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="book">

					<div class="post-link"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_meta(get_the_ID(), 'book_cover', TRUE) );?>"/></a></div>

				</div>
		<?php endwhile; wp_reset_query(); ?>

		</div>

		<p class="view-books"><a href="<?php echo get_site_url(); ?>/what-were-reading-2/">View All Books</a></p>

		<h2 class="post-title bookshelf">What's Next on the Bookshelf?</h2>

		<div class="books">

		<?php $loop = new WP_Query( array( 'post_type' => 'what-were-reading', 'posts_per_page' => 4 ) ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div class="book">

					<div class="post-link"><a href="<?php echo get_permalink(); ?>"><img src="<?php echo wp_get_attachment_url( get_post_meta(get_the_ID(), 'book_cover', TRUE) );?>"/></a></div>

				</div>
		<?php endwhile; wp_reset_query(); ?>

		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
