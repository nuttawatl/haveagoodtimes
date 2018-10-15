<?php




if($process == "add"){
    if(checkbeforesave() == true){

    }else{}
}
else if($process == "update")
{
    if(checkbeforesave() == true){

    }else{}
}
else{}

function checkbeforesave(){
try{
    $provinces  = $_POST["provinces"];
    $departure  = $_POST["departure"];
    $arrival    = $_POST["arrival"];
    $cost	    = $_POST["cost"];
    $img_title  = $_POST["img_title"];
    $img_banner = $_POST["img_banner"];
    $status     = $_POST["status"];
    $texteditor = $_POST["texteditor"];
}
catch (Exception $e){

    return false;
}
    return false;
}














?>