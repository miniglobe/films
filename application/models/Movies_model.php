<?php
class Movies_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function main($text, $genre_id)
    {
      // TODO 後でリファクタリング

      if($text === null)
      {
        return;
      }

      // 全角スペースを半角スペースに変換
      $text = str_replace("　", " ", $text);
      // 半角スペースで入力文字列を区切る
      $keywords_org = explode(" ", $text);

      foreach($keywords_org as $keyword)
      {
        // 全角ひらがな、カタカナを半角ｶﾀｶﾅに変換
        $keywords_kana[] = mb_convert_kana($keyword, "kh");
      }


      $sql = "SELECT movie_id, title
       FROM movie_info
       WHERE
       ";

       $where1 = "";
       foreach($keywords_org as &$keyword_org)
       {
         $keyword_org = "%".$keyword_org."%";
         $where1 .= " title like ? OR ";
       }

       $where2 = "";
       foreach($keywords_kana as &$keyword_kana)
       {
         $keyword_kana = "%".$keyword_kana."%";
         $where2 .= " title_kana like ? OR";
       }

       $exec_sql = rtrim($sql.$where1.$where2, "OR");
       $bind_var = array_merge($keywords_org, $keywords_kana);

       if($genre_id != null)
       {
         $genre_id = array($genre_id);
         $exec_sql .= " AND genre_id = ?";
         $bind_var = array_merge($bind_var, $genre_id);
       }



      $result = $this->db->query($exec_sql, $bind_var)->result_array();
      return $result;
    }
}
