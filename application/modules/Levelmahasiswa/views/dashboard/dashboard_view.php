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
        <div class="col-lg-8 col-xlg-9">
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
                            <div class="row">
                                <div class="col-md-9 col-xs-6 b-r">

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