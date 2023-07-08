<!-- Pagination -->

<?php $pager->setSurroundCount(1) ?>

<?php //dd($pager); ?>

<div class="uk-margin-large-top uk-flex uk-flex-center">
    <ul class="uk-pagination">
        <?php if ($pager->hasPrevious()) : ?>
        <li><a href="<?= $pager->getPreviousPage() ?>"><span uk-pagination-previous></span></a></li>
        <li><a href="<?= $pager->getFirst() ?>">1</a></li>
        <li class="uk-disabled"><span>…</span></li>
        <?php endif ?>
        
        <?php foreach ($pager->links() as $link): ?>
        <li <?= $link['active'] ? 'class="uk-active"' : '' ?>><a href="<?= $link['uri'] ?>"><?= $link['title'] ?></a></li>
        <?php endforeach ?>
        
        <?php if ($pager->hasNext()) : ?>
        <li class="uk-disabled"><span>…</span></li>
        <li><a href="<?= $pager->getLast() ?>"><?= $pager->getPageCount() ?></a></li>
        <li><a href="<?= $pager->getNextPage() ?>"><span uk-pagination-next></span></a></li>
        <?php endif ?>
    </ul>
</div>







