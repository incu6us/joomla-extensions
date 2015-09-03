<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controller library
jimport('joomla.application.component.controller');

/**
 * General Controller of HelloWorld component
 */
class ApiUiController extends JControllerLegacy
{
    /**
     * display task
     *
     * @return void
     */
    function display($cachable = false, $urlparams = false)
    {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        // print_r($input);
        $input->set('view', $input->getCmd('view', 'apiui'));

        // call parent behavior
        parent::display($cachable);
    }

    function save()
    {
        $app = JFactory::getApplication();
        $name = $app->input->post->get('apiname');
        $sqlaction = $app->input->post->get('sqlaction', null, '');
        if ($name && $sqlaction) {
            try {
                $db = JFactory::getDBO();
                $query = $db->getQuery(true);
                $columns = array('apiname', 'sqlaction');
                $values = array($db->quote($name), $db->quote($sqlaction));
                $query->insert($db->quoteName('#__sql2json'))->columns($db->quoteName($columns))->values(implode(',', $values));
                $db->setQuery($query);
                $db->execute();

                echo JText::_('COM_API_SUCCESS');
            }catch (Exception $e){
                echo JText::_($e->getMessage());
            }
        }else{
            echo JText::_(COM_API_ERROR);
        }
        echo "<a class='btn btn-default' href='".JRoute::_('index.php?option=com_sql2json')."' >".JText::_('COM_API_GO_BACK')."</a>";
    }

    function delete(){
        $app = JFactory::getApplication();
        $id = $app->input->get->get('id');
        try {
            $db = JFactory::getDBO();
            $query = $db->getQuery(true);
            $value = $db->quote($id);
            $query->delete($db->quoteName('#__sql2json'))->where($db->quoteName('id').'='.$value);
            $db->setQuery($query);
            $db->execute();

            echo JText::_(COM_API_SUCCESS);
        }catch (Exception $e){
            echo JText::_($e->getMessage());
        }
        echo "<a class='btn btn-default' href='".JRoute::_('index.php?option=com_sql2json')."' >".JText::_('COM_API_GO_BACK')."</a>";
    }
}