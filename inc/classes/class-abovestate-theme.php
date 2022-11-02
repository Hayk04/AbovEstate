<?php
/**
 * Bootstraps the Theme.
 *
 * @package Abovestate
 */

namespace ABOVESTATE_THEME\Inc;

use ABOVESTATE_THEME\Inc\Traits\Singleton;

class ABOVESTATE_THEME {
	use Singleton;

	protected function __construct() {

		// load class.

        Assets::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks() {
		// actions and filters

        /**
         * Actions.
         */
        
	}

    


}

















