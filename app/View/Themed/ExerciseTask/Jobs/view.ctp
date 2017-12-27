<div class="menu">
    <ul>
        <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display')); ?></li>
        <li><?php echo $this->Html->link(__('Job Management'), array('controller' => 'jobs', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('User Management'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li>
            <ul>
                <li><?php echo $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'index')); ?> </li>
            </ul>
        </li>
    </ul>
</div>
<div class="jobs view">
<h2><?php echo __('Job'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($job['Job']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Code'); ?></dt>
		<dd>
			<?php echo h($job['Job']['job_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Desc1'); ?></dt>
		<dd>
			<?php echo h($job['Job']['job_desc1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Desc2'); ?></dt>
		<dd>
			<?php echo h($job['Job']['job_desc2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Desc3'); ?></dt>
		<dd>
			<?php echo h($job['Job']['job_desc3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Enabled'); ?></dt>
		<dd>
			<?php echo h($job['Job']['is_enabled']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template Type'); ?></dt>
		<dd>
			<?php echo h($job['Job']['template_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template Content'); ?></dt>
		<dd>
			<?php echo h($job['Job']['template_content']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Scheduled Dt'); ?></dt>
		<dd>
			<?php echo h($job['Job']['scheduled_dt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schedule Type'); ?></dt>
		<dd>
			<?php echo h($job['Job']['schedule_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Week Mask'); ?></dt>
		<dd>
			<?php echo h($job['Job']['week_mask']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Run Time'); ?></dt>
		<dd>
			<?php echo h($job['Job']['last_run_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Run Time'); ?></dt>
		<dd>
			<?php echo h($job['Job']['next_run_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Range'); ?></dt>
		<dd>
			<?php echo h($job['Job']['start_range']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Range'); ?></dt>
		<dd>
			<?php echo h($job['Job']['end_range']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Resend'); ?></dt>
		<dd>
			<?php echo h($job['Job']['is_resend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Status'); ?></dt>
		<dd>
			<?php echo h($job['Job']['job_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retry Times'); ?></dt>
		<dd>
			<?php echo h($job['Job']['retry_times']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fail Count'); ?></dt>
		<dd>
			<?php echo h($job['Job']['fail_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Error Code'); ?></dt>
		<dd>
			<?php echo h($job['Job']['error_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Success Job Log'); ?></dt>
		<dd>
			<?php echo h($job['Job']['success_job_log']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fail Job Log'); ?></dt>
		<dd>
			<?php echo h($job['Job']['fail_job_log']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Modified'); ?></dt>
		<dd>
			<?php echo h($job['Job']['row_modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Row Status'); ?></dt>
		<dd>
			<?php echo h($job['Job']['row_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
