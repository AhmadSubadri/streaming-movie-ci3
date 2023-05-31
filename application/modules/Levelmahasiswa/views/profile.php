<div class="container-fluid">
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>">
    </div>
    <div class="row">
        <div class="col-lg-8 col-xlg-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Data Mahasiswa</h4>
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
                                        <?php if (!$data->foto) : ?>
                                            <img src="<?= base_url('assets/images/users/5.jpg'); ?>" class="img-circle" width="150" />
                                        <?php else : ?>
                                            <img src="<?= base_url('uploads/profile/' . $data->foto); ?>" class="img-circle" width="150" />
                                        <?php endif; ?>
                                        <h4 class="card-title m-t-10"><?php if (!$data) : ?><?php else : ?><?= $data->nama_mahasiswa; ?><?php endif; ?></h4>
                                        <h6 class="card-subtitle">Mahasiswa</h6>
                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= site_url('' . $data->email_mahasiswa); ?><?php endif; ?>" class="btn btn-circle btn-secondary" target="_blank"><i class="mdi mdi-gmail"></i></a>
                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= site_url('' . $data->telp_mahasiswa); ?><?php endif; ?>" class="btn btn-circle btn-secondary" target="_blank"><i class="fa fa-phone"></i></a>
                                    </center>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td><small class="text-muted">Status</small></td>
                                                    <td>
                                                        <h6>Aktif</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><small class="text-muted">SKS Tempuh</small></td>
                                                    <td>
                                                        <h6>64 SKS</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><small class="text-muted">Semester</small></td>
                                                    <td>
                                                        <h6>4</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><small class="text-muted">IPK</small></td>
                                                    <td>
                                                        <h6>3.54</h6>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><small class="text-muted">IPS Terakhir</small></td>
                                                    <td>
                                                        <h6>3.94</h6>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
                                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= $data->website; ?><?php endif; ?>" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $data->nama_prodi; ?></a>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Fakultas</strong>
                                                        <br>
                                                        <a href="<?php if (!$data) : ?> - <?php else : ?><?= $data->website; ?><?php endif; ?>" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $data->nama_fak; ?></a>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>NPM</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->npm_mahasiswa; ?><?php endif; ?></p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->telp_mahasiswa; ?><?php endif; ?></p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->email_mahasiswa; ?><?php endif; ?></p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Kampus</strong>
                                                        <br>
                                                        <p class="text-muted">Kampus Unit 2</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <td><small class="text-muted">Periode Masuk</small></td>
                                                                <td>
                                                                    <h6>Semester Gasal 2023</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><small class="text-muted">Pendidikan Asal</small></td>
                                                                <td>
                                                                    <h6><?php if (!$data) : ?> - <?php else : ?><?= $data->nama_sekolah; ?><?php endif; ?> (<?php if (!$data) : ?> - <?php else : ?><?= $data->jurusan_sekolah; ?><?php endif; ?>)</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><small class="text-muted">Kelas</small></td>
                                                                <td>
                                                                    <h6>UKT</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><small class="text-muted">Jenis Kuliah </small></td>
                                                                <td>
                                                                    <h6>Reguler Pagi [R1]</h6>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><small class="text-muted">Kurikulum</small></td>
                                                                <td>
                                                                    <h6>21-55201 - Kurikulum Teknik Informatika 2021</h6>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                            <div class="card-body">
                                                <!--  -->
                                            </div>
                                        </div>
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
                                                            <a href="<?php if (!$data) : ?> - <?php else : ?><?= $data->website; ?><?php endif; ?>" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $data->nama_prodi; ?></a>
                                                        </div>
                                                        <div class="col-md-4 col-xs-6 b-r">
                                                            <strong>Fakultas</strong>
                                                            <br>
                                                            <a href="<?php if (!$data) : ?> - <?php else : ?><?= $data->website; ?><?php endif; ?>" target="_blank"><i class="mdi mdi-link-variant"></i> <?= $data->nama_fak; ?></a>
                                                        </div>
                                                        <div class="col-md-4 col-xs-6 b-r">
                                                            <strong>NPM</strong>
                                                            <br>
                                                            <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->npm_mahasiswa; ?><?php endif; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-xs-6 b-r">
                                                            <strong>Mobile</strong>
                                                            <br>
                                                            <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->telp_mahasiswa; ?><?php endif; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-xs-6 b-r">
                                                            <strong>Email</strong>
                                                            <br>
                                                            <p class="text-muted"><?php if (!$data) : ?> - <?php else : ?><?= $data->email_mahasiswa; ?><?php endif; ?></p>
                                                        </div>
                                                        <div class="col-md-4 col-xs-6 b-r">
                                                            <strong>Kampus</strong>
                                                            <br>
                                                            <p class="text-muted">Kampus Unit 2</p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td><small class="text-muted">Periode Masuk</small></td>
                                                                    <td>
                                                                        <h6>Semester Gasal 2023</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small class="text-muted">Pendidikan Asal</small></td>
                                                                    <td>
                                                                        <h6><?php if (!$data) : ?> - <?php else : ?><?= $data->nama_sekolah; ?><?php endif; ?> (<?php if (!$data) : ?> - <?php else : ?><?= $data->jurusan_sekolah; ?><?php endif; ?>)</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small class="text-muted">Kelas</small></td>
                                                                    <td>
                                                                        <h6>UKT</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small class="text-muted">Jenis Kuliah </small></td>
                                                                    <td>
                                                                        <h6>Reguler Pagi [R1]</h6>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><small class="text-muted">Kurikulum</small></td>
                                                                    <td>
                                                                        <h6>21-55201 - Kurikulum Teknik Informatika 2021</h6>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="settings" role="tabpanel">
                                                <div class="card-body">
                                                    <!--  -->
                                                </div>
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