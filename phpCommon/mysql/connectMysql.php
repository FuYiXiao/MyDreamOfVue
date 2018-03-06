<?php

	namespace MyCommon\Connect{

		chdir(dirname(__FILE__));
		require_once('../config.php');
		require_once('searchMysql.php');

		/**建议使用该函数
		 * 连接MYSQL函数,通过常量的形式来连接数据库
		 * 自定义配置文件，配置文件中自定义常量，包含需要使用的信息
		 * @return resource
		 */
		function connect (){ 
		    //连接mysql
		    $link=@mysql_connect(DB_HOST,DB_USER,DB_PWD) or die ('数据库连接失败<br/>ERROR '.mysql_errno().':'.mysql_error());
		    //设置字符集
		    mysql_set_charset(DB_CHARSET);
		    //打开指定的数据库
		    mysql_select_db(DB_DBNAME) or die('指定的数据库打开失败');
		    return $link;
		}

		/**建议使用该函数
		 */
		function connectSqli (){ 

		}

		/**
		 * 连接MYSQL函数
		 * @param string $host
		 * @param string $username
		 * @param string $password
		 * @param string $dbName
		 * @param string $charset
		 * @return resource
		 */
		function connectParam($host,$username,$password,$dbName,$charset){
		    //连接mysql
		    $link=@mysql_connect($host,$username,$password) or die ('数据库连接失败<br/>ERROR '.mysql_errno().':'.mysql_error());
		    //设置字符集
		    mysql_set_charset($charset);
		    //打开指定的数据库
		    mysql_select_db($dbName)or die('指定的数据库打开失败');    
		    return $link;
		    
		}

		/**
		 * 连接MYSQL函数,需要在连接的时候传递一个数组
		 * @param array $config
		 * @return resource
		 */
		function connectConfig ($config){
		    //连接mysql
		    $link=@mysql_connect($config['host'],$config['username'],$config['password']) or die ('数据库连接失败<br/>ERROR '.mysql_errno().':'.mysql_error());
		    //设置字符集
		    mysql_set_charset($config['charset']);
		    //打开指定的数据库
		    mysql_select_db($config['dbName']) or die('指定的数据库打开失败');    
		    return $link;
		}


	}


	

?>