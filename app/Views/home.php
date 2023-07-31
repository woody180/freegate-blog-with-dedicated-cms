<?= $this->extend('layoutes/default') ?>

<?php if (!empty($featured)): ?>
<?= $this->section('featured') ?>
    <?= view('includes/featured_slider', ['featured' => $featured]) ?>
<?= $this->endSection() ?>
<?php endif; ?>


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



<?= $this->section('sidebar') ?>
    <?= $this->include('includes/sidebar') ?>
<?= $this->endSection() ?>
