<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

// ページの追加
add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page() {
    add_menu_page('マニュアル', 'マニュアル', 'manage_options', 'click', 'add_manual_page', 'dashicons-welcome-learn-more', 3);
}

// ページの中身のHTML
function add_manual_page() {
?>
<div class="manual-contents">
    <h1>マニュアル</h1>
    <p>このページでは管理画面の使い方について説明する予定です。</p>
</div>
<?php
}

// サブページの追加
add_action('admin_menu', 'add_custom_submenu');
function add_custom_submenu() {
    add_submenu_page('click', 'サブメニュー1', 'サブメニュー1', 'manage_options', 'sub1', 'add_sub_manual_page1');
    add_submenu_page('click', 'サブメニュー2', 'サブメニュー2', 'manage_options', 'sub2', 'add_sub_manual_page2');
}

// ページの中身のHTML
function add_sub_manual_page1() {
?>
<div class="manual-contents">
    <h1>サブメニュー1</h1>
    <p>サブメニュー1:このページでは投稿の使い方について説明する予定です。</p>
</div>
<?php
}
// ページの中身のHTML
function add_sub_manual_page2() {
?>
<div class="manual-contents">
    <h1>サブメニュー2</h1>
    <p>サブメニュー2:このページでは投稿の使い方について説明する予定です。</p>
</div>
<?php
}
