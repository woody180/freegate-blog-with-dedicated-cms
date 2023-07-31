<?= $this->extend('layoutes/article') ?>

<?= $this->section('banner') ?>
<img src="<?= $article->article_banner ?>" alt="">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<?= $article->article_body ?>

<?= $this->endSection() ?>