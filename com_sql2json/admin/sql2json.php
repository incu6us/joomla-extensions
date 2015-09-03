<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import joomla controller library
jimport('joomla.application.component.controller');
 
$language = JFactory::getLanguage();
$language->load('com_sql2json', JPATH_ADMINISTRATOR);

// Get an instance of the controller prefixed by HelloWorld
$controller = JControllerLegacy::getInstance('ApiUi');
 
// Get the task
$jinput = JFactory::getApplication()->input;
// $task = $jinput->get('task', "", 'STR' );
$task = $jinput->getCmd('task');
// Perform the Request task
$controller->execute($task);
 
// Redirect if set by the controller
$controller->redirect();