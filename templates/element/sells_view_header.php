<header>
  <div class="header1">
    <div class="header1-1">
      <?= $this->Html->link(__('karicari'), ['action' => 'index']) ?>
    </div>
    <div class="header1-2">
      <form action="" method="POST">
        <input class="serchtext" type="serch" placeholder="何をお探しですか？">
        <button class="serchbtn" type="button" value="検索"></button>
      </form>
    </div>
  </div>

  <div class="header2">

    <div class="header2-left">
      <div class="header2-1">
        <a href="#"><i class="fas fa-list fa-1.5x"></i> カテゴリーから探す</a>
      </div>
      <div class="header2-1">
        <a href="#"><i class="fas fa-tag fa-1.5x"></i> ブランドから探す</a>
      </div>
    </div>

    <div class="header2-right">
      <ul class="header2-right-ul">
        <li class="header2-iine <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="#"><i class="far fa-heart fa-1.5x"></i> いいね！一覧</a></li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="#"><i class="far fa-bell fa-1.5x"></i> お知らせ</a></li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="#"><i class="fas fa-check fa-1.5x"></i> やることリスト</a></li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'view', $loginuser['id']]); ?>"><i class="far fa-smile fa-1.5x"></i> <?= isset($loginuser['nickname']) ? $loginuser['nickname']:'マイページ'; ?></a></li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? 'hidden':'btn'; ?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'add']); ?>">
            新規登録
          </a>
        </li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? 'hidden':'btn'; ?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'login']); ?>">
            ログイン
          </a>
        </li>

      </ul>
    </div>
  </div>


  <div class="spheader1">
    <div class="spheader1-1">
      <?= $this->Html->link(__('karicari'), ['action' => 'index']) ?>
    </div>
    <div class="spheader1-right">
      <ul class="spheader1-right-ul">
        <li class="spheader1-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="#"><i class="far fa-bell fa-2x"></i> </a></li>
        <li class="spheader1-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="#"><i class="fas fa-check fa-2x"></i> </a></li>
        <li class="spheader1-li <?= isset($loginuser['nickname']) ? '':'hidden'; ?>"><a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'view', $loginuser['id']]); ?>"><i class="far fa-smile fa-2x"></i> </a></li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? 'hidden':'btn'; ?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'add']); ?>">
            新規登録
          </a>
        </li>
        <li class="header2-li <?= isset($loginuser['nickname']) ? 'hidden':'btn'; ?>">
          <a href="<?= $this->Url->build(['controller' => 'Users', 'action'=>'login']); ?>">
            ログイン
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="spheader2">
    <div class="spheader2-1">
      <form action="" method="POST">
        <input class="spserchtext" type="serch" placeholder="何をお探しですか？">
        <button class="spserchbtn" type="button" value="検索"></button>
      </form>
    </div>
  </div>


</header>
