<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	/**
	 * Index Page for this admin panel.
	 *
	 * Use this controller for all admin page activities
	 */
	public function index()
	{
		$this->load->view('admin/index');
	}


}
