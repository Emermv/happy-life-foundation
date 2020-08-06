<?php
namespace module;

class Programs extends \core\Module{
	public function __construct(){

		parent::__construct();

     	}
	public function  learn(){

		$this->page(array(
            "workshops"=>WORKSHOPS
        ));
    
	}
	public function  index(){
    $this->learn();
	}
	public function  balance(){

		$this->page(array(
            
        ));
    
	}
	public function show_learn(){
		$this->page(array(

		));
	}
	public function show_balance(){
		$this->page(array(

		));
	}
    

}



 ?>
