<script type="text/javascript">
function $(element) {
 return document.getElementById(element);
}
function showMenu(menuID,index) {
 $(menuID).style.display=(index==0?"none":"block");
}

</script>
<div class="category_list">
 <div class="list_t"><span class="f_l">软件分类目录</span> <div class="f_r"><a href="#">全部分类</a>&nbsp;<a href="#">所有软件</a></div></div>
 <ul>
     <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['parent-cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['parent-cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['parent-cat']['iteration']++;
?>
    <li>
    	<div class="stair f_l"><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></div>
       <?php if ($this->_var['cat']['cat_id']): ?>
       <div class="second">
       <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_child']['iteration']++;
?>
        &nbsp;&nbsp;<a href="<?php echo $this->_var['child']['url']; ?>" class="ChildrenLi"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </div> 
       <?php endif; ?>     
     </li>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </ul>
</div>
<div class="blank10"></div>