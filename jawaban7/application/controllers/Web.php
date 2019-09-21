<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {


	public function index()
	{
		$sql = "SELECT nama.name, nama.id_work, nama.id_salary, nama.id FROM nama JOIN work ON nama.id_work=work.id_work JOIN category ON nama.id_salary=category.idc";
		$data['bl'] = $this->db->query($sql);
		$this->template->load('front-end/_template',$data);
	}
	public function BA()
	{
		if(isset($_POST['simpan'])){
			$data = array(
				'nama'		=> $this->input->post('nama'),
				'id_work'		=> $this->input->post('id_work'),
				'id_salary'	=> $this->input->post('id_salary'),
			);
			$this->db->insert('nama',$data);
			redirect('front-end/_template');
		}elseif(isset($_POST['update'])){
			$data = array(
				'nama'		=> $this->input->post('nama'),
				'id_work'		=> $this->input->post('id_work'),
				'id_salary'	=> $this->input->post('id_salary'),
			);
			$this->db->where('id',$this->input->post('id'));
			$this->db->update('nama',$data);
			redirect('front-end/_template');
		}else{
			$data['bl'] = $this->db->get('nama');
			$this->template->load('front-end/_template',$data);
		}
	}
	public function BA_tambah()
	{
		$sql = "SELECT work.name_work, work.id_salary, work.id_work FROM work JOIN category ON work.id_salary=category.idc";
		$data['bl'] = $this->db->query($sql);
		$sqle = "SELECT category.salary, category.idc FROM category JOIN work ON category.idc=work.id_category";
		$data['b'] = $this->db->query($sqle);
		$this->template->load('front-end/_BA_tambah');
	}

	public function BA_edit($id)
	{
		$sql = "SELECT work.name_work, work.id_salary, work.id_work FROM work JOIN category ON work.id_salary=category.idc";
		$data['bl'] = $this->db->query($sql);
		$data['l'] = $this->db->get_where('nama',array('id'=>$id))->row_array();
		$this->template->load('front-end/_BA_edit',$data);
	}

	public function BA_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('nama');
		redirect('front-end/_template');
	}
	
}
