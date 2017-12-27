<h2>Login Page</h2>
<table style="border:1px solid;">
    <tbody>
        <?php
        echo $this->Form->create('User', array(
            'url' => array(
                'controller' => 'users',
                'action' => 'login'
            )
        ));?>
        <tr>
            <td><?php echo $this->Form->input('User.username', [
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
        <tr>
            <td><?php echo $this->Form->input('User.password', [
                    'between' => '<td>'
                ]); ?>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->end('Login'); ?>