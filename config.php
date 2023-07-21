<?php

session_start();

function set_msg($msg){
    $_SESSION['msg'] = $msg;
}
function display_msg(){
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
}