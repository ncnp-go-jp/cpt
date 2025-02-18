<?php

function mytheme_setup()
{
  /**
   * <title>タグを出力する
   */
  add_theme_support('title-tag');

  /**
   * HTML5のサポート
   */
  add_theme_support('html5', array(
    'style',
    'script'
  ));

  /**
   * アイキャッチ画像を使用可能にする
   */
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mytheme_setup');

/**
 * head部分に読み込むcss,jsの設定
 */
function mytheme_enqueue()
{
  // フォント読み込み：読み込み速度を早くするためのfonts.gstatic.comなども読み込ませたいため、header.phpに直接記入。

  // フォント読み込み：font-awesome
  wp_enqueue_style(
    'awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    array(),
    null
  );

  // モーダルのCSS読み込み
  wp_enqueue_style(
    'modaal',
    get_theme_file_uri('assets/css/modaal.min.css'),
    array(),
    null
  );

  // サイトオリジナルのCSS読み込み
  wp_enqueue_style(
    'style',
    get_theme_file_uri('assets/css/style.css'),
    array(),
    filemtime(get_theme_file_path('assets/css/style.css'))
  );

  // wpのデフォルトのjqueryの読み込み中止
  wp_deregister_script('jquery');

  // 新たにjqueryのver3を読み込み
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');

  // 高さを揃えるライブラリ[matchHeight.js]
  wp_enqueue_script(
    'matchHeight',
    get_theme_file_uri('assets/js/vendor/jquery.matchHeight.js'),
    array('jquery'),
    ''
  );

  // モーダルライブラリ[modaal.js]
  wp_enqueue_script(
    'modaal',
    get_theme_file_uri('assets/js/vendor/modaal.min.js'),
    array('jquery'),
    ''
  );

  // ツールチップのライブラリ[popper.js]
  wp_enqueue_script(
    'popper',
    'https://unpkg.com/@popperjs/core@2',
    array('jquery'),
    ''
  );

  // ツールチップのライブラリ[tippy.js] ※popper.jsと合わせて必要
  wp_enqueue_script(
    'tippy',
    'https://unpkg.com/tippy.js@6',
    array('jquery'),
    ''
  );

  // サイトオリジナルのJS読み込み
  wp_enqueue_script(
    'main',
    get_theme_file_uri('assets/js/main.js'),
    array('jquery'),
    filemtime(get_theme_file_path('assets/js/main.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');

/**
 * 抜粋の文字数を変更
 */
function twpp_change_excerpt_length($length)
{
  return 34;
}
add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);

/**
 * 抜粋の省略記号を変更
 */
function twpp_change_excerpt_more($more)
{
  return '…';
}
add_filter('excerpt_more', 'twpp_change_excerpt_more');

/**
 * 固定ページに対し、pタグやbrタグの自動挿入を禁止
 */
function disable_page_wpautop()
{
  if (is_page()) {
    remove_filter('the_content', 'wpautop');
  };
}
add_action('wp', 'disable_page_wpautop');

/**
 * テーマフォルダへのURLを定数化
 */
define('THEME_DIR_URI', get_template_directory_uri() . '/assets/images/');

/**
 * カスタム投稿タイプを追加
 */
function create_post_type()
{
  register_post_type(
    'documents',
    array(
      'label' => 'CPTに親しむ',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'documents-cat',  // カテゴリーの名前
    'documents', // カテゴリーを追加したいカスタム投稿タイプ名
    array(
      'label' => '動画カテゴリ',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  // register_post_type(
  //   'column',
  //   array(
  //     'label' => 'コラム',
  //     'public' => true,
  //     'has_archive' => true,
  //     'show_in_rest' => true,
  //     'menu_position' => 6,
  //     'supports' => array(
  //       'title',
  //       'editor',
  //       'thumbnail',
  //       'revisions',
  //     ),
  //   )
  // );

  // register_taxonomy(
  //   'column-cat',  // カテゴリーの名前
  //   'column', // カテゴリーを追加したいカスタム投稿タイプ名
  //   array(
  //     'label' => 'カテゴリー',
  //     'hierarchical' => true,
  //     'public' => true,
  //     'show_in_rest' => true,
  //   )
  // );

  // register_post_type(
  //   'movie',
  //   array(
  //     'label' => '動画教材',
  //     'public' => true,
  //     'has_archive' => true,
  //     'show_in_rest' => true,
  //     'menu_position' => 7,
  //     'supports' => array(
  //       'title',
  //       'editor',
  //       'thumbnail',
  //       'revisions',
  //     ),
  //   )
  // );

  // register_taxonomy(
  //   'movie-cat',  // カテゴリーの名前
  //   'movie', // カテゴリーを追加したいカスタム投稿タイプ名
  //   array(
  //     'label' => 'カテゴリー',
  //     'hierarchical' => true,
  //     'public' => true,
  //     'show_in_rest' => true,
  //   )
  // );
}

add_action('init', 'create_post_type');

/**
 * 管理画面のカスタム投稿一覧にタクソノミー（カテゴリ）の列を表示 START
 */
// function add_custom_column($defaults)
// {
// global $post_type;
// if ('news' == $post_type) {
//   $defaults['news-cat'] = 'カテゴリ';
// } elseif ('column' == $post_type) {
//   $defaults['column-cat'] = 'カテゴリ';
// }
// return $defaults;
// }
// add_filter('manage_posts_columns', 'add_custom_column');

// function add_custom_column_id($column_name, $id)
// {
// if ($column_name == 'news-cat') {
//   echo get_the_term_list($id, 'news-cat', '', ', ');
// } elseif ($column_name == 'column-cat') {
//   echo get_the_term_list($id, 'column-cat', '', ', ');
// }
// }
// add_action('manage_case_posts_custom_column', 'add_custom_column_id', 10, 2);
// add_action('manage_facility_posts_custom_column', 'add_custom_column_id', 10, 2);
// カスタム投稿一覧にタクソノミー（カテゴリ）の列を表示 END


/**
 * テンプレートファイル名を指定して表示させるショートコード
 * テキストエディタに[myphp file='my-template']と入力。
 */
function shortcode_template_parts($params = array())
{
  extract(shortcode_atts(array('file' => 'default'), $params));
  ob_start();
  include(STYLESHEETPATH . "/template-parts/$file.php");
  return ob_get_clean();
}
add_shortcode('myphp', 'shortcode_template_parts');


/**
 * 不要なWordPress固有のデータ読み込みを削除
 */
// ブロックエディタのCSSを削除
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('global-styles');
});
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('classic-theme-styles');
});
// wpemojiを削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles', 10);
// wlwmanifest.xmlを削除
remove_action('wp_head', 'wlwmanifest_link');
//XML-RPCの削除
remove_action('wp_head', 'rsd_link');
//WordPressのバージョン情報を削除
remove_action('wp_head', 'wp_generator');
//その他削除
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

/**
 * すべての自動アップデートを無効化
 */
add_filter('automatic_updater_disabled', '__return_true');

/**
 * テキストエディタのボタンを削除
 */
function custom_quicktags_settings($qtInit)
{
  //指定したボタンは残す
  $qtInit['buttons'] = 'strong,img,more,close';
  return $qtInit;
}
add_filter('quicktags_settings', 'custom_quicktags_settings');

/**
 * 使用可能なHTMLタグを追加
 * ※ユーザー権限によってタグが消去される問題への対応
 */
function customKsesAllowedHtml($tags, $context)
{
  if ($context == 'post') {
    $tags['script'] = true; //削除されたくないタグや属性を入れる
    $tags['figure'] = array(
      'class' => true
    );
    $tags['figcaption'] = array(
      'class' => true
    );
    $tags['iframe'] = true;
    $tags['source'] = array(
      'source' => true,
      'srcset' => true
    );
    $tags['style'] = true;
    $tags['span'] = array(
      'class' => true
    );
    $tags['picture'] = array(
      'class' => true
    );
    $tags['table'] = array(
      'class' => true
    );
    $tags['tbody'] = array(
      'class' => true
    );
    $tags['tr'] = array(
      'class' => true
    );
    $tags['th'] = array(
      'class' => true
    );
    $tags['td'] = array(
      'class' => true
    );
  }
  return $tags;
}
add_filter('wp_kses_allowed_html', 'customKsesAllowedHtml', 10, 2);

/**
 * エディタのビジュアル・テキスト切替でコード消滅を防止
 */
function my_tiny_mce_before_init($init_array)
{
  $init_array['valid_elements']          = '*[*]';
  $init_array['extended_valid_elements'] = '*[*]';
  return $init_array;
}
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init');

/**
 * ビジュアルエディタに切り替えで、空の span タグや i タグが消されるのを防止
 */
if (!function_exists('tinymce_init')) {
  function tinymce_init($init)
  {
    $init['verify_html'] = false; // 空タグや属性なしのタグを消させない
    $initArray['valid_children'] = '+body[style], +div[div|span|a], +span[span], +table[tbody|tr|th|td]'; // 指定の子要素を消させない
    return $init;
  }
  add_filter('tiny_mce_before_init', 'tinymce_init', 100);
}

/* 固定ページ一覧にスラッグを追加する */
function add_page_column_slug_title($columns)
{
  $columns['slug'] = "スラッグ";
  return $columns;
}
function add_page_column_slug($column_name, $post_id)
{
  if ($column_name == 'slug') {
    $post = get_post($post_id);
    $slug = $post->post_name;
    echo esc_attr($slug);
  }
}
add_filter('manage_pages_columns', 'add_page_column_slug_title');
add_action('manage_pages_custom_column', 'add_page_column_slug', 10, 2);

/**
 * 親ページのスラッグで分岐させる
 */
function is_parent_slug()
{
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/**
 * 通常投稿のパーマリンクをカスタマイズ
 */
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

/**
 * WP-Membersのフォーム構成をカスタマイズ
 */
function my_register_form_args($defaults, $tag)
{
  // 外側の fieldset を外す
  $defaults['fieldset_before'] = '';
  $defaults['fieldset_after'] = '';

  // 見出しタグの変更
  $defaults['heading_before'] = '<h2 class="p-form__h1">';
  $defaults['heading_after'] = '</h2>';

  // 各行に wrapper を追加
  $defaults['row_before'] = '<div class="p-form__row">';
  $defaults['row_after'] = '</div>';

  // input タグのラッパーを外す
  $defaults['wrap_inputs'] = false;

  // [必須項目]の説明文を削除
  $defaults['req_label'] = '';
  $defaults['req_label_before'] = '';
  $defaults['req_label_after'] = '';

  return $defaults;
}
add_action('wpmem_register_form_args', 'my_register_form_args', 10, 2);
add_action('wpmem_login_form_args', 'my_register_form_args', 10, 2);

/**
 * WP-Membersの登録完了後、完了画面に遷移
 */
function my_reg_redirect($fields)
{
  wp_redirect(home_url() . '/expert/complete');
  exit();
}
add_action('wpmem_register_redirect', 'my_reg_redirect');

/**
 * WP-Membersのパスワードリセット画面のカスタマイズ
 */
function my_resetpassword_args($args)
{
  $args = array(
    'heading'      => 'ご登録されたメールアドレスを<br class="u-sp">入力して送信してください。<br>ご登録メール宛にパスワードの再登録URLを記載したメールが届きます。',
    'button_text'  => "送信"
  );

  return $args;
}
add_filter('wpmem_inc_resetpassword_args', 'my_resetpassword_args');

/**
 * WP-Membersのログイン後のリダイレクト先指定
 */
function my_login_redirect($redirect_to, $user_id)
{

  return home_url() . '/expert';
}
add_filter('wpmem_login_redirect', 'my_login_redirect', 10, 2);

/**
 * WP-Membersのデフォルトのダイアログを変更
 */
add_filter('wpmem_default_text', function ($text) {
  $text['register_heading'] = '利用登録'; // 会員情報見出し
  $text['register_submit'] = '登録する'; // 会員情報登録ボタン
  $text['profile_submit'] = '登録内容を変更する'; // 会員情報更新ボタン
  $text['profile_edit'] = '利用登録情報編集'; // マイページ会員情報編集ボタン
  return $text;
});

/**
 * 非ログイン時に会員情報関連のページにアクセスしたら、ログインページを表示
 */
function archive_video_page_redirect()
{
  // 非ログイン　かつ　会員情報ページのトップにアクセス時
  if (! is_user_logged_in() && is_page(array('expert', 'references', 'movie', 'assessment_tool', 'contact'))) {
    redirect_member_reg_form();
  }

  // 非ログイン　かつ　マイページにアクセス時
  // ただし、パスワード・ユーザーIDの再登録画面は除く
  if (isset($_GET['a'])) {
    $get_para = $_GET['a'];
    if (! is_user_logged_in() && is_page('mypage')) {
      if ($get_para == 'pwdreset' || $get_para == 'getusername') {
        // 何もしない
      } else {
        redirect_member_reg_form();
      }
    }
  } else {
    if (! is_user_logged_in() && is_page('mypage')) {
      redirect_member_reg_form();
    }
  }
}
add_action('template_redirect', 'archive_video_page_redirect');

/**
 * 利用登録画面にリダイレクト
 */
function redirect_member_reg_form()
{
  wp_redirect(home_url() . '/expert/member_reg_form');
  exit();
}
