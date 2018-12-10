<?php require("../library/phpmailer/PHPMailerAutoload.php");?>

<?php
header('Content-Type: text/html; charset=utf-8');

$g_user = "jpguncom.1992@gmail.com"; // gmail ที่ใช้ส่ง
$g_pass = "045661088Gun"; // รหัสผ่าน gmail

function sendmai($sender , $email_sender , $email_receiver , $g_user , $g_pass , $subject , $email_content){

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = "utf-8";
$mail->Host = "smtp.gmail.com"; // Your SMTP PArameter
$mail->Port = 587; // Your Outgoing Port
$mail->SMTPAuth = true; // This Must Be True
$mail->Username = $g_user;
$mail->Password = $g_pass;
$mail->SMTPSecure = 'tls'; // Check Your Server's Connections for TLS or SSL
$mail->setFrom($email_sender, $sender);

if (strpos($email_receiver, ',') !== false) {
	$tmp = explode(",", $email_receiver);
	for($i=0;$i<count($tmp);$i++){
		$mail->addAddress($tmp[$i]);
	}
}else{
	$mail->addAddress($email_receiver);
}
$mail->Subject = $subject;

if($email_receiver){
    $mail->msgHTML($email_content);
	if (!$mail->send()) {  // สั่งให้ส่ง email
		// กรณีส่ง email ไม่สำเร็จ
		//echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง2</h3>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
		exit();
		return 0 ;

	}else{
		// กรณีส่ง email สำเร็จ
		//echo "ระบบได้ส่งข้อความไปเรียบร้อย2";
		return 1 ;
	}
}

}
?>

