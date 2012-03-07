<?php if ($this->_var['best_goods']): ?> 
 <div class="PopBorder BestP clearfix">
 <h2 class="BestT"></h2>
  <span class="scroL" ><img src="themes/yuntow/images/bestleft.gif" onmouseover="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop();this.className='scroL'"></span>  
  <div class="scroMid">
      <div id="demo">
        <div id="demo1" style="float:left">
         <ul>
          <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
           <li>
            <div class="goodsbox">
              <div class="imgbox"><a href="<?php echo $this->_var['goods']['url']; ?>"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a></div>
               <a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
               <?php if ($this->_var['goods']['promote_price'] != ""): ?>
               <?php echo $this->_var['lang']['promote_price']; ?><b class="f1"><?php echo $this->_var['goods']['promote_price']; ?></b><br />
               <?php else: ?>
              <?php echo $this->_var['lang']['shop_price']; ?><b class="f1"><?php echo $this->_var['goods']['shop_price']; ?></b><br />
               <?php endif; ?>
            </div>
           </li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </ul>
     </div>
     <div id="demo2" style="display:inline; overflow:visible;"></div>
     </div>
    </div>
   <span class="scroR" ><img src="themes/yuntow/images/bestright.gif" onmouseover="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop(); this.className='scroR';"></span>
 </div>
<?php endif; ?>
<script type="text/javascript">
      function $(id){  
        return (document.getElementById) ? document.getElementById(id): document.all[id]
      }
      
      var boxwidth=186;//跟图片的实际尺寸相符
      
      var box=$("demo");
      var obox=$("demo1");
      var dulbox=$("demo2");
      obox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      dulbox.style.width=obox.getElementsByTagName("li").length*boxwidth+'px';
      box.style.width=obox.getElementsByTagName("li").length*boxwidth*3+'px';
      var canroll = false;
      if (obox.getElementsByTagName("li").length >=5) {
        canroll = true;
        dulbox.innerHTML=obox.innerHTML;
      }
      var step=5;temp=1;speed=50;
      var awidth=obox.offsetWidth;
      var mData=0;
      var isStop = 1;
      var dir = 1;
      
      function s(){
        if (!canroll) return;
        if (dir) {
      if((awidth+mData)>=0)
      {
      mData=mData-step;
      }
      else
      {
      mData=-step;
      }
      } else {
        if(mData>=0)
        {
        mData=-awidth;
        }
        else
        {
        mData+=step;
        }
      }
      
      obox.style.marginLeft=mData+"px";
      
      if (isStop) return;
      
      setTimeout(s,speed)
      }
      
      
      function moveLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function moveRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 50;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function scrollStop() {
        isStop=1;
      }
      
      function clickLeft() {
          var wasStop = isStop;
          dir = 1;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      
      function clickRight() {
          var wasStop = isStop;
          dir = 0;
          speed = 25;
          isStop=0;
          if (wasStop) {
            setTimeout(s,speed);
          }
      }
      </script>