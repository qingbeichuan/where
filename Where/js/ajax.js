$(function(){
	$('#header').load('data/header.php');
	$('#footer').load('data/footer.php');
})    
//登录按钮
$('html').on('click','.login',function(e){
	e.preventDefault()
	$('#login').fadeIn();
	$('.box').addClass('animated flip')
	setTimeout(function(){
		$('.box').removeClass('flip');
	}, 1000);
})
//关闭按钮
$('html').on('click','#times',function(){
	$('#login').fadeOut(1000);
	$('.box').removeClass('flip').addClass('zoomOutUp')
	setTimeout(function(){
		$('#login-form input:lt(2)').val('')
		$('#login .box p').css({'borderColor':'green','color':'green'}).html('请输入用户名和密码')
		$('.box').removeClass('zoomOutUp')
	},1000)
	
})
//提交按钮
function repeat_tada(){
	$('#login .box p').css({'borderColor':'red','color':'red'})
		$('.box').removeClass('flip').addClass('tada')
		setTimeout(function(){
	        $('.box').removeClass('tada');
	    }, 1000);
}
$('#bt-login').click(function(){
	var data=$('#login-form').serialize();
	console.log(data)
	if($('#login-form [type="text"],#login-form [type="password"]').val()==""){
		repeat_tada()
	}else{
		$.ajax({
			type:'get',
			url:'data/login.php',
			data:data,
			success:function(json){
				console.log(json.code)
				if(json.code==103) {
					$('.alert').html(json.msg)
					$('#login').fadeOut(1000);
					$('.box').addClass('rotateOut')
					setTimeout(function(){
				        $('.box').removeClass('rotateOut');
				    }, 1000);
				}else if(json.code==102){
					$('.alert').html(json.msg)
					repeat_tada()
				}
			}
		})
	}
	
	
	
})
//异步加载数据=>discount_left_two
var discount_left_two=$('.today_discount .discount_left_two')
$(function(){
	$.ajax({
		type:'get',
		url:'data/load-1.php?',
		success:function(json){
			var html=[];
			$.each(json,function(i,v){                         
				html[i]=`
					<div class="shanghai">
	                    <div class="left">
	                        <img src="${v.pic}">
	                    </div>
	                    <div class="right freedom">
	                        <p>${v.flight}</p>
	                        <p>${v.freedom}</p>
	                        <aside>${v.depict}</aside>
	                        <b>${v.price}</b>
	                    </div>
	                </div>
				`;
			})
			for(var i=0;i<html.length;i++){
				if(i<2){
					discount_left_two.eq(0).append(html[i]);
				}else if(i<4){
					discount_left_two.eq(1).append(html[i]);
				}else if(i<6){
					discount_left_two.eq(2).append(html[i]);
				}
			}
			
				// $('.today_discount .discount_left_two').each(function(key,val){
				// 	for(var i=0;i<html.length;i++){
				// 		// console.log(key)
				// 		if(key==0&&i<2){
				// 			$(this).append(html[i]);
				// 		}else if(key==1&&i<4){
				// 			$(this).append(html[i]);
				// 		}else if(key==2&&i<6){
				// 			$(this).append(html[i]);
				// 		}
				// 	}
				// })
				
			
		}	
	})
})

//异步加载数据=>discount_left_four
var discount_right_four=$('.today_discount .discount_right_four')
$(function(){
	$.ajax({
		type:'get',
		url:'data/load-2.php',
		success:function(json){
			var html=[];
			$.each(json,function(i,v){                         
				html[i]=`
					<div class="sanya left">
                        <div class="first">
                           <img src="${v.pic}" alt=""> 
                        </div>
                        <div class="second">
                            <p>${v.fname}</p>
                            <p>${v.depict}</p>
                            <b>${v.price}</b>
                        </div>
                    </div>
				`;
			})
			for(var i=0;i<html.length;i++){
				if(i<4){
					discount_right_four.eq(0).append(html[i]);
				}else if(i<8){
					discount_right_four.eq(1).append(html[i]);
				}else if(i<12){
					discount_right_four.eq(2).append(html[i]);
				}
			}
		}	
	})
})
