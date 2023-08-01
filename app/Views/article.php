<?= $this->extend('layoutes/article') ?>

<?= $this->section('banner') ?>
    <img src="<?= $article->article_banner ?>" alt="<?= $article->article_title ?>">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <?= $article->article_body ?>

<?= $this->endSection() ?>