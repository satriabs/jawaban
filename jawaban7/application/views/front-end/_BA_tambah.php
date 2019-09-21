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
                  <?=form_open('dashboard/BA') ?><div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="name" type="text" class="form-control" placeholder="Nama" required="" style="width:50%;">
                  </div>
				  <div class="form-group">
                    <label>Work</label>
                    <select name="id_work" class="form-control" style="width: 30%;">
 					<?php foreach ($bl->result() as $r) {
                      echo "<option value='$r->name_work'>$r->name_work</option>";
                    } ?>
                  </select>
                  </div>
				  <div class="form-group">
                    <label>Salary</label>
					<?php foreach ($b->result() as $r) {?>
                    <input name="id_salary" type="text" class="form-control" value="<?=$r->salry ?>"placeholder="Salary" required="" style="width:50%;">
                  </div>
				
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=base_url().'dashboard/sekolah' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
              </div>