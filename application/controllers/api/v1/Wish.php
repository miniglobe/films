<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wish extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 //getに対して
	public function index()
	{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $result = $this->_addWish();
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET")
    {
			$this->load->library('session');
			$user_id = $this->session->userdata('user_id');
	    $this->load->model('Wish_model');
	    $data = $this->Wish_model->main($user_id);
			$this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
	}

	function _addWish()
	{
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
		$movie_id = $this->input->post('movie_id');

		$var = array(
			'user_id' => $user_id,
			'movie_id' => $movie_id
		);
    //存在チェック
		if ($user_id =='')
		{
    $errors = 'ユーザーIDが不正です。';
	  } elseif ($movie_id =='')
		{
    $errors = 'ムービーIDが不正です。';

    echo $errors;
		}


		$this->load->model('Wish_model');
		$result = $this->Wish_model->insertWish($var);

		return $result;
	}
}
