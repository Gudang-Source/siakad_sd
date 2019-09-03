<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data User</h3>
                    <?= $this->session->flashdata('delete'); ?>
                </div>
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><?= $u['role_id']; ?></td>
                            <td><img class="img-thumbnail img-responsive" width="80" src="<?= base_url('asset/img/profile/') . $u['image']; ?>"></td>
                            <td>
                                <a onclick="return confirm('are you sure?');" class=" btn btn-danger" href="<?= base_url('add_user/delete/') . $u['id']; ?>"> <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"><?= $title; ?></h3>
                </div>
                <!-- /.box-header -->
                <?= $this->session->flashdata('message'); ?>
                <?= form_error('role', ' <div class="alert alert-danger alert-dismissible">', '
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div>'); ?>
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Teachers name</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($teachers as $teacher) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $teacher['teachers_name']; ?></td>
                                <td>
                                    <form action="<?= base_url('add_user/create/'); ?>" method="post">
                                        <input type="hidden" name="teachers_id" value="<?= $teacher['teachers_id']; ?>">
                                        <input type="hidden" name="teachers_name" value="<?= $teacher['teachers_name']; ?>">
                                        <input type="hidden" name="email" value="<?= $teacher['email']; ?>">
                                        <input type="hidden" name="nip" value="<?= $teacher['nip']; ?>">
                                        <button type="submit" class="btn btn-primary btn-xs">Add to User</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>