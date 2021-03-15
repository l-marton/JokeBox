<?php
function felhasznaloLetezik($name){
    $adat = json_decode(file_get_contents('users.json'));
    return isset($adat->$name);
}

function jelszoEgyezik($name, $password){
    $felhasznalo = json_decode(file_get_contents('users.json'))->$name;
    return ($password == $felhasznalo->password);
}

session_start();

if(felhasznaloLetezik($_POST['username'])){
    if(jelszoEgyezik($_POST['username'], $_POST['password'])){
        $_SESSION['username'] = $_POST['username'];
        header('Location: index.php');
    }else{
        header('Location: login.php?lossz');
    }
}else{
    header('Location: login.php?rossz');
}
?>