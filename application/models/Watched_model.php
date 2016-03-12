<?php
class Watched_model extends CI_Model {

      function __construct()
      {
          parent::__construct();
          $this->load->database();
      }

      function main($user_id)
      {
       $sql = "SELECT
       movie_id
       FROM watched_list
       WHERE user_id = ?
      ";

      $result = $this->db->query($sql,$user_id)->result_array();
      return $result;
    }
}
