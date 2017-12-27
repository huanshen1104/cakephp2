<div class="users index">
	<h2><?php echo __('User Management'); ?></h2>

    <div style="border:1px solid; padding:5px">
        <?php
        echo $this->Form->create('User', [
            'type' => 'get',
            'url' => 'index',
        ]);?>
        <table>
            <tbody>
            <tr>
                <td><?php echo $this->Form->input('username', [
                        'between' => '<td>',
                        'value'   => isset($this->request->query['username']) ? $this->request->query['username'] : ''
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
    <a href="/users/add" style="border:1px solid; padding:5px 20px 5px 20px;">Add</a>
    <br>
    <br>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php //echo $this->Paginator->sort('created'); ?></th>
			<th><?php //echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php //echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php //echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php /*echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); */?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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