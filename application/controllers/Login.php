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
require_once APPPATH.'libraries/facebook/facebook.php';

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	 $this->load->model('Mlogin');
	  $this->load->library('session');  //Load the Session 
		$this->config->load('facebook'); //Load the facebook.php file which is located in config directory
	}
public function index()
	{
		$data=array(
		'post'=>'Login/cek_user',
		'auth_fb' => 'login/cek_fb',
		);
		$this->load->view('login',$data);
	}
function cek_user()	
{

		$userid=$this->input->post('txtuserid');
		$password=$this->input->post('txtpassword');	
		$Q=$this->db->query("select * from kawan where email='$userid' and password='$password'");	
		if($Q->num_rows() > 0)
		{
			$this->session->set_userdata('sid',$Q->row()->id);
			header('location:../Home');
			
		}
		else {
					$this->session->set_flashdata('pesan','Lagin Gagal, Email & Password Salah!');
					$this->session->set_flashdata('class','gagal');
			//redirect('../','refresh');			
			header('location:../');
		}	
}	

function cek_fb()	
{

		
    	$facebook = new Facebook(array(
		'appId'		=>  $this->config->item('appID'), 
		'secret'	=> $this->config->item('appSecret'),
		));
		
		$user = $facebook->getUser(); // Get the facebook user id 
		
		if($user){
			
			try{
			$user_profile = $facebook->api('/me');  //Get the facebook user profile data
			$fbid = $user_profile['id'];
			$fbname = $user_profile['name'];	
		
		$Q=$this->db->query("select * from kawan where facebook='$fbid'");	
		if($Q->num_rows() > 0)
		{
			$this->session->set_userdata('sid',$Q->row()->id);
			header('location:../Home');
			
		}
		else {		
			redirect('login/registerfb/'.$fbid.'/'.$this->encode($fbname));
		}	
		
		}	

			catch(FacebookApiException $e){
				error_log($e);
				$user = NULL;
			}	
			
		}
		
		
		
}		
		
		


function logout()
{
	header('location:../');	
}
function register()
{
		$data=array(
		'post'=>'cek_register/0',
		'nama' => '',
		'fbid' => '',
		);
		$this->load->view('register',$data);	
}

function encode($input) {
return strtr(base64_encode($input), '+/=', '-_~');
}

function decode($input) {
return base64_decode(strtr($input, '-_~', '+/='));
}

function registerfb($fbid,$fbname)
{
$nama = $this->decode($fbname);

		$data=array(
		'post'=>'cek_register/'.$fbid,
		'nama' => $nama,
		'fbid' => $fbid,
		);
		$this->load->view('register',$data);	
}

function cek_register($fbid)
{
		$userid=$this->input->post('txtemail');
		$password=$this->input->post('txtpassword');	
		$Q=$this->db->query("select * from kawan where email='$userid'");	
		if($Q->num_rows() > 0)
		{
				$this->session->set_flashdata('pesan',"Email <font color='red'>$userid</font> Sudah Di Gunakan!");
				$this->session->set_flashdata('class','gagal');
				redirect('Login/register','refresh');
			
		}
		else {
			if($this->input->post('txtemail') == '' or $this->input->post('txtpassword') == '' or $this->input->post('txtpassword_ver') == '' )
			{
				$this->session->set_flashdata('pesan','Data Harus Diisi Dengan Lengkap!');
				$this->session->set_flashdata('class','gagal');
				redirect('Login/register','refresh');
			}
			else
			{
			if($this->input->post('txtpassword') != $this->input->post('txtpassword_ver'))
			{
				$this->session->set_flashdata('pesan','Password dan Verifikasi Password Harus Sama!');
				$this->session->set_flashdata('class','gagal');
				redirect('Login/register','refresh');
			}	
			else {
				$data=array(
				'nama'=>$this->input->post('txtnama'),
				'email'=>$this->input->post('txtemail'),
				'foto'=>'default.jpg',
				'cover'=>'default.jpg',
				'facebook'=>$fbid,
				'password'=>$this->input->post('txtpassword'),
				'tglgabung'=>date('Y-m-d').' '.gmdate("H:i:s", time()+60*60*7),
				);
				$Q=$this->db->insert('kawan',$data);
					if($Q)
					{
					$QC=$this->db->query("select * from kawan where email='$userid'");
					if($QC->num_rows() > 0)
					{
					$this->session->set_userdata('sid',$QC->row()->id);
					header('location:../Home');				
					}
					else {
					$this->session->set_flashdata('pesan','Pendaftaran Gagagl!');
					$this->session->set_flashdata('class','gagal');
					redirect('Login/register','refresh');				
					}

				}
			}			
			}
		}		
}
function fb()
{
	$this->load->view('fb');
}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */