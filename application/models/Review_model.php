<?php
class Review_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertReview($arr)
    {
      $sql = "INSERT INTO
      reviews
      (
        review_id,
        user_id,
        movie_id,
        date,
        contents
      )
      SELECT
      MAX(review_id) + 1,
      ?,
      ?,
      SYSDATE(),
      ?
      FROM reviews
      WHERE user_id = ?
      ";

      $param = array(
        $arr['user_id'],
        $arr['movie_id'],
        $arr['contents'],
        $arr['user_id']
      );

      $result = $this->db->query($sql, $param);
      return $result;

    }

    function deleteReview($arr)
    {
      $sql = "DELETE FROM
      reviews
      WHERE user_id = ?
      AND review_id = ?
      ";

      $param = array(
        $arr['user_id'],
        $arr['review_id']
      );

      $result = $this->db->query($sql, $param);
      return $result;
    }
}
