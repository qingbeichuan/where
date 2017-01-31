// $(function(){
// 	var timer=null;
// 	var liWidth=$(".lunbo ul>li").width();
// 	// console.log(liWidth);
// 	var left=parseFloat($(".lunbo ul").css('left'));
	
// 	function move(){
// 		left-=15;
// 		console.log(left)
// 		$(".lunbo ul").css('left',left+'px');
// 		if(left<=-(5*liWidth)){
// 			// clearInterval(timer)
// 			$(".lunbo ul").css('left',0+'px');
// 		}else if(left%liWidth==0){
// 				clearInterval(timer);
// 				setTimeout(function(){
// 					timer=setInterval(move,8)
// 				},2000)
// 			}
		
		
// 	}

// 	function m(){
// 		timer=setInterval(move,8)
// 	}
// 	setTimeout(m,2000)
// })
/*****************************************************/
$(function(){
	//右上角轮播
	var now=-1;
	$('.banner_right li').click(function(){
		var index=$(this).index();
		$(".banner_right img").eq(index).fadeIn(1000).siblings().fadeOut(1000)
	})
	timer2=setInterval(function(){
			now++;
			if(now>$(".banner_right img").length-1){
				now=0;
			}
			$('.banner_right li').eq(now).trigger('click');
		},4000)

	//图片轮播
	var timer=null;
	var ul=$(".lunbo ul")[0];
	var liWidth=$(".lunbo>ul>li").width();
	console.log(liWidth)
	function move(){
		if(offset%945==0){
				clearInterval(timer);
				setTimeout(scroll,2000)
			}else{
				offset-=15;
				ul.style.left=offset+'px';
		}
		if(offset==-5*945){
			ul.style.left=0+'px';
		}
	}
	function scroll(){
		offset=parseInt(ul.offsetLeft-15);
		ul.style.left=offset+'px';
		timer=setInterval(move,8)
	}
	var timer3=setTimeout(scroll,2000)
	// $('.five>span').click(function(){
	// 	clearTimeout(timer3)
	// 	var i=$(this).index();
	// 	$(".lunbo ul").stop(true).animate({
	// 		'left':-i*liWidth+'px'
	// 	})
	// })
	// $(".five>span").mouseover(function(){
	// 	clearInterval(timer)
	// })
	$('.today_tab span').mouseover(function(){
		$(this).addClass('today_bg').siblings().removeClass('today_bg')
		var index=$(this).index()
		$('.today_discount .today_content').eq(index).fadeIn().siblings().fadeOut()
	})
})
	