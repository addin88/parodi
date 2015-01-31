<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mhome extends CI_Model
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
public function data_kawan()
	{   
	$this->load->database();
	$datax = array();
	$id=$this->session->userdata('sid');
	$Q = $this->db->query("select a.* from kawan a
where a.id in (select idy from follow where idx=$id) limit 50");
	if ($Q->num_rows() > 0){
	foreach ($Q->result_array() as $row){
	$datax[] = $row;
	}
	}
	$Q->free_result();
	$this->db->close();
	return $datax;	
	}
public function data_fol_kawan()
	{   
	$this->load->database();
	$datax = array();
	$id=$this->session->userdata('sid');
	$Q = $this->db->query("select a.* from kawan a
where a.id!=$id and a.id not in (select idy from follow where idx=$id) limit 50");
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
	
