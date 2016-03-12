<?php
class Wish_model extends CI_Model {


      function __construct()
      {
          parent::__construct();
          $this->load->database();
      }

      function main($user_id)
      {
       $sql = "SELECT
       movie_id
       FROM wish_list
       WHERE user_id = ?
      ";

      $result = $this->db->query($sql,$user_id)->result_array();
      return $result;

    }
}
