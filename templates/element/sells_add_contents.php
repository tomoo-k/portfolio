<div class="contents">
  <div class="sell-container1">
    <h2>商品の情報を入力</h2>
  </div>

  <?= $this->Form->create($sell, ['enctype' => 'multipart/form-data']); ?>

  <div class="sell-container2">
    <div class="sell-container2-1">
      <label class=label1>出品画像</label>
      <label class=label2>必須</label>
      <br>
      最大10枚までアップロードできます
      <br>
        <div class="sell-dropbox-containor">
        <?=  $this->Form->control('image1', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image2', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image3', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image4', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image5', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image6', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image7', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image8', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image9', ['type' => 'file','label' => false]); ?><br>
        <?=  $this->Form->control('image10', ['type' => 'file','label' => false]); ?><br>
        </div>
    </div>
  </div>


  <div class="sell-container2">
    <div class="sell-container2-1">
      <label class=label1>商品名</label>
      <label class=label2>必須</label>
      <br>
      <!-- <input class="input-default" type="text" placeholder="商品名（必須40文字まで）"> -->
      <?= $this->Form->control('name', ['label' => false,'class' => 'input-default','name' => 'name','templateVars' => ['help' => '商品名（必須40文字まで）']]);?>
    </div>
    <div class="sell-container2-1">
      <label class=label1>商品の説明</label>
      <label class=label2>必須</label>
      <br>
      <!-- <textarea class="textarea-default" rows="5" placeholder="商品の説明（必須 1,000文字以内）（色、素材、重さ、定価、注意点など）例）2010年頃に1万円で購入したジャケットです。ライトグレーで傷はありません。あわせやすいのでおすすめです。"></textarea> -->
      <?= $this->Form->control('detail', ['label' => false,'class' => 'input-default','name' => 'detail','templateVars' => ['help' => '商品の説明（必須 1,000文字以内）']]);?>
    </div>
  </div>

  <div class="sell-container3">
    <h3>商品の詳細</h3>
    <div class="sell-container3-1">
      <label class=label1>カテゴリー</label>
      <label class=label2>必須</label>
      <br>
      <?php $category_id = [
              '' => '---',
              '1' => 'レディース',
              '2' => 'メンズ',
              '3' => 'ベビー・キッズ',
              '4' => 'インテリア・住まい・小物',
              '5' => '本・音楽・ゲーム',
              '1328' => 'おもちゃ・ホビー・グッズ',
              '6' => 'コスメ・香水・美容',
              '7' => '家電・スマホ・カメラ',
              '8' => 'スポーツ・レジャー',
              '9' => 'ハンドメイド',
              '1027' => 'チケット',
              '1318' => '自動車・オートバイ',
              '10' => 'その他'];?>
      <?= $this->Form->select('category_id', $category_id,['label' => false,'class' => 'select-default','name' => 'category_id']);?>

    </div>
    <div class="sell-container3-1">
      <label class=label1>商品の状態</label>
      <label class=label2>必須</label>
      <br>
      <?php $state_id = [
              '' => '---',
              '1' => '新品、未使用',
              '2' => '未使用に近い',
              '3' => '目立った傷や汚れなし',
              '4' => 'やや傷や汚れあり',
              '5' => '傷や汚れあり',
              '6' => '全体的に状態が悪い'];?>
      <?= $this->Form->select('state_id', $state_id,['label' => false,'class' => 'select-default','name' => 'state_id']);?>
    </div>
  </div>

  <div class="sell-container3">
    <h3>発送について</h3>

    <div class="sell-container3-1">
      <label class=label1>配送料の負担</label>
      <label class=label2>必須</label>
      <br>
      <?php $postage_id = [
              '' => '---',
              '1' => '着払い(購入者負担)',
              '2' => '送料込み(出品者負担)'];?>
      <?= $this->Form->select('category_id', $postage_id,['label' => false,'class' => 'select-default','name' => 'postage_id']);?>
    </div>

    <div class="sell-container3-1">
      <label class=label1>配送方法</label>
      <label class=label2>必須</label>
      <br>
      <?php $delivery_id = [
              '' => '---',
              '1' => '未定',
              '14' => 'らくらくメルカリ便',
              '6' => 'ゆうメール',
              '8' => 'レターパック',
              '9' => '普通郵便(定形、定形外)',
              '10' => 'クロネコヤマト',
              '11' => 'ゆうパック',
              '13' => 'クリックポスト',
              '7' => 'ゆうパケット'];?>
      <?= $this->Form->select('delivery_id', $delivery_id,['label' => false,'class' => 'select-default','name' => 'delivery_id']);?>
    </div>

    <div class="sell-container3-1">
      <label class=label1>発送元の地域</label>
      <label class=label2>必須</label>
      <br>
      <?php $prefecture_id = [
                          '0' => '---',
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
      <?= $this->Form->select('prefecture_id', $prefecture_id,['label' => false,'class' => 'select-default','name' => 'prefecture_id']);?>
    </div>

    <div class="sell-container3-1">
      <label class=label1>発送までの日数</label>
      <label class=label2>必須</label>
      <br>
      <?php $day_id = [
              '' => '---',
              '1' => '1~2日で発送',
              '2' => '2~3日で発送',
              '3' => '4~7日で発送'];?>
      <?= $this->Form->select('day_id', $day_id,['label' => false,'class' => 'select-default','name' => 'day_id']);?>
    </div>
  </div>

  <div class="sell-container2">
    <h3>販売価格(300～9,999,999)</h3>
    <div class="sell-container2-1">
      <label class=label1>価格</label>
      <label class=label2>必須</label>
      <!-- <input class="input-price" type="text" placeholder="例）300"> -->
      <?= $this->Form->control('price', ['label' => false,'class' => 'input-default','name' => 'price']);?>
    </div>
    <div class="sell-container2-1">
      <label class=label1>販売手数料</label>
    </div>
    <div class="sell-container2-1">
      <label class=label1>販売利益</label>
    </div>
  </div>


  <div class="btn-default1">
    <?= $this->Form->button('出品する',['class' => 'btn-default']); ?>
  </div>

  <?= $this->Form->end() ?>


  <div class="btn-return">
    <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
      <div class="btn-return2">
        もどる
      </div>
    </a>
  </div>
</div>
