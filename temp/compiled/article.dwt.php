<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<div class="blank"></div>
<div class="block clearfix">
  
  <div class="area_l">
  
     <div class="here">
      <?php echo $this->fetch('library/ur_here.lbi'); ?>
      <span class="here_r"></span>
      </div>
    <div class="blank"></div>
    
     <div class="box">
     <div class="list">
        <div class="list_t">
        	<span class="f7 f_l">行业资讯</span>
            <span class="f_r">
            <a href="article_cat.php?id=1" class="f6">返回资讯列表</a>&nbsp;
            <a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6"><?php echo $this->_var['lang']['next_article']; ?></a>&nbsp;
            <a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['lang']['prev_article']; ?></a></span>
        </div>
          <div class="list_c" style="padding:20px 50px;">
             <div class="tc" style="padding:8px 20px; border-bottom:1px dashed #ccc;">
             <font class="f5 f6"><?php echo htmlspecialchars($this->_var['article']['title']); ?></font><br /><font class="f3"><?php echo htmlspecialchars($this->_var['article']['author']); ?> / <?php echo $this->_var['article']['add_time']; ?></font>
             </div>
             <?php if ($this->_var['article']['content']): ?>
              <?php echo $this->_var['article']['content']; ?>
             <?php endif; ?>
             <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
             <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
              <?php endif; ?>
             <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc;">
             
              <?php if ($this->_var['next_article']): ?>
                <?php echo $this->_var['lang']['next_article']; ?>:<a href="<?php echo $this->_var['next_article']['url']; ?>" class="f6"><?php echo $this->_var['next_article']['title']; ?></a><br />
              <?php endif; ?>
              
              <?php if ($this->_var['prev_article']): ?>
                <?php echo $this->_var['lang']['prev_article']; ?>:<a href="<?php echo $this->_var['prev_article']['url']; ?>" class="f6"><?php echo $this->_var['prev_article']['title']; ?></a>
              <?php endif; ?>
             </div>
          </div>
        </div>
      </div>
  <div class="blank"></div>
  </div>
  
  
  <div class="area_r">
<div class="article_search">
  	<form action="<?php echo $this->_var['search_url']; ?>" name="search_form" method="post">
        <input name="keywords" type="text" id="requirement" value="<?php echo $this->_var['search_value']; ?>" size="20" class="inputBg" />
        <input name="id" type="hidden" value="<?php echo $this->_var['cat_id']; ?>" />
        <input name="cur_url" id="cur_url" type="hidden" value="" />
        <input type="submit" value="&nbsp;" class="btn_search_bg" />
    </form>
  </div>
  
<?php echo $this->fetch('library/ad_position.lbi'); ?>

<div class="blank10"></div>



    
    <?php echo $this->fetch('library/box_articles.lbi'); ?>
  </div>
  
</div>
<div class="blank5"></div>

<div class="block">
    <?php echo $this->fetch('library/help.lbi'); ?>
</div>
<div class="blank"></div>


<?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
<div id="bottomNav" class="box">
 <div class="box_1">
  <div class="links clearfix">
    <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" border="0" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php if ($this->_var['txt_links']): ?>
    <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
    [<a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>"><?php echo $this->_var['link']['name']; ?></a>]
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    <?php endif; ?>
  </div>
 </div>
</div>
<?php endif; ?>

<div class="blank"></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
