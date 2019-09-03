<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <h3><?= $title; ?></h3>
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">
                        <button class="btn btn-primary">Add Students</button>
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
                            <?php foreach ($students as $s) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $s['nis']; ?></td>
                                <td><?= $s['name_students']; ?></td>
                                <td><?= $s['gender']; ?></td>
                                <td><?= $s['phone']; ?></td>
                                <td><?= $s['class_name']; ?></td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-adn" href="<?= base_url('students/edit/') . $s['students_id']; ?>"><i class="fa fa-edit"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('students/delete/') . $s['students_id']; ?>"><i class="fa fa-trash"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href="<?= base_url('students/detail/') . $s['students_id']; ?>"><i class="fa fa-tasks"></i></a>

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