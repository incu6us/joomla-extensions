<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_sql2json'); ?>" method="post" name="adminForm">
    <fieldset>
        <legend><?php echo JText::_('COM_API_LEGEND'); ?></legend>
        <label for="apiname">API Name</label>
        <input type="text" id="apiname" name="apiname">
        <label for="sqlaction">SQL-query</label>
        <textarea id="sqlaction" name="sqlaction"></textarea>
    </fieldset>
    <button class="btn btn-success" type="submit">Add</button>
    <hr>
    <table class="table table-striped" style="width: 450px;">
        <thead><?php echo $this->loadTemplate('head'); ?></thead>
        <tbody><?php echo $this->loadTemplate('body'); ?></tbody>
        <tfoot><?php echo $this->loadTemplate('foot'); ?></tfoot>
    </table>
</form>