<!-- Slider -->
<section class="uk-section-small uk-background-muted" id="featured-articles-slideshow">
    <div class="uk-container">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="animation: push; ratio: 16:6">

            <ul class="uk-slideshow-items">
                <?php foreach ($featured as $f_article): ?>
                <li>
                    <div class="uk-position-relative uk-width-1-1 uk-height-1-1">
                        <img src="<?= $f_article->article_banner ?>" alt="" uk-cover>
                        <div class="uk-position-center uk-position-small uk-text-center uk-light uk-position-z-index">
                            
                            <div class="uk-flex uk-flex-column">
                                <?php foreach (explode(",", $f_article->blog_category_title) as $i => $cat): ?>
                                <div>
                                    <a href="<?= base_url("blog/" . explode(",", $f_article->blog_category_url)[$i]) ?>" class="uk-label uk-margin-bottom"><?= $cat ?></a>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <h1 class="uk-margin-remove"><?= strtoupper($f_article->article_title) ?></h1>
                            <a href="<?= base_url("blog/".explode(",", $f_article->blog_category_url)[0] . "/{$f_article->article_url}") ?>" class="uk-button uk-button-default uk-margin-top">Continue reading</a>
                        </div>
                        <div class="layer-mask"></div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>
    </div>
</section>