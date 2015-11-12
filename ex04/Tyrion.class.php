<?php
	class Tyrion{

		public $type = 1;

		public function sleepWith($other){
			if (!(property_exists($other, 'type')))
				echo "Let's do this." . PHP_EOL;
			elseif ($other->type == 3)
				echo "Not even if I'm drunk !" . PHP_EOL;
			elseif ($other->type == 2)
				echo "Not even if I'm drunk !" . PHP_EOL;
		}
	}
?>