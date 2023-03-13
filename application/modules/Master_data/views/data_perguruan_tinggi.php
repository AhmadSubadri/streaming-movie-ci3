<!-- ============================================================== -->
<!-- Page wrapper -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><?php echo $title ?>
            </h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">
                        <i class="mdi mdi-home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </div>
        <div>
            <button
                class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10">
                <i class="ti-settings text-white"></i>
            </button>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
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
                                <h3 class="card-title"><?= $title ?>
                                    Info</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kode PT</label>
                                            <input
                                                type="text"
                                                id="kode_pt"
                                                name="kode_pt"
                                                class="form-control"
                                                placeholder="1234">
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
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Perguruan Tinggi</label>
                                            <input
                                                type="text"
                                                id="perguruan_tinggi"
                                                name="perguruan_tinggi"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
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
                                            <label for="telpon">Telepon</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="telpon"
                                                    name="telpon"
                                                    placeholder="Enter telpon">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-phone-in-talk"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fax">Fax</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="fax"
                                                    name="fax"
                                                    placeholder="Enter fax">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-fax"></i>
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
                                            <label for="alamat">Alamat</label>
                                            <div class="input-group">
                                                <input
                                                    type="link"
                                                    class="form-control"
                                                    id="alamat"
                                                    name="alamat"
                                                    placeholder="Enter alamat">
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="logo">Logo Instansi</label>
                                            <div class="custom-file">
                                                <input
                                                    type="file"
                                                    class="custom-file-input"
                                                    id="inputGroupFile01"
                                                    name="logo"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label form-control" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
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