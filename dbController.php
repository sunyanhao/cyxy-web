<?php

       header('Content-type:text/html; charset=utf-8');
       date_default_timezone_set('PRC');

        
          // 组织数据      
          $user = $_POST['username'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];
          $time = date('y-m-d H:i:s',time());
          // echo $time;
          // 连接数据库
          $con = mysqli_connect("localhost","root","123456","cyxy");
          mysqli_query($con, "set names utf8");
          $time = date('y-m-d H:i:s',time());
          
         //插入数据
         $con->query("insert into cycommerce(uname,uphone,umessage,utime) values('$user','$phone','$message','$time')");
         
         
?>

<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>车游小鱼</title>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<script src="js/jquery-3.3.1.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/form.js" type="text/javascript"></script>
</head>
<body>
	<div class="title">
		<img class="titleImg" src="images/01.png"/>
	</div>
	<div class="content">
		<div class="content1Bg">
			<img class="content1Img" src="images/02.png"/>
		</div>
		<div class="content1Content">
			<p class="content1ContentTitle">公司简介<span>Company profile</span></p>
			<div class="content1ContentText">&nbsp;&nbsp;&nbsp; 打造国内最有价值的自驾游智慧出行生态链，赋能于车服务于人，链接百万自驾车玩转中国自驾游。通过200多位手绘匠人以长卷形式，勾勒城市的每一处标志建筑，美景风光....力求做到谨小而不失全貌，我们的长线自驾线路是一条条富有主题场景与AR任务相结合的游戏旅程，打破传统自驾游模式，开启个性、时尚、趣味的新奇旅行体验。希望为用户提供灵活、自有且美妙的自驾游服务。</div>
		</div>
	</div>
	<div class="content">
		<div class="content2Tit">
			<p>车游小鱼<span>Small fish</span></p>
		</div>
		<img class="content2Img" src="images/03.png"/>
        <div class="content-hhq">支持第三方软件安装，最大内存支持128G</div>
	</div>
	<div class="content">
		<div class="content3Tit">
			<p>让生活变得更精彩</p>
			<span>专注定制化服务</span>
		</div>
		<div class="content3Content spencil">
			<div class="content3ContentImg">
				<img src="images/14.png"/>
			</div>
			<div class="content3ContentTit spli">
				<span></span>
				<p>配置强大</p>
			</div>
		</div>
		<div class="content3Content">
			<div class="content3ContentTit">
				<p>实时查看</p>
				<span></span>
			</div>
			<div class="content3ContentImg">
				<img src="images/12.png"/>
			</div>
		</div>
		<div class="content3Content">
			<div class="content3ContentImg">
				<img src="images/13.png"/>
			</div>
			<div class="content3ContentTit spli">
				<span></span>
				<p>监控模式</p>
			</div>
		</div>
		<div class="content3Content">
			<div class="content3ContentTit">
				<p>安全保证</p>
				<span></span>
			</div>
			<div class="content3ContentImg">
				<img src="images/11.png"/>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="content4Tit">
			<p>车辆检测</p>
			<span>让出行更保障</span>
		</div>
		<img class="content2Img-1" src="images/08.png"/>
		<div class="content4Content">
			&nbsp;&nbsp;&nbsp;&nbsp; 汽车，让我们的出行更加便捷、舒适，但如果不注意用车卫生，不按照规章驾车，就会有损于我们的健康，甚至酿成重大事故并危及生命。愿您在享受驾车乐趣的同时，关注健康，快乐驾驶。
		</div>
	</div>
	<div class="content">
		<div class="content5Tit">
			<p>让行车时间更丰富</p>
			<span>缓解出行疲劳</span>
		</div>
		<img class="content5Img" src="images/09.png"/>
	</div>
	<div class="content content6">
		<div class="content6Tit">
			<p>国内首创“车载钓鱼”项目</p>
			<span>玩着转 转着玩 车轮一响 黄金万两</span>
		</div>
		<img class="content6Img" src="images/15.png"/>
		<div class="content6Content">
			扫描二维码下载APP，你也可以玩着转，转着玩，
			<br />
			车轮一响，黄金万两 
		</div> 
		<img class="downloadImg" src="images/ios.png"/>
		<div class="iosDownload download">
			<img src="images/16.png"/>
			<span>APP Store下载</span>
		</div>
		<div class="androidDownload download">
			<img src="images/17.png"/>
			<span>安卓下载</span>
		</div>
	</div>
	<div class="content6Bg">
        <div class="content8Tit">
                <div class="font-1">地址：山东省济南市槐荫区绿地缤纷城15F</div>
                <div class="font-2">400电话：400-0531950</div>
                <div class="font-3">
                     <div class="font-4">微信公众号：</div>
                     <div class="font-5"><img src="images/weixin.png"></div>
                </div>
        </div>
        <div class="content7Tit">
                <div class="tel">
                    <p>联系我们<span>Contact us</span></p> 
                </div>
                <div class="form">
                   <form  action="./dbController.php" method="post" id="myform">
                     <td > 
                       <input type="text" name="username" id="username" placeholder="你的名字" class="user">
                       <br>
                     </td>
                     <td>
                       <input type="text"  name="phone" id="phone" placeholder="联系电话" class="phone" onchange="checktel()">
                       <br>
                     </td>
                       <textarea placeholder="留言信息（留言字数请不要超过50个字）" id="message" name="message" class="message" onchange="checkcb()"></textarea>
                       <br>
                       <button type="submit" class="btn" id="btn" onclick="return check(this.form)">提交</button>
                   </form>
                </div>
        </div>
    </div>
	<script type="text/javascript">
		var clientWidth = document.body.clientWidth;
		document.getElementsByTagName('body')[0].style.zoom = clientWidth/1920;
		
		$(".iosDownload").addClass("checkDownload");
		$(".iosDownload").on("click",function(){
			$(".downloadImg").attr("src","images/ios.png");
			$(".iosDownload").addClass("checkDownload");
			$(".androidDownload").removeClass("checkDownload");
		});
		$(".androidDownload").on("click",function(){
			$(".downloadImg").attr("src","images/anzhuo.png");
			$(".androidDownload").addClass("checkDownload");
			$(".iosDownload").removeClass("checkDownload");
		});

	</script>
</body>
</html>        
          
          
       

       
       















