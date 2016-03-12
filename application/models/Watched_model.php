<?php
class Watched_model extends CI_Model {
  $this->load->library('session');

      function __construct()
      {
          parent::__construct();
          $this->load->database();
      }

      function main($user_id = $this->session->userdata('user_id'));
      {
       $sql = "SELECT
       movie_id
       FROM watched_list
       WHERE user_id = ?
       ORDER BY date DESC
      ";

      $result = $this->db->query($sql,$movie_id)->result_array();
      return $result;
    }
}
