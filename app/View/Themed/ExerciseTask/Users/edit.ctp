<div class="users form">
    <h2><?php echo __('Add User'); ?></h2>
    <?php echo $this->Form->create('User'); ?>
    <table style="border:1px solid;">
        <tbody>
        <tr>
            <?php echo $this->Form->input('id');?>
            <td><?php echo $this->Form->input('username', [
                    'label'   => 'Username',
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
            <td>Role</td>
            <td><?php echo $this->Form->select('group_id', $groups, [
                    'empty'   => false
                ]); ?>
            </td>
        </tr>
        <tr>
            <td class="actions" colspan="2" style="text-align: center">
                <input type="submit" value="add">
                <a href="/groups/index">Cancel</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
