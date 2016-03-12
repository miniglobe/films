<?php
$this->load->helper('url');
$this->load->library('session');
$base_url = base_url();
$login_relative_url = "index.php/mypage";
$top_css_relative_url = "public/css/mypage.css";

//$reviews_relative_url = "configurations/api/v1/Watched.php";
//$reviews_relative_url = "configurations/api/v1/Wish.php";



 ?>
<html>

<head>
  <link rel="stylesheet" href="<?php echo $base_url.$top_css_relative_url;?>" type="text/css">
  <title>testマイページ</title>
</head>

<body>
  <div class="top_center_view">

      <h1>見たいリスト</h1>
      <h1>見たリスト</h1>
      <h1>アクティビティ</h1>
    </ul>
 </div>
</body>


</html>
