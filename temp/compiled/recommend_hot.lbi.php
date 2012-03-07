<?php if ($this->_var['hot_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="b_gray">
<div class="centerPadd">
  <div class="itemTit Hot" id="itemHot">
  <div class="f_l f8" style="width:120px; text-align:left;">热卖商品</div>
      <?php if ($this->_var['cat_rec'] [ 0 ]): ?>
      <h2><a href="javascript:void(0)" onclick="change_tab_style('itemHot', 'h2', this);get_cat_recommend(3, 0);"><?php echo $this->_var['lang']['all_goods']; ?></a></h2>
      <?php $_from = $this->_var['cat_rec']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'rec_data');if (count($_from)):
    foreach ($_from AS $this->_var['rec_data']):
?>
      <h2 class="h2bg"><a href="javascript:void(0)" onclick="change_tab_style('itemHot', 'h2', this);get_cat_recommend(3, <?php echo $this->_var['rec_data']['cat_id']; ?>)"><?php echo $this->_var['rec_data']['cat_name']; ?></a></h2>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <?php endif; ?>
      <a href="search.php?intro=hot" class="f6">更多&nbsp;&gt;&gt;</a>
  </div>
  <div id="show_hot_area" class="clearfix goodsBox">
  <?php endif; ?>
  <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_77804800_1331091970');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_77804800_1331091970']):
?>
  <div class="goodsItem">
         <span class="hot"></span>
           <a href="<?php echo $this->_var['goods_0_77804800_1331091970']['url']; ?>"><img src="<?php echo $this->_var['goods_0_77804800_1331091970']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_77804800_1331091970']['name']); ?>" class="goodsimg" /></a><br />
           <p><a href="<?php echo $this->_var['goods_0_77804800_1331091970']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_77804800_1331091970']['name']); ?>"><?php echo $this->_var['goods_0_77804800_1331091970']['short_style_name']; ?></a></p>
           <font class="f1">
           <?php if ($this->_var['goods_0_77804800_1331091970']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_77804800_1331091970']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_77804800_1331091970']['shop_price']; ?>
          <?php endif; ?>
           </font>
        </div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  <?php if ($this->_var['cat_rec_sign'] != 1): ?>
  </div>
</div>
</div>
<div class="blank10"></div>
  <?php endif; ?>
<?php endif; ?>
