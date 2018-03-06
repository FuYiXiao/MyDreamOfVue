<?php 

//打印出所有的服务器变量  
//print_r($_SERVER);  
//echo $_SERVER['PHP_SELF'].'<br/>';

//定义application路径     
define('APPPATH', trim(__DIR__ . '/'));  
  
//获得请求地址     
$root = $_SERVER['SCRIPT_NAME'];  
$request = $_SERVER['REQUEST_URI'];  

//echo "root:".$root.'<br/>';

//echo "request:".$request.'<br/>';


$URI = array();  
  
//获得index.php 后面的地址   替换字符串中的一些字符   
$url = trim(str_replace($root, '', $request), '/');  

//echo "url:".$url.'<br/>';

//如果为空，则是访问根地址     
if (empty($url)) {  
    //默认控制器和默认方法  
    $class = 'index';  
    $func = 'welcome';  
} else {  
    $URI = explode('/', $url);  
  
    //如果function为空 则默认访问index     
    if (count($URI) < 2) {  
        $class = $URI[0];  
        $func = 'index';  
    } else {  
        $class = $URI[0];  
        $func = $URI[1];  
    }  
}  
//echo "class:".$class.'<br/>';
//echo "func:".$func.'<br/>';  

//把class加载进来     
include(APPPATH . '/' . 'application/controllers/' . $class . '.php');  

//实例化->将控制器首字母大写  首字符转换为大写   
$obj = ucfirst($class);
//调用内部function,传递参数
call_user_func_array(
	array($obj, $func),
	array_slice($URI, 2)
);

?>  