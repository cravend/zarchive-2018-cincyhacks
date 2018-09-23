<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
    $this->load->library("session");
    if($_SESSION["auth"] != true)
    {
      $_SESSION["auth_redirect"] = "profile";
      $this->load->helper('url');
      redirect('auth');
    }
    
    $this->load->helper("form");
    
    $data = $this->getData();
    
    $this->load->view("header");
		$this->load->view("profile", $data);
    $this->load->view("footer");
	}
  
  public function getData()
  {
    $id = $_SESSION["user_id"];
    $this->db->where("id", $id);
    $query = $this->db->get("users");
    $row = $query->row_array();
    
    return $row;
  }
  
  public function update()
  {
    $this->load->library("session");
    
    $data = array(
      'email' => $this->input->post("email"),
      'password' => $this->input->post("password"),
      'first_name' => $this->input->post("firstName"),
      'last_name' => $this->input->post("lastName"),
      'type' => $this->input->post("type"),
      'birthday' => $this->input->post("birthday"),
      'image' => $this->input->post("image"),
      'bio' => $this->input->post("bio")
      
    );
    $id = $_SESSION["user_id"];
    
    $this->db->where("id", $id);
    $this->db->update("users", $data);
    
    $this->index();
  }
  
  public function logout()
  {
    $this->load->library("session");
    $_SESSION["auth"] = false;
    $_SESSION["user_id"] = "";
    
    $this->load->helper('url');
    redirect('home');
  }
}
