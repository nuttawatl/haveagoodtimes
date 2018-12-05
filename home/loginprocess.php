<?php
session_start();
require_once "../library/Savant3.php";
require_once "../library/adodb5/adodb.inc.php";
require_once "../library/adodb5/adodb-active-record.inc.php";
require_once "../function/config.php";
require_once "../function/connect.php";
?>

<?php
	ADOdb_Active_Record::SetDatabaseAdapter($db);
	 
    $email  	= isset( $_POST['email']) ? $_POST['email'] : '';
    $password  = isset( $_POST['password']) ? $_POST['password'] : '';

    $sql = "SELECT * FROM `member` where email = '".$email."' and password = '".$password."' and status = '1' ";
	$db->setFetchMode(ADODB_FETCH_ASSOC);
	$stmt = $db->Prepare($sql);
    $rs = $db->Execute($stmt);
    
	$email = [];
	$name  = [];
    $role  = [];
    $_SESSION["email"]  = "";
    $_SESSION["name"]  	= "";
    $_SESSION["role"]   = "";
    $_SESSION["authen"]   = "N";

    $i = 0 ;
    $email[0] = "";
    $name[0] = "";
    $role[0] = "";

    if ($rs != "") {
		foreach ($rs as $row) 
		{
			$email[$i] = $row["email"];
			$name[$i] = $row["name"] ;
			$role[$i] = $row["role"] ;
            $i++;
        }
        if($email[0]!= ""  and $name[0] != "" and $role[0] != "" ){
        $_SESSION["email"]  = $email[0];
		$_SESSION["name"]  	= $name[0];
        $_SESSION["role"]   = $role[0];
        $_SESSION["authen"]   = "Y";
        }
    }

    if( $_SESSION["authen"] == "Y")
    {
        echo "<script>

        window.location.href='../admin/';

        </script>";

        exit(0);
    }else{
        echo "<script>
        alert('ไม่สามารถเข้าระบบได้กรุณาตรวจสอบ อีเมลและรหัสผ่านในการเข้าใช้');
        window.location.href='../home/login.php';
        </script>";
        exit(0);
    }

?>

