<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mlogin extends CI_Model
{
	
public function data_posting()
	{   
	$this->load->database();
	$datax = array();
	$Q = $this->db->query("select a.*,b.foto,b.nama from 
posting a, kawan b
where a.kawan=b.id");
	if ($Q->num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$datax[] = $row;
	}
	}
	$Q->free_result();
	$this->db->close();
	return $datax;	
	}
	
}
	
