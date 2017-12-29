<div class="menus form">
    <h2><?php echo __('Add Menu'); ?></h2>
    <?php echo $this->Form->create('Menu'); ?>
    <table style="border:1px solid;">
        <tbody>
        <tr>
            <?php echo $this->Form->input('id');?>
        <tr>
            <td>Parent Menu</td>
            <td><?php echo $this->Form->select('parent_id', $topMenus, [
                    'empty'   => ['0' => '顶级菜单']
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('menu_code', [
                    'label'   => 'Menu Code',
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('sort_num', [
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('menu_desc', [
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td><?php echo $this->Form->select('row_status', [
                    '1' => 'Enabled',
                    '0' => 'Disabled',
                ], [
                    'empty'   => false
                ]); ?>
            </td>
        </tr>
        <tr>
            <td class="actions" colspan="2" style="text-align: center">
                <input type="submit" value="Save">
                <a href="/menus/index">Cancel</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
