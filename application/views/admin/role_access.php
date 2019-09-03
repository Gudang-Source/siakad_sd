<title><?= $title; ?> </title>
<section class="content">
    <div class="row">
        <div class="col-md-4">
            <div class="box">
                <div class="box-header">
                    <?= $title; ?>
                    <h3><?= $role['role']; ?></h3>
                </div>
                <!-- /.box-header -->

                <?= $this->session->flashdata('message'); ?>
                <div class="box-body no-padding">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Name Role</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $m['menu']; ?></td>
                                <td>
                                    <div class="checkbox">
                                        <label>
                                            <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <a href="<?= base_url('admin/role'); ?>"><button class="btn btn-info">Back</button></a>
        </div>
    </div>
</section>