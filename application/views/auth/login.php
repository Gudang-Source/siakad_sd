<title><?= $title; ?></title>
<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url(); ?>"><b>SIAKAD</b> TRIAL</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="email" value="<?= set_value('email'); ?>" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?= form_error('email'); ?>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?= form_error('password'); ?>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                Google+</a>
        </div>
        <!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="<?= base_url('auth/registration'); ?>" class="text-center">Register a new Account</a>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->