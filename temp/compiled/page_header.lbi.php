<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
<div class="header">
<div class="topnav">
<div class="block">
    <div class="f_l">
    	<img src="themes/yuntow/images/toplinkleft.gif" alt="<?php echo $this->_var['page_title']; ?>" />
    </div>
    <div class="nue tr f_r">
    <div class="f_l">
        
        <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
        <div id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        
    </div>
    <div class="cart f_r" id="enter">
      <div id="cartInfo">购物车</div>
      <div id="flying"></div>
      <div id=all-links style="display:none;">
       <div id="ECS_CARTINFO">
       <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>
         <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       </div>
      </div>  
      <script type="text/javascript">
      CartMenu();
      </script>
     </div>
    </div>
</div>
</div>
<div class="head_t">
    <div class="logo"><a href="index.php"><img src="themes/yuntow/images/logo.gif" alt="<?php echo $this->_var['page_title']; ?>" /></a></div>
    <div class="telnumber"><font class="tel01">免费客服热线：</font><font class="tel02">400-000-000</font></div>
</div>
<div class="head_b">
    <div class="menu block">
        <span class="L"></span>
        <span class="R"></span>
         <ul>
            <li class="link"></li>
            <li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur"<?php endif; ?>><a href="index.php"><?php echo $this->_var['lang']['home']; ?></a><span></span></li>
            <li class="link"></li>
            <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
            <li <?php if ($this->_var['nav']['active'] == 1): ?>class="cur"<?php endif; ?>>
            <a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a><span></span>
            </li>
            <li class="link"></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
         </ul>
    </div>
    <div class="searchbox block">
        <div class="sear f_l">
        <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" >
           <input name="keywords" type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>" size="30" class="search"/>
           <input name="imageField" type="submit" value="&nbsp;" class="go"  />
        </form>
        </div>
        <div class="key f_l">
        <script type="text/javascript">
            
            <!--
            function checkSearchForm()
            {
                if(document.getElementById('keyword').value)
                {
                    return true;
                }
                else
                {
                    alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                    return false;
                }
            }
            -->
            
            </script>
            <?php if ($this->_var['searchkeywords']): ?>
           <?php echo $this->_var['lang']['hot_search']; ?> ：
           <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
           <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
           <?php endif; ?>
        </div>
    </div>
</div>
</div>
<div class="blank10"></div>