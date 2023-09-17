<section class="crieria pd-50">
    <div class="wrap-content">
        <div class="crieria__inner">
            <div class="criteria__list d-flex flex-wrap justify-content-between">
                <?php foreach ($criterias as $k => $v) { ?>
                    <div class="criteria__item">
                        <div class="criteria__item-inner">
                            <div class="criteria__photo">
                                <figure class="criteria__photo-inner">
                                    <img src="<?= ASSETS . PHOTOS . $v['photo'] ?>" alt="<?= $v['name'] ?>">
                                </figure>
                            </div>
                            <div class="criteria__info">
                                <div class="criteria__info-inner">
                                    <h3 class="criteria__name text-split transition"><?= $v['name'] ?></h3>
                                    <p class="criteria__desc text-split"><?= $v['desc'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($k + 1 != count($criterias)) { ?>
                        <hr class="separate">
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="product-featured pd-50">
    <div class="wrap-content">
        <div class="product-featured__inner">
            <header class="section__header">
                <p class="company-name">Yarn - Tiệm len handmade</p>
                <h2 class="home__title">Nổi bật</h2>
            </header>
            <div class="product__list flex-container">
                <?php foreach ($products as $k => $v) { ?>
                    <?php if ($k < 6) { ?>
                        <div class="product__item">
                            <div class="product__item-inner">
                                <div class="product__photo">
                                    <figure class="product__photo-inner hvr-flash-shape">
                                        <img src="<?= ASSETS . PHOTOS . $v['photo'] ?>" alt="<?= $v['name'] ?>">
                                    </figure>
                                </div>
                                <div class="product__info">
                                    <div class="product__info-inner">
                                        <div class="product__info--left">
                                            <h3 class="product__name text-split"><?= $v['name'] ?></h3>
                                            <div class="product__price">
                                                <span class="product__price-icon">
                                                    <img src="assets/images/icon-tomato.png" alt="Giá">
                                                </span>
                                                <span class="product__price-number"><?= $v['price'] ?></span>
                                            </div>
                                        </div>
                                        <div class="product__info--right">
                                            <button class="product__button"><i class="fa-regular fa-arrow-up-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="pagination">
                <ul class="pagination__list">
                    <li class="pagination__item pagination__item--active">1</li>
                    <li class="pagination__item pagination__item--next">2</li>
                    <li class="pagination__item pagination__item--last">3</li>
                </ul>
            </div>
        </div>
    </div>
</section>