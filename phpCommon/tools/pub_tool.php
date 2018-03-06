<?php
	namespace MyCommon\Tool{


		/**循环遍历数组 将数组中一个字段的字符串改为数组
		 */
		function ResultStringToArray(&$result,$field){

			for($x=0;$x<count($result);$x++)
			{
			    $result[$x][$field]=explode(",",$result[$x][$field]);
			}

		}
	}

?>