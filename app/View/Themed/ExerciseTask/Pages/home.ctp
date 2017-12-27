<div class="home index">
    <h2><?php echo __('hello') . (isset($_SESSION['Auth']['User']['username']) ? ', <b style="font-style: italic;">' . $_SESSION['Auth']['User']['username'] . '</b>.' : ''); ?></h2>
    <p>here is home.</p>
</div>