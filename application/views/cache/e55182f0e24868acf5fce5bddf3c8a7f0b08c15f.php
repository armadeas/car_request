<?php echo $__env->make('layouts/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Transaction
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
          <div class="col-md-8">
            <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Booking Request</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form class="form-horizontal" method="POST" action="<?php echo base_url('main/submit') ?>">
                <div class="box-body">

                  <div class="form-group">
                    <label for="ticket" class="col-sm-3 control-label">Ticket</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="ticket" name="ticket" value="TRAN<?php echo date('Y') ?>-XXXXXXX" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="emp_id" class="col-sm-3 control-label">Emp ID</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="emp_id" name="emp_id" value="<?php echo $user->emp_id ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="user_name" class="col-sm-3 control-label">Emp Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="user_name" name="user_name" value="<?php echo $user->user_name ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="divisi_name" class="col-sm-3 control-label">Division</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="divisi_name" name="divisi_name" value="<?php echo $user->divisi_name ?>" readonly>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="purpose" class="col-sm-3 control-label">Purpose</label>
                    <div class="col-sm-9">
                      <select name="purpose" id="purpose" class="form-control">
                        <option value="Operational">Operational</option>
                        <option value="Trip">Trip</option>
                        <option value="Project">Project</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group" id="trip_number_f">
                    <label for="trip_number" class="col-sm-3 control-label">Trip Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="trip_number" name="trip_number" placeholder="Trip Number">
                    </div>
                  </div>

                  <div class="form-group" id="project_number_f">
                    <label for="project_number" class="col-sm-3 control-label">Project Number</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="project_number" name="project_number" placeholder="Project Number">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="pickup" class="col-sm-3 control-label">Pickup Location</label>
                    <div class="col-sm-3">
                      <select name="city_pickup" id="city_pickup" class="form-control">
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="districts_pickup" id="districts_pickup" class="form-control">
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="villages_pickup" id="villages_pickup" class="form-control">
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="dropoff" class="col-sm-3 control-label">Dropoff Location</label>
                    <div class="col-sm-3">
                      <select name="city_dropoff" id="city_dropoff" class="form-control">
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="districts_dropoff" id="districts_dropoff" class="form-control">
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select name="villages_dropoff" id="villages_dropoff" class="form-control">
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="booking_time" class="col-sm-3 control-label">Booking Time</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="booking_time" name="booking_time" placeholder="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="notes" class="col-sm-3 control-label">Notes</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="notes" id="notes" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <a href="<?php echo site_url('news') ?>" title="Cancel" class="btn btn-default">Cancel</a>
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
                <!-- /.box-footer -->
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
          <div class="col-md-4">
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
              <table class="table">
                <thead>
                  <tr>
                    <th>Recent Booking</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="" title="">TRAN2019-000001</a></td>
                  </tr>
                  <tr>
                    <td><a href="" title="">TRAN2019-000001</a></td>
                  </tr>
                  <tr>
                    <td><a href="" title="">TRAN2019-000001</a></td>
                  </tr>
                  <tr>
                    <td><a href="" title="">TRAN2019-000001</a></td>
                  </tr>
                </tbody>
              </table>

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

    $('#purpose').change(function (e) {
      console.log($(this).val());
      var purpose = $(this).val();
      if (purpose == 'Trip') {
        $('#trip_number_f').show();
        $('#project_number_f').hide();
      }else if (purpose == 'Project') {
        $('#trip_number_f').show();
        $('#project_number_f').show();
      } else {
        $('#trip_number_f').hide();
        $('#project_number_f').hide();
      }
    });

    $('#purpose').change();

    $('#city_pickup').select2({
      placeholder: 'Select City',
      ajax: {
        url: '<?php echo base_url('Helper/city_select') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public'
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });

    $("#villages_pickup, #districts_pickup").select2();


  $('#city_pickup').on('select2:select', function (e) {
    var data_city = e.params.data;
    $("#villages_pickup").select2("destroy");
    $("#villages_pickup").select2();
    $("#villages_pickup").select2("val", "");
    $('#districts_pickup').select2({
      placeholder: 'Select Districts',
      ajax: {
        url: '<?php echo base_url('Helper/districts') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            city: data_city.id
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });
    $("#districts_pickup").select2("val", "");

  });

  $('#districts_pickup').on('select2:select', function (e) {
    var data_districts = e.params.data;
    $('#villages_pickup').select2({
      placeholder: 'Select Districts',
      ajax: {
        url: '<?php echo base_url('Helper/villages') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            districts: data_districts.id
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });
  });

  $('#city_dropoff').select2({
      placeholder: 'Select City',
      ajax: {
        url: '<?php echo base_url('Helper/city_select') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            type: 'public'
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });

    $("#villages_dropoff, #districts_dropoff").select2();


  $('#city_dropoff').on('select2:select', function (e) {
    var data_city = e.params.data;
    $("#villages_dropoff").select2("destroy");
    $("#villages_dropoff").select2();
    $("#villages_dropoff").select2("val", "");
    $('#districts_dropoff').select2({
      placeholder: 'Select Districts',
      ajax: {
        url: '<?php echo base_url('Helper/districts') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            city: data_city.id
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });
    $("#districts_dropoff").select2("val", "");

  });

  $('#districts_dropoff').on('select2:select', function (e) {
    var data_districts = e.params.data;
    $('#villages_dropoff').select2({
      placeholder: 'Select Districts',
      ajax: {
        url: '<?php echo base_url('Helper/villages') ?>',
        delay: 250,
        dataType: 'json',
        data: function (params) {
          var query = {
            search: params.term,
            districts: data_districts.id
          }

          // Query parameters will be ?search=[term]&type=public
          return query;
        },
        processResults: function (data) {
          // Tranforms the top-level key of the response object from 'items' to 'results'
          return {
            results: data
          };
        }
      }
    });
  });

  $('#booking_time').daterangepicker({ 
      timePicker: true, 
      timePickerIncrement: 10, 
      locale: { format: 'YYYY-MM-DD HH:mm:ss' },
      timePicker24Hour: true
    })
});
</script>