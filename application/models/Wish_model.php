<?php
class Wish_model extends CI_Model {


      function __construct()
      {
          parent::__construct();
          $this->load->database();
      }

      function insertWish($arr)
      {
       $sql = "INSERT INTO wish_list
       (
         user_id,
         movie_id
       )
       VALUES
       (
         ?,
         ?
       )
      ";
      $param = array(
        $arr['user_id'],
        $arr['movie_id']

      );

//    $result = $this->db->query($sql,$param)->result_array();
      $result = $this->db->query($sql,$param);
      return $result;

    }
}
