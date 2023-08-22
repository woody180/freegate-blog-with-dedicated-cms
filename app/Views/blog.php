<?= $this->extend('layoutes/default') ?>

<?= $this->section('content') ?>

<?php foreach ($articles as $article): ?>
    <?= view('partials/card', ['article' => $article]) ?>
<?php endforeach; ?>

<?= $this->endSection() ?>


<?= $this->section('pager') ?>
    <?php if ($pager): ?>
        <?= $pager ?>
    <?php endif; ?>
<?= $this->endSection() ?>
