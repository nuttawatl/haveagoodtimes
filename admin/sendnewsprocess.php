<?php
require_once "../library/Savant3.php";
require_once "../library/adodb5/adodb.inc.php";
require_once "../library/adodb5/adodb-active-record.inc.php";
require_once "../function/config.php";
require_once "../function/connect.php";
?>
<?php require("../function/emailconfig.php");?>

<?php
ADOdb_Active_Record::SetDatabaseAdapter($db);

$subject    = isset( $_POST['subject']) ? $_POST['subject'] : '';
$email_sender  = isset( $_POST['email_sender']) ? $_POST['email_sender'] : '';
$sender  	= isset( $_POST['sender']) ? $_POST['sender'] : '';
$email_content	    = isset( $_POST['message']) ? $_POST['message'] : '';


$sql = " select * from `subscribe` where status = '1' ";
$db->setFetchMode(ADODB_FETCH_ASSOC);
$stmt = $db->Prepare($sql);
$rs = $db->Execute($stmt);

$email = "";
$i = 0;

if ($rs != "") {
    foreach ($rs as $row) 
    {
        $email = $email .", ".$row["email"]." ";
        $i++;
    }
}

$email_receiver = substr($email,1,strlen($email));

try{
$tmp = sendmai($sender , $email_sender , $email_receiver , $g_user , $g_pass , $subject , $email_content );

if( $tmp == 1)
    {
        echo "<script>
        alert('ส่งอีเมลสำเร็จ');
        window.location.href='../admin/sendnews.php';
        </script>";

        exit(0);
    }else{
        echo "<script>
        alert('ส่งอีเมลไม่สำเร็จ');
        window.location.href='../admin/sendnews.php';
        </script>";
        exit(0);
    }
}catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

?>