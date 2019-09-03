<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $title; ?></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <?= $this->session->flashdata('messagemenu'); ?>
                    <?= form_error('menu', ' <div class="alert alert-danger alert-dismissible">', '
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div>'); ?>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Name</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($menu as $m) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $m['menu']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                    <br>
                    <button class="btn btn-primary" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Add Menu</button>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $title2; ?></h3>
                </div>
                <div class="box-body">
                    <?= $this->session->flashdata('messagesubmenu'); ?>
                    <?= form_error('menu', ' <div class="alert alert-danger alert-dismissible">', '
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div>'); ?>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Name</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($submenu as $sm) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $sm['title']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                    <br>
                    <button class="btn btn-primary" type="button" class="btn btn-default" data-toggle="modal" data-target="#newSubmenuModal">Add SubMenu</button>
                </div>
            </div>
        </div>
    </div>
    <!-- endrow -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add <?= $title ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" action="<?= base_url('menu'); ?>" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="menu" class="form-control" placeholder="input menu name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="icon" class="form-control" placeholder="input icon">
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
    </div>
    <!-- /.modal-dialog -->

    <!-- modalsubmenu -->
    <div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New SubMenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/submenu'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" id="title" placeholder="submenu title">
                        </div>
                        <div class="form-group">
                            <select name="menu_id" class="form-control" id="menu_id">
                                <option value="">--Select Menu--</option>
                                <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="url" class="form-control" id="url" placeholder="input url">
                        </div>
                        <div class="form-group">
                            <input type="text" name="icon" class="form-control" id="icon" placeholder="icon">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" id="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Active?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>