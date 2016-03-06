<?php
$this->load->helper('url');
$base_url = base_url();
$login_relative_url = "index.php/login";
$top_css_relative_url = "public/css/top.css";
$movies_relative_url = "index.php/movies";
 ?>
<html>

<head>
  <link rel="stylesheet" href="<?php echo $base_url.$top_css_relative_url;?>" type="text/css">
  <title>filmsだよ</title>
  <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>

<div id = "wrap">

<header>
  <h1>ここになんか見出し入れます</h1>
  <img src="public/img/movie_package/icon.jpg" alt="ここに画像いれます、ロゴ">
</header>

<!--メニュー-->
<nav>
  <ul id="menu">
    <li><a href="http://">ニュース</a></li>
    <li><a href="http://">ランキング</a></li>
    <li><a href="<?php echo $base_url.$movies_relative_url;?>">映画を探す</a><li>
  </ul>
</nav>

<!--メインビジュアル-->
<div id="mainimg">
    <img src="public/img/movie_package/main.jpg" alt="ここに画像いれます、ロゴ">
</div>

<div id="contents">

<section>
<div id="newsbox">
  <h3 class="midashi">What's News!</h3>
    <p>うんたらかんたら</p>
    <p>うんたらかんたら</p>
    <p>うんたらかんたら</p>
</div>
</section>

<section>
<div class="contentsbox">
  <h3 class="midashi">アピールポイント</h3>
  <div class="imgbox"><img src="public/img/movie_package/icon_2.jpg" alt="あいうえお"></div>
    <p>abcdefg</p>
    <p class="clear">詳細ページへ</p>
</div>
</section>

<section>
<div class="contentsbox">
  <h3 class="midashi">ご説明</h3>
  <div class="imgbox"><img src="public/img/movie_package/icon_3.jpg" alt="iiiii"></div>
    <p>なんかいれる</p>
    <p class="clear">詳細ページへ</p>
</div>
</section>

</div>

<div id="sidenavi">
  <h2 id="goannai">ご案内</h2>
</div>

    <form action="<?php echo $base_url.$login_relative_url;?>" method="post">
      sign in <br />
      <input type="text" name="user_id" value="" /> <br />
      <input type="text" name="password" value="" /> <br />
      <input type="submit" value="sign in" /> <br />

</body>

</html>
