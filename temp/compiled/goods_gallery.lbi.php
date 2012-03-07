<?php if ($this->_var['pictures']): ?>
 <div class="picture clearfix" id="imglist">
   <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" lang="<?php echo $this->_var['goods']['goods_img']; ?>" class="onbg" />
    <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');if (count($_from)):
    foreach ($_from AS $this->_var['picture']):
?>
       <img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" lang="<?php echo $this->_var['picture']['img_url']; ?>" class="autobg" />
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
 <script type="text/javascript">picturs();</script>
<?php endif; ?>