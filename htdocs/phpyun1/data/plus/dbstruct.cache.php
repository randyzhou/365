<?php 
$phpyun_ad=array('id'=>'int','ad_name'=>'varchar(100)','did'=>'varchar(100)','time_start'=>'varchar(100)','time_end'=>'varchar(100)','ad_type'=>'varchar(10)','word_info'=>'text','word_url'=>'varchar(100)','pic_url'=>'varchar(100)','pic_src'=>'varchar(100)','pic_content'=>'varchar(200)','pic_width'=>'varchar(100)','pic_height'=>'varchar(100)','flash_url'=>'varchar(100)','flash_src'=>'varchar(100)','flash_width'=>'varchar(100)','flash_height'=>'varchar(100)','class_id'=>'int','is_check'=>'int','is_open'=>'int','target'=>'int','hits'=>'int','remark'=>'varchar(255)','sort'=>'int','lianmeng_url'=>'varchar(100)')
; 
$phpyun_ad_class=array('id'=>'int','class_name'=>'varchar(100)','orders'=>'int','href'=>'varchar(100)','integral_buy'=>'varchar(100)','type'=>'int','btype'=>'int','x'=>'varchar(11)','y'=>'varchar(11)','remark'=>'text')
; 
$phpyun_adclick=array('id'=>'int','aid'=>'int','uid'=>'int','ip'=>'varchar(20)','addtime'=>'int')
; 
$phpyun_admin_announcement=array('id'=>'int','title'=>'varchar(255)','keyword'=>'varchar(255)','description'=>'varchar(255)','content'=>'text','datetime'=>'int','endtime'=>'int','did'=>'varchar(100)')
; 
$phpyun_admin_config=array('name'=>'varchar(100)','config'=>'text')
; 
$phpyun_admin_email=array('id'=>'int','smtpserver'=>'varchar(100)','smtpuser'=>'varchar(100)','smtppass'=>'varchar(100)','smtpport'=>'varchar(100)','smtpnick'=>'varchar(100)','default'=>'int')
; 
$phpyun_admin_integralclass=array('id'=>'int','integral'=>'int','discount'=>'int','state'=>'int')
; 
$phpyun_admin_link=array('id'=>'int','link_name'=>'varchar(50)','link_url'=>'varchar(50)','img_type'=>'int','pic'=>'varchar(255)','link_type'=>'varchar(1)','link_state'=>'int','link_sorting'=>'int','link_time'=>'varchar(20)','did'=>'int','tem_type'=>'int')
; 
$phpyun_admin_log=array('id'=>'int','uid'=>'int','username'=>'varchar(200)','content'=>'text','ctime'=>'int','did'=>'int','opera'=>'tinyint','opera_id'=>'int','type'=>'tinyint','ip'=>'varchar(20)')
; 
$phpyun_admin_navigation=array('id'=>'int','name'=>'varchar(60)','keyid'=>'int','url'=>'varchar(70)','menu'=>'int','classname'=>'varchar(100)','sort'=>'int','display'=>'int','dids'=>'int','level'=>'int')
; 
$phpyun_admin_template=array('id'=>'int','name'=>'varchar(50)','tp_name'=>'varchar(50)','update_time'=>'int','dir'=>'varchar(50)')
; 
$phpyun_admin_user=array('uid'=>'int','m_id'=>'int','username'=>'varchar(25)','password'=>'varchar(50)','name'=>'varchar(50)','isdid'=>'int','did'=>'int','lasttime'=>'int','status'=>'tinyint','salt'=>'varchar(20)','moblie'=>'varchar(20)','weixin'=>'varchar(20)','qq'=>'varchar(20)','logo'=>'varchar(100)','zan'=>'int','r_status'=>'tinyint','is_crm'=>'int','wxid'=>'varchar(100)','crm_duty'=>'varchar(100)','crm_city'=>'varchar(200)','photo'=>'varchar(200)','ewm'=>'varchar(200)')
; 
$phpyun_admin_user_group=array('id'=>'int','group_name'=>'varchar(100)','group_power'=>'text','group_type'=>'int','did'=>'int','group_power_module'=>'text')
; 
$phpyun_advice_question=array('id'=>'int','username'=>'varchar(20)','infotype'=>'int','content'=>'varchar(250)','mobile'=>'varchar(11)','ctime'=>'int','email'=>'varchar(150)','handlecontent'=>'varchar(255)','status'=>'int')
; 
$phpyun_answer=array('id'=>'int','qid'=>'int','cid'=>'int','uid'=>'int','nickname'=>'varchar(25)','comment'=>'int','support'=>'int','oppose'=>'int','content'=>'text','add_time'=>'int','pic'=>'varchar(100)','usertype'=>'int')
; 
$phpyun_answer_review=array('id'=>'int','aid'=>'int','qid'=>'int','uid'=>'int','support'=>'int','content'=>'text','add_time'=>'int','usertype'=>'int')
; 
$phpyun_atn=array('id'=>'int','uid'=>'int','sc_uid'=>'int','time'=>'int','usertype'=>'int','sc_usertype'=>'int','tid'=>'int','conid'=>'int','xjhid'=>'int')
; 
$phpyun_attention=array('id'=>'int','ids'=>'text','type'=>'int','uid'=>'int')
; 
$phpyun_bank=array('id'=>'int','name'=>'varchar(200)','bank_name'=>'varchar(200)','bank_number'=>'varchar(200)','bank_address'=>'varchar(200)')
; 
$phpyun_banner=array('id'=>'int','uid'=>'int','pic'=>'varchar(100)','status'=>'int','statusbody'=>'varchar(255)','did'=>'int')
; 
$phpyun_blacklist=array('id'=>'int','p_uid'=>'int','c_uid'=>'int','inputtime'=>'int','usertype'=>'int','com_name'=>'varchar(100)')
; 
$phpyun_change=array('id'=>'int','uid'=>'int','username'=>'varchar(50)','usertype'=>'int','name'=>'varchar(50)','gid'=>'int','integral'=>'int','ctime'=>'int','num'=>'int','linktel'=>'varchar(100)','linkman'=>'varchar(200)','body'=>'varchar(255)','status'=>'int','statusbody'=>'text','express'=>'varchar(100)','expnum'=>'varchar(15)')
; 
$phpyun_city_class=array('id'=>'int','keyid'=>'int','name'=>'varchar(100)','letter'=>'varchar(1)','display'=>'int','sitetype'=>'int','sort'=>'int','e_name'=>'varchar(255)')
; 
$phpyun_comclass=array('id'=>'int','keyid'=>'int','name'=>'varchar(50)','variable'=>'varchar(50)','sort'=>'int')
; 
$phpyun_company=array('uid'=>'int','name'=>'varchar(25)','shortname'=>'varchar(25)','hy'=>'int','pr'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','mun'=>'int','sdate'=>'varchar(20)','money'=>'int','moneytype'=>'int','content'=>'longtext','address'=>'varchar(100)','zip'=>'varchar(10)','linkman'=>'varchar(50)','linkjob'=>'varchar(50)','linkqq'=>'varchar(20)','linkphone'=>'varchar(100)','linktel'=>'varchar(50)','linkmail'=>'varchar(150)','website'=>'varchar(100)','x'=>'varchar(100)','y'=>'varchar(100)','logo'=>'varchar(100)','logo_status'=>'int','logo_statusbody'=>'varchar(255)','payd'=>'int','integral'=>'int','lastupdate'=>'varchar(10)','cloudtype'=>'int','jobtime'=>'int','r_status'=>'int','firmpic'=>'varchar(100)','rec'=>'int','hits'=>'int','ant_num'=>'int','pl_time'=>'int','pl_status'=>'int','order'=>'int unsigned','admin_remark'=>'varchar(255)','email_dy'=>'int','msg_dy'=>'int','sync'=>'int unsigned','hy_dy'=>'varchar(100)','moblie_status'=>'int','email_status'=>'int','yyzz_status'=>'int','hottime'=>'int','did'=>'int','busstops'=>'text','infostatus'=>'int','conid'=>'int','addtime'=>'int','comqcode'=>'varchar(200)','crm_uid'=>'int','crm_time'=>'int','crm_status'=>'tinyint(1)','welfare'=>'text','hotstart'=>'int','crm_type'=>'int','crm_remark'=>'text','isfollow'=>'tinyint(1)','rating'=>'int','rating_name'=>'varchar(100)','vipstime'=>'int','vipetime'=>'int')
; 
$phpyun_company_cert=array('id'=>'int','uid'=>'int','type'=>'varchar(200)','status'=>'int','step'=>'int','check'=>'varchar(200)','check2'=>'varchar(200)','ctime'=>'int','statusbody'=>'varchar(100)','did'=>'int','usertype'=>'int')
; 
$phpyun_company_consultant=array('id'=>'int','username'=>'varchar(25)','mobile'=>'varchar(25)','qq'=>'varchar(25)','adtime'=>'int','status'=>'varchar(100)','weixin'=>'varchar(100)','logo'=>'varchar(100)','zan'=>'int','crm_uid'=>'int','assign'=>'int')
; 
$phpyun_company_job=array('id'=>'int','uid'=>'int','name'=>'varchar(50)','com_name'=>'varchar(50)','hy'=>'int','job1'=>'int','job1_son'=>'int','job_post'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','cert'=>'varchar(50)','type'=>'int','number'=>'int','exp'=>'int','report'=>'int','sex'=>'int','edu'=>'int','marriage'=>'int','description'=>'text','xuanshang'=>'int','xsdate'=>'int','sdate'=>'int','edate'=>'int','jobhits'=>'int','lastupdate'=>'varchar(10)','rec'=>'int','cloudtype'=>'int','state'=>'int','statusbody'=>'varchar(200)','age'=>'int','lang'=>'text','welfare'=>'text','pr'=>'int','mun'=>'int','com_provinceid'=>'int','rating'=>'int','status'=>'int','urgent'=>'int','r_status'=>'int','end_email'=>'int','urgent_time'=>'int','com_logo'=>'varchar(100)','autotype'=>'int','autotime'=>'int','is_link'=>'int','link_type'=>'int','source'=>'int','rec_time'=>'int','snum'=>'int','operatime'=>'int','did'=>'int','is_email'=>'int','minsalary'=>'int','maxsalary'=>'int','sharepack'=>'int','rewardpack'=>'int','is_graduate'=>'int','x'=>'varchar(50)','y'=>'varchar(50)','zuid'=>'int')
; 
$phpyun_company_job_link=array('id'=>'int','uid'=>'int','jobid'=>'int','link_man'=>'varchar(100)','link_moblie'=>'varchar(20)','email_type'=>'int','is_email'=>'int','email'=>'varchar(100)','link_type'=>'int','link_address'=>'varchar(255)')
; 
$phpyun_company_msg=array('id'=>'int','uid'=>'int','cuid'=>'int','content'=>'text','ctime'=>'varchar(100)','status'=>'int','reply'=>'text','reply_time'=>'int','did'=>'int','jobid'=>'int','tag'=>'varchar(255)','desscore'=>'int','hrscore'=>'int','comscore'=>'int','score'=>'double(10,1)','othercontent'=>'text','msgid'=>'int','isnm'=>'int')
; 
$phpyun_company_news=array('id'=>'int','uid'=>'int','title'=>'varchar(200)','ctime'=>'int','body'=>'text','status'=>'int','statusbody'=>'text','did'=>'int')
; 
$phpyun_company_order=array('id'=>'int','uid'=>'int','order_id'=>'varchar(18)','order_type'=>'varchar(25)','order_dkjf'=>'int','order_price'=>'double(18,2)','order_time'=>'int','order_state'=>'int','order_remark'=>'text','order_bank'=>'varchar(150)','type'=>'int','rating'=>'int','integral'=>'int','is_invoice'=>'int','coupon'=>'int','did'=>'int','sid'=>'int','order_pic'=>'varchar(100)','bank_time'=>'int','order_info'=>'text','rewardid'=>'int','crm_uid'=>'int','once_id'=>'int','fast'=>'varchar(6)','usertype'=>'int')
; 
$phpyun_company_pay=array('id'=>'int','order_id'=>'varchar(18)','order_price'=>'decimal(10,2)','pay_time'=>'int','pay_state'=>'int','com_id'=>'int','pay_remark'=>'varchar(255)','type'=>'int','pay_type'=>'int','did'=>'int','eid'=>'int','usertype'=>'int','coupon_id'=>'int')
; 
$phpyun_company_product=array('id'=>'int','uid'=>'int','title'=>'varchar(200)','pic'=>'varchar(200)','body'=>'text','ctime'=>'int','status'=>'int','statusbody'=>'text','did'=>'int')
; 
$phpyun_company_rating=array('id'=>'int','name'=>'varchar(200)','service_price'=>'varchar(100)','integral_buy'=>'varchar(100)','yh_price'=>'varchar(100)','yh_integral'=>'varchar(100)','time_start'=>'int','time_end'=>'int','resume'=>'int','job_num'=>'int','interview'=>'int','editjob_num'=>'int','breakjob_num'=>'int','sort'=>'int','display'=>'int','explains'=>'varchar(255)','com_pic'=>'varchar(100)','com_color'=>'varchar(100)','type'=>'int','lt_resume'=>'int','lt_job_num'=>'int','lt_editjob_num'=>'int','lt_breakjob_num'=>'int','category'=>'int','msg_num'=>'int','service_time'=>'int','coupon'=>'int','part_num'=>'int','editpart_num'=>'int','breakpart_num'=>'int','zph_num'=>'int','service_discount'=>'int','jobrec'=>'int','top_num'=>'int','urgent_num'=>'int','rec_num'=>'int','sons_num'=>'int','xcx'=>'int','xcx_num'=>'int')
; 
$phpyun_company_service=array('id'=>'int','name'=>'varchar(255)','display'=>'int','sort'=>'int')
; 
$phpyun_company_service_detail=array('id'=>'int','service_price'=>'varchar(100)','resume'=>'int','interview'=>'int','job_num'=>'int','breakjob_num'=>'int','part_num'=>'int','breakpart_num'=>'int','lt_job_num'=>'int','lt_breakjob_num'=>'int','lt_resume'=>'int','type'=>'int','sort'=>'int','zph_num'=>'int','top_num'=>'int','rec_num'=>'int','urgent_num'=>'int')
; 
$phpyun_company_show=array('id'=>'int','title'=>'varchar(200)','picurl'=>'varchar(200)','body'=>'varchar(200)','ctime'=>'int','uid'=>'int','sort'=>'int','status'=>'int','statusbody'=>'varchar(255)','did'=>'int')
; 
$phpyun_company_statis=array('uid'=>'int','pay'=>'double(10,2)','packpay'=>'double(10,2)','freeze'=>'double(10,2) unsigned','integral'=>'varchar(10)','sq_job'=>'int unsigned','fav_job'=>'int unsigned','rating'=>'int unsigned','rating_name'=>'varchar(100)','all_pay'=>'double(10,2)','consum_pay'=>'double(10,2)','rating_type'=>'int unsigned','invite_resume'=>'int','comtpl'=>'varchar(100)','comtpl_all'=>'varchar(100)','job_num'=>'int','editjob_num'=>'int','breakjob_num'=>'int','down_resume'=>'int','qqshow'=>'int','qqcomment'=>'int','sinashare'=>'int','sinashow'=>'int','sinacomment'=>'int','qqwname'=>'varchar(100)','sinawname'=>'varchar(100)','lt_job_num'=>'int','lt_editjob_num'=>'int','lt_breakjob_num'=>'int','lt_down_resume'=>'int','qqshare'=>'int','msg_num'=>'int','autotime'=>'int','vip_stime'=>'int','vip_etime'=>'int','did'=>'int','part_num'=>'int','editpart_num'=>'int','breakpart_num'=>'int','zph_num'=>'int','login_ip'=>'varchar(20)','oldrating_name'=>'varchar(200)','top_num'=>'int','urgent_num'=>'int','rec_num'=>'int','sons_num'=>'int','xcx'=>'int','xcxstime'=>'varchar(100)','xcxetime'=>'varchar(100)','xcx_num'=>'int')
; 
$phpyun_company_tpl=array('id'=>'int','name'=>'varchar(100)','url'=>'varchar(100)','pic'=>'varchar(200)','type'=>'int','price'=>'varchar(100)','status'=>'int','service_uid'=>'varchar(225)')
; 
$phpyun_cron=array('id'=>'int','name'=>'varchar(200)','dir'=>'varchar(200)','type'=>'int','week'=>'int','month'=>'int','hour'=>'int','minute'=>'int','display'=>'int','ctime'=>'int','nowtime'=>'int','nexttime'=>'int')
; 
$phpyun_desc_class=array('id'=>'int','name'=>'varchar(50)','sort'=>'int')
; 
$phpyun_description=array('id'=>'int','nid'=>'int','name'=>'varchar(255)','url'=>'varchar(255)','title'=>'varchar(255)','keyword'=>'varchar(255)','descs'=>'text','top_tpl'=>'int','top_tpl_dir'=>'varchar(255)','footer_tpl'=>'int','footer_tpl_dir'=>'varchar(255)','content'=>'mediumtext','sort'=>'int','is_nav'=>'int','ctime'=>'int','is_menu'=>'int','is_type'=>'int')
; 
$phpyun_domain=array('id'=>'int','title'=>'varchar(200)','domain'=>'varchar(200)','province'=>'int','cityid'=>'int','three_cityid'=>'int','type'=>'int','style'=>'varchar(100)','tpl'=>'varchar(20)','hy'=>'int','fz_type'=>'int','webtitle'=>'text','webkeyword'=>'text','webmeta'=>'text','weblogo'=>'varchar(255)','mode'=>'int','indexdir'=>'varchar(255)')
; 
$phpyun_down_resume=array('id'=>'int','uid'=>'int','eid'=>'int','comid'=>'int','downtime'=>'int','remark'=>'varchar(200)','did'=>'int','type'=>'int','usertype'=>'int','status'=>'int')
; 
$phpyun_email_msg=array('id'=>'int','uid'=>'int','name'=>'varchar(100)','cuid'=>'int','cname'=>'varchar(255)','email'=>'varchar(200)','title'=>'varchar(200)','content'=>'text','ctime'=>'int','state'=>'int','smtpserver'=>'varchar(100)')
; 
$phpyun_entrust=array('id'=>'int','uid'=>'int','lt_uid'=>'int','datetime'=>'int','remind_status'=>'int')
; 
$phpyun_evaluate=array('id'=>'int','gid'=>'int','question'=>'text','option'=>'text','score'=>'text','sort'=>'int')
; 
$phpyun_evaluate_group=array('id'=>'int','keyid'=>'int','name'=>'varchar(32)','sort'=>'int','description'=>'text','ctime'=>'int','fromscore'=>'text','toscore'=>'text','comment'=>'text','visits'=>'int','comnum'=>'int','pic'=>'varchar(64)','num'=>'int','recommend'=>'tinyint(1)','score'=>'int','top'=>'int','hot'=>'int')
; 
$phpyun_evaluate_leave_message=array('id'=>'int unsigned','examid'=>'int unsigned','uid'=>'varchar(36)','usertype'=>'int','message'=>'varchar(512)','ctime'=>'int')
; 
$phpyun_evaluate_log=array('id'=>'int','uid'=>'int','nuid'=>'varchar(36)','examid'=>'int','grade'=>'int','ctime'=>'int','usedsecond'=>'int')
; 
$phpyun_fav_job=array('id'=>'int','uid'=>'int','com_id'=>'int','com_name'=>'varchar(150)','datetime'=>'int','type'=>'int','job_name'=>'varchar(150)','job_id'=>'int')
; 
$phpyun_finder=array('id'=>'int','uid'=>'int','usertype'=>'int','name'=>'varchar(100)','para'=>'varchar(255)','addtime'=>'int')
; 
$phpyun_friend_help=array('id'=>'int','comid'=>'int','stime'=>'int','etime'=>'int','token'=>'varchar(255)','zlnum'=>'int','job_num'=>'int','job_num_zl'=>'int','breakjob_num'=>'int','breakjob_num_zl'=>'int','invite_resume'=>'int','invite_resume_zl'=>'int','top_num'=>'int','top_num_zl'=>'int','urgent_num'=>'int','urgent_num_zl'=>'int','rec_num'=>'int','rec_num_zl'=>'int','down_resume'=>'int','down_resume_zl'=>'int','package'=>'text','receive'=>'text','state'=>'int')
; 
$phpyun_friend_help_log=array('id'=>'int','comid'=>'int','pid'=>'int','wxid'=>'varchar(255)','wxname'=>'varchar(255)','city'=>'varchar(255)','wxpic'=>'text','time'=>'int','helpstate'=>'int')
; 
$phpyun_friend_help_receive=array('id'=>'int','pid'=>'int','name'=>'varchar(255)','time'=>'int','num'=>'int')
; 
$phpyun_hot_key=array('id'=>'int','key_name'=>'varchar(100)','num'=>'int','type'=>'int','size'=>'varchar(10)','check'=>'int','color'=>'varchar(10)','bold'=>'int','tuijian'=>'int','wxtime'=>'int','wxuser'=>'varchar(100)','wxid'=>'varchar(100)')
; 
$phpyun_hotjob=array('id'=>'int','uid'=>'int','username'=>'varchar(200)','rating'=>'varchar(20)','hot_pic'=>'varchar(100)','service_price'=>'int','time_start'=>'int','time_end'=>'int','sort'=>'int','beizhu'=>'varchar(200)','rating_id'=>'int','did'=>'int')
; 
$phpyun_industry=array('id'=>'int','name'=>'varchar(50)','sort'=>'int')
; 
$phpyun_introduce_class=array('id'=>'int','name'=>'varchar(50)','sort'=>'int','content'=>'text')
; 
$phpyun_job_class=array('id'=>'int','keyid'=>'int','name'=>'varchar(50)','sort'=>'int','content'=>'text','e_name'=>'varchar(255)')
; 
$phpyun_login_log=array('id'=>'int','uid'=>'int','usertype'=>'int','content'=>'text','ip'=>'varchar(20)','ctime'=>'int','remoteport'=>'int','did'=>'int')
; 
$phpyun_look_job=array('id'=>'int','uid'=>'int','jobid'=>'int','com_id'=>'int','datetime'=>'int','status'=>'int','com_status'=>'int','did'=>'int')
; 
$phpyun_look_resume=array('id'=>'int','uid'=>'int','com_id'=>'int','resume_id'=>'int','datetime'=>'int','status'=>'int','com_status'=>'int','did'=>'int','usertype'=>'int')
; 
$phpyun_member=array('uid'=>'int','username'=>'varchar(100)','password'=>'varchar(32)','email'=>'varchar(100)','moblie'=>'varchar(20)','reg_ip'=>'varchar(20)','reg_date'=>'int','login_ip'=>'varchar(20)','login_date'=>'int','usertype'=>'int','login_hits'=>'int','salt'=>'varchar(6)','address'=>'varchar(100)','name_repeat'=>'int','qqid'=>'varchar(200)','status'=>'int','pwuid'=>'int','pw_repeat'=>'int','lock_info'=>'varchar(200)','email_status'=>'int','signature'=>'varchar(100)','sinaid'=>'varchar(100)','wxid'=>'varchar(100)','wxopenid'=>'varchar(100)','unionid'=>'varchar(100)','wxname'=>'varchar(100)','wxbindtime'=>'int','passtext'=>'varchar(100)','source'=>'int','regcode'=>'int','did'=>'int','claim'=>'int','restname'=>'int','appeal'=>'varchar(100)','appealtime'=>'int','appealstate'=>'int','signday'=>'int','signdays'=>'int','token'=>'varchar(200)','tokentime'=>'int','appuuid'=>'varchar(200)','qqunionid'=>'varchar(200)','clientid'=>'varchar(200)','deviceToken'=>'varchar(200)','applocker'=>'int','maguid'=>'int','qfyuid'=>'int','moblie_status'=>'int','pid'=>'int')
; 
$phpyun_member_log=array('id'=>'int','uid'=>'int','opera'=>'int','type'=>'int','usertype'=>'int','content'=>'text','ip'=>'varchar(20)','ctime'=>'int','jobnum'=>'int','did'=>'int')
; 
$phpyun_member_reg=array('id'=>'int','uid'=>'int','date'=>'int','usertype'=>'int','ip'=>'varchar(20)','ctime'=>'int')
; 
$phpyun_member_statis=array('uid'=>'int','integral'=>'varchar(10)','pay'=>'double(10,2)','packpay'=>'double(10,2)','freeze'=>'double(10,2) unsigned','resume_num'=>'int','fav_jobnum'=>'int','sq_jobnum'=>'int','message_num'=>'int','down_num'=>'int','tpl'=>'int','paytpls'=>'varchar(255)')
; 
$phpyun_member_withdraw=array('id'=>'int','order_id'=>'varchar(50)','price'=>'double(10,2)','order_price'=>'double(10,2)','pound_price'=>'double(10,2)','uid'=>'int','usertype'=>'int','real_name'=>'varchar(100)','wxid'=>'varchar(100)','order_state'=>'int','order_remark'=>'text','time'=>'int','payment_no'=>'varchar(50)')
; 
$phpyun_moblie_msg=array('id'=>'int','uid'=>'int','name'=>'varchar(100)','cuid'=>'int','cname'=>'varchar(255)','moblie'=>'varchar(200)','content'=>'varchar(200)','ctime'=>'int','state'=>'int','ip'=>'varchar(20)')
; 
$phpyun_msg=array('id'=>'int','uid'=>'int','username'=>'varchar(100)','jobid'=>'int','job_uid'=>'int','datetime'=>'int','reply'=>'text','content'=>'text','reply_time'=>'int','com_name'=>'varchar(100)','job_name'=>'varchar(100)','del_status'=>'int','type'=>'int','user_remind_status'=>'int','com_remind_status'=>'int')
; 
$phpyun_navigation=array('id'=>'int','nid'=>'int','name'=>'varchar(100)','url'=>'varchar(100)','sort'=>'int','display'=>'int','eject'=>'int','type'=>'int','furl'=>'varchar(100)','color'=>'varchar(20)','model'=>'varchar(20)','bold'=>'int','desc'=>'int','news'=>'int','config'=>'varchar(100)','pic'=>'varchar(255)')
; 
$phpyun_navigation_type=array('id'=>'int','typename'=>'varchar(100)')
; 
$phpyun_navmap=array('id'=>'int','nid'=>'int','name'=>'varchar(100)','url'=>'varchar(100)','sort'=>'int','display'=>'int','eject'=>'int','type'=>'int','furl'=>'varchar(100)')
; 
$phpyun_news_base=array('id'=>'int','nid'=>'int','did'=>'int','title'=>'varchar(200)','color'=>'varchar(255)','keyword'=>'varchar(200)','author'=>'varchar(200)','datetime'=>'int','hits'=>'int','describe'=>'varchar(255)','description'=>'varchar(255)','newsphoto'=>'varchar(100)','s_thumb'=>'varchar(100)','source'=>'varchar(255)','sort'=>'int','lastupdate'=>'int')
; 
$phpyun_news_content=array('nbid'=>'int','content'=>'text','did'=>'int')
; 
$phpyun_news_group=array('id'=>'int','keyid'=>'int','name'=>'varchar(100)','sort'=>'int','rec'=>'int','is_menu'=>'int','rec_news'=>'int')
; 
$phpyun_once_job=array('id'=>'int','title'=>'varchar(200)','mans'=>'varchar(100)','require'=>'varchar(255)','companyname'=>'varchar(255)','phone'=>'varchar(100)','hits'=>'int','linkman'=>'varchar(50)','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','address'=>'varchar(200)','ctime'=>'int','status'=>'int','password'=>'varchar(100)','qq'=>'varchar(20)','email'=>'varchar(150)','edate'=>'int','login_ip'=>'varchar(20)','did'=>'int','sxtime'=>'int','sxnumber'=>'int','pic'=>'varchar(255)','salary'=>'varchar(100)','pay'=>'int')
; 
$phpyun_outside=array('id'=>'int','name'=>'varchar(100)','type'=>'varchar(100)','titlelen'=>'int','infolen'=>'int','byorder'=>'varchar(200)','num'=>'int','code'=>'text','edittime'=>'int','lasttime'=>'int','urltype'=>'varchar(200)','timetype'=>'varchar(200)','where'=>'varchar(200)')
; 
$phpyun_part_apply=array('id'=>'int','uid'=>'int','jobid'=>'int','comid'=>'int','ctime'=>'int','status'=>'int')
; 
$phpyun_part_collect=array('id'=>'int','uid'=>'int','jobid'=>'int','comid'=>'int','ctime'=>'int')
; 
$phpyun_partclass=array('id'=>'int','keyid'=>'int','name'=>'varchar(50)','variable'=>'varchar(50)','sort'=>'int')
; 
$phpyun_partjob=array('id'=>'int','uid'=>'int','name'=>'varchar(30)','type'=>'int','sdate'=>'int','edate'=>'int','worktime'=>'varchar(255)','number'=>'int','sex'=>'int','salary'=>'int','salary_type'=>'int','billing_cycle'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','address'=>'varchar(100)','x'=>'varchar(10)','y'=>'varchar(10)','content'=>'text','deadline'=>'int','linkman'=>'varchar(10)','linktel'=>'varchar(15)','addtime'=>'int','r_status'=>'int','state'=>'int','lastupdate'=>'int','statusbody'=>'varchar(200)','hits'=>'int','com_name'=>'varchar(30)','rec_time'=>'int','did'=>'int')
; 
$phpyun_property=array('id'=>'int','name'=>'varchar(20)','value'=>'varchar(20)')
; 
$phpyun_q_class=array('id'=>'int','name'=>'varchar(100)','pid'=>'int','pic'=>'varchar(100)','sort'=>'int','intro'=>'text','add_time'=>'int')
; 
$phpyun_question=array('id'=>'int','title'=>'text','content'=>'text','cid'=>'int','uid'=>'int','nickname'=>'varchar(255)','answer_num'=>'int','atnnum'=>'int','visit'=>'int','is_recom'=>'int','lastupdate'=>'int','add_time'=>'int','pic'=>'varchar(100)','state'=>'int')
; 
$phpyun_reason=array('id'=>'int','name'=>'varchar(100)')
; 
$phpyun_recommend=array('id'=>'int','uid'=>'int','rec_type'=>'tinyint(1)','rec_id'=>'int','email'=>'varchar(255)','addtime'=>'int')
; 
$phpyun_recycle=array('id'=>'int','username'=>'varchar(255)','tablename'=>'varchar(100)','body'=>'longtext','ctime'=>'int')
; 
$phpyun_redeem_class=array('id'=>'int','keyid'=>'int','name'=>'varchar(50)','sort'=>'int')
; 
$phpyun_report=array('id'=>'int','p_uid'=>'int','c_uid'=>'int','eid'=>'int','usertype'=>'int','inputtime'=>'int','username'=>'varchar(100)','r_name'=>'varchar(100)','status'=>'int','r_reason'=>'varchar(200)','type'=>'int','r_type'=>'int','did'=>'int','result'=>'varchar(255)','rtime'=>'int','admin'=>'int','datafh'=>'int')
; 
$phpyun_resume=array('uid'=>'int','name'=>'varchar(25)','nametype'=>'int','sex'=>'int','birthday'=>'varchar(10)','marriage'=>'int','height'=>'varchar(4)','nationality'=>'varchar(20)','weight'=>'varchar(4)','idcard'=>'varchar(20)','telphone'=>'varchar(20)','telhome'=>'varchar(20)','email'=>'varchar(50)','edu'=>'int','homepage'=>'varchar(50)','address'=>'varchar(80)','description'=>'text','resume_photo'=>'varchar(100)','photo'=>'varchar(100)','phototype'=>'int','photo_status'=>'int','photo_statusbody'=>'varchar(255)','expect'=>'int','def_job'=>'int','exp'=>'int','status'=>'int','lastupdate'=>'int','resumetime'=>'int','idcard_pic'=>'varchar(100)','email_status'=>'int','moblie_status'=>'int','idcard_status'=>'int','statusbody'=>'varchar(200)','cert_time'=>'int','r_status'=>'int','ant_num'=>'int','email_dy'=>'int','msg_dy'=>'int','living'=>'varchar(100)','domicile'=>'varchar(100)','basic_info'=>'int','hy_dy'=>'varchar(100)','info_status'=>'int','did'=>'int','qq'=>'varchar(20)','wxewm'=>'varchar(200)','tag'=>'varchar(200)','retire'=>'varchar(100)','retire_pic'=>'varchar(200)','retire_status'=>'int','retirebody'=>'varchar(200)')
; 
$phpyun_resume_cert=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','sdate'=>'int','edate'=>'int','title'=>'varchar(50)','content'=>'text')
; 
$phpyun_resume_cityclass=array('id'=>'int','eid'=>'int','uid'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int')
; 
$phpyun_resume_doc=array('id'=>'int','uid'=>'int','eid'=>'int','doc'=>'text')
; 
$phpyun_resume_edu=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','sdate'=>'int','edate'=>'int','specialty'=>'varchar(50)','title'=>'varchar(50)','content'=>'text','education'=>'int','tid'=>'int')
; 
$phpyun_resume_expect=array('id'=>'int','uid'=>'int','name'=>'varchar(25)','hy'=>'int','job_classid'=>'varchar(100)','city_classid'=>'varchar(200)','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','salary'=>'int','jobstatus'=>'int','type'=>'int','report'=>'int','defaults'=>'int','open'=>'int','is_entrust'=>'int','full'=>'int','doc'=>'int','hits'=>'int','lastupdate'=>'int','def_job'=>'int','cloudtype'=>'int','integrity'=>'int','height_status'=>'int','statusbody'=>'varchar(200)','status_time'=>'int','rec'=>'int','top'=>'int','topdate'=>'int','rec_resume'=>'int','source'=>'int','tmpid'=>'int','ctime'=>'int','dnum'=>'int','did'=>'int','uname'=>'varchar(50)','idcard_status'=>'int','status'=>'int','r_status'=>'int','edu'=>'int','exp'=>'int','sex'=>'int','photo'=>'varchar(100)','phototype'=>'int','birthday'=>'varchar(15)','annex'=>'varchar(600)','annexname'=>'varchar(255)','minsalary'=>'int','maxsalary'=>'int','whour'=>'int','avghour'=>'int','content'=>'text','label'=>'int','state'=>'int')
; 
$phpyun_resume_jobclass=array('id'=>'int','eid'=>'int','uid'=>'int','job1'=>'int','job1_son'=>'int','job_post'=>'int')
; 
$phpyun_resume_other=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(50)','content'=>'text')
; 
$phpyun_resume_project=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','sdate'=>'int','edate'=>'int','sys'=>'varchar(50)','title'=>'varchar(50)','content'=>'text','tid'=>'int')
; 
$phpyun_resume_show=array('id'=>'int','title'=>'varchar(200)','picurl'=>'varchar(200)','ctime'=>'varchar(200)','uid'=>'varchar(200)','sort'=>'int','eid'=>'int','status'=>'int','statusbody'=>'varchar(255)','did'=>'int')
; 
$phpyun_resume_skill=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','skill'=>'int','ing'=>'int','longtime'=>'int','pic'=>'varchar(100)')
; 
$phpyun_resume_tiny=array('id'=>'int','username'=>'varchar(25)','password'=>'varchar(50)','sex'=>'int','exp'=>'int','hits'=>'int','job'=>'varchar(25)','mobile'=>'varchar(25)','qq'=>'varchar(25)','evalute'=>'text','production'=>'text','time'=>'int','status'=>'int','login_ip'=>'varchar(20)','did'=>'int','lastupdate'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int')
; 
$phpyun_resume_training=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','sdate'=>'int','edate'=>'int','title'=>'varchar(50)','content'=>'text')
; 
$phpyun_resume_work=array('id'=>'int','uid'=>'int','eid'=>'int','name'=>'varchar(25)','sdate'=>'int','edate'=>'int','department'=>'varchar(50)','title'=>'varchar(50)','content'=>'text','salary'=>'int','tid'=>'int')
; 
$phpyun_resumeout=array('id'=>'int','uid'=>'int','comname'=>'varchar(100)','jobname'=>'varchar(100)','recipient'=>'varchar(100)','email'=>'varchar(100)','resume'=>'varchar(100)','datetime'=>'int')
; 
$phpyun_resumetpl=array('id'=>'int','name'=>'varchar(100)','url'=>'varchar(100)','pic'=>'varchar(200)','type'=>'int','price'=>'varchar(100)','status'=>'int','service_uid'=>'varchar(225)')
; 
$phpyun_reward=array('id'=>'int','name'=>'varchar(30)','nid'=>'int','tnid'=>'int','integral'=>'int','num'=>'int','restriction'=>'int','stock'=>'int','pic'=>'varchar(100)','sort'=>'int','content'=>'text','status'=>'int','sdate'=>'int','rec'=>'int','hot'=>'int')
; 
$phpyun_seo=array('id'=>'int','seoname'=>'varchar(100)','seomodel'=>'varchar(100)','ident'=>'varchar(100)','title'=>'varchar(100)','keywords'=>'varchar(255)','description'=>'text','time'=>'int','did'=>'int','php_url'=>'varchar(100)','rewrite_url'=>'varchar(100)')
; 
$phpyun_special=array('id'=>'int','title'=>'varchar(200)','tpl'=>'varchar(100)','pic'=>'varchar(255)','background'=>'varchar(255)','limit'=>'int','num'=>'int','rating'=>'varchar(200)','display'=>'int','com_bm'=>'int','integral'=>'int','etime'=>'int','sort'=>'int','intro'=>'text','ctime'=>'int')
; 
$phpyun_special_com=array('id'=>'int','sid'=>'int','uid'=>'int','integral'=>'int','status'=>'int','time'=>'int','statusbody'=>'varchar(255)')
; 
$phpyun_subscribe=array('id'=>'int','uid'=>'int','email'=>'varchar(100)','job1'=>'int','job1_son'=>'int','job_post'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','salary'=>'int','type'=>'int','ctime'=>'int','status'=>'int','code'=>'varchar(10)','cycle_time'=>'int','time'=>'int','minsalary'=>'int','maxsalary'=>'int')
; 
$phpyun_subscriberecord=array('id'=>'int','sid'=>'int','uid'=>'int','content'=>'varchar(255)','type'=>'int','time'=>'int')
; 
$phpyun_sysmsg=array('id'=>'int','content'=>'varchar(255)','fa_uid'=>'int','username'=>'varchar(20)','ctime'=>'int','remind_status'=>'int','usertype'=>'int')
; 
$phpyun_talent_pool=array('id'=>'int','uid'=>'int','eid'=>'int','cuid'=>'int','ctime'=>'int','remark'=>'varchar(200)')
; 
$phpyun_templates=array('id'=>'int','name'=>'varchar(200)','title'=>'varchar(255)','content'=>'text')
; 
$phpyun_temporary_resume=array('id'=>'int','name'=>'varchar(20)','uname'=>'varchar(10)','edu'=>'int','sex'=>'int','exp'=>'int','telphone'=>'varchar(15)','email'=>'varchar(100)','living'=>'varchar(100)','hy'=>'int','job_classid'=>'varchar(100)','city_classid'=>'varchar(200)','salary'=>'int','provinceid'=>'int','cityid'=>'int','three_cityid'=>'int','type'=>'int','report'=>'int','jobstatus'=>'int','birthday'=>'varchar(20)','minsalary'=>'int','maxsalary'=>'int','rid'=>'int','integrity'=>'int','whour'=>'int','avghour'=>'int')
; 
$phpyun_toolbox_class=array('id'=>'int','name'=>'varchar(50)','content'=>'text','pic'=>'varchar(100)')
; 
$phpyun_toolbox_doc=array('id'=>'int','cid'=>'int','name'=>'varchar(100)','url'=>'varchar(100)','is_show'=>'int','add_time'=>'int','downnum'=>'int','rec'=>'int')
; 
$phpyun_tplindex=array('id'=>'int','name'=>'varchar(100)','height'=>'int','se'=>'int','stime'=>'int','etime'=>'int','pic'=>'varchar(200)','status'=>'int','url'=>'varchar(100)')
; 
$phpyun_user_change=array('id'=>'int','uid'=>'int','name'=>'varchar(50)','pres_usertype'=>'int','apply_usertype'=>'int','apply_time'=>'varchar(10)','lastupdate'=>'varchar(10)','status'=>'int','applybody'=>'varchar(255)','did'=>'int','statusbody'=>'varchar(255)','type'=>'int','state'=>'int')
; 
$phpyun_user_log=array('id'=>'int','uid'=>'int','usertype'=>'int','opera'=>'int','orderid'=>'varchar(18)','url'=>'varchar(200)','refer'=>'varchar(200)','timein'=>'int','timeout'=>'int','second'=>'int','content'=>'text','status'=>'int','note'=>'varchar(255)')
; 
$phpyun_user_resume=array('id'=>'int','uid'=>'int','eid'=>'int','expect'=>'int','skill'=>'int','work'=>'int','project'=>'int','edu'=>'int','training'=>'int','cert'=>'int','other'=>'int')
; 
$phpyun_userclass=array('id'=>'int','keyid'=>'int','name'=>'varchar(100)','variable'=>'varchar(100)','sort'=>'int')
; 
$phpyun_userid_job=array('id'=>'int','uid'=>'int','job_id'=>'int','job_name'=>'varchar(150)','com_id'=>'int','com_name'=>'varchar(150)','eid'=>'int unsigned','datetime'=>'int','type'=>'int','is_browse'=>'int','body'=>'varchar(255)','did'=>'int','quxiao'=>'int','zid'=>'int','endtime'=>'int')
; 
$phpyun_userid_msg=array('id'=>'int','uid'=>'int','title'=>'varchar(150)','content'=>'text','fid'=>'int','fname'=>'varchar(150)','type'=>'int','datetime'=>'int','default'=>'int','is_browse'=>'int','address'=>'varchar(255)','intertime'=>'varchar(255)','linkman'=>'varchar(50)','linktel'=>'varchar(50)','jobid'=>'int','jobname'=>'varchar(50)','did'=>'int')
; 
$phpyun_warning=array('id'=>'int','uid'=>'int','type'=>'int','status'=>'int','ctime'=>'int')
; 
$phpyun_webscan360=array('id'=>'int unsigned','var'=>'varchar(100)','value'=>'varchar(100)','ext1'=>'varchar(100)','ext2'=>'varchar(100)','state'=>'tinyint unsigned')
; 
$phpyun_wxnav=array('id'=>'int','name'=>'varchar(100)','keyid'=>'int','key'=>'varchar(100)','url'=>'varchar(100)','type'=>'varchar(50)','sort'=>'int','appid'=>'varchar(100)','apppage'=>'varchar(100)')
; 
$phpyun_wxqrcode=array('id'=>'int','wxloginid'=>'varchar(100)','ticket'=>'varchar(100)','time'=>'int','status'=>'int','wxid'=>'varchar(100)','unionid'=>'varchar(100)','auid'=>'int','uid'=>'int')
; 
$phpyun_wxzdkeyword=array('id'=>'int','title'=>'varchar(255)','keyword'=>'text','content'=>'text','time'=>'int')
; 
$phpyun_zhaopinhui=array('id'=>'int','title'=>'varchar(200)','sid'=>'int','pic'=>'varchar(200)','starttime'=>'varchar(100)','endtime'=>'varchar(100)','provinceid'=>'int','cityid'=>'int','address'=>'varchar(200)','traffic'=>'text','phone'=>'varchar(100)','organizers'=>'varchar(200)','user'=>'varchar(200)','weburl'=>'varchar(100)','body'=>'text','media'=>'text','packages'=>'text','booth'=>'text','participate'=>'text','status'=>'int','ctime'=>'int','zwpic'=>'varchar(200)','did'=>'int','reserved'=>'varchar(225)','is_themb'=>'varchar(200)','banner'=>'varchar(200)')
; 
$phpyun_zhaopinhui_com=array('id'=>'int','uid'=>'int','zid'=>'int','jobid'=>'varchar(255)','ctime'=>'int','status'=>'int','statusbody'=>'varchar(100)','inadd'=>'varchar(100)','did'=>'int','sid'=>'int','cid'=>'int','bid'=>'int','price'=>'int','com_name'=>'varchar(64)')
; 
$phpyun_zhaopinhui_pic=array('id'=>'int','title'=>'varchar(200)','pic'=>'varchar(200)','sort'=>'int','zid'=>'int','is_themb'=>'int','did'=>'int')
; 
$phpyun_zhaopinhui_space=array('id'=>'int','name'=>'varchar(200)','sort'=>'int','keyid'=>'int','pic'=>'varchar(100)','content'=>'tinytext','price'=>'int')
; 

$phpyun_question_copy=array('id'=>'int','title'=>'text','content'=>'text','cid'=>'int','uid'=>'int','nickname'=>'varchar(255)','answer_num'=>'int','atnnum'=>'int','visit'=>'int','is_recom'=>'int','lastupdate'=>'int','add_time'=>'int','pic'=>'varchar(100)','state'=>'int')
; 
//唐胡子测试
$phpyun_test=array('id'=>'int','title'=>'text','content'=>'text')
; 
?>