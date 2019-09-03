<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $title; ?></h3>
                </div>
                <div class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readonly value="<?= $teachers['teachers_name']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readonly value="<?= $teachers['nip']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Place of Birth</label>
                            <div class="col-sm-9">
                                <input readonly name="pod" class="form-control" value="<?= $teachers['pod']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input readonly class="form-control pull-right" value="<?= $teachers['bod']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <input class="form-control pull-right" readonly value="<?= $teachers['gender']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" readonly rows="3"><?= $teachers['address']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" readonly value="<?= $teachers['email']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" value="<?= $teachers['phone']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('teachers'); ?>"><span class="btn btn-default">Back</span></a>
                    </div>
                </div>
            </div>
        </div>
</section>