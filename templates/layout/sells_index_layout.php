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

    <!-- <link rel="stylesheet" href="index.css"> -->
    <?= $this->Html->css('sells_index.css') ?>

  </head>

  <script src="https://kit.fontawesome.com/9490fcde10.js" crossorigin="anonymous"></script>

  <body>
    <?= $this->element('sells_index_header') ?>
    <?= $this->element('sells_index_contents') ?>
    <?= $this->element('sells_index_sell') ?>
    <?= $this->element('sells_aside') ?>
    <?= $this->element('sells_footer2') ?>
  </body>
</html>
