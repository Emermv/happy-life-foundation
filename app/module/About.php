<?php
namespace module;

class About extends \core\Module{
	public function __construct(){

		parent::__construct();

     	}
	public function  index(){

		$this->page(array(
            "team"=>array(
                array("name"=>"CLAUDIA BENAVIDES","position"=>"Presidenta"),
                array("name"=>"KERLLY SUÁREZ","position"=>"Vicepresidenta"),
                array("name"=>"JOSÉ IFNACIO BULLARD","position"=>"Asesor Principal de R.P"),
                array("name"=>"DINA BOLAÑOS","position"=>"Contadora General"),
                array("name"=>"CECILIA CUNEO","position"=>"Representante de Cuentas"),
                array("name"=>"RITA DEL PILAR SOROGASTÚA","position"=>"Coordinadora de imagen institucional"),
                array("name"=>"JHAN CARLOS DELGADO","position"=>"Desarrollador de proyectos"),
                array("name"=>"MARY ANN MAYURI","position"=>"Asistente Administrativa"),
         
            )
        ));
    
	}
    

}



 ?>
