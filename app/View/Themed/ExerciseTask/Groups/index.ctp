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
            </tbody>
        </table>
        <?php echo $this->Form->end([
            'label' => 'search',
            'div'   => ['style' => 'text-align: right;'],
        ]);?>
    </div>

    <br>
    <a href="/groups/add" style="border:1px solid; padding:5px 20px 5px 20px;">Add</a>
    <br>
    <br>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('group_desc'); ?></th>
			<th>option</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['group_desc']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $group['Group']['id']))); ?>
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