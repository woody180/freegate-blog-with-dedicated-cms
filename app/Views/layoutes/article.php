<?= $this->include('partials/head') ?>
    
<?= $this->include('partials/header') ?>



<main class="uk-section min-height">
    <div class="uk-container uk-container-small uk-position-relative">

        <!-- <div id="floating-share" class="uk-flex">
            <a class="uk-icon-button" href="#" uk-icon="icon: facebook; ratio: .8"></a>
            <a class="uk-icon-button" href="#" uk-icon="icon: instagram; ratio: .8"></a>
            <a class="uk-icon-button" href="#" uk-icon="icon: pinterest; ratio: .8"></a>
            <a class="uk-icon-button" href="#" uk-icon="icon: twitter; ratio: .8"></a>
        </div> -->

        <div class="cover-image uk-height-large">
            <img src="https://picsum.photos/1920/1200" alt="">
        </div>


        <h1 class="title"><?= $title ?? '' ?></h1>
        <div class="uk-text-muted uk-text-italic">Author: <a href="#" class="uk-text-muted">Woody Woodpecker</a></div>
        <div class="uk-text-muted uk-text-italic">Published: 07.02.2023</div>
        <hr class="uk-divider-small">

        
        <?= $this->section('content') ?>


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
                <div>
                    <div class="uk-card">

                        <div class="uk-card-media-top">
                            <a href="article.html" class="absolute-link"></a>
                            <img src="https://picsum.photos/500/400?random=7" alt="something" />
                        </div>

                        <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
                            <h3 class="uk-card-title">Media Top</h3>

                            <p class="uk-text-meta uk-text-italic">December 14, 2016</p>

                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card">

                        <div class="uk-card-media-top">
                            <a href="article.html" class="absolute-link"></a>
                            <img src="https://picsum.photos/500/400?random=7" alt="something" />
                        </div>

                        <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
                            <h3 class="uk-card-title">Media Top</h3>

                            <p class="uk-text-meta uk-text-italic">December 14, 2016</p>

                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="uk-card">

                        <div class="uk-card-media-top">
                            <a href="article.html" class="absolute-link"></a>
                            <img src="https://picsum.photos/500/400?random=7" alt="something" />
                        </div>

                        <div class="uk-card-body uk-padding-remove-left uk-padding-remove-right">
                            <h3 class="uk-card-title">Media Top</h3>

                            <p class="uk-text-meta uk-text-italic">December 14, 2016</p>

                            <p class="description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?= $this->include('partials/footer') ?>
