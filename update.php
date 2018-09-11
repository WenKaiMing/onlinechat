<?php 
/**********************************************************
只需将update.php和config.php放到服务器即可
**********************************************************/
	header("Content-Type: text/html;charset=utf-8");
	if(file_exists('noallowedupdate.lock')){
		echo "服务器端，不允许更新！";
		exit();
	}
	$updateserver='wenkaiming.tpddns.cn:85';
	$backupserver='118.89.102.104';
	if(isset($_GET['backupserver'])){
		$updateserver=$backupserver;
	}
	if(!file_exists("version.txt")&&!isset($_GET['version'])){
		include 'config.php';
		$newversion=file_get_contents("http://".$updateserver."/onlinechat/?version");
		if($newversion==""){
			echo "获取更新信息失败！";
			if(!isset($_GET['backupserver'])){
			echo '
			<center><p>正在切换更新服务器</p><h1>刷新倒计时 <font color="red" id="countdown">0</font></h1></center>
			<script>
			wait=5;
			function time(o){
				o.innerHTML = wait;
				if (wait == 0){
					window.location.href="update.php?version='.$newversion.'&backupserver";
				}else{ 
					wait--;
					setTimeout(function() {
						time(o)
					},
					1000)
				}
			}
			time(document.getElementById("countdown"));
			</script>
			';
			}
			exit();
		}
		if($version==$newversion){
			die('no available update!');
		}
		file_put_contents("version.txt",$newversion);
		echo '
			<center><p>有可用更新</p><h1>刷新倒计时 <font color="red" id="countdown">0</font></h1></center>
			<script>
			wait=5;
			function time(o){
				o.innerHTML = wait;
				if (wait == 0){
					window.location.reload();
				}else{ 
					wait--;
					setTimeout(function() {
						time(o)
					},
					1000)
				}
			}
			time(document.getElementById("countdown"));
			</script>
		';
		exit();
	}
	$newversion="";
	if(isset($_GET['version'])){
		if($_GET['version']!=""){
			$newversion=$_GET['version'];
		}else{
			die("version is not correct");
		}
	}else{
		$newversion=file_get_contents("version.txt");
	}
	file_put_contents("update.zip",file_get_contents("http://".$updateserver."/onlinechat/?getupdatepackage=".$newversion));
	if(filesize("update.zip")==0){
		echo "升级包已损坏";
		if(!isset($_GET['backupserver'])){
			echo '
			<center><p>正在切换更新服务器</p><h1>刷新倒计时 <font color="red" id="countdown">0</font></h1></center>
			<script>
			wait=5;
			function time(o){
				o.innerHTML = wait;
				if (wait == 0){
					window.location.href="update.php?version='.$newversion.'&backupserver";
				}else{ 
					wait--;
					setTimeout(function() {
						time(o)
					},
					1000)
				}
			}
			time(document.getElementById("countdown"));
			</script>
			';
		}
		exit();
	}
	$zip = new ZipArchive; 
	$res = $zip->open('update.zip'); 
	if ($res === TRUE){ 
		echo '<center><p>读取升级包成功</p>'; 
		//解压缩到当前文件夹 
		$zip->extractTo('./'); 
		$zip->close(); 
	}else{ 
		die('failed, code:'.$res); 
	} 
	if(file_exists("config.php")){
		include "config.php";
		if($version==$newversion){
			echo '
				<center><p>更新成功('.$version.')</p><h1>跳转倒计时 <font color="red" id="countdown">0</font></h1></center>
				<hr/>
				<center><textarea width="100%" height="100%" cols="60" rows="14">'.file_get_contents('update.log').'</textarea></center>
				<script>
				wait=5;
				function time(o){
					o.innerHTML = wait;
					if (wait == 0){
						location.href="./";
					}else{ 
						wait--;
						setTimeout(function() {
							time(o)
						},
						1000)
					}
				}
				time(document.getElementById("countdown"));
				</script>
			';
		}else{
			echo "<p>版本不对=>升级失败！(".$version.")=>(".$newversion.")</p></center>";
		}
	}else{
		echo "<p>配置文件读取失败=>升级失败！</p></center>";
	}
	@unlink("version.txt");
	@unlink("update.zip");
?> 