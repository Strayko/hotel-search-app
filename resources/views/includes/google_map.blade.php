<?php

if($name == 8) {
	Mapper::location('Passau')->map(
		[
			'zoom' => 12,
			'draggable' => true,
			'marker' => false,
			'eventAfterLoad' =>
				'circleListener(maps[0].shapes[0].circle_0);'
		]
	);
}

?>