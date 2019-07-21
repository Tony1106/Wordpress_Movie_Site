<?php
global $post;
$page_title = $post->post_title;
$isSinglePage = $page_title == 'Movie Grid 3' ? false : true;
?>
<header id="masthead" class="site-header <?php echo $isSinglePage ? 'header-transparent' : '' ?>" role="banner">
    <div class="site-branding">
        <?php
        if ($isSinglePage) {
            echo "<a href='/'><img height=40 src='/wp-content/themes/webpack-gulp-wordpress-starter-theme-master/assets/img/logo-white.png'></a>";
        } else {
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        }

        ?>

    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'menu-main', 'menu_id' => 'menu-main')); ?>
    </nav><!-- #site-navigation -->
    <div class="search-login">
        <div class="search"><i class="fas fa-search"></i></div>
        <div class="login">
            <a href="/user-login"><button class="btn btn-primary"><span class="icon"><i class="far fa-user"></i></span> Login</button></a>
        </div>
    </div>
</header><!-- #masthead -->