<?php 

class LandingPage extends CI_Controller {
  public function index(){
    $this->load->view('templates/header');
    $this->load->view('landingPage');
    $this->load->view('templates/footer');
  }
}