<?php
/**
 * CONTENIDO mpMinify front controller
 *
 * @package Minify
 * @version SVN Id $Id: $
 *
 * @author Murat Purc <murat@purc.de>
 * @copyright Murat Purc it-solutions <www.purc.de>
 * @license http://www.gnu.org/licenses/gpl-2.0.html - GNU General Public License, version 2
 */


// (string) Set path to current clients frontend
$min_con_frontend_path = str_replace('\\', '/', realpath(dirname(__FILE__) . '/../')) . '/';


// (string) Path to minify
$min_con_path = str_replace('\\', '/', realpath(dirname(__FILE__) . '/../../')) . '/vendor/minify/';


// (array) Overwrite minify configuration in vendor/minify/min/config.php
$min_con_config = array();
$min_con_config['min_cachePath'] = $min_con_frontend_path . 'cache/';
$min_con_config['min_enableBuilder'] = false;


// (array) Overwrite minify test configuration in vendor/minify/min/config-test.php
$min_con_config_test = array();


// (array) Overwrite minify group configuration in vendor/minify/min/groupsConfig.php
$min_con_groupsConfig = array(
#    'js' => array('//cms/js/awesomelib.js', '//cms/js/awesomelib-tooltip.js', '//cms/js/awesomelib-gallery.js'),
#    'css' => array('//cms/css/contenido_sample.css', '//cms/css/slideshow.css'),
);


include_once($min_con_path . 'min/index_contenido.php');

