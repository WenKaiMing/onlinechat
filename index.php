<?php
	include 'config.php';
	//$version="18.4.14.19.33";
	if(isset($_GET['version'])){
		echo $version;
		exit();
	}elseif(isset($_GET['getupdatepackage'])){
		include 'getupdatepackage.php';
		exit();
	}elseif(isset($_GET['jsonpversion'])){
		echo "getupdate({'version':'$version'})";
		exit();
	}
	$nicheng_tou=array('快乐的','冷静的','醉熏的','潇洒的','糊涂的','积极的','冷酷的','深情的','粗暴的','温柔的','可爱的','愉快的','义气的','认真的','威武的','帅气的','传统的','潇洒的','漂亮的','自然的','专一的','听话的','昏睡的','狂野的','等待的','搞怪的','幽默的','魁梧的','活泼的','开心的','高兴的','超帅的','留胡子的','坦率的','直率的','轻松的','痴情的','完美的','精明的','无聊的','有魅力的','丰富的','繁荣的','饱满的','炙热的','暴躁的','碧蓝的','俊逸的','英勇的','健忘的','故意的','无心的','土豪的','朴实的','兴奋的','幸福的','淡定的','不安的','阔达的','孤独的','独特的','疯狂的','时尚的','落后的','风趣的','忧伤的','大胆的','爱笑的','矮小的','健康的','合适的','玩命的','沉默的','斯文的','香蕉','苹果','鲤鱼','鳗鱼','任性的','细心的','粗心的','大意的','甜甜的','酷酷的','健壮的','英俊的','霸气的','阳光的','默默的','大力的','孝顺的','忧虑的','着急的','紧张的','善良的','凶狠的','害怕的','重要的','危机的','欢喜的','欣慰的','满意的','跳跃的','诚心的','称心的','如意的','怡然的','娇气的','无奈的','无语的','激动的','愤怒的','美好的','感动的','激情的','激昂的','震动的','虚拟的','超级的','寒冷的','精明的','明理的','犹豫的','忧郁的','寂寞的','奋斗的','勤奋的','现代的','过时的','稳重的','热情的','含蓄的','开放的','无辜的','多情的','纯真的','拉长的','热心的','从容的','体贴的','风中的','曾经的','追寻的','儒雅的','优雅的','开朗的','外向的','内向的','清爽的','文艺的','长情的','平常的','单身的','伶俐的','高大的','懦弱的','柔弱的','爱笑的','乐观的','耍酷的','酷炫的','神勇的','年轻的','唠叨的','瘦瘦的','无情的','包容的','顺心的','畅快的','舒适的','靓丽的','负责的','背后的','简单的','谦让的','彩色的','缥缈的','欢呼的','生动的','复杂的','慈祥的','仁爱的','魔幻的','虚幻的','淡然的','受伤的','雪白的','高高的','糟糕的','顺利的','闪闪的','羞涩的','缓慢的','迅速的','优秀的','聪明的','含糊的','俏皮的','淡淡的','坚强的','平淡的','欣喜的','能干的','灵巧的','友好的','机智的','机灵的','正直的','谨慎的','俭朴的','殷勤的','虚心的','辛勤的','自觉的','无私的','无限的','踏实的','老实的','现实的','可靠的','务实的','拼搏的','个性的','粗犷的','活力的','成就的','勤劳的','单纯的','落寞的','朴素的','悲凉的','忧心的','洁净的','清秀的','自由的','小巧的','单薄的','贪玩的','刻苦的','干净的','壮观的','和谐的','文静的','调皮的','害羞的','安详的','自信的','端庄的','坚定的','美满的','舒心的','温暖的','专注的','勤恳的','美丽的','腼腆的','优美的','甜美的','甜蜜的','整齐的','动人的','典雅的','尊敬的','舒服的','妩媚的','秀丽的','喜悦的','甜美的','彪壮的','强健的','大方的','俊秀的','聪慧的','迷人的','陶醉的','悦耳的','动听的','明亮的','结实的','魁梧的','标致的','清脆的','敏感的','光亮的','大气的','老迟到的','知性的','冷傲的','呆萌的','野性的','隐形的','笑点低的','微笑的','笨笨的','难过的','沉静的','火星上的','失眠的','安静的','纯情的','要减肥的','迷路的','烂漫的','哭泣的','贤惠的','苗条的','温婉的','发嗲的','会撒娇的','贪玩的','执着的','眯眯眼的','花痴的','想人陪的','眼睛大的','高贵的','傲娇的','心灵美的','爱撒娇的','细腻的','天真的','怕黑的','感性的','飘逸的','怕孤独的','忐忑的','高挑的','傻傻的','冷艳的','爱听歌的','还单身的','怕孤单的','懵懂的');

	$nicheng_wei=array('嚓茶','凉面','便当','毛豆','花生','可乐','灯泡','哈密瓜','野狼','背包','眼神','缘分','雪碧','人生','牛排','蚂蚁','飞鸟','灰狼','斑马','汉堡','悟空','巨人','绿茶','自行车','保温杯','大碗','墨镜','魔镜','煎饼','月饼','月亮','星星','芝麻','啤酒','玫瑰','大叔','小伙','哈密瓜','数据线','太阳','树叶','芹菜','黄蜂','蜜粉','蜜蜂','信封','西装','外套','裙子','大象','猫咪','母鸡','路灯','蓝天','白云','星月','彩虹','微笑','摩托','板栗','高山','大地','大树','电灯胆','砖头','楼房','水池','鸡翅','蜻蜓','红牛','咖啡','机器猫','枕头','大船','诺言','钢笔','刺猬','天空','飞机','大炮','冬天','洋葱','春天','夏天','秋天','冬日','航空','毛衣','豌豆','黑米','玉米','眼睛','老鼠','白羊','帅哥','美女','季节','鲜花','服饰','裙子','白开水','秀发','大山','火车','汽车','歌曲','舞蹈','老师','导师','方盒','大米','麦片','水杯','水壶','手套','鞋子','自行车','鼠标','手机','电脑','书本','奇迹','身影','香烟','夕阳','台灯','宝贝','未来','皮带','钥匙','心锁','故事','花瓣','滑板','画笔','画板','学姐','店员','电源','饼干','宝马','过客','大白','时光','石头','钻石','河马','犀牛','西牛','绿草','抽屉','柜子','往事','寒风','路人','橘子','耳机','鸵鸟','朋友','苗条','铅笔','钢笔','硬币','热狗','大侠','御姐','萝莉','毛巾','期待','盼望','白昼','黑夜','大门','黑裤','钢铁侠','哑铃','板凳','枫叶','荷花','乌龟','仙人掌','衬衫','大神','草丛','早晨','心情','茉莉','流沙','蜗牛','战斗机','冥王星','猎豹','棒球','篮球','乐曲','电话','网络','世界','中心','鱼','鸡','狗','老虎','鸭子','雨','羽毛','翅膀','外套','火','丝袜','书包','钢笔','冷风','八宝粥','烤鸡','大雁','音响','招牌','胡萝卜','冰棍','帽子','菠萝','蛋挞','香水','泥猴桃','吐司','溪流','黄豆','樱桃','小鸽子','小蝴蝶','爆米花','花卷','小鸭子','小海豚','日记本','小熊猫','小懒猪','小懒虫','荔枝','镜子','曲奇','金针菇','小松鼠','小虾米','酒窝','紫菜','金鱼','柚子','果汁','百褶裙','项链','帆布鞋','火龙果','奇异果','煎蛋','唇彩','小土豆','高跟鞋','戒指','雪糕','睫毛','铃铛','手链','香氛','红酒','月光','酸奶','银耳汤','咖啡豆','小蜜蜂','小蚂蚁','蜡烛','棉花糖','向日葵','水蜜桃','小蝴蝶','小刺猬','小丸子','指甲油','康乃馨','糖豆','薯片','口红','超短裙','乌冬面','冰淇淋','棒棒糖','长颈鹿','豆芽','发箍','发卡','发夹','发带','铃铛','小馒头','小笼包','小甜瓜','冬瓜','香菇','小兔子','含羞草','短靴','睫毛膏','小蘑菇','跳跳糖','小白菜','草莓','柠檬','月饼','百合','纸鹤','小天鹅','云朵','芒果','面包','海燕','小猫咪','龙猫','唇膏','鞋垫','羊','黑猫','白猫','万宝路','金毛','山水','音响');

	$tou_num=rand(0,332);

	$wei_num=rand(0,327);

	$nicheng=$nicheng_tou[$tou_num].$nicheng_wei[$wei_num];

	//echo $nicheng; //输出生成的昵称
	/*获取最大上传大小*/
	$postmax=rtrim(ini_get('post_max_size'),'M');
	$uploadmax=rtrim(ini_get('upload_max_filesize'),'M');
	$sizemax=min($postmax,$uploadmax);
	
	function isMobile() { 
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset($_SERVER['HTTP_X_WAP_PROFILE'])) {
			return true;
		} 
		// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
		if (isset($_SERVER['HTTP_VIA'])) { 
			// 找不到为flase,否则为true
			return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
		} 
		// 脑残法，判断手机发送的客户端标志,兼容性有待提高。其中'MicroMessenger'是电脑微信
		if (isset($_SERVER['HTTP_USER_AGENT'])) {
			$clientkeywords = array('nokia','sony','ericsson','mot','samsung','htc','sgh','lg','sharp','sie-','philips','panasonic','alcatel','lenovo','iphone','ipod','blackberry','meizu','android','netfront','symbian','ucweb','windowsce','palm','operamini','operamobi','openwave','nexusone','cldc','midp','wap','mobile','MicroMessenger'); 
			// 从HTTP_USER_AGENT中查找手机浏览器的关键字
			if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT']))) {
			return true;
			} 
		} 
		// 协议法，因为有可能不准确，放到最后判断
		if (isset ($_SERVER['HTTP_ACCEPT'])) { 
			// 如果只支持wml并且不支持html那一定是移动设备
			// 如果支持wml和html但是wml在html之前则是移动设备
			if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html')))) {
				return true;
			} 
		} 
		return false;
	}
	if(!isset($_GET['computer'])&&(isMobile()||isset($_GET['m']))){//?computer一定是电脑端模式 ?m一定是手机模式
		include 'm.php';
		exit();
	}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<title>在线聊天室</title>
	<link rel="stylesheet" href="css/Upload.css<?php echo "?version=".$version;?>">
	<link rel="stylesheet" type="text/css" href="css/barrager.css<?php echo "?version=".$version;?>">
	<style type="text/css">
		body,p{margin:0px; padding:0px; font-size:14px; color:#333; font-family:Arial, Helvetica, sans-serif;}
		#ltian,.rin{width:98%; margin:5px auto;}
		#ltian{border:1px #ccc solid;overflow-y:auto; overflow-x:hidden; position:relative;}
		#ct{margin-right:111px; height:100%;overflow-y:auto;overflow-x: hidden;}
		#us{width:110px; overflow-y:auto; overflow-x:hidden; float:right; border-left:1px #ccc solid; height:100%; background-color:#F1F1F1;}
		#us p{padding:3px 5px; color:#08C; line-height:20px; height:20px; cursor:pointer; overflow:hidden; white-space:nowrap; text-overflow:ellipsis;}
		#us p:hover,#us p:active,#us p.ck{background-color:#069; color:#FFF;}
		#us p.my:hover,#us p.my:active,#us p.my{color:#333;background-color:transparent;}
		button{float:right; width:80px; height:35px; font-size:18px;}
		input{width:100%; height:30px; padding:2px; line-height:20px; outline:none; border:solid 1px #CCC;}
		.rin p{margin-right:160px;}
		.rin span{float:right; padding:6px 5px 0px 5px; position:relative;}
		.rin span img{margin:0px 3px; cursor:pointer;}
		.rin span form{position:absolute; width:25px; height:25px; overflow:hidden; opacity:0; top:5px; right:5px;}
		.rin span input{width:180px; height:25px; margin-left:-160px; cursor:pointer}

		#ct p{padding:5px; line-height:20px;}
		#ct a{color:#069; cursor:pointer;}
		#ct a:before{content:attr(value);}
		#ct span:before{content:attr(value);}
		.c2{color:#999;}
		.c3{background-color:#DBE9EC; padding:5px;}
		.qp{position:absolute; font-size:12px; color:#666; top:5px; right:130px; text-decoration:none; color:#069;z-index:999999;}
		.qp a{ font-size:12px; color:#666;text-decoration:none; color:#069;}
		#ems{position:absolute; z-index:5; display:none; top:0px; left:0px; max-width:230px; background-color:#F1F1F1; border:solid 1px #CCC; padding:5px;}
		#ems img{width:44px; height:44px; border:solid 1px #FFF; cursor:pointer;}
		#ems img:hover,#ems img:active{border-color:#A4B7E3;}
		#ems a{color:#069; border-radius:2px; display:inline-block; margin:2px 5px; padding:1px 8px; text-decoration:none; background-color:#D5DFFD;}
		#ems a:hover,#ems a:active,#ems a.ck{color:#FFF; background-color:#069;}
		.tc{text-align:center; margin-top:5px;}
	</style>
	<script type="text/javascript" src="js/jquery.min.js<?php echo "?version=".$version;?>"></script>
</head>

<body>
    <div id="Upload_overlay"></div>
    <div id="Upload_modal" class="Upload_dropbox">
        <div class="Upload_items-container">
            <div id="Upload_close" style="cursor:pointer;float: right;width:20px">
                <span class="Upload_css_close"></span>
            </div>
            <div class="Upload_mainarea">
                <p class="Upload_head"><b>拖拽上传</b><sup style="font-size:12px;color:red;">文件大小上限<?php echo $sizemax;?>M</sup>
					<span class="Upload_fileInputP">
						<i>选择文件</i>
						<input type="file" multiple id="Upload_fileInput" />
					</span>
					<sup style="font-size:12px;color:red;"><a target="_blank" href="javascript:;" id="Upload_gethistory">历史文件</a></sup>
				</p>
                <div class="Upload_content" id="Upload_content">
                    <table class="Upload_table">
						<thead>
							<tr>
								<th>文件</th>
								<th>类型</th>
								<th>大小</th>
								<th>进度</th>
								<th>操作</th>
							</tr>
						</thead>
                        <tbody class="Upload_tbody"></tbody>
                    </table>
					<hr/>
					<table id="Upload_history"><!--上传历史-->
					</table>
                </div>
                <div class="Upload_footer">
					<button class="Upload_btn" id="Upload_clearall" style='position:absolute;bottom:10px;left:30px;'>清空</button>
					
                    <button class="Upload_btn" id="Upload_fileBtn" style='position:absolute;bottom:10px;right:30px;' >上传</button>
                </div>
            </div>
        </div>
    </div>
	<input hidden readonly id="Upload_maxsize" value="<?php echo $sizemax;?>">
<div id="ltian">
	<div id="us" class="jb"></div>
	<div id="ct"></div>
	<div class="qp">
	<a href="javascript:;"  onClick="setCookie('qqnum','',365);location.reload();">重新进入</a><br/>
    <a href="javascript:;"  onClick="this.parentNode.parentNode.children[1].innerHTML=''">清除记录</a><br/>
	<a href="javascript:;"  onClick="clear_barrage();">清除弹幕</a><br/>
	<a href="javascript:;"  onClick="inotifyClear();">清除消息</a><br/>
	<a href="javascript:;"  id="Upload_showmodal">文件分享</a>
	</div>
</div>
<div class="rin">
    <button id="sd">发送</button>
    <span><img src="sk/t.png" title="表情" id="imgbq"><img src="sk/e.png" title="上传图片"><form><input type="file" title="上传图片" id="upimg"></form></span>
    <p><input id="nrong"></p>
</div>
<div id="ems"><p></p><p class="tc"></p></div>
<script>
	if(typeof(WebSocket)=='undefined'){
		console.log('你的浏览器不支持 WebSocket ，推荐使用Google Chrome 或者 Mozilla Firefox');
		alert('你的浏览器不支持 WebSocket ，推荐使用Google Chrome 或者 Mozilla Firefox');	
		document.write('你的浏览器不支持 WebSocket ，推荐使用Google Chrome 或者 Mozilla Firefox');
	}
	function getupdate(obj){
		if(obj){
			if("version" in obj){
				if(obj.version=="<?php echo $version;?>"){
					//alert("无更新");
				}else{
					if(confirm("有可用更新，是否现在前往更新？")){
						window.location.href="update.php?version="+obj.version;
					}
				}
				return true;
			}else{
				return false;
			}
		}
		$.ajax({
			type: 'get',
			url: 'http://wenkaiming.tpddns.cn:85/onlinechat/?jsonpversion',
			cache: false,
			dataType: "jsonp",
			jsonp: "callback", 
			jsonpCallback:"getupdate",  
			processData: false,
			timeout:10000, //超时时间，毫秒
			success: function(json){
				return true;
			},
			error: function() {
                return false;
            }
		});
	}
	window.onload=function(){getupdate();}
	function setCookie(c_name,value,expiredays){
		var exdate=new Date();
		exdate.setDate(exdate.getDate()+expiredays);
		document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString());
	}
	function getCookie(c_name){
		if(document.cookie.length>0){
			c_start=document.cookie.indexOf(c_name + "=");
			if (c_start!=-1){ 
				c_start=c_start + c_name.length+1; 
				c_end=document.cookie.indexOf(";",c_start);
				if (c_end==-1) c_end=document.cookie.length;
				return unescape(document.cookie.substring(c_start,c_end));
			} 
		}
		return "";
	}
var currenttitle=document.title;
var onlinetag=false;//在线标识符
var onlinenum=0;//在线人数
var qqnum=getCookie('qqnum');
var qqname=getCookie('qqname');
var randname='<?php echo $nicheng;?>';
</script>

<script src="js/jquery-1.10.2.js<?php echo "?version=".$version;?>" type="text/javascript"></script>
<script src="js/Upload.js<?php echo "?version=".$version;?>" type="text/javascript"></script>

<script src="js/a.js<?php echo "?version=".$version;?>" type="text/javascript"></script>
<script type="text/javascript" src="js/iNotify.js<?php echo "?version=".$version;?>"></script>
<script type="text/javascript">
var iN = new iNotify({
    effect: 'flash',
    interval: 500,
    message:"有消息拉!",
    audio:{
        file: ['s/msg.mp4','s/msg.mp3','s/msg.wav']
    },
    notification:{
        title:"通知！",
		icon:"/favicon.ico",
        body:'您来了一条新消息'
    }
});

function inotifyTest(titleinfo,titlet,icont,bodyt){
	var thissay=bodyt.replace(/<\/?.+?>/g,"").replace(/ /g,"");
	//thissay=titlet+thissay;
	//var audiourl='http://cache-a.oddcast.com/c_fs/7d90dcb103b470e7c466d931bb5f59fc.mp3?engine=3&language=10&voice=3&text='+encodeURIComponent(thissay)+'&useUTF8=1';//中文
	//var audiourl='http://cache-a.oddcast.com/c_fs/bad902c02afc9718b7d0ef59f5678415.mp3?engine=3&language=1&voice=3&text='+encodeURIComponent(thissay)+'&useUTF8=1';//英文
	//var audiourl='https://ai.baidu.com/aidemo?type=tns2&idx=1&tex='+encodeURIComponent(thissay)+'&cuid=baidu_speech_demo&cod=2&lan=zh&ctp=1&pdt=1&spd=5&per=3&vol=5&pit=5';//逍遥
	//var audiourl='https://ai.baidu.com/aidemo?type=tns2&idx=1&tex='+encodeURIComponent(thissay)+'&cuid=baidu_speech_demo&cod=2&lan=zh&ctp=1&pdt=1&spd=5&per=4&vol=5&pit=5';//丫丫
	var audiourl='https://ai.baidu.com/aidemo?type=tns2&idx=1&tex='+encodeURIComponent(thissay)+'&cuid=baidu_speech_demo&cod=2&lan=zh&ctp=1&pdt=1&spd=5&per=0&vol=5&pit=5';//女生
	//var audiourl='https://ai.baidu.com/aidemo?type=tns2&idx=1&tex='+encodeURIComponent(thissay)+'&cuid=baidu_speech_demo&cod=2&lan=zh&ctp=1&pdt=1&spd=5&per=5&vol=5&pit=5';//男生
	//iN.setFavicon(msgnum).setTitle(titleinfo).notify({
    iN.setTitle(titleinfo).setURL(audiourl).notify({
        title:titlet,
		icon:icont,
        body:bodyt
    }).player()
}
function inotifyClear(){
	//iN.faviconClear().setTitle();
	iN.setTitle();
	document.title=currenttitle;
}
</script>
<script type="text/javascript" src="js/jquery.barrager.js<?php echo "?version=".$version;?>"></script>
<script>
	function GetFileName(url) 
	{ 
		//var url=window.location.href;//获取完整URL 
		var tmp= new Array();//临时变量，保存分割字符串 
		tmp=url.split("/");//按照"/"分割 
		var pp = tmp[tmp.length-1];//获取最后一部分，即文件名和参数 
		tmp=pp.split("?");//把参数和文件名分割开 
		return tmp[0]; 
	}
	function sendBarrage(mess,imag,url){//发送弹幕
		mess=mess.replace(/<[^>]+>/g,"").trim();
		if(mess==""){//没有内容就不用发了
			return false;
		}
	    imag=imag||'images/heisenberg.png';
		url=url||'https://www.baidu.com/s?wd='+encodeURIComponent(mess);
		mess = mess.length>25?mess.substr(0,25) + '...':mess ;//避免字数过长显示异常
		var item={
			info:mess, //文字 
			img:imag, //图片 
			href:url, //链接 
			close:true, //显示关闭按钮 
			speed:6, //延迟,单位秒,默认6 
			//bottom:70, //距离底部高度,单位px,默认随机 
			color:'#fff', //颜色,默认白色 
			old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
		}
		return $('body').barrager(item);//返回弹幕id
	}
	function  clear_barrage(){//清空弹幕
        $.fn.barrager.removeAll();
    }
	function linkfilter(msg){//替换文本中超链接
		var reg = /(http:\/\/|https:\/\/)((\w|=|\?|:|%|\.|\/|&|-)+)/g;
		return msg.replace(reg, "<a target='_blank' href='$1$2'>$1$2</a>");
	}
	function flicker(oBox){ 
		var backupoBox=oBox.style.color;
		var flickertimer = null;   //定义时间器  
		var i = 0;   
		if(!$(oBox).hasClass("flickering")){
			$(oBox).addClass("flickering"); 
		}else{
			return ;
		}
		clearInterval(flickertimer); //先清空时间器  
		oBox.onmousedown = function(){ //电脑端
			clearInterval(flickertimer);
			inotifyClear();//恢复inotify
			oBox.style.color=backupoBox;
			$(oBox).removeClass("flickering"); 
			return ;
		};
		oBox.ontouchstart = function(){ //手机端
			clearInterval(flickertimer);
			inotifyClear();//恢复inotify
			oBox.style.color=backupoBox;
			$(oBox).removeClass("flickering"); 
			return ;
		};
		flickertimer = setInterval(function () {  
			oBox.style.color = i++ % 2 ? "#08C" : "#F1F1F1";  // 控制闪烁
			if(!$(oBox).hasClass("flickering")){
				clearInterval(flickertimer);
				inotifyClear();
				oBox.style.color=backupoBox;
				$(oBox).removeClass("flickering");
				return ;
			}  //控制闪烁次数  
		}, 500 );
	}
	function unflicker(oBox){//去闪烁,原本有闪烁返回true，没有则返回false
		if($(oBox).hasClass("flickering")){
			$(oBox).removeClass("flickering"); 
			return true;
		}
		return false;
	}
	function getqqname(qq){
		if(!isNaN(qq)&&qq>10000){
			$.ajax({ 
				type: "get", 
				url: "getqqname.php?qqnum="+qq,  
				async: false,
				success: function(data){
					if(data.length>0){
						qqnum=qq;
						qqname=data;
					}else{
						qqnum='';
						qqname=randname;
						alert('获取QQ昵称失败');
					}
				},
				error: function(){ 
					qqnum='';
					qqname=randname;
					alert('获取QQ昵称失败');
				}
			});
		}else{
			qqnum='';
			qqname=randname;
			alert('QQ号错误，获取QQ昵称失败');
		}
	}
(function(){
	var key='all',mkey;
	var users={};
	var url='ws://<?php echo $wsaddr.":".$wsport;?>';
	var so=false,n=false;
	var lus=A.$('us'),lct=A.$('ct');
	var selfname="";
	function st(){
		if(qqname!=null&&qqname!=""&&qqnum!=null&&qqnum!=""){
			n=qqname;
		}else{
			n=prompt('用QQ号登陆聊天室（推荐）\n或直接输入昵称登陆聊天室\n或直接确定获取随机昵称登录聊天室：',qqname);
			if(n.trim()==""){
				n=randname;
			}else if(isNaN(n)){
				//不是数字
			}else{
				getqqname(n);
				n=qqname;
				if(qqnum!=''){
					n=prompt('是否使用别的昵称：',n);
					if(!n)n=qqname;
					if(n.trim()==""){
						n=randname;
					}
				}
			}
		}
		n=n.substr(0,16);
		qqname=n;//保存昵称
		n=esc(n);
		if(!n){
			return ;	
		}
		setCookie('qqname',qqname,365);
		setCookie('qqnum',qqnum,365);
		so=new WebSocket(url);
		so.onopen=function(){
			if(so.readyState==1){
				so.send('type=add&ming='+n+'&qqnum='+qqnum);
			}
		}
		document.getElementById('nrong').focus();
		so.onclose=function(){
			so=false;
			onlinetag=false;
			onlinenum=0;
			iN.setFavicon(onlinenum);
			lct.appendChild(A.$$('<p class="c2">退出聊天室</p>'));
			if(confirm("您已退出聊天室，是否重新进入？")){
				window.location.reload();
			}
		}
		
		so.onmessage=function(msg){
			eval('var da='+msg.data);
			var obj=false,c=false;
			if(da.type=='add'){
				da.name=justreplace(da.name);
				da.code=justreplace(da.code);
				da.time=justreplace(da.time);
				if(da.qqnum&&da.qqnum!=''){
					qqheadsrc='http://q1.qlogo.cn/g?b=qq&nk='+da.qqnum+'&s=100';
				}else{
					qqheadsrc='images/heisenberg.png';
				}
				var obj=A.$$('<p style="background-image:url('+qqheadsrc+');background-repeat:no-repeat;background-position:3px 3px;background-size:20px 20px;padding-left:25px;" alt="qq:'+da.qqnum+'" title="qq:'+da.qqnum+'">'+da.name+'</p>');
				lus.appendChild(obj);
				cuser(obj,da.code);
				obj=A.$$('<p class="user_'+da.code+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value="欢迎"></span><a value="'+da.name+'"></a><span value="加入"></span></p>');
				c=da.code;
				if(da.qqnum&&da.qqnum!=''){
					sendBarrage('欢迎“'+da.name+'('+da.qqnum+')”加入群聊','http://q1.qlogo.cn/g?b=qq&nk='+da.qqnum+'&s=100','javascript:;');//发送弹幕
				}else{
					sendBarrage('欢迎“'+da.name+'”加入群聊','images/info.png','javascript:;');//发送弹幕
				}
				onlinenum++;//在线人数加1
				iN.setFavicon(onlinenum);
			}else if(da.type=='madd'){
				lus.innerHTML="";
				da.time=justreplace(da.time);
				da.name=justreplace(da.name);
				da.code=justreplace(da.code);
				mkey=da.code;
				da.users.unshift({'code':'all','name':'大家'});
				for(var i=0;i<da.users.length;i++){
					da.users[i].name=justreplace(da.users[i].name);
					da.users[i].code=justreplace(da.users[i].code);
					if(da.users[i].qqnum&&da.users[i].qqnum!=''){
						qqheadsrc='http://q1.qlogo.cn/g?b=qq&nk='+da.users[i].qqnum+'&s=100';
					}else{
						qqheadsrc='images/heisenberg.png';
					}
					if(i>0){
						var obj=A.$$('<p style="background-image:url('+qqheadsrc+');background-repeat:no-repeat;background-position:3px 3px;background-size:20px 20px;padding-left:25px;" alt="qq:'+da.users[i].qqnum+'" title="qq:'+da.users[i].qqnum+'">'+da.users[i].name+'</p>');
					}else{
						var obj=A.$$('<p>'+da.users[i].name+'</p>');
					}
					
					lus.appendChild(obj);
					if(mkey!=da.users[i].code){
						cuser(obj,da.users[i].code);
					}else{
						obj.className='my';
						document.title=da.users[i].name+"<==>大家";
						currenttitle=document.title;
						selfname=da.users[i].name;
					}
				}
				onlinenum=da.users.length-1;//初始化在线人数
				iN.setFavicon(onlinenum);
				obj=A.$$('<p><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value="欢迎加入群聊,你的昵称是："></span><span value="'+da.name+'" style="color:red;"></span></p>');
				users.all.className='ck';
				onlinetag=true;
			}
			
			if(obj==false){
				if(da.type=='rmove'){
					da.time=justreplace(da.time);
					da.nrong=justreplace(da.nrong);
					var obj=A.$$('<p class="c2 user_'+da.nrong+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value="'+users[da.nrong].innerHTML+'退出聊天室"></span></p>');
					lct.appendChild(obj);
					if(da.nrong==key){//如果离开的正好是当前聊天的对象
						document.title=selfname+"<==>大家";
						currenttitle=document.title;
						inotifyClear();
						unflicker(users[key]);//去除闪烁
						sendBarrage('和你正在聊天的“'+users[da.nrong].innerHTML+'”退出了群聊，已切换到群聊','images/warning.png','javascript:;');//发送弹幕
						users['all'].click();
					}else if(unflicker(users[da.nrong])){//如果当前退出的人跟你说过话
						inotifyClear();
					}
					users[da.nrong].del();
					delete users[da.nrong];
					onlinenum--;
					iN.setFavicon(onlinenum);
				}else{
					da.nrong=justreplace(da.nrong);
					da.code1=justreplace(da.code1);
					da.code=justreplace(da.code);
					da.time=justreplace(da.time);
					da.msgid=justreplace(da.msgid);//消息id
					da.nrong=linkfilter(da.nrong);
					da.nrong=da.nrong.replace(/{\\(\d+)}/g,function(a,b){
						return '<img src="sk/'+b+'.gif">';
					}).replace(/^data\:image\/png;base64\,.{50,}$/i,function(a){
						return '<img src="'+a+'">';
					});
					//da.code 发信息人的code
					var barragesrc='images/heisenberg.png';
					if(da.qqnum&&da.qqnum!=''){
						barragesrc='http://q1.qlogo.cn/g?b=qq&nk='+da.qqnum+'&s=100';
					}
					sendBarrage(da.nrong,barragesrc);//发送弹幕
					if(da.code1==mkey){//发给我的
						var inotifyicon='/favicon.ico';
						if(da.qqnum&&da.qqnum!=''){
							inotifyicon='http://q1.qlogo.cn/g?b=qq&nk='+da.qqnum+'&s=100';
						}
						inotifyTest("新消息来了",users[da.code].innerHTML+" 对你说：",inotifyicon,da.nrong);
						flicker(users[da.code]);//闪烁
						obj=A.$$('<p id="'+da.msgid+'" class="c3 user_'+da.code+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value=""></span><a value="'+users[da.code].innerHTML+'"></a><span value="对我说："></span>'+da.nrong+'</p>');
						c=da.code;
					}else if(da.code==mkey){//我发的
						if(da.code1!='all'){//私聊
							obj=A.$$('<p id="'+da.msgid+'" class="c3 user_'+da.code1+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value="我对"></span><a value="'+users[da.code1].innerHTML+'"></a><span value="说："></span>'+da.nrong+'</p>');
						}else{
							obj=A.$$('<p id="'+da.msgid+'" class="user_'+da.code1+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value="我对"></span><a value="'+users[da.code1].innerHTML+'"></a><span value="说："></span>'+da.nrong+'</p>');
						}
						c=da.code1;
					}else if(da.code==false){
						obj=A.$$('<p id="'+da.msgid+'" ><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span>'+da.nrong+'</p>');
					}else if(da.code1){
						obj=A.$$('<p id="'+da.msgid+'" class="user_'+da.code+'"><span style="color:#999; margin-right:10px;" value="['+da.time+']"></span><span value=""></span><a value="'+users[da.code].innerHTML+'"></a><span value="对'+users[da.code1].innerHTML+'说："></span>'+da.nrong+'</p>');
						c=da.code;
					}
				}
			}
			lct.appendChild(obj);
			lct.scrollTop=Math.max(0,lct.scrollHeight-lct.offsetHeight);
			if(c){
				if(c!=key&&key!='all'){
					$(obj).hide();
				}
				obj.children[2].onclick=function(){
					if(users[c]){
						users[c].click();
					}else{
						sendBarrage('该用户已退出群聊！','images/error.png','javascript:;');
						document.getElementById('nrong').focus();
					}
				}
			}
		}
	}
	A.$('sd').onclick=function(){
		if(!so){
			 return st();
		}
		var da=A.$('nrong').value.trim();
		if(da==''){
			//alert('内容不能为空');
			document.getElementById('nrong').focus();
			return false;	
		}
		A.$('nrong').value='';
		so.send('nr='+esc(da)+'&key='+key+'&qqnum='+qqnum);
		inotifyClear();//恢复inotify
		unflicker(users[key]);//去除闪烁
		document.getElementById('nrong').focus();
	}
	A.$('nrong').onkeydown=function(e){
		var e=e||event;
		if(e.keyCode==13){
			A.$('sd').onclick();
		}
	}
	function esc(da){
		da=da.replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
		return encodeURIComponent(da);
	}
	function justreplace(da){//仅仅替换<>号，保护客户端
		da=da.replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/\"/g,'&quot;');
		return da;
	}
	function cuser(t,code){
		users[code]=t;
		t.onclick=function(){
			t.parentNode.children.rcss('ck','');
			t.rcss('','ck');
			var lastkey=key;//保证一直点只显示一次
			key=code;
			document.title=selfname+"<==>"+this.innerHTML;
			currenttitle=document.title;
			var ckele=document.getElementsByClassName('ck')[0];
			unflicker(ckele);//去除闪烁
			$('#ct p').hide();
			$('.user_'+code).show();
			if(code=='all'){
				$('#ct p').show();
				if(lastkey!=code){//保证一直点只显示一次
					sendBarrage('已切换到与大家的群聊模式！','images/agree_tips.png','javascript:;');
				}
			}else{
				if(lastkey!=code){//保证一直点只显示一次
					sendBarrage('已切换到与“'+this.innerHTML+'”的私聊模式！','images/agree_tips.png','javascript:;');
				}
			}
			document.getElementById('nrong').focus();
		}
	}
	A.$('ltian').style.height=(document.documentElement.clientHeight - 70)+'px';
	st();
	

	var bq=A.$('imgbq'),ems=A.$('ems');
	var l=80,r=4,c=5,s=0,p=Math.ceil(l/(r*c));
	var pt='sk/';//表情所在目录
	bq.onclick=function(e){//表情按钮被点击，显示表情框
		var e=e||event;
		if(!so){
			 return st();
		}
		ems.style.display='block';
		document.onclick=function(){
			gb();	
		}
		ct();
		try{e.stopPropagation();}catch(o){}
	}
	
	for(var i=0;i<p;i++){//生成四页表情
		var a=A.$$('<a href="javascript:;">'+(i+1)+'</a>');
		ems.children[1].appendChild(a);
		ef(a,i);
	}
	ems.children[1].children[0].className='ck';//默认一开始显示第一页的表情
	
	function ct(){//表情框窗体
		var wz=bq.weiz();
		with(ems.style){
			top=wz.y-242+'px';
			left=wz.x+bq.offsetWidth-235+'px';
		}
	}
		
	function ef(t,i){//第i页表情被点击
		t.onclick=function(e){
			var e=e||event;
			s=i*r*c;
			ems.children[0].innerHTML='';
			hh();
			this.parentNode.children.rcss('ck','');
			this.rcss('','ck');
			try{e.stopPropagation();}catch(o){}
		}
	}
	
	function hh(){//生成第p页的表情 每页4*5个表情
		var z=Math.min(l,s+r*c);//最多显示l （80）个表情
		for(var i=s;i<z;i++){
			var a=A.$$('<img src="'+pt+i+'.gif">');
			hh1(a,i);
			ems.children[0].appendChild(a);
		}
		ct();
	}
	
	function hh1(t,i){//增加表情点击监听事件，点击第i个表情并以 {\i} 这种形式显示到输入框中
		t.onclick=function(e){
			var e=e||event;
			A.$('nrong').value+='{\\'+i+'}';
			if(!e.ctrlKey){//按住ctrl可以一次性输入多个表情
				gb();
			}
			try{e.stopPropagation();}catch(o){}
		}
	}
	
	function gb(){//保持表情输入框存在
		ems.style.display='';
		A.$('nrong').focus();
		document.onclick='';
	}
	hh();
	A.on(window,'resize',function(){
		A.$('ltian').style.height=(document.documentElement.clientHeight - 70)+'px';
		ct();
	})	

	var fimg=A.$('upimg');
	var img=new Image();
	var dw=400,dh=300;
	A.on(fimg,'change',function(ev){
		if(!so){
			st();
			return false;
		}
		if(key=='all'){
			alert('由于资源限制 发图只能私聊');
			return false;	
		}
		var f=ev.target.files[0];
		if(f.type.match('image.*')){
			var r = new FileReader();
			r.onload = function(e){
				img.setAttribute('src',e.target.result);
		    };
			r.readAsDataURL(f);
		}
	});
	img.onload=function(){
		ih=img.height,iw=img.width;
		if(iw/ih > dw/dh && iw > dw){
			ih=ih/iw*dw;
			iw=dw;
		}else if(ih > dh){
			iw=iw/ih*dh;
			ih=dh;
		}
		var rc = A.$$('canvas');
		var ct = rc.getContext('2d');
		rc.width=iw;
		rc.height=ih;
		ct.drawImage(img,0,0,iw,ih);
		var da=rc.toDataURL();
		so.send('nr='+esc(da)+'&key='+key+'&qqnum='+qqnum);
	}
	
})();
</script>
</body>
</html>