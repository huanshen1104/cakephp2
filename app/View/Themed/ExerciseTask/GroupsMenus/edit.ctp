<div class="groupMenus form">
	<h2><?php echo __('Function Authority for Role: ' . $group['name']); ?></h2>
	<div style="border:1px solid; padding:5px">
		<?php echo $this->Form->create('GroupsMenu'); ?>
		<?php echo $this->Form->hidden('group_id', [
				'name' => 'GroupsMenus[group_id]',
				'value'=> $group['id']
		]);?>
		<table>
			<tbody>
			<?php foreach ((array)$menus as $menu): ?>
				<tr>
					<?php if ($menu['lev'] == 0): ?>
						<th><?=$menu['menu_desc']?></th>
						<th>Enabled</th>
					<?php else: ?>
						<td><?=$menu['menu_desc']?></td>
						<td>
							<?php echo $this->Form->hidden('', [
								'name' => "GroupsMenus[menu_code][{$menu['id']}]",
								'value'=> $menu['menu_code']
							]);?>
							<?php echo $this->Form->checkbox('menu_id', [
								'name' => 'GroupsMenus[menu_id][]',
								'value'=> $menu['id'],
								'hiddenField' => false,
								'checked'=> in_array($menu['id'], $groupMenuIds) ? true : false
							])?>
						</td>
					<?php endif;?>
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
