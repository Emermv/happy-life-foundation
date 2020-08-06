<?php
namespace module;

class Home extends \core\Module{
	public function __construct(){

		parent::__construct();

     	}
	public function  index(){

		$this->page(array(
            'slider'=>array(
                array(
                    'src'=>APP['ROOT']."/app/assets/img/slider/1.jpg",
                    "background"=>APP['ROOT']."/app/assets/img/purple-home.png",
                    "title"=>"HAPPY LIFE<br>FOUNDATION",
                    "buttons"=>array(
                        array('text'=>DONATE_NOW,"color"=>"secondary","outlined"=>false,"action"=>"donation"),
                        array('text'=>SHOW_MORE,"color"=>"white","outlined"=>true,"action"=>"scroll"),
                    ),
                    "description"=>HOME_FIRST_SLIDER_DESCRIPTION
                ),
                array(
                    'src'=>APP['ROOT']."/app/assets/img/slider/2.jpg",
                    "background"=>APP['ROOT']."/app/assets/img/cyan-home.png",
                    "title"=>strtoupper(TOGETHER." <br>".HEARTS),
                    "buttons"=>array(
                        array('text'=>DONATE_NOW,"color"=>"primary","outlined"=>false,"action"=>"donation"),
                        array('text'=>SHOW_MORE,"color"=>"white","outlined"=>true,"action"=>"scroll"),
                    ),
                    "description"=>HOME_SECOND_SLIDER_DESCRIPTION
                ),
                array(
                    'src'=>APP['ROOT']."/app/assets/img/slider/3.jpg",
                    "background"=>APP['ROOT']."/app/assets/img/purple-home.png",
                    "title"=>TALLER_HOME,
                    "buttons"=>array(
                        array('text'=>'<svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                    </svg> '.IN_LIVE,"color"=>"secondary","outlined"=>false,"action"=>"fb"),
                    ),
                    "description"=>TALLER_HOME_DESCRIPTION
                )
            )
        ));
    
	}
    public function not_found(){
    	$this->render(array(
         'title'=>APP['TITLE']
      ));
    }

}



 ?>
