<?php
$movie_id =  $_GET['movie_id'];
//should store api key in .env
$apiKey = '1e448e0dfcdbb565f5d329820065b4d2';
$url = "https://api.themoviedb.org/3/movie/" . $movie_id . "?api_key=" . $apiKey . "&language=en-US";
$data = custom_get_data($url);
if (empty($data)) {
    echo 'There is something wrong when fetching data';
}
?>
<?php
get_header();
?>

<?php
$session_id =  wp_get_session_token();
if (!empty($session_id)) {
    insertUser($session_id, $movie_id);
}

?>
<section class="single-movie-container">
    <div class="page-header">
        <?php
        get_template_part('template-parts/menu');
        ?>
    </div>
    <div class="movie-detail-intro">
        <div class="container">
            <div class="poster">
                <img src=<?php echo "https://image.tmdb.org/t/p/w500/" . $data['poster_path']; ?> alt="">
            </div>
            <div class="content">
                <h3 class="title">
                    <?php echo $data['title']; ?>
                </h3>
                <ul class="sub-text">

                    <li><?php echo $data['runtime']; ?> min</li>
                    <li> <?php
                            $genres = $data['genres'];
                            foreach ($genres as $genre) {
                                echo $genre['name'];
                            }
                            ?></li>
                    <li> <?php echo $data['release_date']; ?></li>
                </ul>
                <div class="action">
                    <button class="btn btn-primary">
                        <a href=<?php if ($data['imdb_id']) {
                                    echo 'https://www.imdb.com/title/' . $data['imdb_id'];
                                } else {
                                    echo '#';
                                }
                                ?>>Details</a></button>
                </div>
                <div class="rating">
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                    <?php echo $data['vote_average']; ?>/10
                </div>
            </div>
        </div>
    </div>
    <div class="movie-detail">
        <div class="container">
            <div class="main-content">
                <div class="storyline">
                    <h3 class="title">Storyline</h3>
                    <p class="description"><?php echo $data['overview']; ?></p>
                </div>
                <div class="reply-box">
                    <h3>Leave a Reply</h3>
                    <p>Your email address will not be published. Required fields are marked *</p>
                    <?php echo do_shortcode('[contact-form-7 id="39" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="side-bar">
                <div class="widget">
                    <h3 class="title">Detail</h3>
                    <ul class="list-detail">
                        <li><strong>Release date:</strong> 21 Jun 1991</li>
                        <li><strong>Director:</strong> Joe Johnston</li>
                        <li><strong>Imdb Rating:</strong> 6.4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();
