<?php get_header(); ?>
<div class="single_post">
<div class="container-semi">


	<main role="main">
	<!-- section -->
		<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="single_post_info">
				<span class="date"><i class="far fa-clock"></i><?php the_time('F j, Y'); ?></span>
				<span class="category"><i class="far fa-folder-open"></i><?php the_category(',') ?> </span>
				<span class="post_comments"><i class="far fa-comments"></i><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'No Comments', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			</div>
			<!-- post title -->
			<h1><?php the_title(); ?></h1>
			<!-- /post title -->
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->
		<div class="single_post_content">
			<div class="row">
				<div class="col-lg-8">
			<div class="main-content-section merri-font">
				<?php the_content(); // Dynamic Content ?>
			</div>


			<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
			<div class="main_comment">
				<?php comments_template(); ?>
			</div>

		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
		</div>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
</div>
</div>
<?php get_footer(); ?>
