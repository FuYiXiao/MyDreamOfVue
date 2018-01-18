<?php

  //define('ROOT_PATH',dirname(__FILE__));
  //echo ROOT_PATH;

	require_once('phpCommon/mysql/connectMysql.php');

  
	use MyCommon\Connect as Connect;

  $link = Connect\connect();

  $sql = "select * from myguests";

  if($link){

    $result  = Connect\fetchAll($sql);

    /*
    foreach ($result as $pre){ 
      echo "$pre[id] $pre[firstname] $pre[lastname] $pre[email]"; 
    } 
    */
    echo json_encode($result);

  }else{
    echo "数据库连接失败";
  }




?>