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
                    'value'     => 1
                ]); ?>
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
                    'value'     => 'EMAIL'
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
        </tbody>
    </table>
    <?php echo $this->Form->end([
        'label' => 'add',
        'div'   => ['style' => 'text-align: center;']
    ]);?>
</div>