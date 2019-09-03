<title><?= $title; ?></title>
<section class="content-header">
    <h1>
        SD N Binangun
        <small>Information System</small>
    </h1>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-body">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-thumbnails" src="<?= base_url('asset/img/profile/' . $user['image']); ?>" alt="User profile picture">

                        <h3 class="profile-username text-center"><?= $user['name']; ?></h3>

                        <p class="text-muted text-center">Profile</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Name: </b> <a class="pull-right"><?= $user['name']; ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email: </b> <a class="pull-right"><?= $user['email']; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.box -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Detail info</a></li>
                        <li><a href="#timeline" data-toggle="tab">Schedule</a></li>
                        <li><a href="#settings" data-toggle="tab">Edit Profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <h3>Detail Information User</h3>
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                    <li class="list-group-item"></li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            Schedule

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>

            <!-- /.box-body -->
        </div>

        <!-- /.box -->

</section>
<!-- /.content -->