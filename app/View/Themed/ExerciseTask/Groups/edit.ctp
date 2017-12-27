<div class="groups form">
    <h2><?php echo __('Edit Role'); ?></h2>
    <?php echo $this->Form->create('Group'); ?>
    <table style="border:1px solid;">
        <tbody>
        <tr>
            <?php echo $this->Form->input('id');?>
            <td><?php echo $this->Form->input('name', [
                    'label'   => 'Role Code',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('group_desc', [
                    'label'   => 'Description',
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