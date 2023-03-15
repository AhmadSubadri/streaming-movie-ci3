<div class="page-wrapper">
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php $this->load->view('template/alert.php');?>
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"><?php echo $title ?></h4>
                    </div>
                    <div class="card-body">
                        <form action="<?= site_url('dashboard/data-yayasan/insert')?>" method="post">
                            <div class="form-body">
                                <h3 class="card-title"><?= $title ?> Info</h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kode Badan Hukum.</label>
                                            <input
                                                type="text"
                                                id="kode_badan_hukum"
                                                name="kode_badan_hukum"
                                                class="form-control" value="<?= isset($data) ? $data->kode_badan_hukum : '';?>"
                                                placeholder="1234">
                                            <input
                                                type="text"
                                                id="id"
                                                name="id"
                                                class="form-control" value="<?= isset($data) ? $data->id : '';?>"
                                                placeholder="1234" hidden>
                                            <?php echo form_error('kode_badan_hukum', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Badan Hukum/Yayasan</label>
                                            <input
                                                type="text"
                                                id="nama_badan_hukum"
                                                name="nama_badan_hukum"
                                                class="form-control" value="<?= isset($data) ? $data->nama_badan_hukum : '';?>">
                                                <?php echo form_error('nama_badan_hukum', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Telepon</label>
                                            <input
                                                type="text"
                                                id="telepon_yayasan"
                                                name="telepon_yayasan"
                                                class="form-control"
                                                placeholder="0812***" value="<?= isset($data) ? $data->telepon_yayasan : '';?>">
                                                <?php echo form_error('telepon_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Fax.</label>
                                            <input type="text" id="fax_yayasan" name="fax_yayasan" class="form-control" value="<?= isset($data) ? $data->fax_yayasan : '' ;?>">
                                            <?php echo form_error('fax_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Alamat</label>
                                            <textarea id="alamat_yayasan" name="alamat_yayasan" class="form-control"><?= isset($data) ? $data->alamat_yayasan : '';?></textarea>
                                            <?php echo form_error('alamat_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_yayasan">Email address</label>
                                            <div class="input-group">
                                                <input
                                                    type="email"
                                                    class="form-control"
                                                    id="email_yayasan"
                                                    name="email_yayasan"
                                                    placeholder="Enter email" value="<?= isset($data) ? $data->email_yayasan : '';?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="ti-email"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php echo form_error('email_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="website_yayasan">Website</label>
                                            <div class="input-group">
                                                <input
                                                    type="link"
                                                    class="form-control"
                                                    id="website_yayasan"
                                                    name="website_yayasan"
                                                    placeholder="Enter website" value="<?= isset($data) ? $data->website_yayasan : '';?>">
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
                                            <label for="kota_yayasan">Kota</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="kota_yayasan"
                                                    name="kota_yayasan"
                                                    placeholder="Enter kota" value="<?= isset($data) ? $data->kota_yayasan : '';?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-pin"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php echo form_error('kota_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="pos_yayasan">Kode Pos</label>
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="pos_yayasan"
                                                    name="pos_yayasan"
                                                    placeholder="Enter kode pos" value="<?= isset($data) ? $data->pos_yayasan : '';?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-code-tags-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php echo form_error('pos_yayasan', '<small class="form-control-feedback text-danger">','</small>'); ?>
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
                                                    placeholder="Enter kode pos" value="<?= isset($data) ? $data->awal_berdiri : '';?>">
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="basic-addon2">
                                                        <i class="mdi mdi-code-tags-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <?php echo form_error('awal_berdiri', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-check"></i>
                                    Save</button>
                                <button type="button" class="btn btn-inverse btn-sm">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>