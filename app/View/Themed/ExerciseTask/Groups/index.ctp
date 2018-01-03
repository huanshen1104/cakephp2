<div class="groups index">
	<h2><?php echo __('Role Management'); ?></h2>
    <div style="border:1px solid; padding:5px">
        <?php
        echo $this->Form->create('Group', [
            'type' => 'get',
            'url' => 'index',
        ]);?>
        <table>
            <tbody>
            <tr>
                <td><?php echo $this->Form->input('name', [
                        'label'   => 'Role Code',
                        'between' => '<td>',
                        'value'   => isset($this->request->query['name']) ? $this->request->query['name'] : ''
                    ]); ?>
                </td>
            </tr>
            <tr>
                <td><?php echo $this->Form->input('group_desc', [
                        'label'   => 'Description',
                        'between' => '<td>',
                        'value'   => isset($this->request->query['group_desc']) ? $this->request->query['group_desc'] : ''
                    ]); ?>
                </td>
            </tr>
			<tr>
				<td class="actions" colspan="2" style="text-align: right">
					<input type="submit" value="Search">
					<a href="/grous/index">Clear</a>
				</td>
			</tr>
            </tbody>
        </table>
    </div>

    <br>
    <a href="/groups/add" style="border:1px solid; padding:5px 20px 5px 20px;">Add</a>
    <br>
    <br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name', 'Code'); ?></th>
			<th><?php echo $this->Paginator->sort('group_desc', 'Description'); ?></th>
			<th></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['group_desc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Function Authority'), array('controller' => 'groupsMenus', 'action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $group['Group']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
    <?php echo $this->element('page');?>
</div>
