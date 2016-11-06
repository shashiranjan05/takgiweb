<?php
	class common
	{
			var $sm;	
			var $con;		
			function common()
			{
					global $smarty;
					$this->sm=$smarty;
					$this->con=new database();
			}			
	}

?>