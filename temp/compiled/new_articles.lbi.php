<div class="b_gray">
<div id="newArticleTab">
 <ul class="clearfix">
 <li>
    <div class="NewsTit" id="ECS_ARTICLE">
      <?php echo $this->_var['lang']['new_article']; ?>
     </div>
  </li>
  <li class="br">
    <div class="NewsTit2" id="ECS_NOTICE">
   <?php echo $this->_var['lang']['shop_notice']; ?>
    </div>
   </li> 
 </ul>
</div>
 <div class="NewsAricle clearfix">
    <div id="ECS_NOTICE_BODY" style="display:none;">
     <?php echo $this->_var['shop_notice']; ?>
    </div>
    <div id="ECS_ARTICLE_BODY" >
      <ul>
        <?php $_from = $this->_var['new_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['new_articles'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_articles']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['new_articles']['iteration']++;
?>       
        <li class="dot">[<a href="<?php echo $this->_var['article']['cat_url']; ?>" style="color:#000;"><?php echo $this->_var['article']['cat_name']; ?></a>] <a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><?php echo sub_str($this->_var['article']['short_title'],25); ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
    </div>
 </div>
 </div>
<script type="text/javascript">
//<![CDATA[

  var cycleList = ['ECS_ARTICLE', 'ECS_NOTICE'];
  var tabFront = 'NewsTit';
  var tabBack = 'NewsTit2';
  function cycleShow(obj)
  {
    var curObj;
    var curBody;
    for (i=0; i < cycleList.length; i++)
    {
      curObj = document.getElementById(cycleList[i]);
      curBody = document.getElementById(cycleList[i] + '_BODY');
      if (obj.id == curObj.id)
      {
        curObj.className = tabFront;
        curBody.style.display = "";
      }
      else
      {
        curObj.className = tabBack;
        curBody.style.display = "none";
      }
    }
  }

  // 添加事件
  for (i=0; i< cycleList.length; i++)
  {
    document.getElementById(cycleList[i]).onmousemove = function()
    {
      cycleShow(this);
    };
  }

//]]>
</script>