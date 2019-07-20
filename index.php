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
		<section class="list-movie">
			<div class="container">
				<div class="list-moview-item">
					<div class="movie-image"><img src="./wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/poster1.jpg" alt=""></div>
					<div class="movie-content">
						<div class="title">Daredevil</div>
						<div class="star">
							<div class="rating"><i class="fa fa-star"></i> <span>8.7</span></div>
							<div class="category">Action</div>
						</div>
						<div class="short-description">
							Lara Croft is the fiercely independent daughter of an eccentric adventurer who vanished when she was scarcely a teen. Now a
						</div>
					</div>
					<a class="movie-action" href="/movie-link"><button class="btn btn-primary">Details</button></a>
				</div>
				<div class="list-moview-item">
					<div class="movie-image"><img src="./wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/poster1.jpg" alt=""></div>
					<div class="movie-content">
						<div class="title">Daredevil</div>
						<div class="star">
							<div class="rating"><i class="fa fa-star"></i> <span>8.7</span></div>
							<div class="category">Action</div>
						</div>
						<div class="short-description">
							Lara Croft is the fiercely independent daughter of an eccentric adventurer who vanished when she was scarcely a teen. Now a
						</div>
					</div>
					<a class="movie-action" href="/movie-link"><button class="btn btn-primary">Details</button></a>
				</div>
				<div class="list-moview-item">
					<div class="movie-image"><img src="./wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/poster1.jpg" alt=""></div>
					<div class="movie-content">
						<div class="title">Daredevil</div>
						<div class="star">
							<div class="rating"><i class="fa fa-star"></i> <span>8.7</span></div>
							<div class="category">Action</div>
						</div>
						<div class="short-description">
							Lara Croft is the fiercely independent daughter of an eccentric adventurer who vanished when she was scarcely a teen. Now a
						</div>
					</div>
					<a class="movie-action" href="/movie-link"><button class="btn btn-primary">Details</button></a>
				</div>
				<div class="list-moview-item">
					<div class="movie-image"><img src="./wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/poster1.jpg" alt=""></div>
					<div class="movie-content">
						<div class="title">Daredevil</div>
						<div class="star">
							<div class="rating"><i class="fa fa-star"></i> <span>8.7</span></div>
							<div class="category">Action</div>
						</div>
						<div class="short-description">
							Lara Croft is the fiercely independent daughter of an eccentric adventurer who vanished when she was scarcely a teen. Now a
						</div>
					</div>
					<a class="movie-action" href="/movie-link"><button class="btn btn-primary">Details</button></a>
				</div>
			</div>
		</section><!-- #list movie -->
		<div class="pagination">
			<ul>
				<li class="page-numbers previous"><a href="http://klbtheme.com/movify/movie-grid-3/"><i class="fas fa-chevron-left"></i></a></li>
				<li><a class="page-numbers current" href="http://klbtheme.com/movify/movie-grid-3/page/2/">2</a></li>
				<li><a class="page-numbers" href="http://klbtheme.com/movify/movie-grid-3/page/2/">3</a></li>
				<li class="page-numbers next"><a href="http://klbtheme.com/movify/movie-grid-3/page/3/"><i class="fas fa-chevron-right"></i></a></li>
			</ul>
		</div><!-- #pagination -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
