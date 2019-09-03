<title><?= $title; ?></title>
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <?= $title; ?>
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fa fa-minus"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <form method="post" action="<?= base_url('setting/insertnews'); ?>">
                        <textarea id="editor1" name="newspaper" rows="10" cols="80">
                    </textarea>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>