<?php
	include 'Smarty/libs/smarty.class.php';
	include 'config/database.php';
	include 'model/common.php';


	$smarty=getSmarty();
	call_init($_REQUEST);	
	function getSmarty()
	{
		$smarty=new Smarty;	
		$smarty->template_dir="view";
		$smarty->compile_dir="cache";	
		$smarty->assign("top",'view/top.html');
		$smarty->assign("banner",'view/home/banner.html');
		$smarty->assign("content",'view/home/content.html');
		$smarty->assign("foot",'view/foot.html');
		return 	$smarty;
	}
	function call_init($arr)
	{
		if(!$arr)
		{
			$mod='home';
			$func='_default';
		}
		else
		{
			$mod=$arr["module"];
			$func=$arr["func"];
		}
		include "model/".$mod.".php";
		$call=new $mod;
		if(method_exists($call,$func))
		{
			$call->$func();	
		}	
	}
	$smarty->display('view/home/container.html');
?>
