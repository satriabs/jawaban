<html>
  <head>
  </head>
  <body>
    <form action="" method="post" id="form-input">
      <label>Name</label><input type="text" name="idn" value="Satria Budi Santoso"/>
	  <label>Age</label><input type="number" name="age" value=24/>
      <label>Address</label><input type="text" name="adress" value="perum sukamanah residence blok C 25 No. 40"/>
	  <?php
	$hobbies = ["read manga", "watch Anime", "play Game Strategi"];
?>
	  <label>Hobbies</label><input type="text" name="hobbies" value=<?echo $hobbies[0]."<br>";echo $hobbies[0]."<br>";
	  echo $hobbies[0]."<br>";?>/>
	  <label>Status</label><br>
                    <div class='col-md-2'>
					<input type="radio" required value="Merried" name="status"> Merried
					</div>
					<div class='col-md-3'>
					<input type="radio" required value="Singgle" checked name="status"> Singgle
					</div></br>
	<?php $data = array(
    'list_school'     => array(
            'pt' => 'Politeknik Piksi Ganesha Bandung',
            'year_in' => '2017',
			'year_out' => '2018',
			'major' => 'management informatika',
        )
    );
	extract($data);
	foreach ($list_school as $key => $value) {?> 
	  <label>List School</label><input type="text" name="list_school" value="<? echo $value; ?>"/>

<?}?>
<?php $dskill     => array(
            's1' => 'Beginner',
            's2' => 'Advanced',
			's3' => 'Expert',
        )
    );
	extract($dskill);
	?> 
	  <label>Skill</label><input type="text" name="skill" value="<? echo $s1; ?>"/>
	  <label>Interest In Coding</label><br>
                    <div class='col-md-2'>
					<input type="radio" required value="Yes" checked name="interest"> Yes
					</div>
					<div class='col-md-3'>
					<input type="radio" required value="No"  name="interest"> No
					</div></br>
      <label>Website</label><input type="text" name="website" value="Jagowebdev.com"/>
      <input class="offset button" type="submit" name="submit" value="Submit"/>
    </form>

    <script type="text/javascript">
    $('#form-input').submit(function(e){
      e.preventDefault();
      data = {};
      $('input[name!="submit"]').each(function(i, elm) {
        data[$(elm).attr('name')] = elm.value;
      })
      
      data_json = JSON.stringify(data);
      alert(data_json);
      // Send data_json via AJAX...
    })
    </script> 
  </body>
</html>
