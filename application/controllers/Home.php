<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['content'] = $this->load->view('v_home','',true);
		$this->load->view('template',$data);
	}
}
