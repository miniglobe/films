<?php
class Reviews_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function main($movie_id)
    {
      $sql = "SELECT
       user_id,
       date,
       contents
       FROM reviews
       WHERE movie_id = ?
       ORDER BY date DESC
      ";

      $result = $this->db->query($sql,$movie_id)->result_array();
      return $result;

    }
}
