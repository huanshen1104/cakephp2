<div class="users form">
    <h2><?php echo __('Change Password'); ?></h2>
    <?php echo $this->Form->create('User'); ?>
    <table style="border:1px solid;">
        <tbody>
        <tr>
            <?php echo $this->
            Form->input('id');?>
            <td><?php echo $this->Form->input('username', [
                    'label'   => 'Username',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('old_password', [
                    'label'   => 'Old Password',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('password', [
                    'label'   => 'password',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('confirm_password', [
                    'type'    => 'password',
                    'label'   => 'Confirm Password',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td class="actions" colspan="2" style="text-align: center">
                <input type="submit" value="Save">
                <a href="/groups/index">Cancel</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
