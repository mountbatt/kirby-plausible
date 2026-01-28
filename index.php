<?php
Kirby::plugin('mountbatt/plausible', [
	'areas' => [
		'plausible' => function ($kirby) {
			return [
				'label' => 'Analytics',
				'icon' => 'chart',
				'disabled' => false,
				'menu' => true,
				'link' => 'plausible',
				'views' => [
					[
						'pattern' => 'plausible',
						'action'  => function () use ($kirby) {
							return [
								'component' => 'k-plausible-view',
								'title' => 'Analytics',
								'props' => [
									'sharedLink' => option('mountbatt.plausible.sharedLink'),
									'scriptJsURL' => option('mountbatt.plausible.scriptJsURL')
								],
							];
						}
					]
				]
			];
		}
	],
	'snippets' => [
		'plausible' => __DIR__ . '/snippets/plausible.php'
	]
]);