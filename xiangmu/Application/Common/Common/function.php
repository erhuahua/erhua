<?php 
//封装一个密码加密函数
function encrypt_password($password){
    //加盐
    $alt = 'ad31s2ad23';
    return md5($alt.md5($password));
}

//封装发送curl函数
function curl_request($url,$post = false,$data = array(),$https = false)
{
	//请求地址
	$ch = curl_init($url);
	//请求参数
	if($post){
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
	}
	if($https){
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
		curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	}
	//发送请求
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	//关闭
	curl_close($ch);
	//返回数据
	return $result;
}

//使用PHPMailer发送邮件
function sendmail($email, $subject, $body){
    require './Application/Tools/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // 设置使用SMTP服务
    $mail->Host = 'smtp.qq.com';                          // 设置SMTP服务器主机地址
    $mail->SMTPAuth = true;                               // 开启SMTP认证
    $mail->Username = '541279007@qq.com';                  // SMTP username
    $mail->Password = 'lyrxtjtolrlbbeci';                 // SMTP password
    $mail->SMTPSecure = 'tls';                            // 使用tls加密方式
    $mail->Port = 25;                                     // 邮件发送端口 25 默认是587
    $mail->CharSet = 'UTF-8'; //设置邮件字符编码
    $mail->setFrom('541279007@qq.com');                      //设置发件人邮箱
    $mail->addAddress($email);                              //添加一个收件人邮箱
    // $mail->addAddress('ellen@example.com');               // 可以添加多个收件人
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // $mail->addAttachment('/var/tmp/file.tar.gz');         // 添加附件
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // 设置邮件内容格式为html

    $mail->Subject = $subject; //邮件主题
    $mail->Body    = $body; //邮件内容
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        //发送失败 直接返回错误信息
        return $mail->ErrorInfo;
    } else {
        //发送成功，返回true
        return true;
    }
}
//递归方法实现无限极分类
function getTree($list,$pid=0,$level=0){
    static $tree =array();
    foreach($list as $row){
        if($row['pid'] == $pid){
            $row['level'] =$level;
            $tree[]=$row;
            getTree($list,$row['id'],$level +1 );
        }
    }
    return $tree;
}

 ?>