<title><?= $title; ?></title>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="row">
        <div class="col-md-6">
            <div class="box">
                <div class="box-body">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"><?= $title; ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" action="<?= base_url('user/edit'); ?>" enctype="multipart/form-data" class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="inputEmail3" value="<?= $user['name']; ?>">
                                        <?= form_error('name', '<div class="text-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control" id="inputEmail3" value="<?= $user['email']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Image</label>

                                    <div class="col-sm-3">
                                        <img class="img-thumbnail" src="<?= base_url('asset/img/profile/') . $user['image']; ?>" alt="">
                                    </div>
                                    <div class="col-sm-4">
                                        <input name="image" type="file" id="exampleInputFile">
                                    </div>

                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <a href="<?= base_url('user'); ?>"><button type="button" class="btn btn-default">Back</button></a>
                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->