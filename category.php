<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
					<div class="col-lg-4">
						<?php get_sidebar(); ?>
					</div>
				</div>

			</div>



		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
