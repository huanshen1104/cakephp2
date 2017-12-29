<div class="groupMenus form">
    <h2><?php echo __('Function Authority for Role: ' . $group['name']); ?></h2>
    <div style="border:1px solid; padding:5px">
        <?php echo $this->Form->create('GroupsMenu'); ?>
        <table>
            <tbody>
            <?php foreach ((array)$menus as $subMenu): ?>
                <tr>
                    <?php if ($subMenu['lev'] == 0): ?>
                        <th><?=$subMenu['menu_desc']?></th>
                    <?php else: ?>
                        <td><?=$subMenu['menu_desc']?></td>
                    <?php endif;?>
                    <?php //echo $this->Form->checkbox()?>
                </tr>
            <?php endforeach;?>
            <tr>
                <td class="actions" colspan="2" style="text-align: center">
                    <input type="submit" value="Save">
                    <a href="/groups/index">Cancel</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
