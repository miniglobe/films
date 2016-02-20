<!DOCTYPE html>
<html>
<head>
  <title>test</title>
  <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
  <script>
  $(function(){
    $('#button').click(function(){
      var text = $('#text').val();
      $.ajax({
        type: "POST",
        url: "http://localhost/index.php/api/v1/movies/",
        data:{text: text},
        dataType: "json",
      }).done(function(data){
        $("body").append("<br />");
        for(var i in data){
          a = $("<img>").attr("src", "http://localhost/public/img/movie_package/" + data[i].movie_id + ".jpg");
          $("body").append(a);
        }
      })
    });
  });
  </script>
</head>
  <body>
    <input type="text" id="text" value="">
    <button id="button">検索</button>
  </body>
</html>
