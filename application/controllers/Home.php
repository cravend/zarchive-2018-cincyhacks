<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
    $this->load->library('session');
    if(array_key_exists("auth", $_SESSION))
    {
      if($_SESSION["auth"] != true)
      {
        $_SESSION["auth"] = false;
      }
    }
    else
    {
      $_SESSION["auth"] = false;
    }
    
    $_SESSION["auth_redirect"] = "profile";
    
		$this->load->view("home");
	}
}
