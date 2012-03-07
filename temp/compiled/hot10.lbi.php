<?php if ($this->_var['top_goods']): ?>
<div class="hot b_gray clearfix">
<h2 class="Tit"><span class="blue">热门应用</span></h2>
<ul id="top10">
 <?php $_from = $this->_var['top_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_21993500_1331088279');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_21993500_1331088279']):
        $this->_foreach['top_goods']['iteration']++;
?>
 <?php if (($this->_foreach['top_goods']['iteration'] - 1) <= 5): ?>
 <li>
  <div class="last clearfix">
  <div class="imgbox">
  	<a href="<?php echo $this->_var['goods_0_21993500_1331088279']['url']; ?>"><img src="<?php echo $this->_var['goods_0_21993500_1331088279']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_21993500_1331088279']['name']); ?>" width="110" height="90" /></a>
    <img src="themes/yuntow/images/best.gif" class="best"/>
  </div>
  <?php echo $this->_foreach['top_goods']['iteration']; ?>. <a href="<?php echo $this->_var['goods_0_21993500_1331088279']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_21993500_1331088279']['name']); ?>"><?php echo $this->_var['goods_0_21993500_1331088279']['short_name']; ?></a>
  </div>
 </li>
 <?php endif; ?>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
 </ul>
 </div>
<script>elems("top10","cur");</script>
<?php endif; ?>
<div class="blank10"></div>