<?php
$this->load->helper('url');
$this->load->library('session');
$base_url = base_url();
$login_relative_url = "index.php/mypage";
$top_css_relative_url = "public/css/mypage.css";
$img_relative_url = "public/img/movie_package/";
$wish_api_relative_url = "index.php/api/v1/wish/";
$watched_api_relative_url = "index.php/api/v1/watched/";
$movie_relative_url = "index.php/movie?movie_id=";



 ?>
<html>

<head>
  <link rel="stylesheet" href="<?php echo $base_url.$top_css_relative_url;?>" type="text/css">
  <title>testマイページ</title>

</head>

<body>
  <div class="top_center_view">

      <h1>見たいリスト</h1>
      <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
      <script>
      $(document).ready(
        $.ajax({
          type: "GET",
          url: "<?php echo $base_url.$wish_api_relative_url; ?>"
        }).done(function(data){
            for(var i in data)
            content = data[i].movie_id;
            $("#wish_result").append(content);
            $(content).wrap('<p></p>');
            $("#wish_result").append("<br />");


        }));

      $(function() {
      //  getImage();
      });
      $(function() {
        $('#button').on('click', function() {
          getImage();
        })
      });

      </script>
      <div id="wish_result">

      </div>
      <h1>見たリスト</h1>
      <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
      <script>
      $(document).ready(
        $.ajax({
          type: "GET",
          url: "<?php echo $base_url.$watched_api_relative_url; ?>"
        }).done(function(data){
            for(var i in data)
            content = data[i].movie_id;
            $("#watched_result").append(content);
            $(content).wrap('<p></p>');
            $("#watched_result").append("<br />");


        }));

      $(function() {
      //  getImage();
      });
      $(function() {
        $('#button').on('click', function() {
          getImage();
        })
      });

      </script>
      <div id="watched_result">

    </ul>
 </div>
</body>


</html>
