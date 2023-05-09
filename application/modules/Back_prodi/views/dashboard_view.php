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
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xlg-12 col-md-12">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r">
                                    <center class="m-t-30">
                                        <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                        <h4 class="card-title m-t-10">Hanna Gover</h4>
                                        <h6 class="card-subtitle">Head of Study Program</h6>
                                        <button class="btn btn-circle btn-secondary">
                                            <i class="mdi mdi-gmail"></i>
                                        </button>
                                        <button class="btn btn-circle btn-secondary">
                                            <i class="fa fa-phone"></i>
                                        </button>
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
                                                <div class="row">
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Program Studi</strong>
                                                        <br>
                                                        <p class="text-muted"><?= $this->session->userdata('nama_users'); ?></p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Mobile</strong>
                                                        <br>
                                                        <p class="text-muted">(123) 456 7890</p>
                                                    </div>
                                                    <div class="col-md-4 col-xs-6 b-r">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted">informatika@upy.ac.id</p>
                                                    </div>
                                                </div>
                                                <hr>
                                                <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                                    dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                                    when an unknown printer took a galley of type and scrambled it to make a type
                                                    specimen book. It has survived not only five centuries
                                                </p>
                                                <p>It was popularised in the 1960s with the release of Letraset sheets
                                                    containing Lorem Ipsum passages, and more recently with desktop publishing
                                                    software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="settings" role="tabpanel">
                                            <div class="card-body">
                                                <form class="form-horizontal form-material">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Full Name</label>
                                                        <div class="col-md-12">
                                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="example-email" class="col-md-12">Email</label>
                                                        <div class="col-md-12">
                                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Password</label>
                                                        <div class="col-md-12">
                                                            <input type="password" value="password" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Phone No</label>
                                                        <div class="col-md-12">
                                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">Message</label>
                                                        <div class="col-md-12">
                                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-12">Select Country</label>
                                                        <div class="col-sm-12">
                                                            <select class="form-control form-control-line">
                                                                <option>London</option>
                                                                <option>India</option>
                                                                <option>Usa</option>
                                                                <option>Canada</option>
                                                                <option>Thailand</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success">Update Profile</button>
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