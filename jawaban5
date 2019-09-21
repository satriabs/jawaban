	<body>
    <form name="form1" action="" method="POST">
	<label>Tanggal</label><input type="text" name="tanggal" id="tanggal" >
	<label>Bayar</label><input type="text" name="bayar" id="bayar" >
	<input type="submit" name="submit" value="Submit"></form>
	 <?php
	  if ($_POST)
      {	$bayar		= $_POST['bayar'];
		$tanggal	= $_POST['tanggal'];
        $d=$bayar/2500;
		if ( $tanggal % 2=="1"){
		  $h = intval($d/3);
		  $dapat=$h+$d;
		}else if ( $tanggal % 2=="0"){
		  $h = intval($d/4);
		  $dapat=$h+$d;
		}else if ( $tanggal % 5=="0" and $tanggal % 2=="1" ){
		  $h = intval($d/3);
		  if($h%2=="0"){
		  $hi = $h*10;
		  $dapat=$hi+$d;}
	  else {$hi = $h*5;}
		$dapat=$hi+$d;}
		else if ( $tanggal % 5=="0" and $tanggal % 2=="0" ){
		  $h = intval($d/4);
		  if($h%2=="0"){
		  $hi = $h*10;}
	  else {$hi = $h*5;}
		$dapat=$hi+$d;}
        echo"<label>Dapat</label>echo '$dapat'";
	  }?>
