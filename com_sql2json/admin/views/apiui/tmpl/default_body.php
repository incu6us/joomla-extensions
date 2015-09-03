<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<?php foreach($this->items as $i => $item): ?>
	<tr class="row<?php echo $i % 2; ?>">
		<!--		<td>-->
		<!--			--><?php //echo JHtml::_('grid.id', $i, $item->id); ?>
		<!--		</td>-->
		<td>
			<?php echo JText::_($item->apiname); ?>
		</td>
		<td>
			<textarea disabled><?php echo JText::_($item->sqlaction); ?></textarea>
		</td>
		<td>
			<a class="btn btn-danger" href="<?php JRoute::_('index.php'); ?>?option=com_sql2json&task=delete&id=<?php echo $item->id; ?>" onclick="return confirm('<?php echo JText::_(COM_API_CONFIRM_QUESTION); ?>') ? true : false;">Delete</a>
		</td>
	</tr>
<?php endforeach; ?>
<input type="hidden" name="task" value="save" />