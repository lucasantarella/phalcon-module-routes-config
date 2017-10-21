<?php
/**
 * Created by PhpStorm.
 * User: lucasantarella
 * Date: 4/12/17
 * Time: 2:25 PM
 */

namespace LucaSantarella;


interface ModuleRoutesDefinitionInterface
{

	/**
	 * @return string
	 */
	public static function getMountPath();

	/**
	 * @return array
	 */
	public static function getRoutes();

}