<script type="text/javascript">
function $(element) {
 return document.getElementById(element);
}
function showMenu(menuID,index) {
 $(menuID).style.display=(index==0?"none":"block");
}

</script>
<div id="category_tree">
 <h2></h2>
 <div class="cate_m">
 <ul>
     <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['parent-cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['parent-cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['parent-cat']['iteration']++;
?>
    <li onMouseOver="<?php if ($this->_var['cat']['cat_id']): ?>showMenu('c<?php echo $this->_foreach['parent-cat']['iteration']; ?>',1); this.className='cctv';<?php endif; ?>"  onMouseOut="<?php if ($this->_var['cat']['cat_id']): ?>showMenu('c<?php echo $this->_foreach['parent-cat']['iteration']; ?>',0); this.className='';<?php endif; ?>">
   <a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a>
   <?php if ($this->_var['cat']['cat_id']): ?>
   <div id="c<?php echo $this->_foreach['parent-cat']['iteration']; ?>" class="children">
   <div class="conter clearfix">
   <div class="suq"></div>
   <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_child']['iteration']++;
?>
    <a href="<?php echo $this->_var['child']['url']; ?>" class="ChildrenLi"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </div>
   </div>   
   <?php endif; ?>     
     </li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
  <div class="cate_b"><a href="category.php?id=1" class="f6">热门软件</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="category.php?id=1" class="f6">全部软件</a></div>
</div>
</div>
<div class="blank10"></div>