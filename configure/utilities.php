<?php

if (!function_exists('get_partial')) :

	/**
	 * Load given template with arguments as array.
	 * arguments.
	 * @see     get_template_part().
	 * @see     http://wordpress.stackexchange.com/a/103257
	 * @author  Julien Vasseur julien@poigneedemainvirile.com
	 */
	function get_partial($slug = null, $name = null, array $params = array(), $prefix = null)
	{
		global $posts, $post, $wp_did_header, $wp_query, $wp_rewrite, $wpdb, $wp_version, $wp, $id, $comment, $user_ID;

		/**
		 * Fires before the specified template part file is loaded.
		 *
		 * The dynamic portion of the hook name, `$slug`, refers to the slug name
		 * for the generic template part.
		 *
		 * @param string $slug The slug name for the generic template.
		 * @param string $name The name of the specialized template.
		 */
		do_action("get_partial_{$slug}", $slug, $name);
		do_action("get_template_part_{$slug}", $slug, $name);

		$templates = array();
		$name = (string) $name;
		if ('' !== $name) {
			$templates[] = "{$slug}-{$name}.php";
		}

		$templates[] = "{$slug}.php";

		$_template_file = locate_template($templates, false, false);

		if (is_array($wp_query->query_vars)) {
			extract($wp_query->query_vars, EXTR_SKIP);
		}

		if (isset($s)) {
			$s = esc_attr($s);
		}

		if (!is_null($prefix)) {
			$flags = EXTR_PREFIX_ALL;
			// ensure prefix doesn't end with an underscore, it is automatically added by extract()
			if ('_' === $prefix[strlen($prefix) - 1]) {
				$prefix = substr($prefix, 0, -1);
			}
		} else {
			$flags = EXTR_PREFIX_SAME;
			$prefix = '';
		}

		extract($params, $flags, $prefix);

		require($_template_file);
	}

endif;
//Get data function
function custom_get_data($url)
{
	$request = wp_remote_get($url);
	if (is_wp_error($request)) {
		return false;
	}
	$body = wp_remote_retrieve_body($request);
	$data = json_decode($body, true);

	return $data;
}
//Can create dynamic object by pulling from server
function translate_genre($id)
{
	$genres =
		array(
			0 =>
			array(
				'id' => 28,
				'name' => 'Action',
			),
			1 =>
			array(
				'id' => 12,
				'name' => 'Adventure',
			),
			2 =>
			array(
				'id' => 16,
				'name' => 'Animation',
			),
			3 =>
			array(
				'id' => 35,
				'name' => 'Comedy',
			),
			4 =>
			array(
				'id' => 80,
				'name' => 'Crime',
			),
			5 =>
			array(
				'id' => 99,
				'name' => 'Documentary',
			),
			6 =>
			array(
				'id' => 18,
				'name' => 'Drama',
			),
			7 =>
			array(
				'id' => 10751,
				'name' => 'Family',
			),
			8 =>
			array(
				'id' => 14,
				'name' => 'Fantasy',
			),
			9 =>
			array(
				'id' => 36,
				'name' => 'History',
			),
			10 =>
			array(
				'id' => 27,
				'name' => 'Horror',
			),
			11 =>
			array(
				'id' => 10402,
				'name' => 'Music',
			),
			12 =>
			array(
				'id' => 9648,
				'name' => 'Mystery',
			),
			13 =>
			array(
				'id' => 10749,
				'name' => 'Romance',
			),
			14 =>
			array(
				'id' => 878,
				'name' => 'Science Fiction',
			),
			15 =>
			array(
				'id' => 10770,
				'name' => 'TV Movie',
			),
			16 =>
			array(
				'id' => 53,
				'name' => 'Thriller',
			),
			17 =>
			array(
				'id' => 10752,
				'name' => 'War',
			),
			18 =>
			array(
				'id' => 37,
				'name' => 'Western',
			),
		);
	$output = '';
	foreach ($genres as $genre) {
		if ($id == $genre['id']) {
			$output = $genre['name'];
		}
	}
	return $output;
}


function captaincore_create_tables()
{

	global $wpdb;

	$charset_collate = $wpdb->get_charset_collate();
	$version         = (int) get_site_option('captcorecore_db_version');

	if ($version < 1) {
		$sql = "CREATE TABLE `{$wpdb->base_prefix}session_movie` (
		session_id varchar(255),
		created_at datetime DEFAULT now(),
		movie_id TINYTEXT
		) $charset_collate;";

		require_once ABSPATH . 'wp-admin/includes/upgrade.php';
		dbDelta($sql);
		$success = empty($wpdb->last_error);

		update_site_option('captcorecore_db_version', 1);
		var_dump('captcorecore_db_version');
	}
	return $success;
}
//Function to insert user session & movie_id
function insertUser($session_id, $movie_id)
{
	global $wpdb;
	$table_name = $wpdb->prefix . "session_movie";
	//check is exits
	$result = $wpdb->get_results("SELECT * FROM $table_name WHERE session_id = '{$session_id}' AND movie_id = '{$movie_id}'");
	if (empty($result)) {
		$wpdb->insert($table_name, array('session_id' => $session_id, 'movie_id' => $movie_id));
	}
}
//Function to get all watched movie by session_id
function getMovieBySession($session_id)
{
	global $wpdb;
	$table_name = $wpdb->prefix . "session_movie";
	$results = $wpdb->get_results("SELECT * FROM $table_name WHERE session_id = '{$session_id}'");
	return $results;
}

function checkIsMovieWatch($watch_list, $movie_id)
{
	$is_watch = false;
	foreach ($watch_list as $list) {
		if ($list->movie_id == $movie_id) return $is_watch = true;
	}
	return $is_watch;
}

//Create table for session
captaincore_create_tables();
