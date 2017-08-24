<?php 
$reIP=$_SERVER["REMOTE_ADDR"];
?>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    var nonstr    = '<?php echo $nonceStr?>';
    var timestamp = '<?php echo $timestamp?>';
    var sign      = '<?php echo $signature?>';
    var appId     = '<?php echo $appId?>';
	var ip        = '<?php echo $reIP?>';
    wx.config({
        debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
        appId: appId, // 必填，公众号的唯一标识
        timestamp: timestamp, // 必填，生成签名的时间戳
        nonceStr: nonstr, // 必填，生成签名的随机串
        signature: sign,// 必填，签名，见附录1
          jsApiList: ['onMenuShareTimeline',
            'onMenuShareAppMessage'] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2 // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
    });

    wx.ready(function(){


        wx.onMenuShareTimeline({
            title: '我参与了红顶奖投票，千元回馈等你赢取', // 分享标题
            link: 'http://think.weiyingjia.cn/hongding', // 分享链接
            imgUrl: 'http://think.weiyingjia.cn/hongdingjiang/logo.jpg', // 分享图标
            success: function (data) {
                alert("分享成功")
                
            },
            cancel: function () {
                alert("已取消分享")
            }
        });
        wx.onMenuShareAppMessage({
            title: '红顶奖产品评选', // 分享标题
            desc: '我参与了红顶奖投票，千元回馈等你赢取', // 分享描述
            link: 'http://think.weiyingjia.cn/hongding', // 分享链接
            imgUrl: 'http://think.weiyingjia.cn/hongdingjiang/logo.jpg', // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                alert("分享成功")
            },
            cancel : function () {
                alert("已取消分享")
            }

        });
		if(ip == '218.241.169.114'){
			wx.error(function(res){
					alert(res.errMsg)
		  });
		}
    })


</script>