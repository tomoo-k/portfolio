<div class="contents">
  <div class="sell-container1">
    <h2>購入内容の確認</h2>
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
