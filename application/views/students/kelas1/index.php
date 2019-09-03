<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <h3><?= $title; ?></h3>
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-6">
                        <a href="<?= base_url('kelas1/daftarnilai'); ?>" class="btn btn-info">Daftar Nilai</a>
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
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Kontak</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kelas1 as $k1) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $k1['nis']; ?></td>
                                    <td><?= $k1['name_students']; ?></td>
                                    <td><?= $k1['gender']; ?></td>
                                    <td><?= $k1['phone']; ?></td>
                                    <td><?= $k1['class_id']; ?></td>
                                    <td>
                                        <a data-toggle="tooltip" data-placement="top" title="Input Nilai" class="btn btn-adn" href="<?= base_url('kelas1/inputnilai/') . $k1['students_id']; ?>"><i class="fa fa-pencil"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('students/delete/') . $k1['students_id']; ?>"><i class="fa fa-trash"></i></a>
                                        <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href="<?= base_url('students/detail/') . $k1['students_id']; ?>"><i class="fa fa-tasks"></i></a>

                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>

        </div>
</section>