<?php
/*
Plugin Name:my_security
Plugin URI:https://creative-studio.jp/my_security/
Description:my_security
Version:1.0
Author:CS
Author URI:https://creative-studio.jp
*/


/**
 * Poster archive hidden redirect
 * 投稿者アーカイブ非表示リダイレクト
 */
function mysecurity_author_archive_redirect() {
   if( is_author() ) {
       wp_redirect( home_url());
       exit;
   }
}
add_action( 'template_redirect', 'mysecurity_author_archive_redirect' );

/**
 * Hide version of wordpress
 * wordpressのバージョン非表示
 */
remove_action('wp_head','wp_generator');
?>
