<?php
return	$configs = array(
			'name' => '威海市公共资源交易网工程建设招标项目',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'ext' => array(
				'areaid' => 23,
				'noticetype' => 1,
				),
			'client_ip' => array(
				'192.168.0.2', 
				'192.168.0.3',
				'192.168.0.4',
			),
			'ceshi' => 0,
			'bas_url' => '',
			//'save_running_state' => true,
			'domains' => array(
				'www.whggzyjy.cn'
			),
			'scan_urls' => array(
				'http://www.whggzyjy.cn/jyxxzbxm/index.jhtml'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://www.whggzyjy.cn/jyxxzbxm/\d+.jhtml",
			),
			'max_try' => 5,
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//div[contains(@class,'content-title')]",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//div[contains(@class,'div-article2')]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//span[@id='time']",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
