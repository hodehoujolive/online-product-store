<?php

namespace ElementPack\Modules\Marquee;

use ElementPack\Base\Element_Pack_Module_Base;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class Module extends Element_Pack_Module_Base {

	public function get_name() {
		return 'bdt-marquee';
	}

	public function get_widgets() {
		$widgets = [
			'Marquee',
		];

		return $widgets;
	}
}
