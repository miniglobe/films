<?php
$this->load->helper('url');
$base_url = base_url();
$login_relative_url = "index.php/mypage";
$top_css_relative_url = "public/css/mypage.css";
 ?>
<html>

<head>
  <link rel="stylesheet" href="<?php echo $base_url.$top_css_relative_url;?>" type="text/css">
  <title>testマイページ</title>
</head>

<body>
  <div class="top_center_view">
    <ul id="global_navi">
      <li><a href="http://">見たい</a></li>
      <li><a href="http://">見た</a></li>
      <li><a href="http://">アクティビティ</a></li>
    </ul>
 </div>
</body>


</html>
