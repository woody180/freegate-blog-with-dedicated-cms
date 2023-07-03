<?= $this->include('partials/head') ?>
    
<?= $this->include('partials/header') ?>
    
    <?= $this->renderSection('featured') ?>

    <!-- Main section -->
    <section class="uk-section">
        <div class="uk-container">
            <div>

                <div uk-grid class="uk-grid-large">

                    <!-- Main content area -->
                    <div class="uk-width-2-3@l uk-width-2-3@m uk-width-1-1">
                        <div>
                            
                            <div class="uk-child-width-1-2 uk-grid-match" uk-grid>
                                <?= $this->renderSection('content') ?>
                            </div>

                            <?= $this->renderSection('pager') ?>
                        </div>
                    </div>


                    <!-- Sidebar -->
                    <div class="uk-width-1-3@l uk-width-1-3@m uk-invisible@m">
                        <div>
                            <?= $this->renderSection('sidebar') ?>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </section>

    
<?= $this->include('partials/footer') ?>