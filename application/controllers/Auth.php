<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
    $this->load->helper('form');
    
    $this->load->view("header");
		$this->load->view("login");
    $this->load->view("footer");
	}
  
  public function loginVerify()
  {
    $query = $this->db->query("SELECT * FROM users");
    
    foreach($query->result() as $row)
    {
      if($row->email == $this->input->post("email") && $row->password == $this->input->post("password"))
      {
        $id = $row->id;
        $this->nextPage($id);
      }
      else
      {
        
        echo "<script>alert('Your login information was incorrect.')</script>";
        $this->index();
      }
    }
  }
  
  public function signup()
  {
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
    
    $this->db->insert("users", $data);
    
    $this->nextPage($this->db->insert_id());
  }
  
  public function nextPage($id)
  {
    $this->load->library('session');
    $_SESSION["auth"] = true;
    $_SESSION["user_id"] = $id;
    $this->load->helper('url');
    redirect($_SESSION["auth_redirect"]);
  }
}
