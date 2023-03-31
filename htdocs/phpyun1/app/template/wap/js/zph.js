// JavaScript Document
 
$(document).ready(function(){
	$(".fairs_disp_position").click(function(){
		$('.zph_make_icon_yxz').addClass('zph_make_icon_kyd');
		$('.zph_make_icon_yxz').removeClass('zph_make_icon_yxz');
		$(this).find('i').addClass('zph_make_icon_yxz');
		var aid=$(this).attr("aid");
		content=$("#showstatus"+aid).html();
		$("#showstatus"+aid).show();
		$("#bg").show();
	});
	$('#bg').click(function(){
		$('.zph_make_icon_yxz').addClass('zph_make_icon_kyd');
		$('.zph_make_icon_yxz').removeClass('zph_make_icon_yxz');
		$('#bg').hide();
		$('.zph_makebox').hide();
	});
});

$(document).ready(function(){
	$(".fairs_disp_position1").click(function(){
		var aid=$(this).attr("aid");
		$("#showstatus"+aid).show();
		$("#bg").show();
	});   
});



function closeShowStatus(aid){
  	location.reload(true);
}


function clickzph(id, zid, price) {

	$.post(wapurl + "/index.php?c=ajax&a=ajaxzphjob",{zid : zid, id : id}, function(data) {
		
		var data = eval('(' + data + ')');
		
		if (data.status == 1 || data.status == 3) {	// 1-报名成功 3-展位有其他人报名
			
			layermsg(data.msg,2,function(){
				
				location.reload();
			
			});
		
		} else if (data.status == 2) {
			 
			layer.open({
				title : [ '温馨提示', 'background-color: #FF4351; color:#fff;' ],
				content : data.msg,
				btn : [ '确认', '取消' ],
				shadeClose : false,
				yes : function() {
					window.location.href = wapurl + "member/index.php?c=server&server=zph&id=" + zid + "&bid=" + id;
				}
			});
			 
		} else{ 
			if(data.login == 1){
				
				pleaselogin('您还未登录企业账号，是否登录？',wapurl+'/index.php?c=login')
			}else{
				
				layermsg(data.msg, 2, 8);return false;
			}
		}
	})

}