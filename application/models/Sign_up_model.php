<?php
class Sign_up_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function main($arr)
      {
      $sql = "INSERT INTO
      users
      (
        user_id,
        password
      )
      VALUES
      (
        ?,
        ?
      )
      ";

      $param = array(
        $arr['user_id'],
        $arr['password'],
      );

      $result = $this->db->query($sql,$param);
      return $result;
    }

    function exsists_user_id($user_id)
    {
      $sql = "SELECT
      user_id
      FROM users
      WHERE user_id = ?";

      $result = $this->db->query($sql, $user_id)->result_array();

      if(count($result) === 0)
      {
        return false;
      }
      else
      {
        return true;
      }
    }


}
