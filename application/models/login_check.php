<?php
class login_check extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function check($user_id, $password)
    {
      $bind_var = array($user_id, $password);
      $sql = "SELECT user_id
              FROM users
              WHERE user_id = ? AND password = ? ";

      $result = $this->db->query($sql, $bind_var)->result_array();

      if (count($result) === 1)
      {
        return TRUE;
      }
      else
      {
        return FALSE;
      }
    }
}
