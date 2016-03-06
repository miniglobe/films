
<?php
$this->load->helper('url');
$base_url = base_url();
$movie_css_relative_url = "public/css/movie.css";
$movie_img_relative_url = "public/img/movie_package/";
$reviews_relative_url = "configurations/api/v1/Reviews.php";
$reviews_api_relative_url = "index.php/api/v1/reviews/";

 ?>
 <html>
 <head>

<meta charset="utf-8">
<title>テスト</title>
<link rel="stylesheet" href="<?php echo $base_url.$movie_css_relative_url; ?>">
<script>

$.ajax({
  type: "POST",
  url: "<?php echo $base_url.$reviews_api_relative_url; ?>",
  data:{movie_id: "<?php echo $movie_id ?>"},
  dataType: "json",
}).done(function(data){
   $("#result").html(data);
    }
});

</script>


</head>

  <body>
  <div class="box_left">
    <img src="<?php echo $base_url.$movie_img_relative_url.$movie_id.".jpg"; ?>" alt="<?php echo $movie_id.".jpg";?>">
    <table border=1></ br>
  <tr>
     <th>監督</th>
       <td><?php echo $director; ?></td>
   </tr>

   <tr>
     <th>公開日</th>
       <td><?php echo $publication_date; ?></td>
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

<div class="box_left2">
  <div id="result">
  </div>

</div>
</div>



  </body>

 </html>
