<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-8">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <div class="box-title">
                        <?= $title; ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?= base_url('kelas1/insertNilai'); ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="students_id" class="col-sm-3 control-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="students_id" value="<?= $students_id['students_id']; ?>">
                                <input type="text" class="form-control" value="<?= $students_id['name_students']; ?>" readonly>
                                <!-- <select class="form-control select2" style="width: 100%;" name="students_id">
                                    <option selected="selected ">--Pilih Siswa--</option>
                                    <?php foreach ($students1 as $s1) : ?>
                                        <option value="<?= $s1['students_id']; ?>"><?= $s1['name_students']; ?></option>
                                    <?php endforeach; ?>
                                </select> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="course_id" class="col-sm-3 control-label">Mata Pelajaran</label>
                            <div class="col-sm-9">
                                <select class="form-control select2" style="width: 100%;" name="course_id">
                                    <option selected="selected ">--Pilih Mapel--</option>
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
                                    <option selected="selected ">--Pilih Guru--</option>
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
                                    <option selected="selected ">--Pilih Semester--</option>
                                    <?php foreach ($semester as $smt) : ?>
                                        <option value="<?= $smt['periode_id']; ?>"><?= $smt['name_periode']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="daily_test" class="col-sm-3 control-label">Nilai Harian</label>
                            <div class="col-sm-9">
                                <input type="number" min="0" name="daily_test" value="0" class="form-control input-sm" id="daily_test" placeholder="Nilai Harian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mid_test" class="col-sm-3 control-label">Nilai UTS</label>
                            <div class="col-sm-9">
                                <input type="number" min="0" name="mid_test" value="0" class="form-control input-sm" id="mid_test" placeholder="Nilai UTS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="finaly_test" class="col-sm-3 control-label">Nilai UAS</label>
                            <div class="col-sm-9">
                                <input type="number" min="0" name="finaly_test" value="0" class="form-control input-sm" id="finaly_test" placeholder="Nilai UAS">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="result" class="col-sm-3 control-label">Rata-rata</label>
                            <div class="col-sm-9">
                                <input type="text" name="result" class="form-control input-sm" id="result" readonly value="0">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('kelas1'); ?>" type="btn" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!-- /form input -->
        <div class="col-xs-4">
            <?php echo validation_errors('<span class="error">', '</span>'); ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>