<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="<?= site_url('') ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="">Video</a>
                    <span><?= $this->uri->segment(2) ?></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__video__player">
                    <iframe src="https://drive.google.com/file/d/<?= $videos->url_video; ?>/preview" width="100%" height="500" allow="autoplay"></iframe>
                </div>
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>List Name</h5>
                    </div>
                    <?php foreach ($episode as $episode) : ?>
                        <a href="#"><?= $episode->episode ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="anime__details__episodes">
                    <div class="section-title">
                        <h5>Description</h5>
                    </div>
                    <div class="text-white p-2 rounded" style="background-color:#3C3D55;">
                        <?= $videos->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    <?php foreach ($comentar as $review) : ?>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="<?= $review->gambar ?>" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6><?= $review->nama ?> - <span><?= $review->waktu ?></span></h6>
                                <p><?= $review->komentar ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="#">
                        <textarea placeholder="Your Comment"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>