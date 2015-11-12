<?php

	include_once('IFighter.class.php');

	class NightsWatch
	{
		public function recruit($rec){
			if ($rec instanceof IFighter)
				$rec->fight();
		}

		public function fight(){}
	}	
?>