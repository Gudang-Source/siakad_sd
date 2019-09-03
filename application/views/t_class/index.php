<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-xs-8">
            <h3><?= $title; ?></h3>
            <div class="box">
                <div class="box-header">
                    <div class="col-xs-3">
                        <button class="btn btn-primary" class="btn btn-default" data-toggle="modal" data-target="#tcModal">Add Teachers Class</button>
                    </div>
                    <div class="col-xs-9">
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Nama Guru</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($teachers_class as $tc) : ?>
                            <tr>
                                <td><?= $tc['teachers_name']; ?></td>
                                <td><?= $tc['class_name']; ?></td>
                                <td>
                                    <a data-toggle="tooltip" data-placement="top" title="Edit" class="btn btn-adn" href="<?= base_url('t_class/edit/') . $tc['tc_id']; ?>"><i class="fa fa-edit"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-adn" onclick="return confirm('are you sure?');" href="<?= base_url('t_class/delete/') . $tc['tc_id']; ?>"><i class="fa fa-trash"></i></a>
                                    <a data-toggle="tooltip" data-placement="top" title="Detail" class="btn btn-adn" href="<?= base_url('t_class/detail/') . $tc['tc_id']; ?>"><i class="fa fa-tasks"></i></a>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- endrow -->
</section>
<!-- modalinput -->

<div class="modal fade" id="tcModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Teachers Class</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('t_class/create'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <select name="teachers_id" class="form-control" id="teachers_id">
                            <option value="">--Select Teacher--</option>
                            <?php foreach ($teachers as $t) : ?>
                            <option value="<?= $t['teachers_id']; ?>"><?= $t['teachers_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="class_id" class="form-control" id="teachers_id">
                            <option value="">--Select Class--</option>
                            <?php foreach ($class as $c) : ?>
                            <option value="<?= $c['class_id']; ?>"><?= $c['class_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>