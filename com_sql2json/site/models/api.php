<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

class ApiUiModelApi
{

    private function getQueryByApiName($name){
        $db = JFactory::getDBO();
        $query = $db->getQuery(true);
        // Select some fields
        $query->select('sqlaction');
        // From the hello table
        $query->from('#__sql2json');
        $query->where('apiname = \''.$name.'\'');
        $db->setQuery($query);
        return $db->loadObject()->sqlaction;

    }

    function getApi($name)
    {
        $db = JFactory::getDBO();
        $sql = $this->getQueryByApiName($name);
//        print_r($sql);
        $db->setQuery($sql);

        if(count($db->loadObjectList())>1){
            $options = $db->loadObjectList();
        }else{
            $options = $db->loadObject();
        }

        return json_encode($options);
    }

}