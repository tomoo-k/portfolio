<div class="contents">
  <div class="buy-container1">
    <h2><?= h($sell->name) ?></h2>
  </div>


  <div class="buy-container2">

    <div class="buy-container2-1">
      <div class="buy-container2-1-main">
        <img class="main" src="../../img/sells/<?= h($sell->id); ?>/1.jpg">
      </div>
      <div class="buy-container2-1-sub1">

      <?php for( $i = 1; $i <= 10 ; $i++ ) :
        $filename = "img/sells/".h($sell->id)."/".h($i).".jpg";
        if (!file_exists($filename)){break;} ?>
        <div class="buy-container2-1-sub2">
          <img class="sub" src="../../img/sells/<?= h($sell->id); ?>/<?= h($i); ?>.jpg">
        </div>
      <?php endfor; ?>

      </div>
    </div>

    <div class="buy-container2-2">
      <table class="item-detail-table">
        <tbody>
          <tr>
            <th>出品者</th>
            <td><?= h($selluser->nickname); ?></td>
          </tr>
          <tr>
            <th>カテゴリー</th>
            <td><?= h($category->category->category_name) ?></td>
          </tr>
          <tr>
            <th>ブランド</th>
            <td><?= h($sell->brand) ?></td>
          </tr>
          <tr>
            <th>商品のサイズ</th>
            <td>M</td>
          </tr>
          <tr>
            <th>商品の状態</th>
            <td><?= h($state->state->state_name) ?></td>
          </tr>
          <tr>
            <th>配送料の負担</th>
            <td><?= h($postage->postage->postage_name) ?></td>
          </tr>
          <tr>
            <th>配送の方法</th>
            <td><?= h($delivery->delivery->delivery_name) ?></td>
          </tr>
          <tr>
            <th>配送元地域</th>
            <td><?= h($prefecture->prefecture->prefecture_name) ?></td>
          </tr>
          <tr>
            <th>発送日の目安</th>
            <td><?= h($day->day->day_name) ?></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>


  <div class="buy-container1">
    <h2>￥<?= h($sell->price) ?>（税込み）送料込み</h2>
  </div>


  <div class="btn-default">
    <a href="<?= $this->Url->build( ['action' => 'buy',$sell->id]); ?>">
      <div class="btn-return3">
        購入画面に進む
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

  <div class="buy-container2">
    <div class="buy-container2-3">
      <?= h($sell->detail) ?><br>
    </div>
  </div>

</div>
