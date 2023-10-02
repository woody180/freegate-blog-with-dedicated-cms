<header id="main-header">

    <div class="uk-flex uk-flex-center uk-padding uk-padding-remove-left uk-padding-remove-right" id="header-logo">
        <a href="/" class="uk-display-block uk-width-1-6@m uk-width-1-4@s uk-width-1-3">
            <img class="uk-display-block uk-width-1-1" src="<?= base_url("images/logo/logo.png") ?>" alt="">
        </a>
    </div>

    <div id="header-navs" class="uk-background-default" uk-sticky>
        <div class="uk-container uk-position-relative">
            <div id="header-nav-wrapper" class="uk-position-relative">
                <div class="uk-position-center-left">
                    <div class="uk-flex uk-flex-middle uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-left">

                        <div>
                            <a class="uk-display-inline-block uk-margin-small-right" href="#" uk-icon="icon: twitter; ratio: .8"></a>
                            <a class="uk-display-inline-block uk-margin-small-right" href="#" uk-icon="icon: linkedin; ratio: .8"></a>
                            <a class="uk-display-inline-block uk-margin-small-right" href="#" uk-icon="icon: instagram; ratio: .8"></a>
                            <a class="uk-display-inline-block uk-margin-small-right" href="#" uk-icon="icon: youtube; ratio: .8"></a>
                            <a class="uk-display-inline-block" href="#" uk-icon="icon: github; ratio: .8"></a>
                        </div>

                    </div>
                </div>

                <div class="uk-position-center uk-visible@m">
                    <div>
                        <div id="main-navigation" uk-navbar>
                            <ul class="uk-navbar-nav">
                                <li class="uk-active"><a href="#">Home page</a></li>
                                <li>
                                    <a href="#">Parent <span uk-navbar-parent-icon></span></a>
                                    <div class="uk-navbar-dropdown">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active"><a href="#">Active</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li class="uk-nav-header">Header</li>
                                            <li><a href="#">Item</a></li>
                                            <li><a href="#">Item</a></li>
                                            <li class="uk-nav-divider"></li>
                                            <li><a href="#">Item</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second thing</a></li>
                                <li><a href="#">Third one</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="uk-position-center-right">
                    <div class="uk-flex uk-flex-right uk-flex-middle uk-padding-small uk-padding-remove-top uk-padding-remove-bottom uk-padding-remove-right">
                        <div class="uk-flex uk-flex-middle">
                            <a uk-toggle="target: #offcanvas-overlay" href="#" uk-icon="icon: menu" class="uk-margin-right uk-hidden@m"></a>
                            <a class="uk-navbar-toggle" href="#search-line-full" uk-icon="icon: search" uk-toggle="target: #search-line-full; cls: active;"></a>
                        </div>
                    </div>
                </div>
            </div>


            <div id="search-line-full" class="uk-overflow-hidden">
                <form class="uk-search uk-search-default" method="GET">
                    <a id="close-main-search" href="#" class="uk-search-icon-flip" uk-icon="icon: close"></a>
                    <input name="search" class="uk-search-input" type="search" placeholder="Search" aria-label="Search" autofocus>
                </form>
            </div>

        </div>
    </div>
</header>