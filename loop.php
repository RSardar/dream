<div class="main_loop">
<div class="row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<div class="col-lg-6">
<div class="row pb-3 mt-5">
	<div class="col-lg-6 pr-0 featured-left">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="index_featured_details">
			<span class="index_featured_category"><?php the_category(', '); ?> </span><span class="pl-3 date ash"><?php the_time('j F, Y'); ?> <?php the_time('G:i'); ?></span>
		<h2 class="index_featured_h2">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->
	<p class="index_featued_excerpt"><?php echo wp_trim_words(get_the_content(),20) ?></p>
		</div>
</div>
		<!-- post title -->
		<div class="col-lg-6 featured-right">
			<div class="index_featured_thumb">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail('index_feature'); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			</div>
</div>
	</article>
	<!-- /article -->

</div></div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
</div>
</div>
