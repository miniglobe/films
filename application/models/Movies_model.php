<?php
class Movies_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function main($text, $genre_id)
    {

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



      $result = $this->db->query($exec_sql,array_merge($keywords_org, $keywords_kana))->result_array();
      return $result;
    }
}
