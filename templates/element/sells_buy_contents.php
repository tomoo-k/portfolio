<div class="contents">
  <div class="sell-container1">
    <h2>購入内容の確認</h2>
  </div>


  <div class="sell-container2">
    <div class="sell-container2-1">
      <label class=label1>対象商品</label>
      <br>
      <div class="itempicture">
        <img src="../../img/sells/<?= h($sell->id); ?>/1.jpg" alt="">
      </div>
      <div class="itemname">
        <?= h($sell->name); ?>
        <br>
        &yen;<?= h($sell->price); ?>(税込み)送料込み
      </div>
    </div>
  </div>

  <div class="sell-container2">
    <div class="sell-container2-1">
      <label class=label1>決済方法</label>
      <br>
      クレジットカード
      <br>
      *********************
      <br>
      有効期限　09/99
    </div>
  </div>

  <div class="sell-container2">
    <div class="sell-container2-1">
      <label class=label1>配送先</label>
      <br>
      <?= h($loginuser['postal']) ?>
      <br>
      <?= h($loginuser['area'].$loginuser['city'].$loginuser['banchi'].$loginuser['building']) ?>
      <br>
      <?= h($loginuser['name']) ?>
    </div>
  </div>


    <div class="btn-default">
      <?= $this->Form->postLink(__('購入する'), ['action' => 'buy2', $sell->id], ['confirm' => __('購入しますか # {0}?', $sell->name)]) ?>
    </div>

    <div class="btn-return">
      <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
        <div class="btn-return2">
          もどる
        </div>
      </a>
    </div>

</div>
