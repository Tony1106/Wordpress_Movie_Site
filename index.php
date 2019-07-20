<?php
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="banner-top">
			<div class="wrapper">
				<div class="container">
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
		// $apiKey = "https://api.themoviedb.org/3/movie/76341?api_key=1e448e0dfcdbb565f5d329820065b4d2";
		// $request = wp_remote_get($apiKey);

		// if (is_wp_error($request)) {
		// 	return false;
		// }

		// $body = wp_remote_retrieve_body($request);

		// $data = json_decode($body);

		// if (!empty($data)) { }





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

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
