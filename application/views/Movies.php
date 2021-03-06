<?php
$this->load->helper('url');
$base_url = base_url();
$movies_api_relative_url = "index.php/api/v1/movies/";
$img_relative_url = "public/img/movie_package/";
$movie_relative_url = "index.php/movie?movie_id=";
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script>
  var getImage = function(){
    $('#thumbnail').empty();
    var text = $('#text').val();
    $.ajax({
      type: "GET",
      url: "<?php echo $base_url.$movies_api_relative_url; ?>",
      data:{text: text},
      dataType: "json",
    }).done(function(data){
      $("#thumbnail").append("<br />");
      for(var i in data){
        if(i % 3 == 0) {
          $("#thumbnail").append("<br />");
        }
        img = $("<img>").attr("src", "<?php echo $base_url.$img_relative_url; ?>" + data[i].movie_id + ".jpg");
        $(img).width(200).height(200);
        $("#thumbnail").append(img);
        $(img).wrap($("<a></a>").attr({href:"<?php echo $base_url.$movie_relative_url; ?>" + data[i].movie_id}));
      }
    })
  };
  $(function() {
    getImage();
  });
  $(function() {
    $('#button').on('click', function() {
      getImage();
    })
  });
  </script>
</head>
  <body>
    <input type="text" id="text" value="">
    <button id="button">検索</button>
    <div id="thumbnail">
    </div>
  </body>
</html>
