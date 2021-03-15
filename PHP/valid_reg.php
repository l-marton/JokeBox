<?php
function felhasznaloLetezik($name){
    $adat = json_decode(file_get_contents('users.json'));
    return isset($adat->$name);
}

function regisztral($name,$taj,$adress,$password,$email){
    $adatok = json_decode(file_get_contents('users.json'));
    $adatok->$name = (object)[
        "name" => $name,
        "password"=> $password,
        "email"=> $email,
        "id"=> $name,
        "admin" => false
    ];
    file_put_contents('users.json', json_encode($adatok, JSON_PRETTY_PRINT));
}

function hiba($hibakod){
    header('Location: register.php?hiba=' . $hibakod);
}


session_start();

$un = trim($_POST['name']);
$p1 = trim($_POST['password1']);
$p2 = trim($_POST['password2']);
$email = trim($_POST['email']);


if(!felhasznaloLetezik($un))
{
    if(strlen($un) > 0)
    {
        if(strlen($email) > 0 && filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            if($p1 == $p2 && strlen($p1) > 0)
            {
                regisztral($un,$taj,$adress,$p1,$email);
                $_SESSION['username'] = $un;
                header('Location: login.php'); 
            }
            else
            {
                hiba('jelszo');
            } 
        }
        else
        {
            hiba('email');
        }
    }
    else
    {
        hiba('felhasznalonev');
    }
}
else
{
    hiba('letezik');
}
?>




