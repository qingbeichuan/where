<?php
    require('data/init.php');
   
    // var_dump($lunbo);

    //discount
    $sql="select * from discount_two";
    $result=mysqli_query($conn,$sql);
    $discount=mysqli_fetch_all($result,1);
    //vacation
    $sql="select * from vacation";
    $result=mysqli_query($conn,$sql);
    $vacation=mysqli_fetch_all($result,1);
    //ticket
    $sql="select * from ticket";
    $result=mysqli_query($conn,$sql);
    $ticket=mysqli_fetch_all($result,1);
    //hotel
    $sql="select * from hotel";
    $result=mysqli_query($conn,$sql);
    $hotel=mysqli_fetch_all($result,1);
    //camel
    $sql="select * from camel";
    $result=mysqli_query($conn,$sql);
    $camel=mysqli_fetch_all($result,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>去哪儿</title>
    <link rel="stylesheet" href="css/where.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
    <header id="header">
        <!-- <div class="comwidth">
            <img*// src="img/logo.png" alt="">
            <div class="right header_right">
                <a href="" class="login">登录</a>
                <span>|</span>
                <a href="" class="register">免费注册</a>
                <span>|</span>
                <a href="">消息</a>
                <span>|</span>
                <a href="">查看订单</a>
                <span>|</span>
                <a href="">积分商城</a>
                <span>|</span>
                <a href="">联系客服</a>
            </div>
            <div class="nav">
                <li class="li">首页</li>
                <li class="li2">机票</li>
                <li class="li3">酒店</li>
                <li class="li4">团购</li>
                <li class="li5">度假</li>
                <li class="li6">门票</li>
                <li class="li7">火车票</li>
                <li class="li8">攻略</li>
                <li class="li9">公寓</li>
                <li class="li10">当地人</li>
                <li class="li11">车车</li>
                <li class="li12">汽车票</li>
                <li class="li13">海外</li>
                <li class="li14">保险</li>
                <li class="li15">金融</li>
                <li class="li16">会场</li>
                <div class="swim"></div>
            </div>
        </div> -->
    </header><!-- header over -->
    <section>
        <div class="comwidth banner">
            <div class="banner_left left">
                <div class="banner_left_ticket">
                    <li class="white">
                        <a href="">机票</a>
                        <div class="ticket_content">
                            <div class="tab">
                                <span class="left">国内机票</span>
                                <span class="left">国际/港澳台机票</span>
                                <div class="right">
                                    <span>出票状态查询</span>
                                    <span>退票改签</span>
                                </div>
                            </div>
                            <div class="sub_tab">
                                <div class="radio">
                                    <input type="radio" name="single" value="">
                                    <span>单程</span>
                                    <input type="radio" name="single" value="">
                                    <span>往返</span>
                                </div>
                                <div class="four_input">
                                    <input type="text">
                                    <input type="text">
                                    <input type="text">
                                    <input type="text">
                                </div>
                                <div class="flight">
                                    <span>可实时搜索 28万 条国内国际航线</span>
                                    <input type="button" value="立即搜索">
                                </div>
                                <div class="bg">
                                    <!-- <img src="img/flight_bar2.png" alt=""> -->
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href="">酒店</a></li>
                    <li><a href="">火车票</a></li>
                    <li><a href="">度假</a></li>
                    <li><a href="">门票</a></li>
                    <li><a href="">团购</a></li>
                    <li><a href="">车车</a></li>
                </div>
            </div>
            <div class="banner_right right">
                <div>
                    <img src="img/1.jpg" alt="">
                    <img src="img/2.jpg" alt="">
                    <img src="img/3.jpg" alt="">
                    <img src="img/4.jpg" alt="">
                </div>
                <ul>
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
        </div><!-- banner over-->
        <div class="comwidth ad">
            <img src="img/20161103_qunarhp_1200x90_8971.jpg" alt="">
        </div>
        <div class="comwidth today">
            <div class="today_left">
                <div class="today_tab">  
                    <span class="today_bg" id="today">今日特惠</span>
                    <span id="ticket">特惠门票</span>
                    <span id="hotel">特惠住宿</span>
                    <a href="" class="right">更多>></a>
                </div>
                <div class="today_discount">
                    <!-- 今日特惠 -->
                    <div class="today_content current">
                        <div class="discount_left_two left">
                            <!-- <div class="shanghai">
                                <div class="left">
                                    <img src="img/405f6d3962f582e9393daa8809.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>上海-三亚</p>
                                    <p>自由行</p>
                                    <aside>三亚五星红树林度假世界木棉酒店+往返接送机+每天2分早餐</aside>
                                    <b>&yen;1189</b>
                                </div>
                            </div>
                            <div class="shanghai">
                                <div class="left">
                                    <img src="img/379b9deada83f83f20f958e59c.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>上海-大阪</p>
                                    <p>机票</p>
                                    <aside>特惠机票！乐桃航空单机票含税</aside>
                                    <b>&yen;998</b>
                                </div>
                            </div> -->
                        </div> 
                        <div class="discount_right_four left">
                            <!-- <div class="sanya left">
                                <div class="first">
                                    <img src="img/180c7b8cb3275e81b1f0ae6833.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>上海-塞班岛&nbsp;&nbsp;6天&nbsp;&nbsp;自由行</p>
                                    <p>含税1550+黄金海滩酒店+接送机</p>
                                    <b>&yen;3680</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="first">
                                   <img src="img/85dfc48a650cd1c5959e4f73a0.jpg" alt=""> 
                                </div>
                                <div class="second">
                                    <p>上海-日韩&nbsp;&nbsp;5天&nbsp;&nbsp;游轮</p>
                                    <p>歌师达赛琳娜号！一价全含+岸上风光</p>
                                    <b>&yen;1885</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/7380dd1cfdb610422a5ee4cbb0.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>上海-泰国&nbsp;&nbsp;6天&nbsp;&nbsp;跟团游</p>
                                    <p>直飞往返+1日自由活动+五星酒店</p>
                                    <b>&yen;1530</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/d7cde91db60f70def2ea129cec.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>上海迪士尼&nbsp;&nbsp;自由行</p>
                                    <p>玩具总动员酒店花园景观房+乐园门票</p>
                                    <b>&yen;875</b>
                                </div>
                            </div> -->
                        </div>   
                    </div>
                    <!-- 特惠门票 -->
                    <div class="today_content">
                        <div class="discount_left_two left">
                            <!-- <div class="shanghai">
                                <div class="left">
                                    <img src="img/lingshan.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>灵山大佛</p>
                                    <p>畅游</p>
                                    <aside> 观释迦牟尼佛青铜立像，赏佛教胜景</aside>
                                    <b>&yen;9</b>
                                </div>
                            </div>
                            <div class="shanghai">
                                <div class="left">
                                    <img src="img/zhuozhen.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>拙政园</p>
                                    <p>意境</p>
                                    <aside>古园新貌，花木扶疏，楼台掩映，八方游人汇集</aside>
                                    <b>&yen;9</b>
                                </div>
                            </div> -->
                        </div>
                        <div class="discount_right_four left">
                            <!-- <div class="sanya left">
                                <div class="first">
                                    <img src="img/nanjing.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>南京总统府</p>
                                    <p>了解中国近代史，切记勿忘国耻</p>
                                    <b>&yen;3.6</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="first">
                                   <img src="img/huanqiu.jpg" alt=""> 
                                </div>
                                <div class="second">
                                    <p>环球冰雪圣诞村</p>
                                    <p>冰天雪地，快乐无限</p>
                                    <b>&yen;18</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/sanguo.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>无锡三国城</p>
                                    <p>品味东吴音韵，观看金戈铁马</p>
                                    <b>&yen;1</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/fuzi.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>夫子庙秦淮河</p>
                                    <p>一条长江路，半部民国史</p>
                                    <b>&yen;8</b>
                                </div>
                            </div> -->
                        </div>    
                    </div>
                    <!-- 特惠住宿 -->
                    <div class="today_content">
                        <div class="discount_left_two left">
                            <!-- <div class="shanghai">
                                <div class="left">
                                    <img src="img/xiamen.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>厦门-环岛路</p>
                                    <p>设计性客栈</p>
                                    <aside>“处处看到设计师的精心，喜欢的格调”</aside>
                                    <b>&yen;555</b>
                                </div>
                            </div>
                            <div class="shanghai">
                                <div class="left">
                                    <img src="img/lijiang.jpg" alt="">
                                </div>
                                <div class="right freedom">
                                    <p>丽江-四方街  </p>
                                    <p>中式阳光房</p>
                                    <aside>客栈的楼顶还可以看到玉龙雪山！</aside>
                                    <b>&yen;188</b>
                                </div>
                            </div> -->
                        </div>
                        <div class="discount_right_four left">
                            <!-- <div class="sanya left">
                                <div class="first">
                                    <img src="img/xian.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>西安-钟鼓楼   精品情侣房</p>
                                    <p>同价位最特别最有品质的酒店公寓</p>
                                    <b>&yen;368</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="first">
                                   <img src="img/xianguozhan.jpg" alt=""> 
                                </div>
                                <div class="second">
                                    <p>西安-国展   6人豪华套房</p>
                                    <p>同等价位里的顶尖客栈，有家的感觉</p>
                                    <b>&yen;185</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/tianjing.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>天津-塘沽站  极客美学公寓</p>
                                    <p>文艺范，连洗发液和沐浴液都是MUJI的</p>
                                    <b>&yen;150</b>
                                </div>
                            </div>
                            <div class="sanya left">
                                <div class="left">
                                    <img src="img/sanya.jpg" alt="">
                                </div>
                                <div class="second">
                                    <p>三亚-天涯海角  榻榻米海景</p>
                                    <p>是真的海景房，打开窗就是海</p>
                                    <b>&yen;205</b>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- 轮播 -->
            <div class="comwidth lunbo">
                <ul>
                    <!-- <li><img src="img/lunbo1.jpg" alt=""></li>
                    <li><img src="img/lunbo2.jpg" alt=""></li>
                    <li><img src="img/lunbo3.jpg" alt=""></li>
                    <li><img src="img/lunbo4.jpg" alt=""></li>
                    <li><img src="img/lunbo5.jpg" alt=""></li>
                    <li><img src="img/lunbo1.jpg" alt=""></li> -->
                    <?php
                         //lunbo
                        $sql="select * from lunbo";
                        $result=mysqli_query($conn,$sql);
                        $lunbo=mysqli_fetch_all($result,1);
                        forEach($lunbo as $i=>$v){
                            echo "<li><img src='$v[pic]'></li>";
                        }
                    ?>
                </ul>
                <!-- <div class="five">
                    <span class="active">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                </div> -->
            </div>
            <div class="comwidth ad">
                <img src="img/20160829_qunarhp_midban_global_944x90.jpg" alt="">
            </div>
            <!-- 当季热门度假 -->
            <div class="vacation">
                <span>当季热门度假</span>
            </div>
            <div class="travel_around">
                <div class="travel_around_left left">
                    <!-- <div>
                        <div class="travel_around_left_tab">
                            <div>周边游</div>
                        </div>
                        <div class="travel_around_left_tab_content">
                            <div>
                                <li><a href="">杭州</a></li> 
                                <li><a href="">上海迪士尼乐园</a></li>
                                <li><a href="">苏州</a></li>
                                <li><a href="">周庄</a></li>
                                <li><a href="">南京</a></li>
                                <li><a href="">西塘古镇</a></li>
                                <li><a href="">千岛湖</a></li>
                                <li><a href="">常州</a></li>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>国内游</div>
                        </div>
                        <div class="travel_around_left_tab_content">
                            <div>
                                <li><a href="">三亚 </a></li>
                                <li><a href="">丽江 </a></li>
                                <li><a href="">哈尔滨</a></li>
                                <li><a href="">长白山</a></li>
                                <li><a href="">厦门 </a></li>
                                <li><a href="">成都 </a></li>
                                <li><a href="">九寨沟</a></li>
                                <li><a href="">广州 </a></li>
                                <li><a href="">桂林</a></li>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>出境游</div>
                        </div>
                        <div class="travel_around_left_tab_content">
                            <div>
                                <li><a href="">泰国 </a></li>
                                <li><a href="">日本 </a></li>
                                <li><a href="">普吉岛</a></li>
                                <li><a href="">沙巴</a> </li>
                                <li><a href="">芽庄 </a></li>
                                <li><a href="">韩国 </a></li>
                                <li><a href="">济州岛</a> </li>
                                <li><a href="">巴厘岛 </a></li>
                                <li><a href="">马尔代夫</a></li>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>签证</div>
                        </div>
                        <div class="travel_around_left_tab_content">
                            <div>
                                <li><a href="">日本</a></li>
                                <li><a href="">泰国</a></li>
                                <li><a href="">韩国</a></li>
                                <li><a href="">美国</a><br></li>
                                <li><a href="">澳大利亚</a></li>
                                <li><a href="">南非</a></li>
                                <li><a href="">台湾</a><br></li>
                                <li><a href="">新加坡</a></li>
                                <li><a href="">马来西亚</a></li>
                            </div>
                        </div>
                    </div> -->
                    <?php
                        $sql="select * from vacation_left";
                        $result=mysqli_query($conn,$sql);
                        $discount=mysqli_fetch_all($result,1);
                        foreach ($discount as $key => $value) {
                            echo "
                                <div>
                                    <div class='travel_around_left_tab'>
                                        <div>$value[title]</div>
                                    </div>
                                    <div class='travel_around_left_tab_content'>
                                        <div>
                                            <li><a href=''>$value[destination1]</a></li>
                                            <li><a href=''>$value[destination2]</a></li>
                                            <li><a href=''>$value[destination3]</a></li>
                                            <li><a href=''>$value[destination4]</a><br></li>
                                            <li><a href=''>$value[destination5]</a></li>
                                            <li><a href=''>$value[destination6]</a></li>
                                            <li><a href=''>$value[destination7]</a><br></li>
                                            <li><a href=''>$value[destination8]</a></li>
                                            <li><a href=''>$value[destination9]</a></li>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                </div>
                <div class="travel_around_right right">
                    <!-- <div class="travel_around_right_three"> -->
                        <!-- <div class="right three">
                            <div>
                                <img src="img/lijiang2.jpg">
                                <div class="six-black">
                                    <h1>无锡-丽江</h1>
                                    <h5>6天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+11晚住宿</p>
                                <em>&yen;3880</em>
                            </div>
                        </div>
                        <div class="right three">
                            <div>
                                <img src="img/taiguo.jpg" alt="">
                                <div class="six-black">
                                    <h1>南京-泰国</h1>
                                    <h5>7天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+3晚住宿</p>
                                <em>&yen;2840</em>
                            </div>
                        </div>
                        <div class="right three">
                            <div>
                                <img src="img/yindu.jpg" alt="">
                                <div class="six-black">
                                    <h1>上海-印度</h1>
                                    <h5>7天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+4晚住宿</p>
                                <em>&yen;2540</em>
                            </div>
                        </div>
                        <div class="right three">
                            <div>
                                <img src="img/meiguo.jpg" alt="">
                                <div class="six-black">
                                    <h1>苏州-美国</h1>
                                    <h5>6天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+11晚住宿</p>
                                <em>&yen;2999</em>
                            </div>
                        </div>
                        <div class="right three">
                            <div>
                                <img src="img/deguo.jpg" alt="">
                                <div class="six-black">
                                    <h1>北京-德国</h1>
                                    <h5>6天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+3晚住宿</p>
                                <em>&yen;2340</em>
                            </div>
                        </div>
                        <div class="right three">
                            <div>
                                <img src="img/wuxisanya.jpg" alt="">
                                <div class="six-black">
                                    <h1>杭州-三亚</h1>
                                    <h5>6天跟团游</h5>
                                </div>
                            </div>
                            <div>
                                <p>含往返飞机票(含税)+4晚住宿</p>
                                <em>&yen;1990</em>
                            </div>
                        </div> -->
                        <?php
                            foreach ($vacation as $key => $value) {
                                echo "
                                    <div class='right three'>
                                        <div>
                                            <img src='$value[pic]'>
                                            <div class='six-black'>
                                                <h1>$value[flight]</h1>
                                                <h5>$value[days]</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <p>$value[depict]</p>
                                            <em>$value[price]</em>
                                        </div>
                                    </div>
                                ";
                            };
                        ?>
                    <!-- </div> -->
                </div>
            </div>
            <!-- 当季景点门票 -->
            <div class="vacation">
                <span>当季景点门票</span>
            </div>
            <div class="travel_around">
                <div class="travel_around_left left">
                    <div>
                        <div class="travel_around_left_tab">
                            <div>热门景点</div>
                        </div>
                        <div class="travel_around_left_tab_content2">
                            <div>
                               <!--  <li><a href="">茅山</a></li>
                                <li><a href="">天目湖御水温泉</a></li>
                                <li><a href="">苏州糖果乐园</a></li>
                                <li><a href="">宜兴竹海</a><br></li>
                                <li><a href="">常州淹城野生动物园</a></li>
                                <li><a href="">灵山小镇拈花湾</a><br></li>
                                <li><a href="">苏州乐园</a></li>
                                <li><a href="">南京海底世界</a></li> -->
                                <?php
                                    $sql="select * from ticket_left where title='热门景点'";
                                    $result=mysqli_query($conn,$sql);
                                    $ticket_left=mysqli_fetch_all($result,1);
                                    foreach ($ticket_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>海外目的地</div>
                        </div>
                        <div class="travel_around_left_tab_content2">
                            <div>
                               <!--  <li><a href="">芭堤雅</a></li>
                                <li><a href="">普吉岛</a></li>
                                <li><a href="">巴厘岛</a></li>
                                <li><a href="">曼谷</a></li>
                                <li><a href="">新加坡</a></li>
                                <li><a href="">日本</a></li>  
                                <li><a href="">奥地利</a></li>
                                <li><a href="">奥克兰</a></li>
                                <li><a href="">首尔</a></li>
                                <li><a href="">意大利</a></li>
                                <li><a href="">芬兰</a></li>
                                <li><a href="">澳大利亚</a></li>
                                <li><a href="">马来西亚</a></li>
                                <li><a href="">埃及</a></li> -->
                                <?php
                                    $sql="select * from ticket_left where title='海外目的地'";
                                    $result=mysqli_query($conn,$sql);
                                    $ticket_left=mysqli_fetch_all($result,1);
                                    foreach ($ticket_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                            </div>  
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>国内目的地</div>
                        </div>
                        <div class="travel_around_left_tab_content2">
                            <div>
                                <!-- <li><a href="">武汉</a></li>
                                <li><a href="">北京</a></li>
                                <li><a href="">上海</a></li>
                                <li><a href="">三亚</a></li>
                                <li><a href="">成都</a></li>
                                <li><a href="">厦门</a></li>
                                <li><a href="">广州</a></li>
                                <li><a href="">深圳</a></li>
                                <li><a href="">杭州</a></li>
                                <li><a href="">大连</a></li>
                                <li><a href="">桂林</a></li>
                                <li><a href="">重庆</a></li>
                                <li><a href="">青岛</a></li>
                                <li><a href="">苏州</a></li>
                                <li><a href="">南京</a></li>
                                <li><a href="">丽江</a></li>
                                <li><a href="">天津</a></li>
                                <li><a href="">武汉</a></li>
                                <li><a href="">张家界</a></li> -->
                                 <?php
                                    $sql="select * from ticket_left where title='国内目的地'";
                                    $result=mysqli_query($conn,$sql);
                                    $ticket_left=mysqli_fetch_all($result,1);
                                    foreach ($ticket_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="travel_around_right right">
                    <div class="left big_adv">
                        <div>
                            <img src="img/dishini.jpg" alt="">
                            <img src="img/9d33e939bf158202.jpg" alt="">
                        </div>
                    </div>
                   <!--  <div class="right three">
                        <div>
                            <img src="img/zhouzhuang.jpg" alt="">
                        </div>
                        <div>
                            <p>周庄</p>
                            <p>古香古色，品美食寻才子觅佳人</p>
                            <em>&yen;38</em>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/zhuozhen.jpg" alt="">
                        </div>
                        <div>
                            <p>拙政园</p>
                            <p>庭院错落，花木为胜</p>
                            <em>&yen;12</em>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/lingshan.jpg" alt="">
                        </div>
                        <div>
                            <p>灵山大佛</p>
                            <p>观释迦牟尼佛青铜立像，赏佛教胜景</p>
                            <em>&yen;28</em>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/changzhou.jpg" alt="">
                        </div>
                        <div>
                            <p>常州恐龙游乐园</p>
                            <p>以恐龙为主题的综合性游乐园</p>
                            <em>&yen;15</em>
                        </div>
                    </div> -->
                    <?php
                        foreach ($ticket as $key => $value) {
                            echo "
                                <div class='right three'>
                                    <div>
                                        <img src='$value[pic]'>
                                    </div>
                                    <div>
                                        <p>$value[tname]</p>
                                        <p>$value[depict]</p>
                                        <em>$value[price]</em>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                </div>
            </div>
            <!-- 超值酒店团购推荐 -->
            <div class="vacation">
                <span>超值酒店团购推荐</span>
            </div>
            <div class="travel_around">
                <div class="travel_around_left left">
                    <div>
                        <div class="travel_around_left_tab">
                            <div>酒店价格</div>
                        </div>
                        <div class="hotel_price">
                            <div>
                                <!-- <li><a href="">¥50以下</a></li>
                                <li><a href="">¥50-¥100</a></li>
                                <li><a href="">¥100-¥150</a></li>
                                <li><a href="">¥150-¥200</a></li>
                                <li><a href="">¥200-¥500</a></li>
                                <li><a href="">¥500以上</a></li> -->
                                <?php
                                    $sql="select * from hotel_left where title='酒店价格'";
                                    $result=mysqli_query($conn,$sql);
                                    $hotel_left=mysqli_fetch_all($result,1);
                                    foreach ($hotel_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                             </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>酒店品牌</div>
                        </div>
                        <div class="hotel_price">
                            <div>
                                <!-- <li><a href="">易佰</a></li>
                                <li><a href="">布丁</a></li>
                                <li><a href="">99连锁</a></li>
                                <li><a href="">锦江之星</a></li>
                                <li><a href="">维也纳</a></li>
                                <li><a href="">格林豪泰</a></li>
                                <li><a href="">易佰</a></li>
                                <li><a href="">尚客优</a></li>
                                <li><a href="">速8</a></li>
                                <li><a href="">百时快捷</a></li>
                                <li><a href="">清沐</a></li>
                                <li><a href="">都市118</a></li>
                                <li><a href="">星程</a></li>
                                <li><a href="">锦江酒店</a></li> -->
                                <?php
                                    $sql="select * from hotel_left where title='酒店品牌'";
                                    $result=mysqli_query($conn,$sql);
                                    $hotel_left=mysqli_fetch_all($result,1);
                                    foreach ($hotel_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                             </div>
                        </div>
                    </div>
                    <div>
                        <div class="travel_around_left_tab">
                            <div>酒店分类</div>
                        </div>
                        <div class="hotel_price">
                            <div>
                                <!-- <li><a href="">经济型</a></li>
                                <li><a href="">主题酒店</a></li>
                                <li><a href="">高档豪华</a></li>
                                <li><a href="">连锁品牌</a></li>
                                <li><a href="">舒适型</a></li>
                                <li><a href="">度假酒店</a></li>
                                <li><a href="">公寓型酒店</a></li>
                                <li><a href="">青年旅社</a></li> -->
                                <?php
                                    $sql="select * from hotel_left where title='酒店分类'";
                                    $result=mysqli_query($conn,$sql);
                                    $hotel_left=mysqli_fetch_all($result,1);
                                    foreach ($hotel_left as $key => $value) {
                                        echo "
                                              <li><a href=''>$value[destination]</a></li>
                                         ";
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <div class="travel_around_right right">
                    <div class="left big_adv">
                        <div>
                            <img src="img/hotel.jpg" alt="">
                            <img src="img/62602b50f169b6.jpg" alt="">
                        </div>
                    </div>
                   <!--  <div class="right three">
                        <div>
                            <img src="img/hotel-1.jpg" alt="">
                        </div>
                        <div class="hotel_depict">
                            <div>无锡市滨湖区夏家边家园B区52号</div>
                            <div>经济型</div>
                            <em>&yen;180</em><i>起</i>
                            <span class="right"><small>265</small>人已购买</span>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/hotel-2.jpg" alt="">
                        </div>
                        <div class="hotel_depict">
                            <div>尚客优快捷酒店无锡锡山区皮革城店</div>
                            <div>经济型</div>
                            <em>&yen;120</em><i>起</i>
                            <span class="right"><small>365</small>人已购买</span>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/hotel-3.jpg" alt="">
                        </div>
                        <div class="hotel_depict">
                            <div>锦江之星风尚无锡东亭地铁站店</div>
                            <div>经济型</div>
                            <em>&yen;115</em><i>起</i>
                            <span class="right"><small>288</small>人已购买</span>
                        </div>
                    </div>
                    <div class="right three">
                        <div>
                            <img src="img/hotel-4.jpg" alt="">
                        </div>
                        <div class="hotel_depict">
                            <div>无锡星程五爱广场酒店</div>
                            <div>经济型</div>
                            <em>&yen;165</em><i>起</i>
                            <span class="right"><small>125</small>人已购买</span>
                        </div>
                    </div> -->
                    <?php
                        foreach ($hotel as $key => $value) {
                            echo "
                                <div class='right three'>
                                    <div>
                                        <img src='$value[pic]'>
                                    </div>
                                    <div class='hotel_depict'>
                                        <div>$value[addr]</div>
                                        <div>$value[type]</div>
                                        <em>$value[price]</em><i>起</i>
                                        <span class='right'><small>$value[count]</small>人已购买</span>
                                    </div>
                                </div>
                            ";
                        }
                    ?>
                </div>
            </div>
            <!-- 骆驼书 -->
            <div class="vacation">
                <span>骆驼书</span>
            </div> 
            <div class="camel">
                <article class="left">
                    <img src="img/front-theme.jpg" alt="">
                </article>
                <!-- <div class="left">
                    <img src="img/camel-1.jpg" alt="">
                    <div class="before-ground">
                        <div>
                            <p>舌尖上的韩国(南部篇)</p>
                            <p>Taste of Korea</p>
                            <p>作者：康怡</p>
                            <p>更新时间：2016-2-12</p>
                            <p><a href="">下载</a></p>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="img/camel-2.jpg" alt="">
                    <div class="before-ground">
                        <div>
                            <p>幸福民宿 中、南台湾</p>
                            <p>Western Taiwan</p>
                            <p>作者：董事长</p>
                            <p>更新时间: 2014-07-21</p>
                            <p><a href="">下载</a></p>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <img src="img/camel-3.jpg" alt="">
                    <div class="before-ground">
                        <div>
                            <p>首尔购物</p>
                            <p>Shopping in Seoul</p>
                            <p>作者：修菱 冷钢</p>
                            <p>更新时间：2017-12-9</p>
                            <p><a href="">下载</a></p>
                        </div>
                    </div>
                </div> -->
                <?php
                    foreach ($camel as $key => $value) {
                        echo "
                            <div class='left'>
                                <img src='$value[pic]'>
                                <div class='before-ground'>
                                    <div>
                                        <p>$value[cname]</p>
                                        <p>$value[english]</p>
                                        <p>$value[author]</p>
                                        <p>$value[ctime]</p>
                                        <p><a href=''>下载</a></p>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
            <div class="book">
                <div class="book_list left">
                    <div class="book_title">
                        热门出境骆驼书
                    </div>
                    <div class="book_content">
                        <li><a href=""><em>日本花见:</em>烂漫春光，赏尽樱吹雪</a></li>
                        <li><a href=""><em>素可泰:</em>承载泰国寺庙文化的王朝古都</a></li>
                        <li><a href=""><em>芭提雅:</em>风光旖旎的东方夏威夷</a></li>
                        <li><a href=""><em>胡志明市:</em>湄公河上风情浪漫的明珠</a></li>
                    </div>
                </div>
                <div class="book_list left">
                    <div class="book_title">
                        热门海岛骆驼书
                    </div>
                    <div class="book_content">
                        <li><a href=""><em>甲米:</em>宛如天堂秘境的热带半岛</a></li>
                        <li><a href=""><em>苏梅岛:</em>拒绝好莱坞选景的纯天然海岛</a></li>
                        <li><a href=""><em>巴厘岛:</em>极具人文热带风情的度假天堂</a></li>
                        <li><a href=""><em>毛里求斯:</em>印度洋的珍珠，欧洲的后花园</a></li>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- section over --> 
    <div class="app">
        <img src="img/app_footer_v4.jpg" alt="">
    </div>
    <footer id="footer">
        <!-- <div class="comwidth">
            <div class="dujia">
                <span>度假</span>
                <a href="">云南旅游</a> |
                <a href="">乌镇旅游</a> |
                <a href="">婺源旅游</a> |
                <a href="">张家界旅游</a>|
                <a href="">苏州旅游</a> |
                <a href="">天津旅游</a> |
                <a href="">三亚旅游</a> |
                <a href="">台湾旅游</a> |
                <a href="">北京旅游</a> |
                <a href="">韩国旅游</a> |
                <a href="">青岛旅游</a> |
                <a href="">武汉旅游</a> |
                <a href="">南京旅游</a> |
                <a href="">香港旅游</a> |
                <a href="">巴厘岛旅游</a> |
                <a href="">西塘旅游</a> | 
                <a href="">厦门旅游</a> | 
                <a href="">杭州旅游</a> | 
                <a href=""E6%B2%9F">九寨沟旅游</a> | 
                <a href="">西藏旅游</a> | 
                <a href="">成都旅游</a> | 
                <a href="">上海旅游</a> | 
                <a href="">西安旅游</a> | 
                <a href="">千岛湖旅游</a> | 
                <a href="">鼓浪屿旅游</a> | 
                <a href="">普吉岛旅游</a> | 
            </div>
            <div class="dujia">
                <span>攻略</span>
                <a href="">厦门旅游攻略</a> |
                <a href="">北京旅游攻略</a> | 
                <a href="">九寨沟旅游攻略</a> | 
                <a href="">千岛湖旅游攻略</a> | 
                <a href="">韩国旅游攻略</a> | 
                <a href="">青岛旅游攻略</a> | 
                <a href="">台湾旅游攻略</a> | 
                <a href="">普吉岛旅游攻略</a> | 
                <a href="">乌镇旅游攻略</a> | 
                <a href="">婺源旅游攻略</a> | 
                <a href="">苏州旅游攻略</a> | 
                <a href="">南京旅游攻略</a> | 
                <a href="">西藏旅游攻略</a> | 
                <a href="">三亚旅游攻略</a> | 
                <a href="">上海旅游攻略</a> | 
                <a href="">西塘旅游攻略</a> | 
                <a href="">张家界旅游攻略</a> | 
                <a href="">成都旅游攻略</a> | 
                <a href="">武汉旅游攻略</a> | 
                <a href="">巴厘岛旅游攻略</a> | 
                <a href="">香港旅游攻略</a> | 
                <a href="">杭州旅游攻略</a> | 
                <a href="">云南旅游攻略</a> | 
                <a href="">天津旅游攻略</a> | 
                <a href="">鼓浪屿旅游攻略</a> | 
                <a href="">西安旅游攻略</a> | 
            </div>
            <hr>
            <div class="about">
                <a href="">关于Qunar.com</a>|
                <a href="">投资者关系</a>|
                <a href="">酒店加盟</a>|
                <a href="">业务合作</a>|
                <a href="">加入我们</a>|
                <a href="">"严重违规失信"专项整治举报</a>|
                <a href="">安全中心</a>|
                <a href="">星骆驼公益</a>|
                <a href="">About Us</a>|
            </div>
            <div class="about">Copyright ©2016 Qunar.com京公网安备110108901530京ICP备05021087号营业执照信息保险经纪资质(京)-非经营性-2016-0110去哪儿网客服电话10101234</div>
            <div class="about">
                <img src="img/footer_v10.png" alt="">
            </div>
        </div> -->
    </footer> <!-- footer over --> 
    <!-- login -->
    <div id="login">
        <div class="box">
            <b class="fa fa-times right" id="times"></b>
            <div class="content">
                <div>
                    <span></span>
                    <h1>Welcome</h1>
                    <span class="gradient"></span>
                </div>
                <p class="alert">请输入用户名和密码</p>
                <form id="login-form">
                    <input type="text" placeholder="请输入用户名" name="uname">
                    <input type="password" placeholder="请输入密码" name="upwd">
                    <input type="button" value="提交登录信息" id="bt-login">
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/where.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>