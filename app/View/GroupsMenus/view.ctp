<div class="groupsMenus view">
<h2><?php echo __('Groups Menu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupsMenu['GroupsMenu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsMenu['Group']['name'], array('controller' => 'groups', 'action' => 'view', $groupsMenu['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsMenu['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $groupsMenu['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Status'); ?></dt>
		<dd>
			<?php echo h($groupsMenu['GroupsMenu']['row_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($groupsMenu['GroupsMenu']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groups Menu'), array('action' => 'edit', $groupsMenu['GroupsMenu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Groups Menu'), array('action' => 'delete', $groupsMenu['GroupsMenu']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $groupsMenu['GroupsMenu']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Menus'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups Menu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
