<?php

  include_once("./config/config.php");

  $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
  <head>
    <title>Admin panel</title>
  </head>
  <body>
   <p>admin</p>
  </body>
</html>
