<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review extends CI_Controller {

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
	public function index()
	{
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $result = $this->_postReview();
    }
    else if($_SERVER["REQUEST_METHOD"] == "DELETE")
    {
      $result = $this->_deleteReview();
    }

    $this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

  function _postReview()
  {
		$contents = html_escape($this->input->post('contents'));
		$this->load->library('session');
		$user_id = $this->session->userdata('user_id');
    $movie_id = $this->input->post('movie_id');

		//null;
		//preg_match('{movie_id: "(.*?)"}','http://localhost/index.php/movie?movie_id=',$movie_id);


    $var = array(
      'contents' => $contents,
      'user_id' => $user_id,
      'movie_id' => $movie_id
    );

    $this->load->model('Review_model');
    $result = $this->Review_model->insertReview($var);

    return $result;
  }

  function _deleteReview()
  {
    parse_str(file_get_contents('php://input'), $delete_param);

    $this->load->model('Review_model');
    $result = $this->Review_model->deleteReview($delete_param);

    return $result;
  }
}
