<?php

	namespace MyCommon\Connect{

		chdir(dirname(__FILE__));
	
		/**
		 * 得到表中的所有记录
		 * @param string $sql
		 * @param string $result_type
		 * @return boolean
		 */
		function fetchAll($sql,$result_type=MYSQL_ASSOC){
		    $result=mysql_query($sql);
		    
		    if ($result && mysql_num_rows($result)>0){
		        while ($row=mysql_fetch_array($result,$result_type)){
		            $rows[]=$row;
		        }
		        return $rows;
		    }else {
		        return false;
		    }
		}


	}


	

?>