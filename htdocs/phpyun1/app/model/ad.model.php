<?php

/*
 * $Author ：PHPYUN开发团队
 *
 * 官网: http://www.phpyun.com
 *
 * 版权所有 2009-2019 宿迁鑫潮信息技术有限公司，并保留所有权利。
 *
 * 软件声明：未经授权前提下，不得用于商业运营、二次开发以及任何形式的再次发布。
 */
class ad_model extends model{

    
    function getAdClassList($whereData = array(), $data = array())
    {
        $ListNew = array();
        $data['field'] = empty($data['field']) ? '*' : $data['field'];
        $List = $this->select_all('ad_class', $whereData, $data['field']);
        
        if (! empty($List)) {
            
            if ($data['href']) {
                foreach ($List as $k => $v) {
                    
                    $List[$k]['hrefn'] = checkpic($v['href']);
                }
            }
            
            $ListNew['list'] = $List;
        }
        
        return $ListNew;
    }

    
    function getAdClassInfo($whereData = array(), $data = array())
    {
        if ($whereData) {
            $data['field'] = empty($data['field']) ? '*' : $data['field'];
            
            $acInfo = $this->select_once('ad_class', $whereData, $data['field']);
        }
        
        return $acInfo;
    }

    
    function upAdClass($whereData = array(), $data = array())
    {
        if (! empty($whereData)) {
            
            $nid = $this->update_once('ad_class', $data, $whereData);
        }
        return $nid;
    }

    
    function addAdClass($setData = array())
    {
        if (! empty($setData)) {
            
            $nid = $this->insert_into('ad_class', $setData);
        }
        
        return $nid;
    }

    
    function delAdClass($whereData, $data)
    {
        if ($data['type'] == 'one') { 
            
            $limit = 'limit 1';
        }
        
        if ($data['type'] == 'all') { 
            
            $limit = '';
        }
        
        $result = $this->delete_all('ad_class', $whereData, $limit);
        
        return $result;
    }

    
    function getList($whereData = array(), $data = array())
    {
        $ListNew = array();
        $data['field']      =   empty($data['field']) ? '*' : $data['field'];
        
        if($this->config['did']){
            $whereData['did']   =   $this->config['did'];
        }
        $List = $this->select_all('ad', $whereData, $data['field']);
        
        if (! empty($List)) {
            
            $ListNew['list'] = $List;
        }
        
        return $ListNew;
    }

    
    function addAd($setData = array())
    {
        if (! empty($setData)) {
            
            $nid = $this->insert_into('ad', $setData);
        }
        
        return $nid;
    }

    
    function getInfo($whereData = array(), $data = array())
    {
        if ($whereData) {
            $data['field'] = empty($data['field']) ? '*' : $data['field'];
            
            $info = $this->select_once('ad', $whereData, $data['field']);
            if ($info['pic_url']) {
                $info['pic_url_n'] = checkpic($info['pic_url']);
            }
        }
        
        return $info;
    }

    
    function upInfo($whereData = array(), $data = array())
    {
        if (! empty($whereData)) {
            
            $nid = $this->update_once('ad', $data, $whereData);
        }
        return $nid;
    }

    
    function delAd($whereData, $data)
    {
        if ($data['type'] == 'one') { 
            
            $limit = 'limit 1';
        }
        
        if ($data['type'] == 'all') { 
            
            $limit = '';
        }
        
        $result = $this->delete_all('ad', $whereData, $limit);
        
        return $result;
    }

    
    function getAdOrderInfo($whereData = array(), $data = array())
    {
        if ($whereData) {
            $data['field'] = empty($data['field']) ? '*' : $data['field'];
            
            $adOrder = $this->select_once('ad_order', $whereData, $data['field']);
			
			if($adOrder['pic_url']){
				$adOrder['pic_url_n'] = checkpic($adOrder['pic_url']);
			}
        }
        
        return $adOrder;
    }

    
    function getAdOrderList($whereData = array(), $data = array())
    {
        $ListNew = array();
        $data['field'] = empty($data['field']) ? '*' : $data['field'];
        $List = $this->select_all('ad_order', $whereData, $data['field']);
        
        if (! empty($List)) {
			
            foreach ($List as $k => $v) {
					
				$List[$k]['pic_url_n'] = checkpic($v['pic_url']);
			}
			
            if ($data['utype'] == 'admin') {
                $List = $this->getDataList($List);
            }
            
            if ($data['utype'] == 'order') {
                $orderids = array();
                foreach ($List as $k => $v) {
                    if ($v['order_id']) {
                        $orderids[] = $v['order_id'];
                    }
                }
                $owhere = array(
                    'uid'      => $data['uid'],
                    'order_id' => array('in',pylode(',', $orderids)));
                
                $order = $this->select_all('company_order', $owhere, 'id,order_id,order_type');
                
                foreach ($List as $k => $val) {
					
                    foreach ($order as $v) {
                        if ($val['order_id'] == $v['order_id']) {
                            $List[$k]['orderid']    = $v['id'];
                            $List[$k]['order_type'] = $v['order_type'];
                        }
                    }
                }
            }
            $ListNew['list'] = $List;
        }
        return $ListNew;
    }

    
    function addOrderAd($setData = array())
    {
        if (! empty($setData)) {
            
            $nid = $this->insert_into('ad_order', $setData);
        }
        
        return $nid;
    }

    
    function upOrderAd($whereData = array(), $data = array())
    {
        if (! empty($whereData)) {
            
            $nid = $this->update_once('ad_order', $data, $whereData);
        }
        return $nid;
    }

    
    function delAdOrder($whereData, $data)
    {
        if ($data['type'] == 'one') { 
            
            $limit = 'limit 1';
        }
        
        if ($data['type'] == 'all') { 
            
            $limit = '';
        }
        
        $result = $this->delete_all('ad_order', $whereData, $limit);
        
        return $result;
    }

    
    function getAdList($whereData = array(), $data = array())
    {
        $ListNew = array();
        $List = $this->getList($whereData, $data['field']);
        
        
        $class = $this->getAdClassList(array('orderby' => 'orders,desc'));
        $ListNew['class'] = $class['list'];
        
        if (is_array($class['list']) && $class) {
            foreach ($class['list'] as $val) {
                $nclass[$val['id']] = $val['class_name'];
            }
        }
        $ListNew['nclass'] = $nclass;
        
        if (! empty($List['list'])) {
            
            
            require_once ('cache.model.php');
            $cacheM   = new cache_model($this->db, $this->def);
            $domain   = $cacheM->GetCache('domain');
            
            $linkrows = $List['list'];
            if (is_array($linkrows)) {
                foreach ($linkrows as $key => $value) {
                    
                    $start = @strtotime($value['time_start']);
                    $end   = @strtotime($value['time_end'] . " 23:59:59");
                    $time  = time();
                    
                    $linkrows[$key]['class_name']  = $nclass[$value['class_id']];
                    if ($value['did']) {
                        $linkrows[$key]['d_title'] = $domain['Dname'][$value['did']];
                    } else {
                        $linkrows[$key]['d_title'] = '全站';
                    }
                    if ($value['is_check'] == "1") {
                        $linkrows[$key]['check'] = "<font color='green'>已审核</font>";
                    } else {
                        $linkrows[$key]['check'] = "<font color='red'>未审核</font>";
                    }
                    $value['pic_url'] = checkpic($value['pic_url']);
                    
                    switch ($value['ad_type']) {
                        case "word":
                            $linkrows[$key]['ad_typename'] = "文字广告";
                            break;
                        
                        case "pic":
                            $linkrows[$key]['ad_typename'] = '<a href="javascript:void(0)" class="preview admin_n_img" url="' . $value['pic_url'] . '"></a>';
                            break;
                        
                        case "flash":
                            $linkrows[$key]['ad_typename'] = "FLASH广告";
                            break;
                        
                        case "lianmeng":
                            $linkrows[$key]['ad_typename'] = "联盟广告";
                            break;
                    }
                    
                    if ($value['time_start'] != "" && $start != "" && ($value['time_end'] == "" || $end != "")) {
                        
                        if ($value['time_end'] == "" || $end > $time) {
                            
                            if ($value['is_open'] == '1' && $start < $time) {
                                
                                $linkrows[$key]['type'] = "<font color='green'>使用中..</font>";
                                
                            } else if ($start < $time && $value['is_open'] == '0') {
                                
                                $linkrows[$key]['type'] = "<font color='red'>已停用</font>";
                                
                            } elseif ($start > $time && ($end > $time || $value['time'] == "")) {
                                
                                $linkrows[$key]['type'] = "<font color='#ff6600'>广告暂未开始</font>";
                            }
                        } else {
                            
                            $linkrows[$key]['type'] = "<font color='red'>过期广告</font>";
                            $linkrows[$key]['is_end'] = '1';
                        }
                    } else {
                        $linkrows[$key]['type'] = "<font color='red'>无效广告</font>";
                    }
                }
            }
            $ListNew['list'] = $linkrows;
        }
        
        return $ListNew;
    }

    /**
     * 查询ad_order表内没有的数据，引用相关类，查询关联表，提取列表数据所需信息
     * 
     * @param array $List            
     */
    private function getDataList($List)
    {
        include (CONFIG_PATH."db.data.php");
        
        foreach ($List as $k => $v) {
            $List[$k]['order_state_n'] = $arr_data['paystate'][$v['order_state']];
            $comid[] = $v['comid'];
        }
        
        
        $mWhere['uid']  = array('in',pylode(',', $comid));
        $mList = $this->select_all('member', $mWhere, '`uid`,`username`');
        
        
        $comWhere['uid']  = array('in', pylode(',', $comid));
        $comList = $this->select_all('company', $comWhere, '`uid`,`name`');
		
        foreach ($List as $k => $v) {
			
            
            if (! empty($mList)) {
                
                foreach ($mList as $mv) {
                    
                    if ($v['comid'] == $mv['uid']) {
                        
                        $List[$k]['username'] = $mv['username'];
                    }
                }
            }
            
            
            if (! empty($comList)) {
                
                foreach ($comList as $comv) {
                    
                    if ($v['comid'] == $comv['uid']) {
                        
                        $List[$k]['comname'] = $comv['name'];
                    }
                }
            }
        }
        
        return $List;
    }

    
    function getAdClickNum($Where)
    {
        return $this->select_num('adclick', $Where);
    }

    
    function addAdClick($data = array())
    {
		
        return $this->insert_into('adclick', $data);
    }

    function model_ad_arr()
    {
        $show .= "<?php\r\n\$ad_label=array();\r\n";
        
        $ad_list = $this->select_all("ad", array('is_open' => 1,'orderby' => array('sort,desc','id,desc')));
        
        if (is_array($ad_list)) {
            
            $time = time();
            
            foreach ($ad_list as $key => $value) {
                
                $start = strtotime($value['time_start'] . " 00:00:00");
                
                $end   = strtotime($value['time_end'] . " 23:59:59");
                
                if (! empty($value['time_end'])) {
                    
                    if ($end > $time) {
                        
                        $end_type = 1;
                    } else {
                        
                        $end_type = 2;
                    }
                } else {
                    
                    $end_type = 1;
                }
                if ($start && $start < $time && $end_type == 1 && $value['is_check'] == "1") {
                    
                    if ($value['ad_type'] == "word") {
                        
                        $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['html']=\"<a href='$value[word_url]'>$value[word_info]</a>\";\r\n";
                    } elseif ($value['ad_type'] == "pic") {
                        
                        if (@! stripos("ttp://", $value['pic_url'])) {
                            
                            $pic_url = checkpic($value['pic_url']);
                        }
                        
                        $height = $width = "";
                        
                        if ($value['pic_height']) {
                            
                            $height = "height='$value[pic_height]'";
                        }
                        if ($value['pic_width']) {
                            
                            $width  = "width='$value[pic_width]'";
                        }
                        if ($value['pic_content']) {
                            
                            $alt    = "alt='$value[pic_content]'";
                        }
                        if ($this->config['sy_seo_rewrite'] == '1') {
                            $pic_src = $this->config['sy_weburl'] . "/c_clickhits-id_" . $value['id'] . ".html";
                        } else {
                            
                            $pic_src = $this->config['sy_weburl'] . "/index.php?c=clickhits&id=" . $value['id'];
                        }
                        
                        if ($value['target'] == 2) {
                            
                            $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['html']=\"<a href='$pic_src' target='_blank' rel='nofollow'><img src='$pic_url'  " . $height . " " . $width . " " . $alt . "></a>\";\r\n";
                        } else {
                            
                            $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['html']=\"<a href='$pic_src' rel='nofollow'><img src='$pic_url' " . $height . " " . $width . " " . $alt . " ></a>\";\r\n";
                        }
                        
                        $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['pic']=\"$pic_url\";\r\n";
                        
                        $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['src']=\"$pic_src\";\r\n";
                    } elseif ($value['ad_type'] == "flash") {
                        
                        if (! stripos("ttp://", $value['flash_url'])) {
                            
                            $flash_url = checkpic($value['flash_url']);
                        }
                        
                        $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['html']=\"<object type='application/x-shockwave-flash' data='$flash_url' width='$value[flash_width]' height='$value[flash_height]'><param name='movie' value='$flash_url' /><param value='transparent' name='wmode'></object>\";\r\n";
                    } elseif ($value['ad_type'] == "lianmeng") {
                        
                        $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['html']=\"" . str_replace('"', '\\"', $value['lianmeng_url']) . "\";\r\n";
                    }
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['start']=\"" . strtotime(date('Y-m-d H:i:s', $start)) . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['end']=\"" . strtotime(date('Y-m-d H:i:s', $end)) . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['type']=\"" . $value['ad_type'] . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['name']=\"" . $value['ad_name'] . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['did']=\"" . $value['did'] . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['id']=\"" . $value['id'] . "\";\r\n";
                    $show .= "\$ad_label['$value[class_id]']['ad_$value[id]']['class_id']=\"" . $value['class_id'] . "\";\r\n";
                }
            }
        }
        $show .= "?>";
        $path = PLUS_PATH . "pimg_cache.php";
        $fp = @fopen($path, "w");
        $fw = @fwrite($fp, $show);
        @fclose($fp);
        @chmod($path, 0777);
        return $fw;
    }

    function model_saveadd($post, $pic = NULL)
    {
        if (empty($post['did'])) {
            
            $did = 0;
        }
        $value = array(
            
            'ad_name'    => $post['ad_name'],
            'target'     => $post['target'],
            'time_start' => $post['ad_time_start'],
            'time_end'   => $post['ad_time_end'],
            'ad_type'    => $post['ad_type'],
            'class_id'   => $post['class_id'],
            'is_check'   => $post['is_check'],
            'did'        => $post['did'],
            'is_open'    => $post['is_open'],
            'sort'       => $post['sort'],
            'remark'     => $post['remark']
        );
        
        if ($post['ad_type']) {
            
            if ($post['ad_type'] == "word") {
				
                $value['word_info']	=	$post['word_info'];
                $value['word_url']	=	$post['word_url'];
            } elseif ($post['ad_type'] == "pic") {
                
                if ($pic != "") {
                    if (strpos($pic,$this->config['sy_weburl']) !== false){
                        $pic  =  str_replace($this->config['sy_weburl'].'/data','./data',$pic);
                    }
                    if (strpos($pic,$this->config['sy_ossurl']) !== false){
                        $pic  =  str_replace($this->config['sy_ossurl'].'/data','./data',$pic);
                    }
                    $value['pic_url']	=	$pic;
                }
                $pic_src = str_replace("amp;", "", $post['pic_src']);
				
                $value['pic_src']		=	$pic_src;
                $value['pic_content']	=	$post['pic_content'];
                $value['pic_width']		=	$post['pic_width'];
                $value['pic_height']	=	$post['pic_height'];
                
            } elseif ($post['ad_type'] == "flash") {
				if ($pic != "") {
                    $value['flash_url']	=	$pic;
                }
                $value['flash_width']	=	$post['flash_width'];
                $value['flash_height']	=	$post['flash_height'];
                
            } elseif ($post['ad_type'] == "lianmeng") {
                
                $value['lianmeng_url']	=	$post['lianmeng_url'];
            }
			if($post['id']){
				$nid 	= 	$this->update_once("ad", $value, array('id' => $post['id']));
				$msg	=	'广告更新';
			}else{
				$nid 	= 	$this->insert_into("ad", $value);
				$msg	=	'广告添加';
			}
            $this->model_ad_arr();
            
            if ($nid) {
                
                $return['msg']		= 	$msg."成功！";
                $return['url']		= 	"index.php?m=advertise";
                $return['errcode']	=	9;
            } else {
                
                $return['msg']		=	$msg."失败！";
                $return['url']		=	$_SERVER['HTTP_REFERER'];
                $return['errcode']	=	8;
            }
        } else {
            
            $return['msg'] 		= 	"您还未选择广告类型！";
            $return['url'] 		= 	'index.php?m=advertise&c=ad_add';
            $return['errcode'] 	= 	8;
        }
        return $return;
    }

    function model_del_ad($id)
    {
        if ($id) {
            
            $nid = $this->delete_all("ad", array('id' => $id));
            
            $return['msg'] = "删除成功！";
            
            $return['url'] = 'index.php?m=advertise';
            
            $return['errcode'] = 9;
            
            $this->model_ad_arr();
        }
        
        return $return;
    }
}
?>