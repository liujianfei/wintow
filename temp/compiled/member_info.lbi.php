<div id="append_parent"></div>
<div class="login">
    <?php if ($this->_var['user_info']): ?>
    <font>
    <?php echo $this->_var['lang']['hello']; ?>，<font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <?php echo $this->_var['lang']['welcome_return']; ?>！
    <a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>|
     <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
    </font>
    <?php else: ?>
     <?php echo $this->_var['lang']['welcome']; ?>&nbsp;&nbsp;&nbsp;&nbsp;
     <a href="user.php">登录</a> 或
     <a href="user.php?act=register">注册</a>
    <?php endif; ?>
</div>