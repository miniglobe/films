<?php
$this->load->helper('url');
$base_url = base_url();
$login_relative_url = "index.php/login";
$top_css_relative_url = "public/css/top.css";
 ?>
<html>

<head>
  <link rel="stylesheet" href="<?php echo $base_url.$top_css_relative_url;?>" type="text/css">
  <title>filmsだよ</title>
</head>

<body>
  <div class="top_center_view">
    <ul id="global_navi">
      <li><a href="http://">ニュース</a></li>
      <li><a href="http://">ランキング</a></li>
      <li><a href="http://">映画を探す</a></li>
    </ul>
    <hr>
    <form action="<?php echo $base_url.$login_relative_url;?>" method="post">
      sign in <br />
      <input type="text" name="user_id" value="" /> <br />
      <input type="text" name="password" value="" /> <br />
      <input type="submit" value="sign in" /> <br />
 </div>
</body>


</html>
