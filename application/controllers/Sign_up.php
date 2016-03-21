<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

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
		$user_id = $this->input->post('user_id');
    $password = $this->input->post('password');

    $var = array(
      'user_id' => $user_id,
      'password' => $password,
    );

    $this->load->model('Sign_up_model');
		$result = $this->Sign_up_model->exsists_user_id($user_id);
		if($result)
		{
			echo "ログインIDが重複してます。再度入力してください。";
		}
		else
		{
			$result = $this->Sign_up_model->main($var);
	    if($result)
			{
			echo "無事、登録が完了いたしました。";
			}
		}


	}
}
