<?php 
// membuat class biodata
 class Biodata{
 	// menyimpan data dalam array
 	public $data = [];
 	// fungsi nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}
	// fungsi umur
	public function umur($umur)
 	{
 		$this->data['age'] = $umur;
 		return $this;
 	}
 	// fungsi alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}
 	// fungsi hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// fungsi sekolah
 	public function list_school($list_school = array())
 	{
 		$this->data['list_school'] = $list_school;
 		return $this;
 	}
 	// fungsi kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}
 	// fungsi konvert ke json
 	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}
$biodata 	= new Biodata();
$nama		= "Satria Budi Santosso";
$umur		= "24";
$alamat		= "perum sukamanah residence blok C 25 No. 40 desa sukamanah Kec. Sukatani Kab. Bekasi Prov.Jawa Barat";
$hobi 		= ['read manga','Watch Anime','play game'];
$list_school	= [
				'Unyversity' => 'Politeknik Piksi Ganesha Bandung',
				'year_in' => '2017',
				'year_out' => '2018',
				'major' => 'management informatika',
				"highSchool" 	=> "SMK Negeri 1 Kedawung",
				"university" 	=> ""
			 ];
$kemampuan	= [
				"Web"		=> ['HTML','CSS','PHP'],
				"level"	=> ['Beginning']
			  ];
print_r($biodata->nama($nama)
				->umur($umur)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->list_school($list_school)
				->kemampuan($kemampuan)
				->konjson()
);?>
