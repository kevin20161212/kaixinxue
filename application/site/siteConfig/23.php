<?php
return	$configs = array(
			'name' => '临沂市政府采购网区县中标公告',
			'log_show' => true,
			'timeout' => 10,
			'tasknum' => 1,
			'max_depth' => 1,
			'ext' => array(
				'areaid' => 22,
				'noticetype' => 2,
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
				'zfcg.linyi.gov.cn'
			),
			'scan_urls' => array(
				'http://zfcg.linyi.gov.cn/sdgp2014/site/channelall.jsp?colcode=0304'
			),
			'list_url_regexes' => array(
				
			),
			'content_url_regexes' => array(
				"http://zfcg.linyi.gov.cn/sdgp2014/site/read.jsp\?colcode=\d+\&id=\d+",
			),
			'max_try' => 5,
			'fields' => array(
				array(
					'name' => "article_title",
					'selector' => "//div[1]",
					'required' => true,
				),							
				array(
					'name' => "article_content",
					'selector' => "//table[18]",
					'required' => true,
				),
				array(
					'name' => "article_publish_time",
					'selector' => "//div[contains(@class,'xxzl_01')]//i[2]",
					'required' => true,
				),
				array(
					'name' => "url",
					'selector' => "//script[@id='btnPrint']//a[1]",   // 这里随便设置，on_extract_field回调里面会替换
					'required' => true,
				),
			),
		);
