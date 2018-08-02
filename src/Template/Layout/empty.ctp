<?php
/**
 * @link          https://github.com/lefte/primes
 * @since         0.0.1
 */

$cakeDescription = 'Erik\'s Prime Number Generator Sample';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?= $this->Html->css('bootstrap.min.css') ?>

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  </head>
  <body>
    <?= $this->Html->script('bootstrap.bundle.min.js') ?>
    <?= $this->Html->script('jquery-3.3.1.min.js') ?>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
  </body>
</html>
