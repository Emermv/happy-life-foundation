<?php
namespace module;

class Contact extends \core\Module{
	public function __construct(){

		parent::__construct();

     	}
	public function  index(){

		$this->page(array(
            
        ));
    
	}
	public function email($args=array()){
		return $this->render($args,true);
	}
    

}



 ?>
