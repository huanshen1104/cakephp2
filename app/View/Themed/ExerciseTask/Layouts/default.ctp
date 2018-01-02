<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'EMT');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(['cake.generic', 'menu']);

        echo $this->Html->script(['jquery/jquery-1.6.2.min', 'jquery/jquery-ui-timepicker-addon']);

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            <div class="topMenu">
            <p>
                <?php echo $this->Html->link('[ Language ]', array('controller' => 'users', 'action' => '#'));?>
                <?php if ($this->Session->check('Auth.User')): ?>
                    <?php echo $this->Html->link('[ Change Password ]', array('controller' => 'users', 'action' => 'changePassword', $_SESSION['Auth']['User']['id']));?>
                    <?php echo $this->Html->link('[ Logout ]', array('controller' => 'users', 'action' => 'logout'));?>
                <?php endif;?>
            </p>
            </div>
            <div class="clear"></div>
            <div>
                <h1>E-Marketing Tool</h1>
            </div>
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

            <div class="menu">
                <ul>
                    <li><?php echo $this->Html->link(__('Home'), array('controller' => 'pages', 'action' => 'display')); ?></li>
                    <?php $leftMenus = Tool::_getLeftMenus();//debug($leftMenus);exit;?>
					<?php foreach ($leftMenus as $leftMenu): ?>
						<?php if ($leftMenu['lev'] == 0): ?>
							<li><?php echo $this->Html->link(__($leftMenu['menu_desc']), ['controller' => $leftMenu['menu_code']]); ?> </li>
						<?php endif;?>
					<?php endforeach;?>
					<!--<li>
                        <ul>
                            <li><?php /*echo $this->Html->link(__('User'), array('controller' => 'users', 'action' => 'index')); */?> </li>
                            <li><?php /*echo $this->Html->link(__('Role'), array('controller' => 'groups', 'action' => 'index')); */?> </li>
                        </ul>
                    </li>-->
                </ul>
            </div>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'https://cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
