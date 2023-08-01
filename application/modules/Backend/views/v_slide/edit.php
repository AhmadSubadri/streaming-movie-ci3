<div class="row">
    <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
            <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                    <div class="mb-3 mb-sm-0">
                        <h5 class="card-title fw-semibold">Tambah Data Admin</h5>
                    </div>
                </div>
                <form action="<?= site_url('data-slide/update/' . $data->id); ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Title Slide</label>
                                <input type="text" placeholder="Title Slider *" value="<?= $data->judul ?>" class="form-control" name="judul" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Image Slide</label>
                                <input type="file" value="<?= $data->gambar ?>" class="form-control" name="gambar" id="exampleInputEmail1" aria-describedby="emailHelp" required />
                                <img src="<?= base_url('./assets/dashboard/images/slider/' . $data->gambar) ?>" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description Slider</label>
                                <textarea class="form-control" id="teksarea" name="deskripsi" required><?= $data->deskripsi ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Update
                            </button>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?= site_url('data-slide') ?>" class="btn btn-sm btn-danger m-1">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>