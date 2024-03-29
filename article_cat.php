<?php

/**
 * ECSHOP 文章分类
 * ============================================================================
 * 版权所有 2005-2010 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: sxc_shop $
 * $Id: article_cat.php 17074 2010-03-26 10:38:21Z sxc_shop $
*/


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/* 清除缓存 */
clear_cache_files();

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

/* 获得指定的分类ID */
if (!empty($_GET['id']))
{
    $cat_id = intval($_GET['id']);
}
elseif (!empty($_GET['category']))
{
    $cat_id = intval($_GET['category']);
}
else
{
    ecs_header("Location: ./\n");

    exit;
}

/* 获得当前页码 */
$page   = !empty($_REQUEST['page'])  && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;

/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

/* 获得页面的缓存ID */
$cache_id = sprintf('%X', crc32($cat_id . '-' . $page . '-' . $_CFG['lang']));

if (!$smarty->is_cached('article_cat.dwt', $cache_id))
{
    /* 如果页面没有被缓存则重新获得页面的内容 */

    assign_template('a', array($cat_id));
    $position = assign_ur_here($cat_id);
    $smarty->assign('page_title',           $position['title']);     // 页面标题
    $smarty->assign('ur_here',              $position['ur_here']);   // 当前位置

  //  $smarty->assign('categories',           get_categories_tree(0)); // 分类树
  
  //  $smarty->assign('article_categories',   article_categories_tree($cat_id)); //文章分类树
    $smarty->assign('helps',                get_shop_help());        // 网店帮助
   /*
    $smarty->assign('top_goods',            get_top10());            // 销售排行

    $smarty->assign('best_goods',           get_recommend_goods('best'));
    $smarty->assign('new_goods',            get_recommend_goods('new'));
    $smarty->assign('hot_goods',            get_recommend_goods('hot'));
    $smarty->assign('promotion_goods',      get_promote_goods());
    $smarty->assign('promotion_info', get_promotion_info());
	
	*/
	$smarty->assign('index_get_articles', index_get_articles());

  
    /* Meta */
    $meta = $db->getRow("SELECT keywords, cat_desc FROM " . $ecs->table('article_cat') . " WHERE cat_id = '$cat_id'");

    if ($meta === false || empty($meta))
    {
        /* 如果没有找到任何记录则返回首页 */
        ecs_header("Location: ./\n");
        exit;
    }

    $smarty->assign('keywords',    htmlspecialchars($meta['keywords']));
    $smarty->assign('description', htmlspecialchars($meta['cat_desc']));

    /* 获得文章总数 */
    //$size   = isset($_CFG['article_page_size']) && intval($_CFG['article_page_size']) > 0 ? intval($_CFG['article_page_size']) : 20;
	$size   = 20;
    $count  = get_article_count($cat_id);
    $pages  = ($count > 0) ? ceil($count / $size) : 1;

    if ($page > $pages)
    {
        $page = $pages;
    }
    $pager['search']['id'] = $cat_id;
    $keywords = '';
    $goon_keywords = ''; //继续传递的搜索关键词

    /* 获得文章列表 */
    if (isset($_POST['keywords']))
    {
        $keywords = addslashes(urldecode(trim($_POST['keywords'])));
        $pager['search']['keywords'] = $keywords;
        $search_url = substr(strrchr($_POST['cur_url'], '/'), 1);

        $smarty->assign('search_value',     $keywords);
        $smarty->assign('search_url',       $search_url);
        $count  = get_article_count($cat_id, $keywords);
        $pages  = ($count > 0) ? ceil($count / $size) : 1;
        if ($page > $pages)
        {
            $page = $pages;
        }

        $goon_keywords = urlencode($_POST['keywords']);
    }
    $smarty->assign('artciles_list',    get_cat_articles($cat_id, $page, $size ,$keywords));
    $smarty->assign('cat_id',    $cat_id);
    /* 分页 */
    assign_pager('article_cat', $cat_id, $count, $size, '', '', $page, $goon_keywords);
    assign_dynamic('article_cat');
}

$smarty->assign('feed_url',         ($_CFG['rewrite'] == 1) ? "feed-typearticle_cat" . $cat_id . ".xml" : 'feed.php?type=article_cat' . $cat_id); // RSS URL

$smarty->display('article_cat.dwt', $cache_id);


function index_get_articles()
{
     	   
		$sql = 'SELECT a.cat_id, a.cat_name  FROM ' . $GLOBALS['ecs']->table('article_cat') . ' AS a ' .
		    	' WHERE a.cat_id <> 1 AND a.parent_id =0  ORDER BY  a.cat_id DESC LIMIT 3';
			
		$res = $GLOBALS['db']->getAll($sql);
	
		$articlercat = array();
		foreach ($res AS $idx => $row)
		{
			$articlercat[$idx]['cat_id']          = $row['cat_id'];
			$articlercat[$idx]['cat_name']       = $row['cat_name'];
		}
		
        $articles = array(); 
	
   	   foreach($articlercat AS $cat )
	   {
			 $sql = 'SELECT a.article_id,a.cat_id, a.title, a.add_time, a.file_url FROM ' . $GLOBALS['ecs']->table('article') . ' AS a '.
			 ' WHERE a.is_open = 1 AND a.cat_id ='.$cat['cat_id']. ' ORDER BY  a.add_time DESC LIMIT 5';
			
			$res = $GLOBALS['db']->getAll($sql);
		
	  		foreach ($res AS $idx => $row)
			{
				$arr['cat_id']      = $row['cat_id'];
				$arr['id']          = $row['article_id'];
				$arr['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ?
												sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];
				$arr['url']         = $row['open_type'] != 1 ?
												build_uri('article', array('aid' => $row['article_id']), $row['title']) : trim($row['file_url']);
			    $articles[]=$arr;
			   
			  }
		 } 
		 
       $app=array('articlercat'=>$articlercat,'articles'=>$articles);

    return $app;
}


?>