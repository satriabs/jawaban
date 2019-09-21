<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BootcampArkademy</title>
    <link href="<?php echo base_url().'assets/dist/img/flogo.png' ?>" rel="shortcut icon" type="image/ico" />
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>bootstrap/css/bootstrap.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Archivo+Narrow|Play|Ubuntu+Condensed|Droid+Sans" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url().'assets/' ?>dist/css/costum.css">
    
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="<?=base_url() ?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?=base_url() ?>assets/js/markerclusterer_packed.js"></script>

    
  <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <?=form_open('dashboard/BA') ?>
              <div class="box-body">
                <div class="form-group">
                   <label>Nama</label>
                  <input name="ids" type="hidden" value="<?=$l['id'] ?>">
                  <input name="npsn" type="text" class="form-control" value="<?=$l['nama'] ?>">
                </div>
				<div class="form-group">
                  <label>Work</label>
                    <select name="work" class="form-control" style="width: 30%;">
 					<?php foreach ($bl->result() as $r) {
                      echo "<option value='$r->name_work'>$r->name_work</option>";
                    } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Salary</label>
                  <input name="telp" type="text" class="form-control" value="<?=$bl['salary'] ?>">
                </div>
                
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=base_url().'dashboard/Sekolah' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
              </div>
            </form>
				
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        
        <div class="col-sm-12 bottom-footer">
          Page rendered in <b>{elapsed_time}</b> seconds. Version <b>1.0</b><br>
          Copyright © 2019, Develop By Satria Budi Santoso </div>
        <!-- ./ BOTTOM-FOOTER -->
      </div>
    </div>
    

    <!-- jQuery 2.2.3 -->
    <script src="<?=base_url().'assets/' ?>plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="<?=base_url().'assets/' ?>bootstrap/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?=base_url().'assets/' ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url().'assets/' ?>plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });

        //Initialize Select2 Elements
        $(".select2").select2();
      });
    </script>
  </body>
</html>