<?php

	namespace MyCommon{

		require_once 'modeset.php'; 

		if(DEVELOPMODE=="dev"){
		
			define('DB_HOST', 'localhost');
			define('DB_USER', 'root');
			define('DB_PWD', '123456');
			define('DB_CHARSET', 'UTF8');
			define('DB_DBNAME', 'mydb');

		}else{
		
			define('DB_HOST', '');
			define('DB_USER', '');
			define('DB_PWD', '');
			define('DB_CHARSET', 'UTF8');
			define('DB_DBNAME', 'homework');

		}

	}


?>