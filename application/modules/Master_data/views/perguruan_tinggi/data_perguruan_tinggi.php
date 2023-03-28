<div class="container-fluid">
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('msg');?>"> 
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-outline-info">
                <div class="nduwur rounded-top py-3 px-3">
                    <h4 class="m-b-0 text-white"><?php echo $title ?></h4>
                </div>
                <div class="card-body">
                <?php echo form_open_multipart('data-perguruan-tinggi/insert');?>
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
                                            value="<?= isset($data) ? $data->kode_pt : '';?>"
                                            placeholder="1234">
                                        <input
                                            type="text"
                                            id="id_pt"
                                            name="id_pt"
                                            class="form-control"
                                            value="<?= isset($data) ? $data->id_pt : '';?>"
                                            placeholder="1234"
                                            hidden="hidden">
                                        <?php echo form_error('kode_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_pt">Email address</label>
                                        <div class="input-group">
                                            <input
                                                type="email"
                                                class="form-control"
                                                id="email_pt"
                                                name="email_pt"
                                                placeholder="Enter email"
                                                value="<?= isset($data) ? $data->email_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="ti-email"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('email_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Nama Perguruan Tinggi</label>
                                        <input
                                            type="text"
                                            id="nama_pt"
                                            name="nama_pt"
                                            class="form-control"
                                            value="<?= isset($data) ? $data->nama_pt : '';?>">
                                        <?php echo form_error('nama_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="awal_berdiri_pt">Awal Berdiri</label>
                                        <div class="input-group">
                                            <input
                                                type="date"
                                                class="form-control"
                                                id="awal_berdiri_pt"
                                                name="awal_berdiri_pt"
                                                placeholder="Enter kode pos"
                                                value="<?= isset($data) ? $data->awal_berdiri_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-code-tags-check"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('awal_berdiri_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="website_pt">Website</label>
                                        <div class="input-group">
                                            <input
                                                type="link"
                                                class="form-control"
                                                id="website_pt"
                                                name="website_pt"
                                                placeholder="Enter website"
                                                value="<?= isset($data) ? $data->website_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-web"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('website_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="no_telepon_pt">Telepon</label>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="no_telepon_pt"
                                                name="no_telepon_pt"
                                                placeholder="Enter telpon"
                                                value="<?= isset($data) ? $data->no_telepon_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-phone-in-talk"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('no_telepon_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fax_pt">Fax</label>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="fax_pt"
                                                name="fax_pt"
                                                placeholder="Enter fax"
                                                value="<?= isset($data) ? $data->fax_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-fax"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('fax_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="alamat_pt">Alamat</label>
                                        <div class="input-group">
                                            <textarea class="form-control" id="alamat_pt" name="alamat_pt"><?= isset($data) ? $data->alamat_pt : '';?></textarea>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-pin"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('alamat_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kode_pos_pt">Kode Pos</label>
                                        <div class="input-group">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="kode_pos_pt"
                                                name="kode_pos_pt"
                                                placeholder="Enter kode pos"
                                                value="<?= isset($data) ? $data->kode_pos_pt : '';?>">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">
                                                    <i class="mdi mdi-code-tags-check"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <?php echo form_error('kode_pos_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="logo_pt">Logo Instansi</label>
                                        <div class="custom-file">
                                            <input
                                                type="file"
                                                class="custom-file-input"
                                                id="logo_pt"
                                                name="logo_pt"
                                                aria-describedby="logo_pt">
                                            <label class="custom-file-label form-control" for="logo_pt">Choose file</label>
                                        </div>
                                    </div>
                                    <?php echo form_error('logo_pt', '<small class="form-control-feedback text-danger">','</small>'); ?>
                                    <?php if(empty($data->logo_pt)):?>
                                    <img
                                        src="<?= base_url('uploads/no_image.jpg');?>"
                                        width="150px"
                                        height="150px"/>
                                <?php else:?>
                                    <img
                                        src="<?= base_url('uploads/'.$data->logo_pt);?>"
                                        width="200px"
                                        height="200px"
                                        class="img-fluid"/>
                                    <?php endif;?>
                                </div>
                                <!--/span-->
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-check"></i>
                                Save</button>
                            <button type="button" class="btn btn-inverse btn-sm">Cancel</button>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>