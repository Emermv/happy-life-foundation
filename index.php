<?php
session_start();

require 'app/core/Config.php';
require 'app/core/Autoload.php';

$router=new \core\Router;
if(!isset($_SESSION['locale'])):

  $_SESSION['locale']=APP['LOCALES']['es'];
endif;
if(isset($_GET['lang'])):
  $_SESSION['locale']=APP['LOCALES'][$_GET['lang']];
endif;
require "app/core/locales/{$_SESSION['locale']['code']}.php";
 


  $router->get('/',function(){
   (new \module\Home)->index();
   });

$router->get('/(\w+)',function($page){
  $module="\\module\\".ucfirst($page);
  $mod=new $module;
  if(method_exists($mod,'index')):
    $mod->index();
  endif;
});
$router->get('/(\w+)/(\w+)',function($page,$action){
  $module="\\module\\".ucfirst($page);
  $mod=new $module;
  if(method_exists($mod,$action)):
    $mod->{$action}();
  endif;
});
$router->get('/(\w+)/(\w+)/(\w+)',function($page,$action,$id){
  $module="\\module\\".ucfirst($page);
  $mod=new $module;
  if(method_exists($mod,$action)):
    $mod->{$action}($id);
  endif;
});
$router->post('/api/(\w+)/(\w+)',function($api,$action){
  $module="\\api\\".ucfirst($api);
  $mod=new $module;
  if(method_exists($mod,$action)):
    $mod->{$action}($_POST);
  endif;
});
$router->set404(function(){
 (new \module\Home)->not_found();
});

$router->run();
 ?>
