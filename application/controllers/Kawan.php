<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Kawan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	 $this->load->model('Mhome');;
	}
public function index()
	{
		$id=$this->session->userdata('sid');
		$Q=$this->db->query("select * from kawan where id=$id");	
		$data=array(
		'avatar'=>$Q->row()->foto,
		'nama'=>$Q->row()->nama,
		'cover'=>$Q->row()->cover,
		'ft_kawan'=>$this->Mhome->data_kawan(),
		'page'=>'timeline',
		'posting'=>$this->Mhome->data_posting(),
		);	
		$this->load->view('template',$data);
	}	
function komentar()
{
	$data=array(
	'posting'=>$this->input->post('posting'),
	'kawan'=>$this->session->userdata('sid'),
	'komentar'=>$this->input->post('komentar'),
	'tgl'=>date('Y-m-d').' '.gmdate("H:i:s", time()+60*60*7),
	);
	$Q=$this->db->insert('komentar',$data);
	if($Q)
	{
		header('location:../Home');
	}
	else {
		header('location:../Home');
	}
}
public function kawan()
	{
		$id=$this->uri->segment(3);
		$Q=$this->db->query("select * from kawan where id=$id");	
		$data=array(
		'avatar'=>$Q->row()->foto,
		'nama'=>$Q->row()->nama,
		'cover'=>$Q->row()->cover,
		'page'=>'timeline',
		'ft_kawan'=>$this->Mhome->data_kawan(),
		'posting'=>$this->Mhome->data_posting(),
		);	
		$this->load->view('template',$data);
	}		
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */