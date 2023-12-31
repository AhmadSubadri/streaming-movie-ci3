<?php $this->load->view('template/alert.php'); ?>
<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Update Data Video</h5>
                    </div>
                </div>
                <form action="<?= site_url('data-video/update'); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title Video</label>
                                <input type="text" placeholder="Title" class="form-control" name="judul" value="<?= $video->judul ?>" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('judul') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Duration</label>
                                <input type="time" placeholder="Duration" class="form-control" value="<?= $video->durasi ?>" name="durasi" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('durasi') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Category Video</label>
                                <select id="disabledSelect" name="kategori_id" class="form-select">
                                    <option class="disabled">-- Select Category --</option>
                                    <?php if (!$category) : ?>
                                    <?php else : ?>
                                        <?php foreach ($category as $ctg) : ?>
                                            <option value="<?= $ctg->id; ?>" <?= ($ctg->id == $video->kategori_id) ? "selected" : "" ?>>- <?= $ctg->kategori; ?></option>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </select>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('kategori_id ') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">ID Video from dailymotion</label>
                                <input type="url" placeholder="URL" value="<?= $video->url_video ?>" class="form-control" name="url_video" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('url_video ') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnile Video</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('thumbnail') ?>
                                </div>
                                <img src="<?= base_url('./assets/dashboard/images/thumbnile/' . $video->thumbnail) ?>" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Slug Video</label>
                                <input type="text" placeholder="mayat-bangkit-dari-kubur" value="<?= $video->slug ?>" class="form-control" name="slug" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('slug ') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label">Episode <small>(jika hanya 1 atau tidak ada episode isi Ep 01)</small></label>
                                <input type="text" value="<?= $video->episode ?>" placeholder="Ep 01" class="form-control" name="episode" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description Video</label>
                                <textarea class="form-control" id="teksarea" name="deskripsi"><?= $video->deskripsi ?></textarea>
                                <div id="emailHelp" class="form-text text-danger">
                                    <?= form_error('deskripsi') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('data-video') ?>" class="btn btn-sm btn-danger m-1">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>