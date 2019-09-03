<title><?= $title; ?> </title>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <i><span class="fa fa-gear"></span></i>
                    <h3 class="box-title"><?= $title; ?></h3>
                    <button data-toggle="modal" data-target="#modal-default" class="btn btn-primary pull-right">Add Role</button>
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
                            <th>Name Role</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($role as $r) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>"><span class="label label-info">Access</span>
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
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add <?= $title; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="<?= base_url('admin/role'); ?>" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="role" class="form-control" placeholder="input role name">
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>