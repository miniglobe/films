<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script>
  $(function(){
    $('#button').click(function(){
      $('#thumbnail').empty();
      var text = $('#text').val();
      $.ajax({
        type: "POST",
        url: "http://localhost/index.php/api/v1/movies/",
        data:{text: text},
        dataType: "json",
      }).done(function(data){
        $("#thumbnail").append("<br />");
        for(var i in data){
          img = $("<img>").attr("src", "http://localhost/public/img/movie_package/" + data[i].movie_id + ".jpg");
          $(img).width(300).height(300);
          $(img).wrap($("<a></a>").attr({href:"http://localhost/index.php/movie?movie_id=" + data[i].movie_id}));
          $("#thumbnail").append(img);
        }
      })
    });
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
