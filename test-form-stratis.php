<?php

/**
 * Plugin Name: Test Stratis Form
 * Description:  test form stratis
 * Version: 1.0.0
 * Author: Hana ben Alaya
 *
 * @package testStratis\Plugins\formPlugin
 */

class_exists( 'teststratis\plugins\formPlugin\src' ) || require_once __DIR__ . '/vendor/autoload.php';

\teststratis\plugins\formPlugin\src\StratisFormPlugin::init();



