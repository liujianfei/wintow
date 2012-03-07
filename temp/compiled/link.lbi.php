<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div class="links clearfix">
<h2></h2>

  <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
  <div class="link">
 <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" /></a><br>
 <span><a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a></span>
 </div>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

 <?php if ($this->_var['txt_links']): ?>
 <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
 <span>[<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]</span>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 <?php endif; ?>
</div>
<?php endif; ?>