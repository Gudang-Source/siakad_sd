<title><?= $title; ?></title>
<div class="register-box">
    <div class="register-logo">
        <b>User</b> Registration
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Please Registration before use SIAKAD</p>

        <form action="<?= base_url('auth/registration'); ?>" method="post">
            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <span><?= form_error('name'); ?></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <span><?= form_error('email'); ?></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password1" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <span><?= form_error('password1'); ?></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password2" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                <span><?= form_error('password2'); ?></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
                Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
                Google+</a>
        </div>
        <a href="<?= base_url('auth'); ?>" class="text-center">I already have a Account</a>
    </div>
    <!-- /.form-box -->
</div>