<?php require("../function/emailconfig.php");?>
<?php

$sender  	= isset( $_POST['sender']) ? $_POST['sender'] : '';
$email_sender  = isset( $_POST['email']) ? $_POST['email'] : '';
$subject    = isset( $_POST['subject']) ? $_POST['subject'] : '';
$email_content	    = isset( $_POST['message']) ? $_POST['message'] : '';

$email_receiver="gun.1992@hotmail.com";
try{
$tmp = sendmai($sender , $email_sender , $email_receiver , $g_user , $g_pass , $subject , $email_content );

if( $tmp == 1)
    {
        echo "<script>
        alert('ส่งอีเมลสำเร็จ');
        window.location.href='../contact/';
        </script>";

        exit(0);
    }else{
        echo "<script>
        alert('ส่งอีเมลไม่สำเร็จ');
        window.location.href='../contact/';
        </script>";
        exit(0);
    }
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>