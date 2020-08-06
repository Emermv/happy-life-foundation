<?php
namespace core;

class Module extends App{
	private $template;
	private $root;
	private $extension;
	private $component;
	private $scripts;
	private $styles;
public $mysql;
  public $action;
	public function __construct(){
		parent::__construct($_REQUEST);
		$this->component=strtolower(str_replace("module\\", "", get_class($this)));
		$this->root="app/view/".$this->component."/";
		$this->template=new \Rain\Tpl;
		$this->scripts=array();
		$this->styles=array();
	}


	public  function  render($args=array(),$retrurn_string=false,$func=1){

		$dbt=debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS,3);
	
		 $caller = isset($dbt[$func]['function']) ? $dbt[$func]['function'] : null;
		 
	      
		\Rain\Tpl::configure('tpl_dir',$this->root);
		 $this->component.="-".$caller;
		
	 $this->template->assign(array_merge($args,array('action'=>$caller)));
	 if($retrurn_string):
   return $this->template->draw($caller,$retrurn_string);
else:
   $this->template->draw($caller);
endif;
	}
	
  

public function _404(){
	echo  file_get_contents("app/view/templates/_404.html");
}
public function _default(){
	echo file_get_contents("app/view/templates/_default.html");
}
public function _getModule(){
	return strtolower(str_replace("module\\", "", get_class($this)));
}
public function page($args=array()){
	$module=$this->_getModule();
	 $content=$this->render(array_merge(array(
		 'module'=>$module,
		 'modules'=>array(
			array("label"=>ABOUT,'url'=>"about"),
			#array("label"=>"EJES DE ACCIÓN","url"=>""),
			array("label"=>"BLOG","url"=>"blog"),
			array("label"=>PROGRAMS,"url"=>"programs","items"=>array(
				array("label"=>LEARN_HAPPY,"url"=>"programs/learn","sub"=>"show_learn"),
				array("label"=>BALANCE_HAPPY,"url"=>"programs/balance","sub"=>"show_balance"),
			)),
			array("label"=>CONTACT,"url"=>"contact"),
		),),$args),true,2);
	 
	\Rain\Tpl::configure('tpl_dir','app/view/templates');
	$locales=APP['LOCALES'];
	foreach ($locales as $key => $value) {
		if($value['code']==$_SESSION['locale']['code']):
			unset($locales[$key]);
		endif;
	}
	$this->template->assign(
		array(
			'content'=>$content,
			
			'component'=>str_replace('_','-',$this->component),
			'title'=>APP['TITLE'],
			'scripts'=>$this->scripts,
			'styles'=>$this->styles,
			'module'=>$module,
			'locale'=>$_SESSION['locale'],
			
			'footer'=>array(),
			'locales'=>$locales,
		
		
		)
	);
	$this->template->draw('page');
}
public function addScript($src){
  array_push($this->scripts,$src);
}
public function addStyle($src){
	array_push($this->styles,$src);
  }
}
 ?>
