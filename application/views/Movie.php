
<?php
$this->load->helper('url');
$base_url = base_url();
$movie_css_relative_url = "public/css/movie.css";
$movie_img_relative_url = "public/img/movie_package/";
 ?>
 <html>
 <head>

<meta charset="utf-8">
<title>テスト</title>
<link rel="stylesheet" href="<?php echo $base_url.$movie_css_relative_url; ?>">

</head>

  <body>
  <div class="box_left">
    <img src="<?php echo $base_url.$movie_img_relative_url.$movie_id.".jpg"; ?>" alt="<?php echo $movie_id.".jpg";?>">
    <table border=1></ br>


  <tr>
    <th>タイトル</th>
      <td><?php echo $title; ?></td>
  </tr>

   <tr>

     <th>ジャンル</th>
       <td><?php echo $genre_name; ?></td>
   </tr>

   <tr>
     <th>監督</th>
       <td><?php echo $director; ?></td>
   </tr>

<!--   <tr>
    <th>ストーリー</th>
       <td></td>
   </tr>
-->
   <tr>
     <th>公開日</th>
       <td><?php echo $publication_date; ?></td>
   </tr>

   <tr>
     <th>説明</th>
       <td><?php echo $explanation; ?></td>
   </tr>


    </table>
  </div>
<div class="box_right">
  <div class="story">
<h1>ストーリー</h1>
<p>
  <?php echo $story; ?>
  </p>
</div>
</div>
  </body>

 </html>
