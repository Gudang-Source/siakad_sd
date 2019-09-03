<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3><?= $title; ?>: <?= $detail[0]['name_students']; ?></h3>
                    <h3>Semester: <?= $detail[0]['name_periode']; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
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
                            <?php foreach ($detail as $detail) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $detail['course_name']; ?></td>
                                    <td><?= $detail['class_name']; ?></td>
                                    <td><?= $detail['name_periode']; ?></td>
                                    <td><?= $detail['daily_test']; ?></td>
                                    <td><?= $detail['mid_test']; ?></td>
                                    <td><?= $detail['finaly_test']; ?></td>
                                    <td id="result"><?= $detail['result']; ?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-adn" href="<?= base_url('kelas1/edit/') . $detail['score_id']; ?>"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('kelas1/delete/') . $detail['score_id']; ?>"><i class="fa fa-trash"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href=""><i class="fa fa-tasks"></i></a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                    </table>
                    <div class="col-xs-3 col-xs-offset-7">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nilai Rerata</th>
                                <th>
                                    <?php foreach ($jumlah as $jml)
                                        $rerata = $jml['jumlah'] / $jumlahbaris;
                                    echo round($rerata);  ?>
                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
<script type="text/javascript">
    $('#result').keyup(function() {
        var a = parseFloat($('#daily_test').val());
        var b = parseFloat($('#mid_test').val());
        var c = parseFloat($('#finaly_test').val());

        var jml = (a + b + c) / 3;

        $('#result').val(jml);
    });
</script>