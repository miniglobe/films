<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mypage extends CI_Controller {

  public function index()
	{

    $this->load->library('session');

    //echo $this->session->userdata('user_id');
    //exit();

    $value = array('user_id' => $this->session->userdata('user_id'));
    $this->load->view('Mypage', $value);
	}
}
