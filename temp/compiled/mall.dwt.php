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
<div class="mall_l f_l">
	<div class="clearfix" style="width:730px;">
        <div class="f_l" style="width:195px;">
            <?php echo $this->fetch('library/category_tree.lbi'); ?>
        </div>
        <div class="mall_flash f_r">
            <?php echo $this->fetch('library/mall_ad.lbi'); ?>
        </div>
    </div>
    <div class="blank10"></div>
    <?php echo $this->fetch('library/recommend_new.lbi'); ?>
    <?php echo $this->fetch('library/recommend_hot.lbi'); ?>
<div class="ad730">

<?php echo $this->fetch('library/ad_position.lbi'); ?>

</div>
</div>
<div class="mall_r f_r">
        <div class="blank10"></div>
	<?php echo $this->fetch('library/top10.lbi'); ?>

<?php echo $this->fetch('library/ad_position.lbi'); ?>


<?php echo $this->fetch('library/free.lbi'); ?>
</div>
</div>
<div class="blank10"></div>
<?php echo $this->fetch('library/recommend_promotion.lbi'); ?>

<div class="block">
<?php echo $this->fetch('library/help.lbi'); ?>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
