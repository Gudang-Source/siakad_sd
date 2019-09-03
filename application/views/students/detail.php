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
                            <label class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readonly value="<?= $students['nis']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" readonly value="<?= $students['name_students']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Place of Birth</label>
                            <div class="col-sm-9">
                                <input readonly name="pod" class="form-control" value="<?= $students['pod']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input readonly class="form-control pull-right" value="<?= $students['bod']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <input class="form-control pull-right" readonly value="<?= $students['gender']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Religion</label>
                            <div class="col-sm-9">
                                <input readonly class="form-control pull-right" value="<?= $students['religion']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" readonly rows="3"><?= $students['address']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mother's name</label>
                            <div class="col-sm-9">
                                <input class="form-control" readonly value="<?= $students['mother_name']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" value="<?= $students['phone']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Class</label>
                            <div class="col-sm-9">
                                <input class="form-control" value="<?= $students['class_id']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('students'); ?>"><span class="btn btn-default">Back</span></a>
                    </div>
                </div>
            </div>
        </div>
</section>