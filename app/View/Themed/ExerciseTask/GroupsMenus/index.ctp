<div class="groupsMenus index">
	<h2><?php echo __('Groups Menus'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('menu_id'); ?></th>
			<th><?php echo $this->Paginator->sort('row_status'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groupsMenus as $groupsMenu): ?>
	<tr>
		<td><?php echo h($groupsMenu['GroupsMenu']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($groupsMenu['Group']['name'], array('controller' => 'groups', 'action' => 'view', $groupsMenu['Group']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($groupsMenu['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $groupsMenu['Menu']['id'])); ?>
		</td>
		<td><?php echo h($groupsMenu['GroupsMenu']['row_status']); ?>&nbsp;</td>
		<td><?php echo h($groupsMenu['GroupsMenu']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $groupsMenu['GroupsMenu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $groupsMenu['GroupsMenu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $groupsMenu['GroupsMenu']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $groupsMenu['GroupsMenu']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Groups Menu'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
