<div class="container-fluid">
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>">
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                        <h3 class="">20231</h3>
                        <h6 class="card-subtitle">Tahun Akademik</h6>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                        <h3 class="">9876</h3>
                        <h6 class="card-subtitle">Mahasiswa</h6>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-account text-purple"></i></h2>
                        <h3 class="">234</h3>
                        <h6 class="card-subtitle">Dosen</h6>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title"><?= $name_profile; ?></h4>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>20231</h6>
                                        </li>
                                        <li><i class="mdi mdi-browser-circle text-success"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xlg-12 col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r">
                                    <center class="m-t-30">
                                        <?php if (!$data->imagedosen) : ?>
                                            <img src="<?= base_url('assets/images/users/5.jpg') ?>" class="img-circle" width="150" />
                                        <?php else : ?>
                                            <img src="<?= base_url('uploads/profile/' . $data->imagedosen); ?>" class="img-circle" width="150" />
                                        <?php endif; ?>
                                        <h4 class="card-title m-t-10"><?php if (!$data) : ?><?php else : ?><?= $data->namadosen; ?><?php endif; ?></h4>
                                        <h6 class="card-subtitle">Head of Study Program</h6>
                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= site_url('' . $data->emaildosen); ?><?php endif; ?>" class="btn btn-circle btn-secondary" target="_blank"><i class="mdi mdi-gmail"></i></a>
                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= site_url('' . $data->no_telepon_dosen); ?><?php endif; ?>" class="btn btn-circle btn-secondary" target="_blank"><i class="fa fa-phone"></i></a>
                                    </center>
                                </div>
                                <div class="col-md-9 col-xs-6 b-r">
                                    <ul class="nav nav-tabs profile-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#profile" role="tab">Profile</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Settings</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile" role="tabpanel">
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Program Studi</strong>
                                                        <br>
                                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= $data->websiteprodi; ?><?php endif; ?>" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $this->session->userdata('nama_users'); ?></a>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->telpprodi; ?><?php endif; ?></p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->emailprodi; ?><?php endif; ?></p>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="row text-center">
                                                    <div class="col-md-6 col-xs-6 b-r">
                                                        <strong>Akreditasi</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->akreditasi; ?><?php endif; ?></p>
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 b-r">
                                                        <strong>No SK Akreditasi</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->no_sk_akreditasi; ?><?php endif; ?></p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4 class="font-medium m-t-30 text-center">Visi</h4>
                                                <hr />
                                                <p class="m-t-30"><?php if (!$data) : ?> - <?php else : ?><?= $data->visi; ?><?php endif; ?></p>
                                                <h4 class="font-medium m-t-30 text-center">Misi</h4>
                                                <hr />
                                                <p><?php if (!$data) : ?> - <?php else : ?><?= $data->misi; ?><?php endif; ?></p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                            <div class="card-body">
                                                <form class="form row" action="<?= site_url('prodi/update-detail'); ?>" method="post">
                                                    <div class="form-group col-md-6">
                                                        <label>Select Kaprodi</label>
                                                        <div>
                                                            <select class="form-control form-control-line" name="kaprodi_kodedosen">
                                                                <?php foreach ($dosen as $itemdosen) : ?>
                                                                    <option value="<?= $itemdosen->iddosen; ?>"><?= $itemdosen->nip; ?>-<?= $itemdosen->namadosen; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Akreditasi</label>
                                                        <div>
                                                            <input type="text" value="<?php if (!$data) : ?><?php else : ?><?= $data->akreditasi; ?><?php endif; ?>" name="akreditasi" class="form-control form-control-line" required>
                                                            <input type="text" value="<?php if (!$prodikode) : ?><?php else : ?><?= $prodikode->kode_prodi; ?><?php endif; ?>" name="kode_prodi" class="form-control form-control-line" hidden>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <div class="form-group col-md-6">
                                                        <label>No SK Akreditasi</label>
                                                        <div>
                                                            <input type="text" name="no_sk_akreditasi" value="<?php if (!$data) : ?><?php else : ?><?= $data->no_sk_akreditasi; ?><?php endif; ?>" class="form-control form-control-line" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Website</label>
                                                        <div>
                                                            <input type="url" name="website" value="<?php if (!$data) : ?><?php else : ?><?= $data->website; ?><?php endif; ?>" class="form-control form-control-line" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="example-email">Email</label>
                                                        <div>
                                                            <input type="email" name="email" value="<?php if (!$data) : ?><?php else : ?><?= $data->emailprodi; ?><?php endif; ?>" class="form-control form-control-line" name="example-email" id="example-email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Password</label>
                                                        <div>
                                                            <input type="password" name="password" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Phone No</label>
                                                        <div>
                                                            <input type="text" name="telp" value="<?php if (!$data) : ?><?php else : ?><?= $data->telpprodi; ?><?php endif; ?>" class="form-control form-control-line" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Visi</label>
                                                        <textarea id="mymce" name="visi"><?php if (!$data) : ?><?php else : ?><?= $data->visi; ?><?php endif; ?></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Misi</label>
                                                        <textarea id="mymce" name="misi"><?php if (!$data) : ?><?php else : ?><?= $data->misi; ?><?php endif; ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-sm btn-success">Update Profile</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <hr />
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Statistik Mahasiswa Masuk dan Keluar</h4>
                                </div>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Diterima</h6>
                                        </li>
                                        <li>
                                            <h6 class="text-muted  text-info"><i class="fa fa-circle font-10 m-r-10"></i>Lulus</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="earning" style="height: 355px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3">
            <div class="card card-inverse card-dark">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="ti-light-bulb"></i></h1>
                        </div>
                        <div>
                            <h3 class="card-title">Mahasiswa Skripsi</h3>
                            <h6 class="card-subtitle">Semester Ganjil</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <h2 class="font-light text-white"><sup><small><i class="ti-arrow-up"></i></small></sup>534</h2>
                        </div>
                        <div class="col-6 p-t-10 p-b-20 text-right">
                            <div class="spark-count" style="height:65px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-inverse card-primary">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="m-r-20 align-self-center">
                            <h1 class="text-white"><i class="ti-pie-chart"></i></h1>
                        </div>
                        <div>
                            <h3 class="card-title">Rasio Mahasiswa</h3>
                            <h6 class="card-subtitle">2023</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 align-self-center">
                            <h2 class="font-light text-white"></h2>
                        </div>
                        <div class="col-6 p-t-10 p-b-20 text-right align-self-center">
                            <div class="spark-count2" style="height:65px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>