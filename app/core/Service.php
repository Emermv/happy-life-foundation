<?php
namespace core;

class Service /*extends Mysql*/{
  public $args;
  public $response;
  public function __construct($args=array(),$connect=true,$link=null){
  //  parent::__construct($connect);
    $this->args=$args;
    $this->response=array(
      'state'=>false,
      'message'=>''
    );
    if(!$connect):
      $this->link=$link;
    endif;

  }
  public function insert($table,$data,$log=false){
    $cols=join(array_keys($data),",");
    $values="";
   // print_r($data);
    foreach($data as $key=>$value):
      if(is_null($value) or $value==="" or $value=='null'):
        $values.="NULL,";
      else:
$values.="'{$value}',";
      endif;
    endforeach;
$values=substr($values,0,-1);
    
   // $values=join(array_values($data),"','");

    $sql="insert into {$table}({$cols}) values({$values})";
      if($log):
        echo $sql;
      endif;
     return mysqli_query($this->link,$sql);
  }
  public function replace($table,$data,$conditions){
    $values="";
    foreach($data as $key=>$value):
      if(is_null($value) or $value=="" or $value=='null'):
        $values.="{$key}=NULL,";
      else:
$values.="{$key}='{$value}',";
      endif;
    endforeach;
$str_values=substr($values,0,-1);

    
    $where="";
    foreach ($conditions as $key => $value) {
      $where.=$value['logic']." ".$value['column']."='".$value['value']."' ";
    }

       $sql="update {$table} set {$str_values} where {$where}";
     return mysqli_query($this->link,$sql);
  }
public function getNewId(){
  return mysqli_insert_id($this->link);
}

public function add($key,$value){
  if(isset($this->response[$key])):
  array_push($this->response[$key],$value);
else:
  $this->response[$key]=array();
  array_push($this->response[$key],$value);
endif;
}
public function set($key,$val){
  $this->response[$key]=$val;
}
public function toJSON(){
echo json_encode($this->response);
}
public function getResponse($key){
return $this->response[$key];
}
}
 ?>
