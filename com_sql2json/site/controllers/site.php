<?php defined( '_JEXEC' ) or die( 'Restricted access' );

// import Joomla controller library
jimport('joomla.application.component.controller');


class ApiUiControllerSite extends JControllerLegacy
{
    function execute($cachable = false, $urlparams = false)
    {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        // print_r($input);
        $input->set('view', $input->getCmd('view', 'ui'));

        // call parent behavior
        parent::display($cachable);
    }

//    function display($cachable = false, $urlparams = false)
//    {
//        // set default view if not set
//        $input = JFactory::getApplication()->input;
//        // print_r($input);
//        $input->set('view', $input->getCmd('view', 'ui'));
//
//        // call parent behavior
//        parent::display($cachable);
//    }
}