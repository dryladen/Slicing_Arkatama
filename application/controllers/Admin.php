<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
  public function index(){
    $data["title"] = "Management Data";
    $this->load->view('templates/header',$data);
    $this->load->view('admin');
    $this->load->view('templates/footer');
  }
}?>