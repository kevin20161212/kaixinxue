<?php
// +----------------------------------------------------------------------
// | 有范科技
// +----------------------------------------------------------------------
// | Copyright (c) 2017 http://www.youfai.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 有范科技 <youfai@youfai.cn>
// +----------------------------------------------------------------------
// | 版权申明：YFTHINK不是一个自由软件，是有范科技官方推出的商业源码，严禁在未经许可的情况下
// | 拷贝、复制、传播、使用山东有范科技的任意代码，如有违反，请立即删除，否则您将面临承担相应
// | 法律责任的风险。如果需要取得官方授权，请联系官方http://www.youfai.cn
// +----------------------------------------------------------------------

namespace app\spider\controller;
use think\Controller;
use think\Request;
// use think\Cache;
use phpspider\autoloader;
use phpspider\core\phpspider;
/**
 * 前台默认控制器
 * @author <youfai@youfai.cn>
 */
class Index extends Controller
{
    /**
     * 默认方法
     * @author <youfai@youfai.cn>
     */
    public function index(){
		/* Do NOT delete this comment */
		/* 不要删除这段注释 */
		$configs = array(
			'name' => '糗事百科',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'client_ip' => array(
				'192.168.0.2', 
				'192.168.0.3',
				'192.168.0.4',
			),
			//'save_running_state' => true,
			'domains' => array(
				'www.zycg.cn'
			),
			'scan_urls' => array(
				'http://www.zycg.cn/article/llist?catalog=StockAffiche'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://www.zycg.cn/article/show/\d+",
			),
			'max_try' => 5,
			// 'input_encoding' => 'utf-8',

			 'export' => array(
			 'type'  => 'sql',
			 'file'  => './public/qiushibaike.sql',
			 'table' => 'yf_content',
			 ),

			// 'db_config' => array(
			// 'host'  => 'localhost',
			// 'port'  => 3306,
			// 'user'  => 'root',
			// 'pass'  => '2e46a486ea',
			// 'name'  => 'toubiao',
			// ),


			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//div[contains(@class,'article-colum')]//div[contains(@class,'pages_title')]/text()[1]",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//div[contains(@class,'pages_content')]//script[@id='container']/text()[1]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//script[@id='btnPrint']//a[1]",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
		$spider = new phpspider($configs);

		$spider->on_scan_page = function($page, $content, $phpspider) 
		{
			cache('content',$content);
			cache('page',$page);
			 dump($content);
			return true;
		};
		$spider->on_extract_field = function($fieldname, $data, $page) 
		{
			if ($fieldname == 'article_publish_time') 
			{
			// 用当前采集时间戳作为发布时间
				$data = time();
			}
			// 把当前内容页URL替换上面的field
			elseif ($fieldname == 'url') 
			{
				$data = $page['url'];
			}
			return $data;
		};
		
		
		
		
		// $spider->on_fetch_url = function($url, $phpspider) 
		// {
		// $url = str_replace("&amp;", "&", $url);
		// return $url;
		// };


		// $spider->on_fetch_url = function($url, $phpspider) 
		// {
		// if (strpos($url, "#filter") !== false)
		// {
		// return false;
		// }
		// $num = count(cache('name'))?:0;
		// $aa[$num+1] = $url;
		// cache('name',$aa);
		// return $url;
		// };
		// $spider->on_download_page = function($page, $phpspider) 
		// {

		// return $page;
		// };
		$spider->start();
    }
     public function indexs(){
        dump(cache('content'));
        exit;
        
     }
	 public function ceshi(){
	/* Do NOT delete this comment */
	/* 不要删除这段注释 */
   
	   
	   $configs = array(
    'name' => '糗事百科',
    'log_show' => true,
	'timeout' => 10,
    'tasknum' => 1,
	'max_depth' => 1,
    //'save_running_state' => true,
    'domains' => array(
        'www.mafengwo.cn'
    ),
    'scan_urls' => array(
        'http://www.mafengwo.cn/mdd/citylist/21536.html'
    ),
    'list_url_regexes' => array(
       
    ),
    'content_url_regexes' => array(
        "http://www.mafengwo.cn/travel-scenic-spot/mafengwo/\d+.html",
    ),
    'max_try' => 5,
    //'input_encoding' => 'utf-8',
	
	// 'export' => array(
      // 'type'  => 'sql',
        // 'file'  => '../../spider.youfai.cn/public/qiushibaike.sql',
     // 'table' => 'yf_content',
  // ),
	
    // 'db_config' => array(
        // 'host'  => 'localhost',
        // 'port'  => 3306,
        // 'user'  => 'root',
        // 'pass'  => '2e46a486ea',
        // 'name'  => 'toubiao',
    // ),
	
	
	'fields' => array(
		array(
			'name' => "article_title",
			'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]/text()[1]",
			'required' => true,
		),
		array(
			'name' => "article_author",
			'selector' => "//div[contains(@class,'author')]//h2",
			'required' => true,
		),
		array(
			'name' => "article_headimg",
			'selector' => "//div[contains(@class,'author')]//a[1]",
			'required' => true,
		),
		array(
			'name' => "article_content",
			'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]",
			'required' => true,
		),
		array(
			'name' => "article_publish_time",
			'selector' => "//div[contains(@class,'author')]//h2",
			'required' => true,
		),
		array(
			'name' => "url",
			'selector' => "//div[contains(@class,'author')]//h2",   // 这里随便设置，on_extract_field回调里面会替换
			'required' => true,
		),
    ),
);
        $spider = new phpspider($configs);
	
		$spider->on_scan_page = function($page, $content, $phpspider) 
		{
		cache('content',$content);
		cache('page',$page);
		return false;
		};
	  

	  // $spider->on_fetch_url = function($url, $phpspider) 
            // {
                // if (strpos($url, "#filter") !== false)
                // {
                    // return false;
                // }
                // $num = count(cache('name'))?:0;
                // $aa[$num+1] = $url;
                // cache('name',$aa);
                // return $url;
            // };
        // $spider->on_download_page = function($page, $phpspider) 
            // {
               
                // return $page;
            // };
        $spider->start();
	 }
	 public function qiushi(){
		// dump(preg_match("#http://www.qiushibaike.com/article/\d+#i","http://www.qiushibaike.com/"));
		// exit;
		$configs = array(
			'name' => '糗事百科',
			'log_show' => true,
			'tasknum' => 1,
			//'save_running_state' => true,
			'domains' => array(
				'qiushibaike.com',
				'www.qiushibaike.com'
			),
			'scan_urls' => array(
				'http://www.qiushibaike.com/'
			),
			'list_url_regexes' => array(
				"http://www.qiushibaike.com/8hr/page/\d+\?s=\d+"
			),
			'content_url_regexes' => array(
				"http://www.qiushibaike.com/article/\d+",
			),
			'max_try' => 5,
			//'proxies' => array(
				//'http://H784U84R444YABQD:57A8B0B743F9B4D2@proxy.abuyun.com:9010'
			//),
			//'export' => array(
				//'type' => 'csv',
				//'file' => '../data/qiushibaike.csv',
			//),
			//'export' => array(
				//'type'  => 'sql',
				//'file'  => '../data/qiushibaike.sql',
				//'table' => 'content',
			//),
			//'export' => array(
				//'type' => 'db', 
				//'table' => 'content',
			//),
			//'db_config' => array(
				//'host'  => '127.0.0.1',
				//'port'  => 3306,
				//'user'  => 'root',
				//'pass'  => 'root',
				//'name'  => 'qiushibaike',
			//),
			//'queue_config' => array(
				//'host'      => '127.0.0.1',
				//'port'      => 6379,
				//'pass'      => '',
				//'db'        => 5,
				//'prefix'    => 'phpspider',
				//'timeout'   => 30,
			//),
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]/text()[1]",
					'required' => true,
				),
				array(
					'name' => "article_author",
					'selector' => "//div[contains(@class,'author')]//h2",
					'required' => true,
				),
				array(
					'name' => "article_headimg",
					'selector' => "//div[contains(@class,'author')]//a[1]",
					'required' => true,
				),
				array(
					'name' => "article_content",
					'selector' => "//*[@id='single-next-link']//div[contains(@class,'content')]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//div[contains(@class,'author')]//h2",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//div[contains(@class,'author')]//h2",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);

		$spider = new phpspider($configs);
		$spider->start();
	 }
}
