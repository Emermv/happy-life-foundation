<?php

//print_r($_SERVER);
//echo $_SERVER['HTTP_HOST'];



//const APP=$app;
define('APP',array(
  'TITLE'=>'HAPPY LIFE FOUNDATION',
  'ROOT'=>"https://{$_SERVER['HTTP_HOST']}",
  "PAYPAL"=>"https://www.paypal.com/biz/fund?id=JSCRSQQVFAFZS",
  'LOCALES'=>[
		'es'=>array('code'=>"es","label"=>"Español"),
		'en'=>array('code'=>"en","label"=>"Ingles"),
	]
));


 ?>
 