<section class="content">
    <div class="col-xs-8">
        <!-- Horizontal Form -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <?= $title; ?>
                    <div class="col-xs-8">
                        <?php echo validation_errors('<span class="error">', '</span>'); ?>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= base_url('kelas1/update/') . $edit['score_id']; ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="students_id" class="col-sm-3 control-label">Nama Siswa</label>
                        <div class="col-sm-9">
                            <input type="text" readonly name="students_id" class="form-control" value="<?= $edit['name_students']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course_id" class="col-sm-3 control-label">Mata Pelajaran</label>
                        <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="course_id">
                                <option value="<?= $edit['course_id']; ?>"><?= $edit['course_name']; ?></option>
                                <?php foreach ($mapel as $mp) : ?>
                                    <option value="<?= $mp['course_id']; ?>"><?= $mp['course_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="teachers_id" class="col-sm-3 control-label">Nama Guru</label>
                        <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="teachers_id">
                                <option value="<?= $edit['teachers_id']; ?>"><?= $edit['teachers_name']; ?></option>
                                <?php foreach ($teachers as $teacher) : ?>
                                    <option value="<?= $teacher['teachers_id']; ?>"><?= $teacher['teachers_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="periode_id" class="col-sm-3 control-label">Semester</label>
                        <div class="col-sm-9">
                            <select class="form-control select2" style="width: 100%;" name="periode_id">
                                <option value="<?= $edit['periode_id']; ?>"><?= $edit['name_periode']; ?></option>
                                <?php foreach ($semester as $smt) : ?>
                                    <option value="<?= $smt['periode_id']; ?>"><?= $smt['name_periode']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="daily_test" class="col-sm-3 control-label">Nilai Harian</label>
                        <div class="col-sm-9">
                            <input type="number" min="0" name="daily_test" value="<?= $edit['daily_test']; ?>" class="form-control input-sm" id="daily_test">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mid_test" class="col-sm-3 control-label">Nilai UTS</label>
                        <div class="col-sm-9">
                            <input type="number" min="0" name="mid_test" value="<?= $edit['mid_test']; ?>" class="form-control input-sm" id="mid_test">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="finaly_test" class="col-sm-3 control-label">Nilai UAS</label>
                        <div class="col-sm-9">
                            <input type="number" min="0" name="finaly_test" value="<?= $edit['finaly_test']; ?>" class="form-control input-sm" id="finaly_test">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="result" class="col-sm-3 control-label">Rata-rata</label>
                        <div class="col-sm-9">
                            <input type="text" name="result" class="form-control input-sm" id="result" readonly value="<?= $edit['result']; ?>">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="<?= base_url('kelas1/inputnilai'); ?>" type="btn" class="btn btn-default">Back</a>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->

    </div>

</section>