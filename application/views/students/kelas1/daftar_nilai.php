<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-2">
                        <h4><?= $title; ?></h4>
                    </div>
                    <div class="col-xs-2">
                        <a href="<?= base_url('kelas1'); ?>" class="btn btn-info">Input Nilai</a>
                    </div>
                    <div class="col-xs-6">
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
                            <?php foreach ($inputNilai1 as $input1) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $input1['name_students']; ?></td>
                                    <td><?= $input1['course_name']; ?></td>
                                    <td><?= $input1['class_name']; ?></td>
                                    <td><?= $input1['name_periode']; ?></td>
                                    <td><?= $input1['daily_test']; ?></td>
                                    <td><?= $input1['mid_test']; ?></td>
                                    <td><?= $input1['finaly_test']; ?></td>
                                    <td><?= $input1['result']; ?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-adn" href="<?= base_url('kelas1/edit/') . $input1['score_id']; ?>"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('kelas1/delete/') . $input1['score_id']; ?>"><i class="fa fa-trash"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href="<?= base_url('kelas1/detail/') . $input1['students_id']; ?>"><i class="fa fa-tasks"></i></a>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<script type="text/javascript">
    $('#daily_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = (a + b + c) / 3;

        $('#result').val(jml);
    });
    $('#mid_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = (a + b + c) / 3;

        $('#result').val(jml);
    });
    $('#finaly_test').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = (a + b + c) / 3;

        $('#result').val(jml);
    });
</script>