<div class="jobs form">
    <h2><?php echo $this->fetch('title'); ?></h2>
    <?php echo $this->Form->create('Job');?>
    <table style="border:1px solid;">
        <tbody>
        <tr>
            <?php echo $this->Form->input('id');?>
            <td><?php echo $this->Form->input('job_code', [
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('job_desc1', [
                    'label' => 'Description 1',
                    'size'  => 60,
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('job_desc2', [
                    'label' => 'Description 2',
                    'size'  => 60,
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('job_desc3', [
                    'label' => 'Description 3',
                    'size'  => 60,
                    'between' => '<td>'
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
                    'value'     => isset($this->request->data['Job']['is_enabled']) ? $this->request->data['Job']['is_enabled'] : '1'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td>Week Mask</td>
            <td>
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Mon
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Tue
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Wed
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Thu
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Fri
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Sat
                <?php echo $this->Form->checkbox('week_mask', [
                    'name'  => 'data[Job][week_mask][]',
                    'value' => '1',
                    'hiddenField' => false
                ]); ?>Sun
            </td>
        </tr>
        <tr>
            <td>Template Type</td>
            <td><?php echo $this->Form->radio('template_type', [
                    'EMAIL' => 'E-Mail',
                    'SMS'   => 'SMS',
                ], [
                    'legend'    => false,
                    'separator' => '&nbsp;&nbsp;',
                    'value'     => isset($this->request->data['Job']['template_type']) ? $this->request->data['Job']['template_type'] : 'EMAIL'
                ]); ?>
            </td>
        </tr>
        <!--<tr>
                <td>Start Date</td>
                <td><?php /*echo $this->Form->dateTime('start_range', 'YMD', '24', [
                        'label' => 'Start Date',
                        'between'   => '<td>',
                    ]);*/?>
                </td>
            </tr>
            <tr>
                <td>Start Date</td>
                <td><?php /*echo $this->Form->dateTime('end_range', 'YMD', '24', [
                        'label' => 'End Date',
                        'between'   => '<td>',
                    ]);*/?>
                </td>
            </tr>-->
        <tr>
            <td>Template Content</td>
            <td><?php echo $this->Form->textarea('template_content'); ?>
            </td>
        </tr>
        <tr>
            <td class="actions" colspan="2" style="text-align: center">
                <input type="submit" value="<?=isset($this->request->data['Job']['id']) ? 'Save' : 'Add';?>">
                <a href="/jobs/index">Cancel</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>