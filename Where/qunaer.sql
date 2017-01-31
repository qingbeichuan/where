set names utf8;
drop database if exists qunaer;
create database qunaer charset=utf8;
use qunaer;
create table user(
	uid int primary key auto_increment,
	uname varchar(32),
	upwd varchar(32)
);
insert into user values
(null,'beichuan','123456'),
(null,'tom','123456');

#discount
create table discount_two(
	did int primary key auto_increment,
	pic varchar(128),
	flight varchar(25),
	freedom varchar(15),
	depict varchar(25),
	price varchar(24),
	dis_type varchar(22)
);
insert into discount_two values
(null,'img/405f6d3962f582e9393daa8809.jpg','上海-三亚','自由行','三亚五星红树林度假世界木棉酒店+往返接送机+每天2分早餐','&yen;1189','today'),
(null,'img/379b9deada83f83f20f958e59c.jpg','上海-大阪','自由行','特惠机票！乐桃航空单机票含税','&yen;989','today'),
(null,'img/lingshan.jpg','灵山大佛','畅游',' 观释迦牟尼佛青铜立像，赏佛教胜景','&yen;9','ticket'),
(null,'img/zhuozhen.jpg','拙政园','意境','古园新貌，花木扶疏，楼台掩映，八方游人汇集','&yen;11','ticket'),
(null,'img/xiamen.jpg','厦门-环岛路','设计性客栈','处处看到设计师的精心，喜欢的格调','&yen;222','hotel'),
(null,'img/lijiang.jpg','丽江-四方街','中式阳光房','客栈的楼顶还可以看到玉龙雪山！','&yen;118','hotel');

create table discount_four(
	fid int primary key auto_increment,
	pic varchar(128),
	fname varchar(25),
	depict varchar(25),
	price varchar(24)
);
insert into discount_four values
(null,'img/180c7b8cb3275e81b1f0ae6833.jpg','上海-塞班岛&nbsp;&nbsp;6天&nbsp;&nbsp;自由行','含税1550+黄金海滩酒店+接送机','&yen;3680'),
(null,'img/85dfc48a650cd1c5959e4f73a0.jpg','上海-日韩&nbsp;&nbsp;5天&nbsp;&nbsp;游轮','歌师达赛琳娜号！一价全含+岸上风光','&yen;1885'),
(null,'img/7380dd1cfdb610422a5ee4cbb0.jpg','上海-泰国&nbsp;&nbsp;6天&nbsp;&nbsp;跟团游','直飞往返+1日自由活动+五星酒店','&yen;1530'),
(null,'img/d7cde91db60f70def2ea129cec.jpg','上海迪士尼&nbsp;&nbsp;自由行','玩具总动员酒店花园景观房+乐园门票','&yen;870'),
(null,'img/nanjing.jpg','南京总统府','了解中国近代史，切记勿忘国耻','&yen;22'),
(null,'img/huanqiu.jpg','环球冰雪圣诞村','冰天雪地，快乐无限','&yen;15'),
(null,'img/fuzi.jpg','夫子庙秦淮河','一条长江路，半部民国史','&yen;9'),
(null,'img/sanguo.jpg','无锡三国城','品味东吴音韵，观看金戈铁马','&yen;5'),
(null,'img/xian.jpg','西安-钟鼓楼   精品情侣房','同价位最特别最有品质的酒店公寓','&yen;233'),
(null,'img/xianguozhan.jpg','西安-国展   6人豪华套房','同等价位里的顶尖客栈，有家的感觉','&yen;185'),
(null,'img/tianjing.jpg','天津-塘沽站  极客美学公寓','文艺范，连洗发液和沐浴液都是MUJI的','&yen;150'),
(null,'img/sanya.jpg','三亚-天涯海角  榻榻米海景','是真的海景房，打开窗就是海','&yen;205');

#lunbo
create table lunbo(
	lid int primary key auto_increment,
	pic varchar(64),
	url varchar(256)
);
insert into lunbo values
(null,'img/lunbo1.jpg','1.php'),
(null,'img/lunbo2.jpg','2.php'),
(null,'img/lunbo3.jpg','3.php'),
(null,'img/lunbo4.jpg','4.php'),
(null,'img/lunbo5.jpg','5.php'),
(null,'img/lunbo1.jpg','1.php');

#当季热门度假
create table vacation_left(
	title varchar(22),
	destination1 varchar(25),
	destination2 varchar(25),
	destination3 varchar(25),
	destination4 varchar(25),
	destination5 varchar(25),
	destination6 varchar(25),
	destination7 varchar(25),
	destination8 varchar(25),
	destination9 varchar(25)
);
insert into vacation_left values
('周边游','杭州','上海迪士尼乐园','苏州','周庄','南京','西塘古镇','千岛湖','常州',''),
('国内游','三亚','丽江','哈尔滨','长白山','厦门','成都','九寨沟','广州','桂林'),
('出境游','泰国','日本','普吉岛','沙巴','芽庄','韩国','济州岛','巴厘岛','马尔代夫'),
('签证','日本','泰国','韩国','美国','澳大利亚','南非','台湾','新加坡','马来西亚');

create table vacation(
	lid int primary key auto_increment,
	pic varchar(64),
	depict varchar(256),
	price varchar(20),
	flight varchar(26),
	days varchar(12)
);
insert into vacation values
(null,'img/yindu.jpg','含往返飞机票(含税)+4晚住宿','&yen;2540','上海-印度','7天跟团游'),
(null,'img/taiguo.jpg','含往返飞机票(含税)+5晚住宿','&yen;3510','上海-泰国','6天跟团游'),
(null,'img/lijiang2.jpg','含往返飞机票(含税)+7晚住宿','&yen;2220','无锡-丽江','7天跟团游'),
(null,'img/wuxisanya.jpg','含往返飞机票(含税)+6晚住宿','&yen;2960','无锡-三亚','7天跟团游'),
(null,'img/deguo.jpg','含往返飞机票(含税)+5晚住宿','&yen;2550','上海-德国','6天跟团游'),
(null,'img/meiguo.jpg','含往返飞机票(含税)+6晚住宿','&yen;2690','杭州-美国','7天跟团游');

#当季景点门票
create table ticket_left(
	title varchar(66),
	destination varchar(44)
);
insert into ticket_left values
('热门景点','茅山'),
('热门景点','天目湖御水温泉'),
('热门景点','苏州糖果乐园'),
('热门景点','宜兴竹海'),
('热门景点','常州淹城野生动物园'),
('热门景点','灵山小镇拈花湾'),
('热门景点','苏州乐园'),
('热门景点','南京海底世界'),
('海外目的地','芭堤雅'),
('海外目的地','普吉岛'),
('海外目的地','巴厘岛'),
('海外目的地','曼谷'),
('海外目的地','新加坡'),
('海外目的地','日本'),
('海外目的地','奥地利'),
('海外目的地','奥克兰'),
('海外目的地','首尔'),
('海外目的地','意大利'),
('海外目的地','芬兰'),
('海外目的地','澳大利亚'),
('海外目的地','马来西亚'),
('海外目的地','埃及'),
('国内目的地','武汉'),
('国内目的地','北京'),
('国内目的地','上海'),
('国内目的地','三亚'),
('国内目的地','成都'),
('国内目的地','厦门'),
('国内目的地','广州'),
('国内目的地','深圳'),
('国内目的地','杭州'),
('国内目的地','大连'),
('国内目的地','桂林'),
('国内目的地','重庆'),
('国内目的地','青岛'),
('国内目的地','苏州'),
('国内目的地','南京'),
('国内目的地','丽江'),
('国内目的地','天津'),
('国内目的地','武汉'),
('国内目的地','张家界');


create table ticket(
	tid int primary key auto_increment,
	pic varchar(64),
	tname varchar(25),
	depict varchar(256),
	price varchar(20)
);
insert into ticket values
(null,'img/zhouzhuang.jpg','周庄','古香古色，品美食寻才子觅佳人','&yen;5'),
(null,'img/changzhou.jpg','常州恐龙游乐园','以恐龙为主题的综合性游乐园','&yen;15'),
(null,'img/lingshan.jpg','灵山大佛','观释迦牟尼佛青铜立像，赏佛教胜景','&yen;28'),
(null,'img/zhuozhen.jpg','拙政园','庭院错落，花木为胜','&yen;11');

#超值酒店团购推荐
create table hotel_left(
	title varchar(66),
	destination varchar(44)
);
insert into hotel_left values
('酒店价格','¥50以下'),
('酒店价格','¥50-¥100'),
('酒店价格','¥100-¥150'),
('酒店价格','¥150-¥200'),
('酒店价格','¥200-¥500'),
('酒店价格','¥500以上'),
('酒店品牌','易佰'),
('酒店品牌','布丁'),
('酒店品牌','99连锁'),
('酒店品牌','锦江之星'),
('酒店品牌','维也纳'),
('酒店品牌','格林豪泰'),
('酒店品牌','易佰'),
('酒店品牌','尚客优'),
('酒店品牌','速8'),
('酒店品牌','百时快捷'),
('酒店品牌','清沐'),
('酒店品牌','都市118'),
('酒店品牌','星程'),
('酒店品牌','锦江酒店'),
('酒店分类','经济型'),
('酒店分类','主题酒店'),
('酒店分类','高档豪华'),
('酒店分类','连锁品牌'),
('酒店分类','舒适型'),
('酒店分类','度假酒店'),
('酒店分类','公寓型酒店'),
('酒店分类','青年旅社');


create table hotel(
	hid int primary key auto_increment,
	pic varchar(64),
	addr varchar(25),
	type varchar(25),
	price varchar(20),
	count varchar(10)
);
insert into hotel values
(null,'img/hotel-1.jpg','无锡市滨湖区夏家边家园B区52号','经济型','&yen;150','265'),
(null,'img/hotel-2.jpg','尚客优快捷酒店无锡锡山区皮革城店','经济型','&yen;120','225'),
(null,'img/hotel-3.jpg','锦江之星风尚无锡东亭地铁站店','经济型','&yen;125','202'),
(null,'img/hotel-4.jpg','无锡星程五爱广场酒店','经济型','&yen;180','125');

create table camel(
	cid int primary key auto_increment,
	pic varchar(222),
	cname varchar(64),
	english varchar(25),
	author varchar(25),
	ctime varchar(20)
);
insert into camel values
(null,'img/camel-1.jpg','舌尖上的韩国(南部篇)','Taste of Korea','作者：康怡','更新时间：2016-2-12'),
(null,'img/camel-2.jpg','幸福民宿 中、南台湾','Western Taiwan','作者：董事长','更新时间: 2014-07-21'),
(null,'img/camel-3.jpg','首尔购物','Shopping in Seoul','作者：修菱 冷钢','更新时间：2017-12-9');