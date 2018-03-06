<?php




require_once('../phpCommon/mysql/connectMysql.php');
use MyCommon\Connect as Connect;

require_once('../tools/pub_tool.php');
use MyCommon\Tool as Tool;

class Person {    
    public $name;    
    public $age;    
    
    //定义一个构造方法初始化赋值    
    public function __construct($name,$age) {    
        $this->name=$name;    
        $this->age=$age;    
    }    
}    
class search_data
{

    public static function root_data($param1="",$param2=0){
      
      $link = Connect\connect();
      $sql = "SELECT node.id, node.name, node.type, node.icon_class, node.sort FROM `node` WHERE `type` LIKE '根'";

      if($link){

        $result  = Connect\fetchAll($sql);

        Tool\ResultStringToArray($result,"icon_class");
        echo json_encode($result);

      }else{
        echo "数据库连接失败";
      }
    }


}
?>