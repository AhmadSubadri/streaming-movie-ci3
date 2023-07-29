<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="<?= site_url('') ?>"><i class="fa fa-home"></i> Home</a>
                    <a href="<?= site_url('categories') ?>">Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($category as $kategori) : ?>
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4><?= $kategori->kategori; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $this->db->select('tb_video.*, tb_video.id as idvideo, COUNT(tb_episode.id) AS jumlah_episode, COUNT(tb_komentar.id) AS jumlah_komentar');
                        $this->db->from('tb_video');
                        $this->db->where('tb_video.kategori_id', $kategori->id);
                        $this->db->join('tb_episode', 'tb_episode.video_id = tb_video.uniq_id');
                        $this->db->join('tb_komentar', 'tb_komentar.video_id = tb_video.id', 'left');
                        $this->db->group_by('tb_video.id');
                        $this->db->order_by('tb_video.tanggal_unggah', 'desc');
                        $query = $this->db->get()->result(); ?>
                        <div class="row">
                            <?php foreach ($query as $videodata) : ?>
                                <?php $jumlalh_tonton = $this->db->select('COUNT(tb_riwayat_tontonan_tanpa_akun.id) as jumlah_tonton')->from('tb_riwayat_tontonan_tanpa_akun')->where('video_id', $videodata->idvideo)->order_by('jumlah_tonton', 'DESC')->get()->row(); ?>
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/dashboard/images/thumbnile/' . $videodata->thumbnail); ?>">
                                            <!-- <div class="ep">18 / 18</div> -->
                                            <div class="comment"><i class="fa fa-comments"></i> <?= $videodata->jumlah_komentar ?></div>
                                            <div class="view"><i class="fa fa-eye"></i> <?= $jumlalh_tonton->jumlah_tonton ?></div>
                                        </div>
                                        <div class="product__item__text">
                                            <ul>
                                                <li><?= $kategori->kategori ?></li>
                                            </ul>
                                            <h5><a href="<?= site_url('video/' . $videodata->slug) ?>"><?= $videodata->judul ?></a></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Views</h5>
                        </div>
                        <div class="filter__gallery">
                            <?php foreach ($videos as $videodata) : ?>
                                <?php $jumlalh_tonton = $this->db->select('COUNT(tb_riwayat_tontonan_tanpa_akun.id) as jumlah_tonton')->from('tb_riwayat_tontonan_tanpa_akun')->where('video_id', $videodata->idvideo)->order_by('jumlah_tonton', 'DESC')->get()->row() ?>
                                <div class="product__sidebar__view__item set-bg mix day years" data-setbg="<?= base_url('assets/dashboard/images/thumbnile/' . $videodata->thumbnail); ?>">
                                    <div class="ep"><i class="fa fa-comments"></i> <?= $videodata->jumlah_komentar ?></div>
                                    <div class="view"><i class="fa fa-eye"></i> <?= $jumlalh_tonton->jumlah_tonton ?></div>
                                    <h5><a href="<?= site_url('video/' . $videodata->slug) ?>"><?= $videodata->judul ?></a></h5>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->