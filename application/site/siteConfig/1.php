<?php
return	$configs = array(
			'name' => '山东省招标采购公告',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'ext' => array(
				'areaid' => 6,
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
				'www.sdbidding.org.cn'
			),
			'scan_urls' => array(
				'http://www.sdbidding.org.cn/info_class.asp?classid=213'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://www.sdbidding.org.cn/info_show.asp\?articleid=\d+",
			),
			'max_try' => 5,
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//table[contains(@class,'border01')]//strong[1]",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//table[contains(@class,'border01')]//tr[10]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//table[contains(@class,'border01')]//font[3]",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
