<?php 
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
 * タイトルタグの区切り文字をエン・ダッシュから縦線に変更する
 */
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator){
  $separator = '｜';
  return $separator;
}

/**
 * タイトルタグのテキストを変更する
 */
add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title){
  if (is_home()) {
    unset($title['tagline']); //タグライン削除
    $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
  }
  return $title;
}

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * 表示投稿数
 */
add_action( 'pre_get_posts', 'my_pre_get_posts' );
function my_pre_get_posts($query) {
  //管理画面、メインクエリ以外には設定しない
  if ( is_admin() || ! $query->is_main_query() ){
    return;
  }
  
  //トップページの場合
  if ( $query->is_home() ) {
    $query->set( 'posts_per_page', 3 );
    return;
  }
}

/**
* 記述重複削除
*/
add_action( 'wp', 'my_wpautop' );
function my_wpautop() {
  if ( is_page('contact')) {
    remove_filter('the_content', 'wpautop');
  }
}