<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

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
    $movie_id = $this->input->get('movie_id');
    $this->load->model('Reviews_model');
    $data = $this->Reviews_model->main($movie_id);
    $this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
