@include('layouts/header')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Cars Management
          <small>Add, Edit, and Delete</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-9">
            <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">List Cars</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table" id="list_cars">
              	<thead>
              		<tr>
              			<th>ID</th>
              			<th>Brand</th>
              			<th>Type</th>
              			<th>Year</th>
              			<th>Plate</th>
              			<th>Status</th>
              			<th>Tools</th>
              		</tr>
              	</thead>
              	<tbody>
              		<?php foreach ($cars->result() as $car): ?>
              		<tr>
              			<td><?php echo $car->car_id ?></td>
              			<td><?php echo $car->car_brand ?></td>
              			<td><?php echo $car->car_type ?></td>
              			<td><?php echo $car->car_year ?></td>
              			<td><?php echo $car->car_plate ?></td>
              			<td><?php echo status_car($car->car_status) ?></td>
              			<td><a href="<?php echo site_url('car/edit/'.$car->car_id) ?>" title="Edit this Car" class="btn btn-success"><i class="fa fa-edit"></i></a></td>
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
              <a href="<?php echo base_url('user/add') ?>" class="btn btn-success btn-block">Add Car</a>
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
@include('layouts/footer')
<script>
	$(function () {
	$('#list_cars').DataTable();
});
</script>
  