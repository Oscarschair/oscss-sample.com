<h1 class="wp-heading-inline">Meta By URL</h1>

<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
   // settings_fields('custom-menu-group');
   // do_settings_sections('custom-menu-group'); ?>
    <div class="metabox-holder">
      <div class="postbox ">
        <h3 class='hndle'><span>テキスト</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">テキストを入力してください。</p>
            <h4>テキスト</h4>
            <p><input type="text" id="text" name="text" value="<?php //echo get_option('text'); ?>"></p>
          </div>
        </div>
      </div>
      <div class="postbox ">
        <h3 class='hndle'><span>テキストボックス</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">テキストボックスを入力してください。</p>
            <h4>テキストボックス</h4>
            <textarea id="textbox" class="regular-text" name="textbox" rows="10" cols="60"><?php //echo get_option('textbox'); ?></textarea>
          </div>
        </div>
      </div>
      <div class="postbox ">
        <h3 class='hndle'><span>セレクトボックス</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">セレクトボックスを選択してください。</p>
            <h4>セレクトボックス</h4>
            <select name="select" id="select">
              <option value="0" <?php //selected(0, get_option('select')); ?> >選択してください</option>
              <option value="1" <?php //selected(1, get_option('select')); ?> >セレクトボックス1</option>
              <option value="2" <?php //selected(2, get_option('select')); ?> >セレクトボックス2</option>
              <option value="3" <?php //selected(3, get_option('select')); ?> >セレクトボックス3</option>
            </select>
          </div>
        </div>
      </div>
      <div class="postbox ">
        <h3 class='hndle'><span>ラジオボタン</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">ラジオボタンを選択してください。</p>
            <h4>ラジオボタン</h4>
            <ul>
              <li><label><input name="radio" type="radio" value="0" <?php //checked(0, get_option('radio')); ?> />ラジオボタン0</label></li>
              <li><label><input name="radio" type="radio" value="1" <?php //checked(1, get_option('radio')); ?> />ラジオボタン1</label></li>
              <li><label><input name="radio" type="radio" value="2" <?php //checked(2, get_option('radio')); ?> />ラジオボタン2</label></li>
              <li><label><input name="radio" type="radio" value="3" <?php //checked(3, get_option('radio')); ?> />ラジオボタン3</label></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="postbox ">
        <h3 class='hndle'><span>チェックボックス</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">チェックボックスをチェックしてください。</p>
            <h4>チェックボックス</h4>
            <label><input name="checkbox" id="checkbox1" type="checkbox" value="1" <?php //checked(1, get_option('checkbox')); ?> />チェックボックス1</label>
          </div>
        </div>
      </div>
    </div>
    <?php// submit_button(); ?>
  </form>

<?php $this->portal_get_pages();?>
