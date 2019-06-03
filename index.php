<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="container-semi">
				<?php get_template_part('loop'); ?>
			</div>


			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
