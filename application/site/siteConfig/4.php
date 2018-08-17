<?php
return array (
  'name' => '德州市政府采购网县级中标公告',
  'log_show' => true,
  'timeout' => 10,
  'tasknum' => 1,
  'max_depth' => 1,
  'ext' => 
  array (
    'areaid' => 19,
    'noticetype' => 2,
  ),
  'client_ip' => 
  array (
    0 => '192.168.0.2',
    1 => '192.168.0.3',
    2 => '192.168.0.4',
  ),
  'ceshi' => 0,
  'bas_url' => '',
  'domains' => 
  array (
    0 => 'www.dzzfcg.gov.cn',
  ),
  'scan_urls' => 
  array (
    0 => 'http://www.dzzfcg.gov.cn/n33754981/n33755403/index.html',
  ),
  'list_url_regexes' => 
  array (
  ),
  'content_url_regexes' => 
  array (
    0 => 'http://www.dzzfcg.gov.cn/n33754981/n33755403/[\\w]+/content.html',
  ),
  'max_try' => 5,
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'article_title',
      'selector' => '//div[contains(@class,\'cont_t\')]',
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'article_content',
      'selector' => '//div[contains(@class,\'w_710\')]//div[4]',
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'article_publish_time',
      'selector' => '//div[contains(@class,\'con_time\')]',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'url',
      'selector' => '//script[@id=\'btnPrint\']//a[1]',
      'required' => true,
    ),
  ),
);