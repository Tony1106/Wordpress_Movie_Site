<?php
get_header();
get_template_part('template-parts/menu');
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="banner-top">
			<div class="container">
				<div class="text-wraper">
					<div class="inner">
						<h2 class="title"><?php echo get_page(8)->post_title ?></h2>
						<ol class="breadcrumb">
							<li><a href="/" title="Home" rel="bookmark">Home</a></li>
							<li><span>Movie Grid 3</span></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<?php
		get_template_part('./template-parts/movies');
		?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php

get_footer();
