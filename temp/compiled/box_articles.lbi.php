 <?php $_from = $this->_var['index_get_articles']['articlercat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_cat');if (count($_from)):
    foreach ($_from AS $this->_var['article_cat']):
?>

<div class="box_article">

<div class="art_t"><?php echo $this->_var['article_cat']['cat_name']; ?></div>
<ul>
  <?php $_from = $this->_var['index_get_articles']['articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article_0_04207000_1331093466');if (count($_from)):
    foreach ($_from AS $this->_var['article_0_04207000_1331093466']):
?>
    <?php if ($this->_var['article_0_04207000_1331093466']['cat_id'] == $this->_var['article_cat']['cat_id']): ?>
	<li>. <a href="<?php echo $this->_var['article_0_04207000_1331093466']['url']; ?>" class="f3"  > <?php echo $this->_var['article_0_04207000_1331093466']['short_title']; ?></a></li>
    <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   
</ul>
<div align="right"><a href="article_cat.php?id=<?php echo $this->_var['article_cat']['cat_id']; ?>" class="f6">更多&nbsp;&gt;&gt;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
 </div>
<div class="block"></div>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<div class="blank10"></div>

