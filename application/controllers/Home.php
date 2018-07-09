<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Sakip {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mjson_location');

	}

	public function index() 
	{

		$this->page_title->push('Dashboard', 'Selamat datang di Administrator');

		$this->data = array(
			'title' => " Main Dashboard", 
			'breadcrumbs' => $this->breadcrumbs->show(),
			'page_title' => $this->page_title->show(),
			
		);

		$this->template->view('Sakip/v_home', $this->data);
	}



}
