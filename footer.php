</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="footer-item about">
			<h4 class="title"><img src="/wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/logo-white.png" alt=""></h4>
			<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
		</div>
		<div class="footer-item twitter-feed">
			<h4 class="title">Twitter Feed</h4>
			<i class="fab fa-twitter"></i>
			<p class="content">Check out 'Harrier - Car Dealer and Automotive WordPress Theme' on #EnvatoMarket by @SinanIk #themeforest https://t.co/KjAh8NPQjE</p>
			<p class="create-at">28 days ago</p>
		</div>
		<div class="footer-item link">
			<h4 class="title">Useful Links</h4>
			<?php

			$args = [
				'title_li'     => __(''),
			];
			$list_page = wp_list_pages($args);
			?>
		</div>
		<div class="footer-item instagram">
			<h4 class="title">Instagram</h4>
			<p>follow us</p>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="link">
				<ul>
					<li><a href="#">Privacy $ Cookies</a></li>
					<li><a href="#">Term & conditions</a></li>
					<li><a href="#">Legal Disclaimer</a></li>
					<li><a href="#">Community</a></li>
				</ul>
			</div>
			<div class="statement">
				Copyright 2018.KlbTheme . All rights reserved
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>