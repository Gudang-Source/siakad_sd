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
                    <?= $this->session->flashdata('message'); ?>

                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>Kode Mapel</th>
                            <th>Mata Pelajaran</th>
                        </tr>
                        <?php $i = 1; ?>
                        <?php foreach ($course as $c) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $c['course_code']; ?></td>
                            <td><?= $c['course_name']; ?></td>
                        </tr>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                    <br>
                    <button class="btn btn-primary" type="button" class="btn btn-default" data-toggle="modal" data-target="#modalCourse">Add Menu</button>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="modalCourse" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New SubMenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('course/create'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="course_code" class="form-control" id="title" placeholder="kode mapel">
                    </div>
                    <div class="form-group">
                        <input type="text" name="course_name" class="form-control" id="url" placeholder="mata pelajaran">
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