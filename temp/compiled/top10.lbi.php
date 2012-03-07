
<div class="top_box">
<b class="b1"></b><b class="b2 d1"></b><b class="b3 d1"></b><b class="b4 d1"></b>
<div class="b d1">
<h2 class="box_tit"><span class="f8">热门排行</span></h2>
  <div class="top10List clearfix">
  <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_14880500_1331088269');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_14880500_1331088269']):
        $this->_foreach['top_goods']['iteration']++;
?>
  <ul class="clearfix">
	<img src="themes/yuntow/images/top_<?php echo $this->_foreach['top_goods']['iteration']; ?>.gif" class="iteration" />
	<?php if ($this->_foreach['top_goods']['iteration'] < 4): ?>
      <li class="topimg">
      <a href="<?php echo $this->_var['goods_0_14880500_1331088269']['url']; ?>"><img src="<?php echo $this->_var['goods_0_14880500_1331088269']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_14880500_1331088269']['name']); ?>" class="samllimg" /></a>
      </li>
	<?php endif; ?>		
      <li <?php if ($this->_foreach['top_goods']['iteration'] < 4): ?>class="iteration1"<?php endif; ?>>
      <a href="<?php echo $this->_var['goods_0_14880500_1331088269']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_14880500_1331088269']['name']); ?>"><?php echo $this->_var['goods_0_14880500_1331088269']['short_name']; ?></a><br />
      <?php echo $this->_var['lang']['shop_price']; ?><font class="f1"><?php echo $this->_var['goods_0_14880500_1331088269']['price']; ?></font><br />
      </li>
    </ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<img src="themes/yuntow/images/top_r_img.gif" class="top_img" />
</div>
<b class="b4b d1"></b><b class="b3b d1"></b><b class="b2b d1"></b><b class="b1b"></b>
</div>
<div class="blank5"></div>
