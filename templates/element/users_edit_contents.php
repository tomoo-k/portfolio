<div class="contents">
  <div class="user-container1">
    <h2>会員情報変更/削除</h2>
  </div>


  <?= $this->Form->create($user) ?>

  <div class="user-container2">
    <div class="user-container2-1">
      <label class=label1>ニックネーム</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）カリカリ太郎"> -->
      <?= $this->Form->control('nickname', ['label' => false,'class' => 'input-default','name' => 'nickname','templateVars' => ['help' => '例）カリカリ太郎']]);?>
    </div>
    <div class="user-container2-1">
      <label class=label1>メールアドレス</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）PC・携帯どちらも可"> -->
      <?= $this->Form->control('email', ['label' => false,'class' => 'input-default','name' => 'email','templateVars' => ['help' => '例）PC・携帯どちらも可']]);?>
    </div>
    <div class="user-container2-1">
      <label class=label1>パスワード</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）7文字以上の半角英数字"> -->
      <?= $this->Form->control('password', ['label' => false,'class' => 'input-default','name' => 'password','templateVars' => ['help' => '例）7文字以上の半角英数字']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>お名前（全角）</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default2" type="text" placeholder="例）山田">
      <input class="input-default2" type="text" placeholder="例）彩"> -->
      <?= $this->Form->control('name', ['label' => false,'class' => 'input-default','name' => 'name','templateVars' => ['help' => '例）山田　彩']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>お名前（カナ）</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default2" type="text" placeholder="例）ヤマダ">
      <input class="input-default2" type="text" placeholder="例）アヤ"> -->
      <?= $this->Form->control('kana', ['label' => false,'class' => 'input-default','name' => 'kana','templateVars' => ['help' => '例）ヤマダ　アヤ']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>生年月日</label>
      <label class=label2>必須</label>
      <br>
      <?= $this->Form->input('birthday', array(
        'type' => 'date','dateFormat' => 'YMD','monthNames' => false,'class' => 'input-default','name' => 'birthday' ));
        ?>
    </div>

    <div class="user-container2-1">
      <label class=label1>郵便番号</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）123-4567"> -->
      <?= $this->Form->control('postal', ['label' => false,'class' => 'input-default','name' => 'postal','templateVars' => ['help' => '例）123-4567']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>都道府県</label>
      <label class=label2>必須</label>
      <br>

      <?php $prefecture = ['0' => '---',
                          '1' => '北海道',
                          '2' => '青森県',
                          '3' => '岩手県',
                          '4' => '宮城県',
                          '5' => '秋田県',
                          '6' => '山形県',
                          '7' => '福島県',
                          '8' => '茨城県',
                          '9' => '栃木県',
                          '10' => '群馬県',
                          '11' => '埼玉県',
                          '12' => '千葉県',
                          '13' => '東京都',
                          '14' => '神奈川県',
                          '15' => '新潟県',
                          '16' => '富山県',
                          '17' => '石川県',
                          '18' => '福井県',
                          '19' => '山梨県',
                          '20' => '長野県',
                          '21' => '岐阜県',
                          '22' => '静岡県',
                          '23' => '愛知県',
                          '24' => '三重県',
                          '25' => '滋賀県',
                          '26' => '京都府',
                          '27' => '大阪府',
                          '28' => '兵庫県',
                          '29' => '奈良県',
                          '30' => '和歌山県',
                          '31' => '鳥取県',
                          '32' => '島根県',
                          '33' => '岡山県',
                          '34' => '広島県',
                          '35' => '山口県',
                          '36' => '徳島県',
                          '37' => '香川県',
                          '38' => '愛媛県',
                          '39' => '高知県',
                          '40' => '福岡県',
                          '41' => '佐賀県',
                          '42' => '長崎県',
                          '43' => '熊本県',
                          '44' => '大分県',
                          '45' => '宮崎県',
                          '46' => '鹿児島県',
                          '47' => '沖縄県',
                          '99' => '未定'];?>
      <?= $this->Form->select('prefecture', $prefecture,['label' => false,'class' => 'select-default3','name' => 'area']);?>

    </div>

    <div class="user-container2-1">
      <label class=label1>市町村</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）渋谷区"> -->
      <?= $this->Form->control('city', ['label' => false,'class' => 'input-default','name' => 'city','templateVars' => ['help' => '例）渋谷区']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>番地</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）渋谷１－２－３"> -->
      <?= $this->Form->control('banchi', ['label' => false,'class' => 'input-default','name' => 'banchi','templateVars' => ['help' => '例）渋谷１－２－３']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>建物名</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）カリカリ荘渋谷１０１"> -->
      <?= $this->Form->control('building', ['label' => false,'class' => 'input-default','name' => 'building','templateVars' => ['help' => '例）カリカリ荘渋谷１０１']]);?>
    </div>

    <div class="user-container2-1">
      <label class=label1>電話番号</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="例）08012345678"> -->
      <?= $this->Form->control('phone', ['label' => false,'class' => 'input-default','name' => 'phone','templateVars' => ['help' => '例）08012345678']]);?>
    </div>


  </div>


  <div class="btn-default1">
      <?= $this->Form->button('変更する',['class' => 'btn-return3']); ?>
  </div>

  <?= $this->Form->end(); ?>


  <div class="btn-default1">
      <?= $this->Form->postLink(__('退会する'), ['action' => 'delete','class' => 'btn-return3', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->name)]) ?>
  </div>

  <div class="btn-return">
    <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
      <div class="btn-return2">
        もどる
      </div>
    </a>
  </div>



</div>
