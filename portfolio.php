<?php
	include 'Smarty/libs/smarty.class.php';
	
	$smarty=new Smarty;	
		$smarty->template_dir="view";
		$smarty->compile_dir="cache";	
		$smarty->assign("top",'view/top.html');
		$smarty->assign("portfolio",'view/portfolio/portfolio.html');
		$smarty->assign("portfolio1",'view/portfolio/portfolio1.html');

		$smarty->assign("foot",'view/foot.html');		
		
	$smarty->display('view/portfolio/container.html');
?>
