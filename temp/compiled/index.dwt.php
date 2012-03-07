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
<link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
<script type="text/javascript" src="themes/yuntow/js/action.js"></script>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>
<div class="block clearfix">
	<div class="area_l">
    	<div class="flashwid">
			<?php echo $this->fetch('library/index_ad.lbi'); ?>
        </div>
        <div class="blank10"></div>
        <?php echo $this->fetch('library/recommend_best.lbi'); ?>
        <div class="blank10"></div>
        <?php echo $this->fetch('library/category_list.lbi'); ?>
    </div>
    <div class="area_r">
    	<div class="">
        <?php if ($this->_var['user_info']): ?>
        <a href="http://bbs.cncloudol.com/Desktop.php"><img src="themes/yuntow/images/btn_lib_work.gif" /></a>
        <?php else: ?>
        <a href="user.php?act=register"><img src="themes/yuntow/images/btn_lib_reg.gif" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="user.php"><img src="themes/yuntow/images/btn_lib_login.gif" /></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bbs.cncloudol.com/Desktop.php"><img src="themes/yuntow/images/btn_lib_work.gif" /></a>
        <?php endif; ?>
        </div>
        <?php echo $this->fetch('library/new_articles.lbi'); ?>
        <div class="blank10"></div>
        <div class="ad280">
        
<?php $this->assign('ads_id','2'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

        </div>
        <div class="blank10"></div>
        <?php echo $this->fetch('library/hot10.lbi'); ?>
    </div>
    <div class="blank10"></div>
<div class="ad960">

<?php $this->assign('ads_id','1'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
</div>
<div class="blank10"></div>
<div class="block clearfix">
	<div class="area_l">
    	<?php echo $this->fetch('library/link.lbi'); ?>
    </div>
    <div class="area_r">
    	<div class="ad290">
        
<?php $this->assign('ads_id','3'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

        </div>
    </div>
</div>
<div class="block">
<?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
