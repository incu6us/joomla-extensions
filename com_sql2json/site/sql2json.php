<?php // No direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
 
//sessions
jimport( 'joomla.session.session' );
 
//load tables
JTable::addIncludePath(JPATH_COMPONENT.'/tables');
 
//load classes
JLoader::registerPrefix('API-UI', JPATH_COMPONENT);
 
//Load plugins
JPluginHelper::importPlugin('ui-ui');
 
//application
$app = JFactory::getApplication();
 
// Require specific controller if requested
if($controller = $app->input->get('controller','site')) {
    require_once (JPATH_COMPONENT.'/controllers/'.$controller.'.php');
}
 
// Create the controller
$classname = 'ApiUiController'.$controller;
$controller = new $classname();
 
// Perform the Request task
$controller->execute();