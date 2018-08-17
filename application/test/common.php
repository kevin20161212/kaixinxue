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
// 模块信息配置
function MakePropertyValue($name,$value,$osm){
$oStruct = $osm->Bridge_GetStruct("com.sun.star.beans.PropertyValue");
$oStruct->Name = $name;
$oStruct->Value = $value;
return $oStruct;
}
function word2pdf($doc_url, $output_url){
    $osm = new \COM("com.sun.star.ServiceManager") or die ("Please be sure that OpenOffice.org is installed.\n");
    $args = array(MakePropertyValue("Hidden",true,$osm));
    $oDesktop = $osm->createInstance("com.sun.star .frame.Desktop");
    $oWriterDoc = $oDesktop->loadComponentFromURL($doc_url,"_blank", 0, $args);
    $export_args = array(MakePropertyValue ("FilterName","writer_pdf_Export",$osm));
    $oWriterDoc->storeToURL($output_url,$export_args);
    $oWriterDoc->close(true);
}
