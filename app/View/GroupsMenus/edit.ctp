<div class="groupsMenus form">
<?php echo $this->Form->create('GroupsMenu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Groups Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id');
		echo $this->Form->input('menu_id');
		echo $this->Form->input('row_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GroupsMenu.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('GroupsMenu.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups Menus'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
