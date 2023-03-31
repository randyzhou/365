$(document).ready(function(){


var handlerPopupMobile = function (captchaObj) {
	// 成功的回调
	captchaObj.appendTo("#popup-captcha-mobile");

	captchaObj.onSuccess(function () {
		
		var validate = captchaObj.getValidate();
		
		if(validate){
			
			$("input[name='geetest_challenge']").val(validate.geetest_challenge);
			$("input[name='geetest_validate']").val(validate.geetest_validate);
			$("input[name='geetest_seccode']").val(validate.geetest_seccode);


			//提交操作
			var type = $('#bind-captcha').attr('data-type');
			var dataid = $('#bind-captcha').attr('data-id');
			//提交表单
			if(type=='submit'){
				$('#'+dataid).submit();
			}else{
				//模拟点击
				$("#"+dataid).trigger("click");
			}
		}

	});
	
	$("#bind-submit").click(function(){
		
		captchaObj.verify();
	});
	$("#popup-submit").click(function(){
		$("input[name='geetest_challenge']").val('');
		$("input[name='geetest_validate']").val('');
		$("input[name='geetest_seccode']").val('');
		captchaObj.reset();
	});
	

};

if($("#bind-captcha").length>0){

	$.ajax({
			url: wapurl+"/index.php?c=geetest&t=" + (new Date()).getTime(), 
			type: "get",
			dataType: "json",
			success: function (data) {
				
				initGeetest({
					
					gt: data.gt,
					challenge: data.challenge,
					offline: !data.success,
					product:'bind',
					width:"100%",
					new_captcha: data.new_captcha
				}, handlerPopupMobile);
			}
	});
}

});