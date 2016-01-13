<?php
/**
 * Utility functions for the grid fields extension module.
 */
class GridFieldExtensions {

	public static function include_requirements() {
		$moduleDir = self::get_module_dir();
		Requirements::css($moduleDir.'/css/GridFieldExtensions.css');
		Requirements::javascript($moduleDir.'/javascript/GridFieldExtensions.js');
	}

	public static function get_module_dir() {
		return substr(Director::makeRelative(dirname(dirname(__FILE__))), 1);
	}

}
