// JavaScript Document
$(function(){
	var height1=$(window).height();
	$(".index .hides img").height(height1);
	$(".index .bg img").height(height1);
	$(".mengban h1").height(height1);
	$(".hongbao img").height(height1-50);
	$(".hmangban h1").height(height1);
	
	 $(".bottom_btn ul li:eq(0)").toggle(function(){
	  $(this).find("img").attr("src","images/big.png");	
	  $(".pinlei .liebiao dl").css("background","#2b241a");
	  $(".pinlei .liebiao dl dd").addClass("current");
	  $(".pinlei .liebiao dl dd input:checkbox").attr("checked", true); 
	  
	},function(){
	  $(this).find("img").attr("src","images/quan.png");	
	  $(".pinlei .liebiao dl").css("background","none");
	  $(".pinlei .liebiao dl dd").removeClass("current");
	  $(".pinlei .liebiao dl dd input:checkbox").attr("checked", false);
	})
	
	


	/*icon图标*/
	$(".icon1").hide();
	$(".icon img").toggle(function(){
		$(".icon1").show().animate({opacity:"0",width:"65%"},100)
		                  .animate({opacity:"1",width:"75%"},100)
						  .animate({opacity:"1",width:"70%"},100);
	},function(){
		$(".icon1").hide();
		})


	/*列表蒙版*/	
    
	$(".pinlei .liebiao1 dl dt,.pinlei .liebiao1 dl p").click(function(){
		
     		var index1=$(this).parent("dl").index();

		$(".qmengban .mengban").eq(index1).fadeIn();
	})
	
	

	$(".mengban div form .btn1").click(function(){
	  
	  $(".mengban div p").animate({ opacity:"1"}, 500)
                         .animate({opacity:"1"}, 1000)
                         .animate({opacity:"0",}, 1000);	
	  })




	$(".mengban div h2").click(function(){

	  $(".mengban").fadeOut();

	})


	/*红包*/	

        $(function () {
            $('.hmangban img:eq(0)').one("click", function () {
               $(".hmangban img:eq(0)").addClass('animated shake').animate({
				   opacity:"1"
				  },1000)
				  .animate({
				   opacity:"0"
				  },300);
			  
			  $(".hmangban img:eq(1)").animate({
				  opacity:"1"
				  },2000); 
					});   //中奖了
					
			  /*$(".hmangban img:eq(2)").animate({
				  opacity:"1"
				  },2000); 
					}); */      //抽完了
          })  
   


    /*提交页面*/

	$(".t_bottom .tb div").hide();	

	$(".t_bottom .tb h1").click(function(){		

		$(this).siblings("div").slideDown();

		$(this).siblings("div").find("div").slideDown();

		$(this).parent(".tb").siblings(".tb").find("div").slideUp();
		
		$(this).find("img").attr("src","images/shang.png").parents(".tb").siblings(".tb").find("img").attr("src","images/xia.png");

	})

	$(".pinlei .liebiao1 dl .dd1").click(function(){
	  $(this).siblings("p").animate({
							opacity:"1"
                        }, 500)
                        .animate({
                            opacity:"1"

                        }, 1000)
						.animate({
                            opacity:"0",
                        }, 1000);
																	

	$(this).css({color:"#ccc",background:"rgba(102,102,102,0.8)"});
	$(this).text("已投票");
	
	//点击当前选中 再点击其它，当前取消选中
	
	$(this).parent("dl").siblings("dl").find(".dd1").css({color:"#b90304",background:"rgba(255,233,173,0.7)"});
	$(this).parent("dl").siblings("dl").find(".dd1").text("投票");
	
	});
	$("#pinlei").hide();//先隐藏id=pinlei
	
	
		
  
   })
   	
	
	//点击当前详情按钮，当前变为已投票
	
	$(".qmengban .mengban form>input").click(function(){
	  	var index5=$(this).parents("div").parent(".mengban").index();
		$(".pinlei .liebiao1 dl").eq(index5).find(".dd1").css({color:"#ccc",background:"rgba(102,102,102,0.8)"});
		$(".pinlei .liebiao1 dl").eq(index5).find(".dd1").text("已投票");
	})
	
   


//表单验证
/* $(function(){
    $(".name").blur(function () {
        var name = $(".name").val();
        if (name.length == 0) {
             alert("姓名不能为空");
        }
    });
})
 	
window.onload = function(){
//var inpEle = document.getElementById('call');
var myreg = /^1[3458]\d{9}$/;
$("#mobile").blur(function(){
var inpVal = this.value;
if (!myreg.exec(inpVal)){
alert('请输入正确的手机号')
return false
}else{
return true;

}
});
} */

/*欢迎页*/

setTimeout("initImg()",3*1000)/*控制时间*/

function initImg(){

$("#img1").css("display","none");

$("#pinlei").css("display","block");

}


/*首页*/

 $(".pinlei .liebiao dl").toggle(function(){

	  $(this).css("background","#2b241a");

	  $(this).find("dd").addClass("current");

	},function(){

	  $(this).css("background","none");	

	  $(this).find("dd").removeClass("current");

	})//效果
	
	 $(".pinlei .liebiao dl").toggle(function(){
		
		$(this).find("dd input:checkbox").attr("checked", true); 
		
		},function(){
			
			$(this).find("dd input:checkbox").attr("checked", false); 
			
						})//代码 
						
						
$(function(){
	$(".pinlei .tankuang a").click(function(){
	  $(this).parent(".tankuang").css("display","none");	
	})
})
			