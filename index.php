<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="banner-top">
			<div class="container">
				<div class="text-wraper">
					<div class="inner">
						<h2 class="title">Movie Grid 3</h2>
						<ol class="breadcrumb">
							<li><a href="http://klbtheme.com/movify" title="Home" rel="bookmark">Home</a></li>
							<li><span>Movie Grid 3</span></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<?php






		while (have_posts()) : the_post();

			?>

			<section>
				<?php the_title('<h1>', '</h1>'); ?>

				<?php
				the_content();
				?>
			</section>

		<?php
		endwhile; // End of the loop.
		?>
		<?php
		get_template_part('./template-parts/movies');
		get_template_part('./template-parts/pagination')
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
