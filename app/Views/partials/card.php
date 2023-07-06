
<div>
    <div class="uk-card">

        <div class="uk-card-media-top">
            <a href="<?= base_url("articles/{$article->article_url}") ?>" class="absolute-link"></a>
            <img src="<?= $article->article_thumbnail ?>" alt="something" />
        </div>

        <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
            <h3 class="uk-card-title"><?= ucfirst($article->article_title) ?></h3>

            <p class="uk-text-meta uk-text-italic"><?= date('F d, Y', strtotime($article->created_at)) ?></p>

            <p class="description">
                <?= esc($article->article_description) ?>
            </p>
        </div>
    </div>
</div>