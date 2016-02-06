<?php
$base_url = $this->config->site_url();
 ?>

 <!doctype html>
 <html lang="en-US">
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <title>films</title>
</head>
<body>
   <h1>サインイン</h1>
   <div align="center">
      <table border="0">
          <form action="<?php echo $base_url."/login"; ?>" method="POST">
              <tr>
                  <th>
                      ユーザID
                  </th>
                  <td>
                      <input type="text" name="user_id" value="" size="24">
                  </td>
              </tr>
              <tr>
                  <th>
                      パスワード
                  </th>
                  <td>
                      <input type="password" name="password" value="" size="24">
                  </td>
              </tr>
              <tr>
                  <td colspan="2">
                      <input type="submit" value="サインイン">
                  </td>
              </tr>
          </form>
      </table>
  </div>
</body>
</html>
