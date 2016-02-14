<?php
$this->load->helper('url');
$base_url = base_url();
$login_relative_url = "index.php/login"
 ?>
<html>

<head>
  <title>filmsだよ</title>
</head>

<body>
<ul id="gnav">
  <li><a href="http://">ニュース</a></li>
 <li><a href="http://">ランキング</a></li>
 <li><a href="http://">映画を探す</a></li>
 <form action="<?php echo $base_url.$login_relative_url;?>" method="post">
   sign in <br />
   <input type="text" name="user_id" value="" /> <br />
   <input type="text" name="password" value="" /> <br />
   <input type="submit" value="sign in" /> <br />


</body>


</html>
