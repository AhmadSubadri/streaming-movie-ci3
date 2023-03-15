    <!-- ============================================================== -->
    <!-- Container fluid -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"><?php echo $title ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <h3 class="card-title"><?= $title ?> Info</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kode Badan Hukum.</label>
                                            <input
                                                type="text"
                                                id="kode_badanhukum"
                                                name="kode_badanhukum"
                                                class="form-control"
                                                placeholder="1234">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Telepon</label>
                                            <input
                                                type="text"
                                                id="telepon"
                                                name="telepon"
                                                class="form-control"
                                                placeholder="0812***">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Badan Hukum/Yayasan</label>
                                            <input
                                                type="text"
                                                id="nama_badanhukum"
                                                name="nama_badanhukum"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Fax.</label>
                                            <input type="text" id="fax" name="fax" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <input type="text" id="alamat" name="alamat" class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email address</label>
                                            <div class="input-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="email"
                                                    name="email"
                                                    placeholder="Enter email">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="website">Website</label>
                                            <div class="input-group">
                                                <input
                                                    type="link"
                                                    class="form-control"
                                                    id="website"
                                                    name="website"
                                                    placeholder="Enter website">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-web"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="kota">Kota</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="kota"
                                                    name="kota"
                                                    placeholder="Enter kota">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-pin"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="kode_pos">Kode Pos</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="kode_pos"
                                                    name="kode_pos"
                                                    placeholder="Enter kode pos">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-code-tags-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="awal_berdiri">Awal Berdiri</label>
                                            <div class="input-group">
                                                <input
                                                    type="date"
                                                    class="form-control"
                                                    id="awal_berdiri"
                                                    name="awal_berdiri"
                                                    placeholder="Enter kode pos">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-code-tags-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                    Save</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->