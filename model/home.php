<?php
	class home extends common
	{
		function home()
		{
			parent::__construct();	
		}
		function _default()
		{
			$this->sm->assign("page",'view/home.html');			
		}
		
	}
?>