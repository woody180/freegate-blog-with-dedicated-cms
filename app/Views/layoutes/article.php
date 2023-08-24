<?= $this->include('partials/head') ?>
    
<?= $this->include('partials/header') ?>



<main class="uk-section min-height">
    <div class="uk-container uk-container-small uk-position-relative">


        <div class="cover-image uk-height-large">
            <?= $this->renderSection('banner') ?>
        </div>


        <h1 class="title"><?= $title ?? '' ?></h1>
        <div class="uk-text-muted uk-text-italic">Author: <a href="#" class="uk-text-muted uk-text-small">Woody Woodpecker</a></div>
        <div class="uk-text-muted uk-text-italic">Published: <span class="uk-text-small"><?= date('M.d.Y', strtotime($article->created_at)) ?></span></div>
        <div class="uk-text-muted uk-text-italic">Categories:
            <?php foreach ($category->titles as $index => $title): ?>
                <a class="uk-text-muted uk-text-italic uk-text-small uk-margin-small-right" href="<?= base_url("blog") . "/" . $category->urls[$index] ?>">
                    <span uk-icon="icon: hashtag; ratio: 0.7"></span>
                    <?= $title ?>
                </a>
            <?php endforeach; ?>
        </div>
        <hr class="uk-divider-small">

        
        <?= $this->renderSection('content') ?>

    </div>
</main>



<?= $this->include('partials/footer') ?>
