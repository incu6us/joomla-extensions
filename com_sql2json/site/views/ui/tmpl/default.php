<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');

$app = JFactory::getApplication();
$name = $app->input->get->get('apiname');

$model = new ApiUiModelApi();
echo $model->getApi($name);

?>