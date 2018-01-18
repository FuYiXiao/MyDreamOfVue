<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>vuetest</title>
  </head>
  <body>
    <div id="app">大家好</div>
 
  </body>
</html>

<?php




	require_once  'phpCommon/mysql/connectMysql.php';

	use MyCommon\Connect as Connect;

  $link = Connect\connect();
  if($link){
    echo $link;
  }else{
    echo "失败";
  }




?>