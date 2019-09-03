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
                            <input type="hidden" class="form-control" name="tcourse_id" value="<?= $teachers_course['tcourse_id']; ?>">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Teacher</label>
                                <div class="col-sm-9">
                                    <select name="teachers_id" class="form-control" id="teachers_id">
                                        <option value="<?= $teachers_course['teachers_id']; ?>"><?= $teachers_course['teachers_name']; ?></option>
                                        <?php foreach ($teachers as $t) : ?>
                                            <option value="<?= $t['teachers_id']; ?>"><?= $t['teachers_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Class</label>
                                <div class="col-sm-9">
                                    <select name="class_id" class="form-control" id="class_id">
                                        <option value="<?= $teachers_course['class_id']; ?>"><?= $teachers_course['class_name']; ?></option>
                                        <?php foreach ($class as $c) : ?>
                                            <option value="<?= $c['class_id']; ?>"><?= $c['class_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Course</label>
                                <div class="col-sm-9">
                                    <select name="course_id" class="form-control" id="course_id">
                                        <option value="<?= $teachers_course['course_id']; ?>"><?= $teachers_course['course_name']; ?></option>
                                        <?php foreach ($course as $cr) : ?>
                                            <option value="<?= $cr['course_id']; ?>"><?= $cr['course_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="<?= base_url('teachers_course'); ?>"><span class="btn btn-primary">Back</span></a>
                            <button class="btn btn-primary xs pull-right " type="submit">Save</button>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>