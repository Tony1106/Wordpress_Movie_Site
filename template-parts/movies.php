<section class="list-movie">
    <div class="container">
        <?php
        //should store api key in .env
        $apiKey = '1e448e0dfcdbb565f5d329820065b4d2';
        $pagination = [
            'current_page' => $page,
            'total_pages' => 0
        ];
        $movies = array();
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=" . $apiKey . "&language=en-US&sort_by=popularity.desc&include_adult=false&include_video=false&page=" . $pagination['current_page'];
        //Use custom function from functions.php
        $data = custom_get_data($url);
        if (!empty($data)) {
            $pagination['current_page'] = $data['page'];
            $pagination['total_pages'] = $data['total_pages'];
            $movies = $data['results'];

            //Define watch list base on session ID
            $session_id =  wp_get_session_token();
            $watch_list = getMovieBySession($session_id);
            foreach ($movies as $movie) { ?>
                <div class="list-moview-item">
                    <div class="movie-image"><img src=<?php echo "https://image.tmdb.org/t/p/w500/" . $movie['poster_path']; ?> alt=""></div>
                    <div class="movie-content">
                        <div class="title"><?php echo $movie['title']; ?></div>
                        <div class="star">
                            <div class="rating"><i class="fa fa-star"></i> <span><?php echo $movie['vote_average'] . '/10'; ?></span></div>
                            <div class="category">
                                <?php
                                $list_genres = $movie['genre_ids'];
                                //Minimum 3 genres
                                $list_genres = array_slice($list_genres, 0, 3);
                                foreach ($list_genres as $genre) {
                                    echo translate_genre($genre) . ',';
                                }

                                ?>
                            </div>
                        </div>
                        <div class="short-description">
                            <?php echo substr($movie['overview'], 0, 124); ?>
                        </div>
                    </div>
                    <a class="movie-action" href=<?php echo "/movie/?movie_id=" . $movie['id'] ?>><button class="btn btn-primary">Details</button></a>
                    <?php
                    //Echo the watch icon when movie_id in session_movie database
                    echo checkIsMovieWatch($watch_list, $movie['id']) ? '<div class="movie_watch"><span>Watched</span><i class="fas fa-eye"></i></div>' : '';
                    ?>
                </div>
            <?php
            }
        } else {
            echo 'There is something wrong when fetching data';
        }
        ?>
</section><!-- #list movie -->
<?php
//Pass pagination variable to pagination template
set_query_var('pagination', $pagination);
get_template_part('./template-parts/pagination');
?>