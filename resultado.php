<?php
session_start();    

if(!empty($_POST['resposta'])){
    $resposta = $_POST['resposta'];
    $resultado = $_SESSION['resultado'];
    if($resposta == $resultado){
        echo "YOU ARE A HUMAM!";
    }else{
        echo "YOU ARE NOT A HUMAM!";
    }
}
?>