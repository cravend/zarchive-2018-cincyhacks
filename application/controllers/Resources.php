<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {
	public function index()
	{
    $this->load->view("header");
		$this->load->view("resources");
    $this->load->view("footer");
	}
}
