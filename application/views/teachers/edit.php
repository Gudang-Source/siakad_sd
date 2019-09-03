<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $title; ?></h3>
                </div>
                <form class="form-horizontal" action="" method="post">
                    <div class="box-body">
                        <input type="hidden" class="form-control" name="nis" value="<?= $teachers['teachers_id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="teachers_name" value="<?= $teachers['teachers_name']; ?>">
                                <?php echo form_error('teachers_name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nip" value="<?= $teachers['nip']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Place of Birth</label>
                            <div class="col-sm-9">
                                <input type="text" name="pod" class="form-control" value="<?= $teachers['pod']; ?>">
                                <?php echo form_error('pod'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date of Birth</label>
                            <div class="col-sm-9">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="bod" class="form-control pull-right" id="datepicker" value="<?= $teachers['bod']; ?>">
                                </div>
                                <?php echo form_error('bod'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" class="form-control">
                                    <option value="<?= $teachers['gender']; ?>"><?= $teachers['gender']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="address" rows="3"><?= $teachers['address']; ?></textarea>
                                <?php echo form_error('address'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="email" name="email" value="<?= $teachers['email']; ?>">
                                <?php echo form_error('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="phone" value="<?= $teachers['phone']; ?>">
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('teachers'); ?>"><span class="btn btn-primary">Back</span></a>
                        <button class="btn btn-primary xs pull-right " type="submit">Save</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>