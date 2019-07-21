<section class="list-movie">
    <div class="container">
        <?php
        // $apiKey = getenv('API');
        $apiKey = '1e448e0dfcdbb565f5d329820065b4d2';
        $pagination = [
            'current_page' => $page,
            'total_pages' => 0
        ];
        $movies = array();
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=" . $apiKey . "&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=" . $pagination['current_page'];
        $request = wp_remote_get($url);
        if (is_wp_error($request)) {
            return false;
        }
        $body = wp_remote_retrieve_body($request);

        $data = json_decode($body, true);

        if (!empty($data)) {
            $pagination['current_page'] = $data['page'];
            $pagination['total_pages'] = $data['total_pages'];
            $movies = $data['results'];

            foreach ($movies as $movie) { ?>
                <div class="list-moview-item">
                    <div class="movie-image"><img src=<?php echo "https://image.tmdb.org/t/p/w500/" . $movie['poster_path']; ?> alt=""></div>
                    <div class="movie-content">
                        <div class="title"><?php echo $movie['title']; ?></div>
                        <div class="star">
                            <div class="rating"><i class="fa fa-star"></i> <span><?php echo $movie['vote_average']; ?></span></div>
                            <div class="category"></div>
                        </div>
                        <div class="short-description">
                            <?php echo substr($movie['overview'], 0, 124); ?>
                        </div>
                    </div>
                    <a class="movie-action" href=<?php echo "/movie/" . $movie['id'] ?>><button class="btn btn-primary">Details</button></a>
                </div>
            <?php
            }
        }
        ?>
</section><!-- #list movie -->
<?php
//Pass pagination variable to pagination template
set_query_var('pagination', $pagination);
get_template_part('./template-parts/pagination');
?>