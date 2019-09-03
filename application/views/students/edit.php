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
                        <input type="hidden" class="form-control" name="nis" value="<?= $students['students_id']; ?>">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nis" value="<?= $students['nis']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name_students" value="<?= $students['name_students']; ?>">
                                <?php echo form_error('name_students'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Place of Birth</label>
                            <div class="col-sm-9">
                                <input type="text" name="pod" class="form-control" value="<?= $students['pod']; ?>">
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
                                    <input type="text" name="bod" class="form-control pull-right" id="datepicker" value="<?= $students['bod']; ?>">
                                    <?php echo form_error('bod'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                                <select name="gender" class="form-control">
                                    <option value="<?= $students['gender']; ?>"><?= $students['gender']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <?php echo form_error('gender'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Religion</label>
                            <div class="col-sm-9">
                                <select name="religion" class="form-control">
                                    <option value="<?= $students['religion']; ?>"><?= $students['religion']; ?></option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Khatolik">Khatolik</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="address" rows="3"><?= $students['address']; ?></textarea>
                                <?php echo form_error('address'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Mother's name</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="mother_name" value="<?= $students['mother_name']; ?>">
                                <?php echo form_error('mother_name'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="phone" value="<?= $students['phone']; ?>">
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Class</label>
                            <div class="col-sm-9">
                                <select name="class_id" class="form-control">
                                    <option value="<?= $students['class_id']; ?>"><?= $students['class_name']; ?></option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('students'); ?>"><span class="btn btn-primary">Back</span></a>
                        <button class="btn btn-primary xs pull-right " type="submit">Save</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>