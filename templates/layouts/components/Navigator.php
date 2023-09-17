<nav id="nav">
    <ul class="nav__list">
        <?php foreach ($navs as $k => $v) { ?>
            <?php if ($k == 2) { ?>
                <li class="nav__item --is-logo">
                    <a class="logo" href="">
                        <figure class="logo__inner">
                            <img src="<?= ASSETS . PHOTOS . "logo.png" ?>" alt="tiem len dau lung ge">
                        </figure>
                    </a>
                </li>
            <?php } ?>
            <li class="nav__item nav__item--level-0">
                <a href="<?= $v['nav'] ?>" title="<?= $v['name'] ?>"><?= $v['name'] ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>