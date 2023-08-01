<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">
            <?php if (!$slide) : ?>
            <?php else : ?>
                <?php foreach ($slide as $sld) : ?>
                    <div class="hero__items set-bg" data-setbg="<?= base_url('./assets/dashboard/images/slider/' . $sld->gambar); ?>">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <div class="label">Adventure</div>
                                    <h2><?= $sld->judul; ?></h2>
                                    <p><?= $sld->deskripsi; ?></p>
                                    <a href="<?= site_url('categories') ?>"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Hero Section End -->