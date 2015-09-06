<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index(){
    $this->load->view('home');
  }

  public function how(){
    $this->load->view('how');
  }

  public function products(){
    $this->load->view('products');
  }

  public function advocacy(){
    $this->load->view('advocacy');
  }

  public function choose(){
    $this->load->view('choose');
  }
}
