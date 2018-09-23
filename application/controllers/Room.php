<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {
	public function index()
	{
    $this->load->view("header");
		$this->load->view("room-list");
    $this->load->view("footer");
	}
	public function view($id)
	{
    $this->load->library("session");
        
    $data["allowBook"] = true;
    
    if($_SESSION["auth"] == true && $_SESSION["user_id"] != null)
    {
      $this->db->where("id", $_SESSION["user_id"]);
      $query = $this->db->get("users");
      $row = $query->row_array();
      
      if($row["type"] == "host")
      {
        $data["allowBook"] = false;
        $data["displayBook"] = true;
      }
      else
      {
        $data["allowBook"] = true;
      }
    }    
    
    $data['id'] = $id;
    
    $this->load->view("header");
		$this->load->view("room/view", $data);
    $this->load->view("footer");
	}
	public function edit($id)
	{
    $this->load->helper("form");
    
    $this->db->where("id", $id);
    $query = $this->db->get("room_info");
    $data = $query->row_array();
    
    $this->load->view("header");
		$this->load->view("room/edit", $data);
    $this->load->view("footer");
	}
  public function editComplete($id)
  {
    $data = array (
      "address" => $this->input->post("address"),
      "city" => $this->input->post("city"),
      "state" => $this->input->post("state"),
      "zip" => $this->input->post("zip"),
      "beds" => $this->input->post("size"),
      "pets" => $this->input->post("pets"),
      "length" => $this->input->post("time"),
      "image" => $this->input->post("image")
    );
    
    $this->db->where("id", $id);
    $this->db->update("room_info", $data);
    
    $this->load->helper("url");
    redirect("profile");
  }
	public function delete($id)
	{
    $this->db->delete("room_info", array("id" => $id));
    
    $this->load->helper("url");
    redirect("profile");
	}
	public function nick()
	{
    $this->load->library('image_lib');
    $this->load->view("header");
		$this->load->view("room1");
    $this->load->view("footer");
	}
   public function create()
  {
    $this->load->library("session");
    $this->load->view("header");
    $this->load->view("room/create");
    $this->load->view("footer");
    
  }
  
  public function book($id)
  {
    $this->load->library("session");
    
    if($_SESSION["auth"] != true)
    {
      $_SESSION["auth_redirect"] = "room/book/$id";
      $this->load->helper('url');
      redirect('auth');
    }
    else
    {
      $data = array("guestid" => $_SESSION["user_id"], "available" => 0);

      $this->db->where("id", $id);
      $this->db->update("room_info", $data);

      $viewData['id'] = $id;
      if ($id == NULL) {header("Location: https://google.com");}
      $viewData["allowBook"] = false;
      $viewData["displayBook"] = false;

      $this->load->view("header");
      $this->load->view("room/booked", $viewData);
      $this->load->view("footer");
    }
  }
}
