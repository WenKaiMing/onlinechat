<?php
	if(!isset($_FILES)||count($_FILES)<1){
		exit();
	}
	header("Content-Type:text/html;charset=UTF-8");
	$urlbase="";//http https
	if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS']=='on'){
		$urlbase="https://".$_SERVER['HTTP_HOST']."".$_SERVER['SCRIPT_NAME'];
	}else{
		$urlbase="http://".$_SERVER['HTTP_HOST']."".$_SERVER['SCRIPT_NAME'];
	}
	$urlbase=rtrim($urlbase,"upload.php");
	$returnstr="{\n";
	$i=0;
	if(!is_dir('upload/')){//初始化upload文件夹
		mkdir('upload/');
	}
	if(!file_exists("uploadlist.php")){//初始化上传文件列表
		file_put_contents("uploadlist.php", "<?php\n\t\$filelist=array();", LOCK_EX);
	}
	$newuploadfiles="";
	foreach($_FILES as $k=>$singlefile){
		//print_r($singlefile);
		if($singlefile['error']!=0)continue;
		if(is_uploaded_file($singlefile['tmp_name'])){
			//iconv("UTF-8", "GBK", $k);
			$timearr=explode(" ",microtime());//微秒级
			$newname=$timearr[1].substr($timearr[0],1,strlen($timearr[0])-3);
			move_uploaded_file($singlefile['tmp_name'], "upload/".$newname);
			$newuploadfiles.="\n\t\$filelist[]=array('".$newname."','".$singlefile['type']."','".$singlefile['name']."');";
			$returnstr.="'file".$i++."':'".$urlbase."download.php?token=".md5($newname)."&file=".$singlefile['name']."',\n";
		}
	}
	$returnstr.="}";
	unset($_FILES);
	echo $returnstr;
	file_put_contents("uploadlist.php", file_get_contents("uploadlist.php").$newuploadfiles, LOCK_EX);