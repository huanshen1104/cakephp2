<div class="jobs index">
	<h2><?php echo __('Job Management'); ?></h2>

    <div style="border:1px solid; padding:5px">
        <?php
        echo $this->Form->create('Job', [
                'type' => 'get',
                'url' => 'index',
        ]);?>
        <table>
            <tbody>
                <tr>
                    <td><?php echo $this->Form->input('job_code', [
                            'between' => '<td>',
                            'value'   => isset($this->request->query['job_code']) ? $this->request->query['job_code'] : ''
                        ]); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $this->Form->input('job_desc', [
                            'label'  => 'Job Description',
                            'between' => '<td>',
                            'size'    => 60,
                            'value'   => isset($this->request->query['job_desc']) ? $this->request->query['job_desc'] : ''
                        ]); ?>
                    </td>
                </tr>
                <tr>
                    <td>Template Type</td>
                    <td><?php echo $this->Form->radio('template_type', [
                            ''      => 'All',
                            'EMAIL' => 'E-Mail',
                            'SMS'   => 'SMS',
                        ], [
                            'legend'    => false,
                            'separator' => '&nbsp;&nbsp;',
                            'value'     => isset($this->request->query['template_type']) ? $this->request->query['template_type'] : ''
                        ]); ?>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $this->Form->radio('is_enabled', [
                            '1' => 'Enable',
                            '0' => 'Disable',
                        ], [
                            'legend'    => false,
                            'separator' => '&nbsp;&nbsp;',
                            'value'     => isset($this->request->query['is_enabled']) ? $this->request->query['is_enabled'] : '1'
                        ]); ?>
                    </td>
                </tr>
                <tr>
                    <td class="actions" colspan="2" style="text-align: right">
                        <input type="submit" value="Search">
                        <a href="/jobs/index">Clear</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
    <a href="/jobs/add" style="border:1px solid; padding:5px 20px 5px 20px;">Add</a>
    <br>
    <br>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('job_code'); ?></th>
			<th><?php echo $this->Paginator->sort('job_desc1'); ?></th>
            <th><?php echo $this->Paginator->sort('template_type'); ?></th>
            <th></th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($jobs as $job): ?>
	<tr>
		<td><?php echo h($job['Job']['job_code']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['job_desc1']); ?>&nbsp;</td>
		<td><?php echo h($job['Job']['template_type']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $job['Job']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $job['Job']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $job['Job']['id']))); ?>
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
