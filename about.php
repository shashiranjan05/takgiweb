<?php
	include 'Smarty/libs/smarty.class.php';
	
	$smarty=new Smarty;	
		$smarty->template_dir="view";
		$smarty->compile_dir="cache";	
		$smarty->assign("top",'view/top.html');
		$smarty->assign("about",'view/about/about.html');
		$smarty->assign("foot",'view/foot.html');		
		
	$smarty->display('view/about/container.html');
?>
