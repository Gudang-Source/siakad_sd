<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <h3><?= $title; ?></h3>
            <div class="box">
                <div class="box-header">
                    <form action="" method="POST">
                        <div class="col-xs-2">
                            <div class="input-group">
                                <select class="form-control" name="kelas">
                                    <option value="">--Pilih Kelas--</option>
                                    <?php foreach ($kelas as $kls) : ?>
                                        <option value="<?= $kls['class_id']; ?>"><?= $kls['class_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="input-group">
                                <select class="form-control" name="semester">
                                    <option value="">--Pilih Semester--</option>
                                    <?php foreach ($semester as $smt) : ?>
                                        <option value="<?= $smt['periode_id']; ?>"><?= $smt['name_periode']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <div class="input-group">
                                <select class="form-control" name="mapel">
                                    <option value="">--Pilih Mapel--</option>
                                    <?php foreach ($course as $crs) : ?>
                                        <option value="<?= $crs['course_id']; ?>"><?= $crs['course_name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <input type="submit" value="cari" class="btn btn-info">
                        </div>
                    </form>
                    <div class="col-xs-4">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama siswa</th>
                                <th>Mata Pelajaran</th>
                                <th>Kelas</th>
                                <th>Semester</th>
                                <th>Nilai harian</th>
                                <th>Nilai UTS</th>
                                <th>Nilai UAS</th>
                                <th>Rata-rata</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($score as $sc) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $sc['name_students']; ?></td>
                                    <td><?= $sc['course_name']; ?></td>
                                    <td><?= $sc['class_name']; ?></td>
                                    <td><?= $sc['name_periode']; ?></td>
                                    <td><?= $sc['daily_test']; ?></td>
                                    <td><?= $sc['mid_test']; ?></td>
                                    <td><?= $sc['finaly_test']; ?></td>
                                    <td><?= $sc['result']; ?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-adn" href="<?= base_url('score/edit') . $sc['score_id']; ?>"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('score/delete/') . $sc['score_id']; ?>"><i class="fa fa-trash"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href=""><i class="fa fa-tasks"></i></a>

                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
</section>