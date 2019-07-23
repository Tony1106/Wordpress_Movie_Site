# Wordpress Martin's Movies

A coding challenge from Arcadian Digital using Wordpress, PHP, SASS, GULP and Javascripts.

## Installation

1. Clone the project and save to `wp-content/themes`
2. Install dependency:

```bash
npm instal
```
3. Login to Wordpress Admin page:
`id: user`
`password: password`
4. Active this theme in `Appearance/Themes`

## Key Requirement & Solution:

1.  Build a new listing page to pull all data from their new database in their Wordpress site:

- Use function `wp_remote_get($url);` to grab the data.
- Use function `json_decode()` to decode json to php array
- All that process live in the `custom_get_data($url)` in `functions.php`

2. Mark a movie as 'watched' so when they open the listing page again in the same browser it will still be marked as 'watched':

- Without login to get user data, I try to use session ID by: `wp_get_session_token();`
- Every time user open a new session and view any movie, we will save the user session with the movie_id by `insertUser($session_id, $movie_id);`
- In listing movie page, we will retrieve this data from the database and decide to show the watch symbol on the movie by `$watch_list = getMovieBySession($session_id);`

## Testing:
In this project I am not cover any testing.

## License
Tony Bui - 0449 70 1106

- Stack: https://stackoverflow.com/users/9694174/tony-bui

- Linkedin: https://www.linkedin.com/in/tienbui06/

- Git: https://github.com/Tony1106