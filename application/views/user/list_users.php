
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          User Management
          <small>Add, Edit, and Delete</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row"  >
                <?php foreach ($users->result() as $key => $user): ?>
                  
                
                <div class="col-md-4" >
                  <!-- Profile Image -->
                  <div class="box box-primary">
                    <div class="box-body box-profile">
                      <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>photo/users/<?php echo $user->user_photo ?>" alt="User profile picture">

                      <h3 class="profile-username text-center"><?php echo  $user->user_name ?></h3>

                      <p class="text-muted text-center">Software Engineer</p>

                      <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                          <b>NIK</b> <a class="pull-right"><?php echo  $user->emp_id ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Email</b> <a class="pull-right"><?php echo  $user->user_email ?></a>
                        </li>
                        <li class="list-group-item">
                          <b>Phone</b> <a class="pull-right"><?php echo  $user->user_phone ?></a>
                        </li>
                      </ul>

                      <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.Profile Image -->
                </div> 
                <?php endforeach ?>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <div class="col-md-3">
            <div class="box box-info box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Tools</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="<?php echo base_url('user/add') ?>" class="btn btn-success btn-block">Add User</a>
              <a href="<?php echo base_url('user') ?>" class="btn btn-warning btn-block">Report</a>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  