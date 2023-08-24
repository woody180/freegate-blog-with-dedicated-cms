<?= $this->extend('layoutes/article') ?>

<?= $this->section('banner') ?>
    <img src="<?= $article->article_banner ?>" alt="<?= $article->article_title ?>">
<?= $this->endSection() ?>


<?= $this->section('content') ?>

    <?= $article->article_body ?>
    
    
    


    <div class="socials uk-flex uk-flex-right uk-margin-large-top">
        <a class="uk-margin-small-right uk-icon-button" href="#" uk-icon="icon: facebook; ratio: .8"></a>
        <a class="uk-margin-small-right uk-icon-button" href="#" uk-icon="icon: instagram; ratio: .8"></a>
        <a class="uk-margin-small-right uk-icon-button" href="#" uk-icon="icon: pinterest; ratio: .8"></a>
        <a class="uk-margin-small-right uk-icon-button" href="#" uk-icon="icon: twitter; ratio: .8"></a>
    </div>



    <!-- Related articles -->
    <div class="uk-margin-large-top">

        <h3>Related articles</h3>
        <hr class="uk-divider-small">

        <div class="uk-child-width-1-3@m uk-child-width-1-2@s" uk-grid>
            
            <?php foreach ($related as $rel): ?>
            <div>
                <div class="uk-card">

                    <div class="uk-card-media-top">
                        <a href="<?= base_url("blog/{$rel->blog_category_url}/{$rel->article_url}") ?>" class="absolute-link"></a>
                        <?= img(['src' => $rel->article_thumbnail]); ?>
                    </div>

                    <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
                        <a class="uk-link-reset" href="<?= base_url("blog/{$rel->blog_category_url}/{$rel->article_url}") ?>">
                            <h3 class="uk-card-title">
                                <?= $rel->article_title ?>
                            </h3>
                        </a>

                        <p class="uk-text-meta uk-text-italic"><?= date('F d, Y', strtotime($rel->created_at)) ?></p>

                        <p class="description">
                            <?= $rel->article_description ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </div>

<?= $this->endSection() ?>