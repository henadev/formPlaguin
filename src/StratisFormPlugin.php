<?php

namespace teststratis\plugins\formPlugin;

use teststratis\Plugins\formPlugin\CustomFields\FieldGroup\FormFieldGroup;
use teststratis\plugins\formPlugin\PostType\FormPostType;

/**
 * Class StratisFormPlugin
 *
 * @package src
 */ 
class StratisFormPlugin {

	protected function __construct() {
		parent::__construct( __DIR__ . DIRECTORY_SEPARATOR . '..' );

		\add_action(
			'init',
			function() {
				FromFieldGroup::get_instance()->register();
				FromPostType::get_instance()->register();

			},
		
		);
	}
}
