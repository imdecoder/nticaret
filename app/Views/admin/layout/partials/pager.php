<?php $pager->setSurroundCount(2); ?>

<nav class="d-inline-block">
    <ul class="pagination mb-0">

        <?php if ($pager->hasPreviousPage()) : ?>

            <li class="page-item">
                <a href="<?=$pager->getFirst()?>" class="page-link" tabindex="-1">
                    <i class="fas fa-angle-double-left"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="<?=$pager->getPreviousPage()?>" class="page-link" tabindex="-1">
                    <i class="fas fa-angle-left"></i>
                </a>
            </li>

        <?php endif; ?>

        <?php foreach ($pager->links() as $link) : ?>

            <li class="page-item <?=$link['active'] ? 'active' : null?>">
                <a href="<?=$link['uri']?>" class="page-link">
                    <?=$link['title']?>
                </a>
            </li>

        <?php endforeach; ?>

        <?php if ($pager->hasNextPage()) : ?>

            <li class="page-item">
                <a href="<?=$pager->getNextPage()?>" class="page-link">
                    <i class="fas fa-angle-right"></i>
                </a>
            </li>
            <li class="page-item">
                <a href="<?=$pager->getLast()?>" class="page-link">
                    <i class="fas fa-angle-double-right"></i>
                </a>
            </li>

        <?php endif; ?>

    </ul>
</nav>
