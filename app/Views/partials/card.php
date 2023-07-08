
<div>
    <div class="uk-card">

        <div class="uk-card-media-top uk-position-relative">
            <a href="<?= base_url("blog/".explode(',', $article->blog_category_url)[0]."/{$article->article_url}") ?>" class="absolute-link shadow"></a>
            <img src="<?= $article->article_thumbnail ?>" alt="something" />
            
            <div class="uk-position-absolute uk-position-bottom-left uk-padding-small uk-light article-categorie-group">
                <?php foreach (explode(',', $article->blog_category_title) as $i => $c_title): ?>
                <a class="uk-text-small" href="<?= base_url("blog/") . explode(',', $article->blog_category_url)[$i] ?>">
                    <span uk-icon="icon: hashtag; ratio: .8"></span>
                    <?= $c_title ?>
                </a>
                <?php endforeach; ?>
            </div>
            
        </div>

        <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
            <h3>
                <a class="uk-card-title uk-link-reset uk-text-bold" href="<?= base_url("blog/".explode(',', $article->blog_category_url)[0]."/{$article->article_url}") ?>"><?= ucfirst($article->article_title) ?></a>
            </h3>

            <p class="uk-text-meta uk-text-italic"><?= date('F d, Y', strtotime($article->created_at)) ?></p>

            <p class="description">
                <?= esc($article->article_description) ?>
            </p>
        </div>
    </div>
</div>