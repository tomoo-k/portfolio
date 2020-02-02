<div class="contents">
  <div class="user-container1">
    <h2>ログイン</h2>
  </div>


  <?= $this->Form->create() ?>
  <div class="user-container2">
    <div class="user-container2-1">
      <label class=label1>メールアドレス</label>
      <label class=label2>必須</label>
      <br>
      <?= $this->Form->control('email', ['label' => false,'class' => 'input-default','name' => 'email','templateVars' => ['help' => 'PC・携帯どちらも可']]);?>
    </div>
    <div class="user-container2-1">
      <label class=label1>パスワード</label>
      <label class=label2>必須</label>
      <br>
      <?= $this->Form->control('password', ['label' => false,'class' => 'input-default','name' => 'password','templateVars' => ['help' => '7文字以上の半角英数字']]);?>
    </div>
  </div>

    <div class="btn-default1">
      <?= $this->Form->button('ログイン',['class' => 'btn-return3']); ?>
    </div>

  <?= $this->Form->end(); ?>

  <div class="btn-return">
    <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
      <div class="btn-return2">
        もどる
      </div>
    </a>
  </div>



</div>
