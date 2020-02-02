<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- <meta charset="utf-8"> -->
    <?= $this->Html->charset() ?>

    <!-- <title>仮カリ スマホでかんたん フリマアプリ</title> -->
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <?= $this->Html->css('users_add.css') ?>

  </head>

  <script src="https://kit.fontawesome.com/9490fcde10.js" crossorigin="anonymous"></script>

  <body>
    <?= $this->element('users_header') ?>
    <?= $this->element('users_add_contents') ?>
    <?= $this->element('users_footer') ?>
  </body>
</html>
