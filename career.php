<?php
	include 'Smarty/libs/smarty.class.php';
	
	$smarty=new Smarty;	
		$smarty->template_dir="view";
		$smarty->compile_dir="cache";	
		$smarty->assign("top",'view/top.html');
		$smarty->assign("career",'view/career/career.html');
		$smarty->assign("foot",'view/foot.html');		
		
	$smarty->display('view/career/container.html');
?>
