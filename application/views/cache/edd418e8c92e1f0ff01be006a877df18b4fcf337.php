<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Welcome to
          <small>Car Request Systems</small>
        </h1>
        <!-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol> -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Transaction List</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             <table class="table" id="list_transaction">
               <thead>
                 <tr>
                   <th>Ticket</th>
                   <th>Employee Name</th>
                   <th>Request Time</th>
                   <th>Pickup Time</th>
                   <th>Pickup Location</th>
                   <th>Purpose</th>
                   <th>Status</th>
                   <th>Tools</th>
                 </tr>
               </thead>
               <tbody>
                <?php foreach ($trans->result() as $tran): ?>
                  
                 <tr>
                   <td><?php echo $tran->ticket ?></td>
                   <td><?php echo $tran->user_name ?></td>
                   <td><?php echo $tran->request_time ?></td>
                   <td><?php echo $tran->pickup_time ?></td>
                   <td><?php echo $model_helper->get_location('City,Districts', $tran->pickup_location) ?></td>
                   <td><?php echo $tran->purpose ?></td>
                   <td><?php echo status_tran($tran->status) ?></td>
                   <td><a href="<?php echo base_url('main/view/'.$tran->ticket) ?>" title="Click to View detail this Request" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
                 </tr>
                <?php endforeach ?>
               </tbody>
             </table>
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
              <a href="<?php echo base_url('main/add') ?>" class="btn btn-success btn-block">Add Ticket</a>
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
<?php echo $__env->make('layouts/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<script>
  $(function () {
  $('#list_transaction').DataTable();
});
</script>