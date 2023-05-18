<div class="container-fluid">
    <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('msg'); ?>">
    </div>
    <div class="card-group">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h2 class="m-b-0"><i class="mdi mdi-account-card-details text-info"></i></h2>
                        <h3 class=""><?= $biodata->npm_mahasiswa; ?> - <?= $biodata->nama_mahasiswa; ?></h3>
                        <h6 class="card-subtitle"><?= $biodata->jenis_kelamin_mahasiswa; ?></h6>
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
                        <h3 class=""><?= $biodata->nama_fak; ?> - <?= $biodata->nama_prodi; ?></h3>
                        <h6 class="card-subtitle">Dosen PA : Ahmad Subadri, S.Kom., M.Eng., MCF</h6>
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
                        <h2 class="m-b-0"><i class="mdi mdi-account-location text-purple"></i></h2>
                        <h3 class="">UKT/ Kampus Unit 2</h3>
                        <h6 class="card-subtitle">Smt / SKS / Status : 10 / 145 / Aktif</h6>
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
        <div class="col-lg-12 col-xlg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Jadwal Perkuliahan Hari ini</h4>
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
                            <div class="table-responsive">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hari</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Ruang</th>
                                            <th>Nama MK</th>
                                            <th>Kelas</th>
                                            <th>Pertemuan</th>
                                            <th>Pengajar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Selasa</td>
                                            <td>08.00</td>
                                            <td>10.00</td>
                                            <td>306</td>
                                            <td>Informatika</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Ahmad Subadri, S.Kom</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Selasa</td>
                                            <td>10.00</td>
                                            <td>12.00</td>
                                            <td>205</td>
                                            <td>Manajemen WEB</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Ade Fitriadin, S.Kom</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Selasa</td>
                                            <td>13.00</td>
                                            <td>15.00</td>
                                            <td>115</td>
                                            <td>Pengantar Informatika</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Chandra, S.Kom</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <hr />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Jadwal Perkuliahan Besok</h4>
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
                            <div class="table-responsive">
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Hari</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Ruang</th>
                                            <th>Nama MK</th>
                                            <th>Kelas</th>
                                            <th>Pertemuan</th>
                                            <th>Pengajar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Selasa</td>
                                            <td>08.00</td>
                                            <td>10.00</td>
                                            <td>306</td>
                                            <td>Informatika</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Ahmad Subadri, S.Kom</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Selasa</td>
                                            <td>10.00</td>
                                            <td>12.00</td>
                                            <td>205</td>
                                            <td>Manajemen WEB</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Ade Fitriadin, S.Kom</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Selasa</td>
                                            <td>13.00</td>
                                            <td>15.00</td>
                                            <td>115</td>
                                            <td>Pengantar Informatika</td>
                                            <td>Reguler</td>
                                            <td>6</td>
                                            <td>Chandra, S.Kom</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <hr />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex flex-wrap">
                                <div>
                                    <h4 class="card-title">Statistik Absensi Mahasiswa</h4>
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
    </div>
</div>