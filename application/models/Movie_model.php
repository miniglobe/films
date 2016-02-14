<?php
class Movie_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function main($movie_id)
    {
      $sql = "SELECT movie_info.title,
       genre.genre_name,
       movie_info.director,
       movie_info.explanation,
       movie_info.publication_date,
       movie_info.story,
       movie_info.movie_id
       FROM movie_info
       INNER JOIN genre
       ON movie_info.genre_id = genre.genre_id
       WHERE movie_id = ?
      ";

      $result = $this->db->query($sql,$movie_id)->result_array();
      return $result;

    }
}
