<div class="contents">
  <div class="user-container1">
    <h2>会員情報詳細</h2>
  </div>


  <div class="buy-container2">
    <div class="buy-container2-2">
      <table class="item-detail-table">
        <tbody>
          <tr>
            <th>ユーザID</th>
            <td><?= $this->Number->format($user->id) ?></td>
          </tr>
          <tr>
            <th>ニックネーム</th>
            <td><?= h($user->nickname) ?></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><?= h($user->email) ?></td>
          </tr>
          <tr>
            <th>名前</th>
            <td><?= h($user->name) ?></td>
          </tr>
          <tr>
            <th>カナ</th>
            <td><?= h($user->kana) ?></td>
          </tr>
          <tr>
            <th>生年月日</th>
            <td><?= h($user->birthday) ?></td>
          </tr>
          <tr>
            <th>郵便番号</th>
            <td><?= h($user->postal) ?></td>
          </tr>
          <tr>
            <th>住所</th>
            <td><?= h($user->area.$user->city.$user->banchi.$user->building) ?></td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td><?= h($user->phone) ?></td>
          </tr>
          <tr>
            <th>作成日時</th>
            <td><?= h($user->created_at) ?></td>
          </tr>
          <tr>
            <th>更新日時</th>
            <td><?= h($user->updated_at) ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="buy-container2">
    出品アイテム
    <div class="buy-container2-2">
      <div class="newitems">
        <?php foreach ($sellslist as $sell) : ?>
          <div class="newitem">
            <a href="<?= $this->Url->build(['controller' => 'Sells','action'=>'view', $sell->id]); ?>">
              <div class="itempicture">
                <img src="../../img/sells/<?= h($sell->id); ?>/1.jpg" alt="">
              </div>
              <div class="itemname">
                <?= h($sell->name); ?>
                <div class="btn-delete">
                  <a href="<?= $this->Url->build(['controller' => 'Sells','action' => 'delete', $sell->id]); ?>">
                    削除
                  </a>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>


  <div class="btn-default1">
    <a href="<?= $this->Url->build( ['action' => 'edit', $user->id]); ?>">
      <div class="btn-return2">
        会員情報を変更する
      </div>
    </a>
  </div>

  <div class="btn-default1">
    <a href="<?= $this->Url->build( ['action' => 'logout']); ?>">
      <div class="btn-return2">
        ログアウト
      </div>
    </a>
  </div>

  <div class="btn-return">
    <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
      <div class="btn-return2">
        もどる
      </div>
    </a>
  </div>

</div>
