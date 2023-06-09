<?php 
/**
* 
*/
class model_admin extends CI_Model
{	

	function get_admin($id_admin){
		
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('id_admin',$id_admin);
		
		return $this->db->get();	
	}

	function get_all_admin(){
		
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->order_by('id_admin','Desc');
		
		return $this->db->get();	
	}

	function edit_admin(){

		
		$data = array(
			'username' =>  $this->input->post('username'),
			'password' =>  $this->input->post('password'),
			'nama_admin' =>  $this->input->post('nama_admin'));
		$this->db->where('id_admin', $this->input->post('id_admin'));
		$this->db->update('admin',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function get_all_gejala(){
		
		$this->db->select('*');
		$this->db->from('gejala');
		
		return $this->db->get();	
	}
	function get_penyakit($kode_hp){
		
		$this->db->select('*');
		$this->db->from('penyakit');
		$this->db->where('kode_penyakit',$kode_hp);
		
		return $this->db->get();	
	}
	
	function add_gejala(){

		$this->db->order_by('kode_gejala','Desc');
		$db = $this->db->get('gejala')->row();

		$noUrut = (int) substr($db->kode_gejala, 1);
		$noUrut++;

		$char = "G";
		$newID = $char . sprintf("%02s", $noUrut);

		$data = array(
			'kode_gejala' => $newID,
			'gejala' =>  $this->input->post('gejala'));

		$this->db->insert('gejala',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function delete_gejala(){

		$this->db->where('kode_gejala',$this->input->post('kode_gejala'));
		$this->db->delete('gejala');

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function edit_gejala(){

		$data = array(
			'gejala' =>  $this->input->post('gejala'));
		$this->db->where('kode_gejala', $this->input->post('kode_gejala'));
		$this->db->update('gejala',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function get_all_penyakit(){
		
		$this->db->select('*');
		$this->db->from('penyakit');
		
		return $this->db->get();	
	}
	
	function add_penyakit(){

		$this->db->order_by('kode_penyakit','Desc');
		$db = $this->db->get('penyakit')->row();

		$noUrut = (int) substr($db->kode_hp, 2);
		$noUrut++;

		$char = "Penyakit";
		$newID = $char . sprintf("%02s", $noUrut);


		$data = array(
			'kode_penyakit' => $newID,
			'penyakit' =>  $this->input->post('penyakit'),
			'solusi' =>  $this->input->post('solusi'));

		$this->db->insert('penyakit',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function delete_penyakit(){

		$this->db->where('kode_penyakit',$this->input->post('kode_penyakit'));
		$this->db->delete('penyakit');

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function edit_penyakit(){

		$data = array(
			'penyakit' =>  $this->input->post('penyakit'),
			'solusi' =>  $this->input->post('solusi'));
		$this->db->where('kode_penyakit', $this->input->post('kode_penyakit'));
		$this->db->update('penyakit',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function get_gejala_penyakit($kode_hp){
		
		$this->db->select('*');
        $this->db->from('basispengetahuan');
        $this->db->join('gejala', 'basispengetahuan.kode_gejala = gejala.kode_gejala','left');
        $this->db->where('kode_penyakit', $kode_hp);
        
		return $this->db->get();	
	}
	
	function add_basispengetahuan(){

		$data = array(
			'id' => '',
			'kode_penyakit' =>  $this->input->post('kode_penyakit'),
			'kode_gejala' =>  $this->input->post('kode_gejala'));

		$this->db->insert('basispengetahuan',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function delete_basispengetahuan(){

		
		$this->db->where('id',$this->input->post('id'));
		$this->db->delete('basispengetahuan');

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}

	function edit_basispengetahuan(){

		$data = array(
			'basispengetahuan' =>  $this->input->post('basispengetahuan'));
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('basispengetahuan',$data);

		if ($this->db->affected_rows() > 0) {
			$return =  array('result' => 'success');
		}else{
			$return =  array('result' => 'failed');
		}
		return $return;

	}
}
