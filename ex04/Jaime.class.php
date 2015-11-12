<?php
	class Jaime{

		public $type = 3;

		public function sleepWith($other){
			if (!property_exists($other, 'type'))
				echo "Let's do this." . PHP_EOL;
			elseif ($other->type == 1)
				echo "Not even if I'm drunk !" . PHP_EOL;
			elseif ($other->type == 2)
				echo "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL;
		}
	}
?>