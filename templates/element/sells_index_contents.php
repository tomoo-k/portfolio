<div class="contents">
  <h2>新着アイテム</h2>

  <div class="newitems">
    <?php foreach ($sells as $sell) : ?>
      <div class="newitem">
        <a href="<?= $this->Url->build(['action'=>'view', $sell->id]); ?>">
          <div class="itempicture">
            <img src="img/sells/<?= h($sell->id); ?>/1.jpg" alt="">
          </div>
          <div class="itemname">
            <?= h($sell->name); ?>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<div class="spcontents">
  <h2>新着アイテム</h2>
  <div class="spnewitems">
    <?php foreach ($sells2 as $sell2) : ?>
      <div class="spnewitem">
        <a href="<?= $this->Url->build(['action'=>'view', $sell2->id]); ?>">
          <div class="spitempicture">
            <img src="img/sells/<?= h($sell2->id); ?>/1.jpg" alt="">
          </div>
          <div class="spitemname">
            <?= h($sell2->name); ?>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
