<?php defined( '_JEXEC' ) or die( 'Restricted access' );
class TableApi extends JTable
{
    /**
    * Constructor
    *
    * @param object Database connector object
    */
    function __construct( &$db ) 
    {
        parent::__construct('#__sql2json', 'id', $db);
    }
}