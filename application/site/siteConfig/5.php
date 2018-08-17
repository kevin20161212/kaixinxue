<?php
return	$configs = array(
			'name' => '德州市政府采购网市级招标公告',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'ext' => array(
				'areaid' => 19,
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
				'www.dzzfcg.gov.cn'
			),
			'scan_urls' => array(
				'http://www.dzzfcg.gov.cn/n33754981/n33755148/index.html'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://www.dzzfcg.gov.cn/n33754981/n33755148/[\w]+/content.html",
			),
			'max_try' => 5,
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//div[contains(@class,'cont_t')]",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//div[contains(@class,'w_710')]//div[4]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//div[contains(@class,'con_time')]",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
