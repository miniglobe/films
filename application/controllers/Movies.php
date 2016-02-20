<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

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
    $text = isset($_GET['text']) ? $this->input->get('text') : null;
    $genre_id = isset($_GET['genre']) ? $this->input->get('genre') : null;

		$this->load->model('Movies_model');
    $data = $this->Movies_model->main($text, $genre_id);

		$this->load->view('Movies');
	}
}
