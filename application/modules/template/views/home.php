<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="trending__product">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="section-title">
                                <h4>Trending Now</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="btn__all">
                                <a href="#" class="primary-btn">View All <span class="arrow_right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php if (!$videos) : ?>
                            <!-- Tampilkan pesan jika tidak ada video -->
                        <?php else : ?>
                            <?php foreach ($videos as $video) : ?>
                                <?php $jumlalh_tonton = $this->db->select('COUNT(tb_riwayat_tontonan_tanpa_akun.id) as jumlah_tonton')->from('tb_riwayat_tontonan_tanpa_akun')->where('video_id', $video->idvideo)->order_by('jumlah_tonton', 'DESC')->get()->row() ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/dashboard/images/thumbnile/' . $video->thumbnail); ?>">
                                            <!-- <div class="ep"><?= $video->jumlah_episode ?> / <?= $video->jumlah_episode ?></div> -->
                                            <div class="comment"><i class="fa fa-comments"></i> <?= $video->jumlah_komentar ?></div>
                                            <div class="view"><i class="fa fa-eye"></i> <?= $jumlalh_tonton->jumlah_tonton ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?= $video->kategori ?></li>
                                            </ul>
                                            <h5><a href="<?= site_url('video/' . $video->slug) ?>"><?= $video->judul ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Views</h5>
                        </div>
                        <div class="filter__gallery">
                            <?php if (!$videos) : ?>
                                <!-- Tampilkan pesan jika tidak ada video -->
                            <?php else : ?>
                                <?php foreach ($videos as $video) : ?>
                                    <?php $jumlalh_tonton = $this->db->select('COUNT(tb_riwayat_tontonan_tanpa_akun.id) as jumlah_tonton')->from('tb_riwayat_tontonan_tanpa_akun')->where('video_id', $video->idvideo)->order_by('jumlah_tonton', 'DESC')->get()->row() ?>
                                    <div class="product__sidebar__view__item set-bg mix day years" data-setbg="<?= base_url('assets/dashboard/images/thumbnile/' . $video->thumbnail); ?>">
                                        <div class="ep"><i class="fa fa-comments"></i> <?= $video->jumlah_komentar ?></div>
                                        <div class="view"><i class="fa fa-eye"></i> <?= $jumlalh_tonton->jumlah_tonton ?></div>
                                        <h5><a href="<?= site_url('video/' . $video->slug) ?>"><?= $video->judul ?></a></h5>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->