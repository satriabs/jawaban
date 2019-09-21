<?php
require_once "fungsi.php";
$posts 	= $fungsi->sql("SELECT nama.name, nama.id_work, nama.id_salary, nama.id FROM nama JOIN work ON nama.id_work=work.id_work JOIN category ON nama.id_salary=category.idc","all");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog Arkademi</title>
	<style type="text/css">
		ul li {list-style: none;}
	</style>
</head>
<body>
	<?php foreach ($posts as $r) { ?>
	<ul>
		<table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
					  <th width="21%">Nama</th>
                      <th width="21%">Work</th>
                      <th width="12%">Salary</th>
                    </tr>
                    </thead>
                    <tbody>	
					<?php $no=1; foreach($l->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
					  <td><?=$r->nama ?></td>
                      <td><?=$r->work ?></td>
                      <td><?=$r->salary ?></td>
					</tr>
					<?php $no++; } ?>
                  </table>
			</ul>
		</li>
	</ul>
	<?php } ?>
</body>
</html>