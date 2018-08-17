<?php
return	$configs = array(
			'name' => '菏泽市公共资源交易建设市本级',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'ext' => array(
				'areaid' => 12,
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
				'www.hzsggzyjy.gov.cn'
			),
			'scan_urls' => array(
				'http://www.hzsggzyjy.gov.cn/cityInfoList.aspx?s=1&c=1'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://www.hzsggzyjy.gov.cn/cg_details.aspx\?type=\d+",
			),
			'max_try' => 5,
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//*[@id='ContentPlaceHolder1_title']",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//div[contains(@class,'newsArow')]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//*[@id='ContentPlaceHolder1_fbt']",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
