<?php
get_header();
?>

<div class="p-sv-02">
  <h1><?php the_title(); ?></h1>
</div>

<div class="u-bg-orange-gray">
  <?php
  // パンくずリスト
  get_template_part('template-parts/breadcrumb');
  ?>
  <div class="l-base">
    <div class="c-form">
      <div class="c-form__box p-form">

        <?php
        // 利用登録情報 START
        // 利用登録後のメール認証URLをクリック直後もこちらに遷移
        if (!isset($_GET['a']) || (isset($_GET['a']) && $_GET['a'] == 'confirm')):
        ?>
          <h2 class="p-form__h1">利用登録情報</h2>
          <?php
          //ユーザー情報を取得
          $user = wp_get_current_user();
          $first_name = get_user_meta($user->ID, 'first_name', true);

          // 所属機関名
          $institution = get_the_author_meta('institution', $user->ID);

          // 役職・職種
          $position = get_the_author_meta('position', $user->ID);

          // 主たる活動領域
          // チェック項目の名称は取得できないため、手動で当てはめる。
          // 区切り文字は管理画面から[|]と設定済み。
          $activity_areas = get_the_author_meta('activity_areas', $user->ID);
          $activity_areas_array = explode("|", $activity_areas);

          $jp_activity_areas = '';
          if ($activity_areas) {
            foreach ($activity_areas_array as $area) {
              if ($area == 'health_care') {
                $jp_activity_areas .= '保健医療、';
              } elseif ($area == 'welfare') {
                $jp_activity_areas .= '福祉、';
              } elseif ($area == 'education') {
                $jp_activity_areas .= '教育、';
              } elseif ($area == 'judiciary_crime') {
                $jp_activity_areas .= '法・犯罪、';
              } elseif ($area == 'industry_labor') {
                $jp_activity_areas .= '産業・労働、';
              }
            }
            // 文末の「、」を削除
            $jp_activity_areas = mb_substr($jp_activity_areas, 0, -1);
          }

          // 主たる職種
          // チェック項目の名称は取得できないため、手動で当てはめる。
          // 区切り文字は管理画面から[|]と設定済み。
          $occupation = get_the_author_meta('occupation', $user->ID);
          $occupation_array = explode("|", $occupation);

          $jp_occupation = '';
          if ($occupation_array) {
            foreach ($occupation_array as $area) {
              if ($area == 'doctor') {
                $jp_occupation .= '医師、';
              } elseif ($area == 'psychologist') {
                $jp_occupation .= '公認心理師、';
              } elseif ($area == 'nurse') {
                $jp_occupation .= '看護師、';
              } elseif ($area == 'public_health_nurse') {
                $jp_occupation .= '保健師、';
              } elseif ($area == 'psw') {
                $jp_occupation .= '精神保健福祉士、';
              } elseif ($area == 'social_worker') {
                $jp_occupation .= '社会福祉士、';
              } elseif ($area == 'occupational_herapist') {
                $jp_occupation .= '作業療法士、';
              } elseif ($area == 'physical_therapist') {
                $jp_occupation .= '理学療法士、';
              } elseif ($area == 'nursery_teacher') {
                $jp_occupation .= '保育士、';
              } elseif ($area == 'others') {
                $jp_occupation .= 'その他、';
              }
            }
            // 文末の「、」を削除
            $jp_occupation = mb_substr($jp_occupation, 0, -1);
          }

          // 主たる職種 その他のテキストエリア
          $occupation_others = get_the_author_meta('occupation_others', $user->ID);

          // 利用登録の目的
          $purpose = get_the_author_meta('purpose', $user->ID);
          ?>
          <table class="p-mypage-table">
            <tr>
              <th>ユーザーID</th>
              <td><?php echo $user->user_login; ?></td>
            </tr>
            <tr>
              <th>お名前</th>
              <td><?php echo $first_name; ?></td>
            </tr>
            <tr>
              <th>メールアドレス</th>
              <td><?php echo $user->user_email; ?></td>
            </tr>
            <tr>
              <th>所属機関名</th>
              <td>
                <?php if ($institution) {
                  echo $institution;
                } else {
                  echo '未入力';
                } ?>
              </td>
            </tr>
            <tr>
              <th>役職・職種</th>
              <td>
                <?php if ($position) {
                  echo $position;
                } else {
                  echo '未入力';
                } ?>
              </td>
            </tr>
            <tr>
              <th>主たる活動領域</th>
              <td>
                <?php if ($jp_activity_areas) {
                  echo $jp_activity_areas;
                } else {
                  echo '未入力';
                } ?>
              </td>
            </tr>
            <tr>
              <th>主たる職種</th>
              <td>
                <p><?php echo $jp_occupation; ?></p>
                <?php if ($occupation_others): ?>
                  <p>その他：<?php echo $occupation_others; ?></p>
                <?php endif; ?>
                <?php if (!$jp_occupation && !$occupation_others) {
                  echo '未入力';
                } ?>
              </td>
            </tr>
            <tr>
              <th>利用登録の目的</th>
              <td>
                <?php if ($purpose) {
                  echo $purpose;
                } else {
                  echo '未入力';
                } ?>
              </td>
            </tr>
          </table>

        <?php
        endif;
        // 利用登録情報 END
        ?>

        <div class="p-mypage__profile">
          <?php
          // ユーザー名の回復 START
          if (isset($_GET['a'])):
            if ($_GET['a'] == 'getusername'):
          ?>
              <p class="u-tac p-mypage__getusername-txt">ご登録されたメールアドレスを<br class="u-sp">入力して送信してください。<br>ご登録メール宛にユーザー名のリセットURLを記載したメールが届きます。</p>
          <?php
            endif;
          endif;
          // ユーザー名の回復 END
          ?>
          <?php
          // [編集][パスワードの変更]ボタンの表示。
          // [編集]クリック時には編集画面と登録ボタンが表示される。
          ?>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <?php
        // 利用登録情報の編集 START
        if (isset($_GET['a'])):
          if ($_GET['a'] == 'edit'):
        ?>
            <a href="<?php echo home_url() . '/expert/mypage'; ?>" class="c-btn -orange-rev">マイページに戻る</a>
        <?php
          endif;
        endif;
        // 利用登録情報の編集 END
        ?>

        <?php
        // 利用登録情報 START
        if (!isset($_GET['a'])):
        ?>
          <div class="p-mypage__btn-box">
            <div class="c-btn-wrapper -orange-rev">
              <?php echo do_shortcode('[wpmem_logout]ログアウト[/wpmem_logout]'); ?>
            </div>
            <?php
            // 購読者のみに退会ボタンを表示
            if (current_user_can('subscriber')):
            ?>
              <a href="<?php echo home_url() . '/expert/delete'; ?>" class="c-btn -brown">退会する</a>
            <?php endif; ?>
          </div>
        <?php
        endif;
        // 利用登録情報 END
        ?>

      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>