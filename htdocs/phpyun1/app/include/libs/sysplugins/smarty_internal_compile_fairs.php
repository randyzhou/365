<?php
class Smarty_Internal_Compile_Fairs extends Smarty_Internal_CompileBase{
    public $required_attributes = array('item');
    public $optional_attributes = array('name', 'key', 'len', 'sort','limit', 'ispage','state');
    public $shorttag_order = array('from', 'item', 'key', 'name');
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);
        
        $from = $_attr['from'];
        $item = $_attr['item'];
        $name = $_attr['item'];
        $name=str_replace('\'','',$name);
        $name=$name?$name:'list';$name='$'.$name;
        if (!strncmp("\$_smarty_tpl->tpl_vars[$item]", $from, strlen($item) + 24)) {
            $compiler->trigger_template_error("item variable {$item} may not be the same variable as at 'from'", $compiler->lex->taglineno);
        }
        
        $OutputStr=''.$name.'=array();$time=time();$paramer='.ArrayToString($_attr,true).';
		global $db,$db_config,$config;
		$ParamerArr = GetSmarty($paramer,$_GET,$_smarty_tpl);
		$paramer = $ParamerArr[arr];
		$Purl =  $ParamerArr[purl];
        global $ModuleName;
        if(!$Purl["m"]){
            $Purl["m"]=$ModuleName;
        }
		$where = "1";
            
		if($config[\'did\']){
			$where.=" and `did`=\'".$config[\'did\']."\'";
		}
        if($paramer[state]==\'1\'){
			$where .=" AND unix_timestamp(`starttime`)>\'$time\'";
		}elseif($paramer[state]==\'2\'){
			$where .=" AND unix_timestamp(`starttime`)<\'$time\' AND unix_timestamp(`endtime`)>\'$time\'";
		}elseif($paramer[state]==\'3\'){
			$where .=" AND unix_timestamp(`endtime`)<\'$time\'";
		}
		if($paramer[limit]){
			$limit=" LIMIT ".$paramer[limit];
		}else{
			$limit=" LIMIT 20";
		}
		if($paramer[ispage]){
			$limit = PageNav($paramer,$_GET,"zhaopinhui",$where,$Purl,"",6,$_smarty_tpl);
		}
        $where .= " ORDER BY";
            
        $select = "*";
        if($paramer[state]){
            
            $where .= " unix_timestamp(`starttime`)";

            if($paramer[sort]){
    			$where .= " $paramer[sort]";
    		}else{
    			$where .= " ASC ";
    		}
        }else{
            
            $zphlist  =  $db->DB_select_once("zhaopinhui","unix_timestamp(`endtime`)>\'$time\'","`id`");
            
            if(!empty($zphlist)){
                
                $select .= ",CASE WHEN unix_timestamp(`endtime`)>\'$time\' THEN unix_timestamp(`starttime`)";
        		$select .= " WHEN unix_timestamp(`endtime`)<\'$time\' THEN -1*unix_timestamp(`starttime`) END AS `zph_px`";
                            
                $where .= " CASE";
                $where .= " WHEN unix_timestamp(`starttime`)<\'$time\' AND unix_timestamp(`endtime`)>\'$time\' THEN 0";
                $where .= " WHEN unix_timestamp(`starttime`)>\'$time\' THEN 1";
                $where .= " WHEN unix_timestamp(`endtime`)<\'$time\' THEN 2";
                $where .= " END, `zph_px` ASC";
            }else{
                
                $where .= " unix_timestamp(`starttime`) DESC";
            }
        }
        
		'.$name.'=$db->select_all("zhaopinhui",$where.$limit, $select);
		    
		if(is_array('.$name.')){
			foreach('.$name.' as $key=>$v){
				$array_zid[]=$v[id];
			}
            if(!empty($array_zid)){
                $rows=$db->select_all("zhaopinhui_com","`zid` in (".implode(\',\',$array_zid).") and `status`=1","`uid`,`zid`");
    			$zph_com=array();
				foreach($rows as $va){
					$arr_uid[]=$a_uid[$va[zid]][]=$va[uid];
				}
                if(!empty($arr_uid)){
                    $arr_uid  =  array_unique($arr_uid);
                    $joblist = $db->select_all("company_job","`uid` in (".implode(\',\',$arr_uid).") and `state`=1 and `status`=0 and `r_status`=1 GROUP BY `uid`","`uid`,count(*) as `num`");
			    
                    foreach($rows as $k=>$v){
                        foreach($joblist as $val){
                            if($v[uid] == $val[uid]){
                                $rows[$k][jobnum]  =  $val[num];
                            }
                        }
    				}
                }
            }
			$weekarray=array("日","一","二","三","四","五","六");
			foreach('.$name.' as $key=>$v){
                '.$name.'[$key]["comnum"]=0;
    			'.$name.'[$key]["jobnum"]=0;
                foreach($rows as $val){
                    if($v[id] == $val[zid]){
                        '.$name.'[$key]["comnum"]++;
    			        '.$name.'[$key]["jobnum"]+=$val[jobnum];
                    }
                }
				'.$name.'[$key]["starttime_n"]=date(\'Y\',strtotime($v[starttime])).\'年\'.date(\'n\',strtotime($v[starttime]))."月";
				'.$name.'[$key]["stime"]=strtotime($v[starttime])-time();
				'.$name.'[$key]["etime"]=strtotime($v[endtime])-time();
				if($paramer[len]){
					'.$name.'[$key]["title"]=mb_substr($v[\'title\'],0,$paramer[len],"utf-8");
				}
				'.$name.'[$key]["url"]=Url("zph",array("c"=>\'show\',"id"=>$v[\'id\']),"1");
                '.$name.'[$key]["week"] = $weekarray[date(\'w\',strtotime($v[\'starttime\']))];
                    
				'.$name.'[$key][\'is_themb\'] = checkpic($v[\'is_themb\'],$config[\'sy_zph_icon\']);
				    
			}
		}';
        return SmartyOutputStr($this,$compiler,$_attr,'fairs',$name,$OutputStr,$name);
    }
}
class Smarty_Internal_Compile_Fairselse extends Smarty_Internal_CompileBase{
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);
        
        list($openTag, $nocache, $item, $key) = $this->closeTag($compiler, array('fairs'));
        $this->openTag($compiler, 'fairselse', array('fairselse', $nocache, $item, $key));
        
        return "<?php }\nif (!\$_smarty_tpl->tpl_vars[$item]->_loop) {\n?>";
    }
}
class Smarty_Internal_Compile_Fairsclose extends Smarty_Internal_CompileBase{
    public function compile($args, $compiler, $parameter){
        $_attr = $this->getAttributes($compiler, $args);
        if ($compiler->nocache) {
            $compiler->tag_nocache = true;
        }
        
        list($openTag, $compiler->nocache, $item, $key) = $this->closeTag($compiler, array('fairs', 'fairselse'));
        
        return "<?php } ?>";
    }
}
