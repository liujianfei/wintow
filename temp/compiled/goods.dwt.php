<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.2" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
<script type="text/javascript" src="themes/yuntow/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block">
 <div class="AreaL f_l">
 
<?php echo $this->fetch('library/category_tree.lbi'); ?>
<?php echo $this->fetch('library/goods_attrlinked.lbi'); ?>
<?php echo $this->fetch('library/goods_article.lbi'); ?>
<?php echo $this->fetch('library/history.lbi'); ?>
<?php echo $this->fetch('library/promotion_info.lbi'); ?>


 </div>
 <div class="AreaR f_r">
 <?php echo $this->fetch('library/ur_here.lbi'); ?>
<div class="GoodsDetails"> 
 <div class="clearfix">
   <div class="goodImg f_l">
    <div class="imgInfo">
       <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" id="goodsimg" style="width:300px; cursor:pointer;" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"  />
   </div>
 <div class="tr up"> 
 <?php if ($this->_var['prev_good']): ?>
  <a href="<?php echo $this->_var['prev_good']['url']; ?>"><img alt="prev" src="themes/yuntow/images/up.gif" /></a>
  <?php endif; ?>
 <img src="themes/yuntow/images/big.gif" style="cursor:pointer" onclick="window.open('gallery.php?id=<?php echo $this->_var['goods']['goods_id']; ?>'); return false;"  />
  <?php if ($this->_var['next_good']): ?>
  <a href="<?php echo $this->_var['next_good']['url']; ?>"><img alt="next" src="themes/yuntow/images/down.gif" /></a>
  <?php endif; ?> 
 </div>
   <?php echo $this->fetch('library/goods_gallery.lbi'); ?>
   </div>
   <div class="goodTextInfo f_r">
  <h1 class="goodsName">
  <?php echo $this->_var['goods']['goods_style_name']; ?> 
   </h1>
   <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
   <?php if ($this->_var['promotion']): ?>
   <div class="Goodpromotion">
   <font id="fontcolor"><?php echo $this->_var['lang']['activity']; ?></font><br />
   <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
   <?php if ($this->_var['item']['type'] == "snatch"): ?>
   <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
   <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
   <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
   <?php elseif ($this->_var['item']['type'] == "auction"): ?>
   <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>">[<?php echo $this->_var['lang']['auction']; ?>]</a>
   <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
   <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
   <?php endif; ?>
   <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>"><?php echo $this->_var['item']['act_name']; ?></a><br />
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <script>setInterval("colorStyle('fontcolor','a_red','a_blue')",300);</script>
   </div>
   <?php endif; ?>
	 <div class="GoodBlank clearfix">
  <ul>
   <?php if ($this->_var['cfg']['show_goodssn']): ?>
  <li>
   <?php echo $this->_var['lang']['goods_sn']; ?><font class="fontg"><?php echo $this->_var['goods']['goods_sn']; ?></font>
  </li>
   <?php endif; ?>
   
   <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
  <li>
   <?php if ($this->_var['goods']['goods_number'] == 0): ?>
   <?php echo $this->_var['lang']['goods_number']; ?><img src="themes/yuntow/images/wuhuo.gif" /><br />
   <?php else: ?>
   <?php echo $this->_var['lang']['goods_number']; ?> <font class="fontg"><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></font>
   <?php endif; ?>
  </li>
   <?php endif; ?>
   
   <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
  <li>
   <?php echo $this->_var['lang']['goods_brand']; ?><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><u><?php echo $this->_var['goods']['goods_brand']; ?></u></a>
  </li>
   <?php endif; ?>
   
   <?php if ($this->_var['cfg']['show_goodsweight']): ?>
  <li>
   <?php echo $this->_var['lang']['goods_weight']; ?><font class="fontg"><?php echo $this->_var['goods']['goods_weight']; ?></font>
  </li>
   <?php endif; ?>
   
   <?php if ($this->_var['cfg']['show_addtime']): ?>
  <li>
   <?php echo $this->_var['lang']['add_time']; ?><font class="fontg"><?php echo $this->_var['goods']['add_time']; ?></font>
  </li>
   <?php endif; ?>   
   
  <li>
   <?php echo $this->_var['lang']['goods_click_count']; ?>：<font class="fontg"><?php echo $this->_var['goods']['click_count']; ?></font>
  </li>
  <li>
   <?php echo $this->_var['lang']['goods_rank']; ?> <img src="themes/yuntow/images/stars<?php echo $this->_var['goods']['comment_rank']; ?>.gif" alt="comment rank <?php echo $this->_var['goods']['comment_rank']; ?>" />
  </li>  
  </ul>
	</div>
  <div>
   <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
   <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
   <?php echo $this->_var['lang']['residual_time']; ?> <font class="a" id="leftTime"><?php echo $this->_var['lang']['please_waiting']; ?></font><br />
   <?php endif; ?>
  </div>
    <?php if ($this->_var['cfg']['use_integral']): ?>
  <div class="Points">
   <?php echo $this->_var['lang']['goods_integral']; ?><font class="a"><?php echo $this->_var['goods']['integral']; ?> <?php echo $this->_var['points_name']; ?></font>
  </div>
   <?php endif; ?>
   
   
   <div class="GoodBuy">
   <?php if ($this->_var['cfg']['show_marketprice']): ?>
   <?php echo $this->_var['lang']['market_price']; ?><span class="market"><?php echo $this->_var['goods']['market_price']; ?></span><br />
   <?php endif; ?>
   <?php echo $this->_var['lang']['shop_price']; ?><font class="PointPrice" id="ECS_SHOPPRICE"><?php echo $this->_var['goods']['shop_price_formated']; ?></font><br />
   <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
   <?php echo $this->_var['rank_price']['rank_name']; ?>：<font class="PointPrice" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font><br />
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
   <?php echo $this->_var['lang']['promote_price']; ?><font class="PointPrice"><?php echo $this->_var['goods']['promote_price']; ?></font><br />
   <?php endif; ?>
  <?php echo $this->_var['lang']['amount']; ?>：<span id="ECS_GOODS_AMOUNT" class="price"></span><br />
  
  
  
  
  <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                  <td><span class="f12b"><?php echo $this->_var['lang']['number']; ?>：</span></td>
                    <td><input name="number" type="text" value="1" size="4" onblur="changePrice()" id="number" style="vertical-align:middle;border:1px solid #CCC;width:35px;font-size:12px;color:#32424F; text-align:right;" /></td>
                    <td>
     <script>

                    function add()
                    {
                      var num = document.getElementById("number");
                      if( !Utils.isNumber(num.value))
                        return;
                      else
                      {
                        num.value = parseInt(num.value) + 1;
                      }
                    }
                    
                    function decrease()
                    {
                      var num = document.getElementById("number");
                      if( !Utils.isNumber(num.value))
                        return;
                      else
                      {
                        if (parseInt(num.value) == 1) return;
                        num.value = parseInt(num.value) - 1;
                      }
                    }
                    
                    </script>
                      <table width="16" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="padding:0px 8px; line-height:10px;" height="10"><img src="themes/yuntow/images/goods_up.gif"  alt="加一个" onclick="add()" style="cursor:hand;"></td>
                        </tr>
                        <tr>
                          <td style="padding:0px 8px; line-height:10px;"height="10"><img src="themes/yuntow/images/goods_down.gif"  alt="减一个" onclick="decrease()" style="cursor:hand;"></td>
                        </tr>
                      </table>
           </td>               
                  </tr>
              </table>
  
  <?php if ($this->_var['goods']['is_shipping']): ?>      
     <font style="color:#FF0000;"> <?php echo $this->_var['lang']['goods_free_shipping']; ?></font><br />      
      <?php endif; ?>
      

   <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
   <?php echo $this->_var['spec']['name']; ?>：<br />
   
   <?php if ($this->_var['spec']['attr_type'] == 1): ?>
   <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
   <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
   <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
   <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onClick="changePrice()" />
   <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
   <?php else: ?>
   <select name="spec_<?php echo $this->_var['spec_key']; ?>" onChange="changePrice()" class="InputBorder">
    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
    <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </select>
   <br />
   <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
   <?php endif; ?>
   <?php else: ?>
   <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
   <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
   <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onClick="changePrice()" />
   <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
   <br />
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
   <?php endif; ?>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
   </div>  
   
   <?php if ($this->_var['goods']['give_integral'] > 0): ?>
   <?php echo $this->_var['lang']['goods_give_integral']; ?><font class="a"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font><br />
   <?php endif; ?>
  
   <?php if ($this->_var['goods']['bonus_money']): ?>
   <?php echo $this->_var['lang']['goods_bonus']; ?><font class="price"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
   <?php endif; ?>
   
   <?php if ($this->_var['volume_price_list']): ?>
   <?php echo $this->_var['lang']['volume_price']; ?>：<br />
   <table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#ccc">
    <tr>
    <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['number_to']; ?></td>
    <td align="center" bgcolor="#FFFFFF"><?php echo $this->_var['lang']['Preferences_price']; ?></td>
    </tr>
    <?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
    <tr>
    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['number']; ?></td>
    <td align="center" bgcolor="#FFFFFF" class="shop"><?php echo $this->_var['price_list']['format_price']; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   </table>
   <?php endif; ?>   
  </form>
 <div class="action">
   <a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/yuntow/images/bnt_buy.gif" /></a>
   <a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/yuntow/images/bnt_coll.gif" /></a>
   <?php if ($this->_var['affiliate']['on']): ?>
   <a href="user.php?act=affiliate&goodsid=<?php echo $this->_var['goods']['goods_id']; ?>"><img src="themes/yuntow/images/bnt_tuijian.gif" /></a>
   <?php endif; ?>
   </div>
   </div>   
  </div>
</div> 
  
<div class="tagtitw">
 <div class="tagTit clearfix" id="goods_b">
   <h2><span class="R"></span><?php echo $this->_var['lang']['feed_goods_desc']; ?></h2>
  <h2 class="h2bg"><span class="R"></span><?php echo $this->_var['lang']['goods_attr']; ?></h2>
    <h2 class="h2bg"><span class="R"></span><?php echo $this->_var['lang']['goods_tag']; ?></h2>
  <?php if ($this->_var['package_goods_list']): ?>
  <h2 class="h2bg"><span class="R"></span><font id="package"><?php echo $this->_var['lang']['remark_package']; ?></font></h2>
  <script>setInterval("colorStyle('package','a','b')",300);</script>
  <?php endif; ?>
  <h2 class="h2bg"><span class="R"></span><?php echo $this->_var['lang']['releate_goods']; ?></h2>
    <h2 class="h2bg"><span class="R"></span><?php echo $this->_var['lang']['accessories_releate']; ?></h2>
  <h2 class="h2bg"><span class="R"></span><?php echo $this->_var['lang']['shopping_and_other']; ?></h2>
 </div>
</div> 
 <div class="clearfix" id="goods_v"></div>
 <div id="goods_h">
       <blockquote>
        <?php echo $this->_var['goods']['goods_desc']; ?>
       </blockquote>
    <blockquote>
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
       </table>
       </blockquote>
    <blockquote>
        <?php echo $this->fetch('library/goods_tags.lbi'); ?>
       </blockquote>
    <?php if ($this->_var['package_goods_list']): ?>
        <blockquote>
        <?php $_from = $this->_var['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods']):
?>
        <strong><?php echo $this->_var['package_goods']['act_name']; ?></strong><br />
        <table width="100%" border="0" cellpadding="5" cellspacing="1" bgcolor="#d1d1d1">
        <tr>
          <td bgcolor="#f7f9f4">
          <?php $_from = $this->_var['package_goods']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['goods_list']):
?>
          <a href="goods.php?id=<?php echo $this->_var['goods_list']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods_list']['goods_name']; ?></a> &nbsp;&nbsp;X <?php echo $this->_var['goods_list']['goods_number']; ?><br />
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </td>
          <td bgcolor="#f7f9f4">
          <?php echo $this->_var['lang']['old_price']; ?><font class="market"><?php echo $this->_var['package_goods']['subtotal']; ?></font><br />
          <?php echo $this->_var['lang']['package_price']; ?><font class="price"><?php echo $this->_var['package_goods']['package_price']; ?></font><br />
          <?php echo $this->_var['lang']['then_old_price']; ?><font class="price"><?php echo $this->_var['package_goods']['saving']; ?></font><br />
          </td>
          <td bgcolor="#f7f9f4" align="center">
          <a href="javascript:addPackageToCart(<?php echo $this->_var['package_goods']['act_id']; ?>)"><?php echo $this->_var['lang']['button_buy']; ?></a>
          </td>
        </tr>
        </table>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </blockquote>
       <?php endif; ?>
    <blockquote>
        <?php echo $this->fetch('library/goods_related.lbi'); ?>
       </blockquote>
       <blockquote>
       <?php echo $this->fetch('library/goods_fittings.lbi'); ?>
       </blockquote>
     <blockquote>
     <?php echo $this->fetch('library/bought_goods.lbi'); ?>
    </blockquote>
  </div> 
 <script type="text/javascript">reg("goods");</script>
 
 <div class="blank5"></div>
  
<?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
<?php echo $this->fetch('library/comments.lbi'); ?>

 </div>
</div>
<?php echo $this->fetch('library/help.lbi'); ?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>