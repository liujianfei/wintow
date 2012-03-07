<?php if ($this->_var['promotion_goods']): ?>
<div class="block">
<b class="b1"></b><b class="b2 d1"></b><b class="b3 d1"></b><b class="b4 d1"></b>
<div class="b d1">
<h2 class="box_tit"><span class="f8">促销抢购</span></h2>
<div class="box_cont clearfix">
	<a href="javascript:void(0)" class="up" onmouseup="ISL_StopUp()" onmousedown="ISL_GoUp()" onmouseout="ISL_StopUp()" ><img src="themes/yuntow/images/turnleft.gif" /></a>
    <a href="javascript:void(0)" class="next" onmouseup="ISL_StopDown()" onmousedown="ISL_GoDown()" onmouseout="ISL_StopDown()" ><img src="themes/yuntow/images/turnright.gif" /></a>
    <div class="sales clearfix">
        <div class="goodBox" id="ISL_Cont">
           <div class="ScrCont">
           	 <div id="List1">
             <?php $_from = $this->_var['promotion_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_18222200_1331088269');$this->_foreach['promotion_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promotion_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_18222200_1331088269']):
        $this->_foreach['promotion_foreach']['iteration']++;
?>
             <?php if (($this->_foreach['promotion_foreach']['iteration'] - 1) <= 3): ?>
               <div class="goodList">
               <a href="<?php echo $this->_var['goods_0_18222200_1331088269']['url']; ?>"><img src="<?php echo $this->_var['goods_0_18222200_1331088269']['thumb']; ?>" border="0" alt="<?php echo htmlspecialchars($this->_var['goods_0_18222200_1331088269']['name']); ?>"/></a><br />
                         <p><a href="<?php echo $this->_var['goods_0_18222200_1331088269']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_18222200_1331088269']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_18222200_1331088269']['short_name']); ?></a></p>
               <?php echo $this->_var['lang']['promote_price']; ?><font class="f1"><?php echo $this->_var['goods_0_18222200_1331088269']['promote_price']; ?></font>
               </div>
             <?php endif; ?>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
             </div><div id="List2"></div>
           </div>
       </div>
    </div>
</div>
</div>
<b class="b4b d1"></b><b class="b3b d1"></b><b class="b2b d1"></b><b class="b1b"></b>
</div>
</div>
<div class="blank10"></div>
<?php endif; ?>
<script language="javascript" type="text/javascript">
//图片滚动列表 mengjia 070816
var Speed = 10; //速度(毫秒)
var Space = 10; //每次移动(px)
var PageWidth = 167; //翻页宽度
var fill = 0; //整体移位
var MoveLock = false;
var MoveTimeObj;
var Comp = 0;
var AutoPlayObj = null;
GetObj("List2").innerHTML = GetObj("List1").innerHTML;
GetObj('ISL_Cont').scrollLeft = fill;
GetObj("ISL_Cont").onmouseover = function(){clearInterval(AutoPlayObj);}
GetObj("ISL_Cont").onmouseout = function(){AutoPlay();}
AutoPlay();
function GetObj(objName){if(document.getElementById){return eval('document.getElementById("'+objName+'")')}else{return eval

('document.all.'+objName)}}
function AutoPlay(){ //自动滚动
clearInterval(AutoPlayObj);
AutoPlayObj = setInterval('ISL_GoDown();ISL_StopDown();',5000); //间隔时间
}
function ISL_GoUp(){ //上翻开始
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
MoveTimeObj = setInterval('ISL_ScrUp();',Speed);
}
function ISL_StopUp(){ //上翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0){
Comp = fill - (GetObj('ISL_Cont').scrollLeft % PageWidth);
CompScr();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrUp(){ //上翻动作
if(GetObj('ISL_Cont').scrollLeft <= 0){GetObj('ISL_Cont').scrollLeft = GetObj

('ISL_Cont').scrollLeft + GetObj('List1').offsetWidth}
GetObj('ISL_Cont').scrollLeft -= Space ;
}
function ISL_GoDown(){ //下翻
clearInterval(MoveTimeObj);
if(MoveLock) return;
clearInterval(AutoPlayObj);
MoveLock = true;
ISL_ScrDown();
MoveTimeObj = setInterval('ISL_ScrDown()',Speed);
}
function ISL_StopDown(){ //下翻停止
clearInterval(MoveTimeObj);
if(GetObj('ISL_Cont').scrollLeft % PageWidth - fill != 0 ){
Comp = PageWidth - GetObj('ISL_Cont').scrollLeft % PageWidth + fill;
CompScr();
}else{
MoveLock = false;
}
AutoPlay();
}
function ISL_ScrDown(){ //下翻动作
if(GetObj('ISL_Cont').scrollLeft >= GetObj('List1').scrollWidth){GetObj('ISL_Cont').scrollLeft =

GetObj('ISL_Cont').scrollLeft - GetObj('List1').scrollWidth;}
GetObj('ISL_Cont').scrollLeft += Space ;
}
function CompScr(){
var num;
if(Comp == 0){MoveLock = false;return;}
if(Comp < 0){ //上翻
if(Comp < -Space){
   Comp += Space;
   num = Space;
}else{
   num = -Comp;
   Comp = 0;
}
GetObj('ISL_Cont').scrollLeft -= num;
setTimeout('CompScr()',Speed);
}else{ //下翻
if(Comp > Space){
   Comp -= Space;
   num = Space;
}else{
   num = Comp;
   Comp = 0;
}
GetObj('ISL_Cont').scrollLeft += num;
setTimeout('CompScr()',Speed);
}
}
</script>