<?php
session_start();

$param['email']       = $_POST['email'];
$param['name']        = $_POST['name'];
$param['dateofbirth'] = $_POST['dateofbirth'];
$param['gender']      = $_POST['gender'];
$param['address']     = $_POST['address'];
$param['certificate'] = $_POST['certificate'];

$res = checked($param);

if ($res) {
    header('location: start.php');
    exit;

} else {
    header('location: confirm.php');
    exit;    

}

function checked($param){
        $error_flg = false;
	if(!preg_match("/^[a-zA-Z ]*$/",$param['email'])){
		$_SESSION['email'] = $param['email'];
                if (isset( $_SESSION['error'])) {
                     $_SESSION['error'] = "";
                }
	}else{
		$_SESSION['email'] = $param['email'] ;
                $_SESSION['error'] = "this input error";
		$error_flg = true;
		
	}

	if(isset($param['name'])){
                $_SESSION['name'] = $param['name'];
                /*if (isset( $_SESSION['error']['name'])) {
                     $_SESSION['error']['name'] = "";
                }*/
        }else{
                $_SESSION['name'] = $param['name'] ;
                $error_flg = true;

        }

        return $error_flg;

}



?>





