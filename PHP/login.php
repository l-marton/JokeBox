<?php
session_start();
$bejelentkezve = isset($_SESSION['username']);
?>
<h2>Bejelentkezés</h2>

<form action="valid_login.php" method="post">
    Felhasználónév: <input name="username"> <br>
    Jelszó: <input type="password" name="password"> <br>
    <input type="submit" value="Bejelentkezés">
</form>

<?php if(isset($_GET['hiba'])): ?>
    <?php $h = $_GET['hiba']; ?>
        <?php if($h == 'rossz'): ?>
            Hibás felhasználónév vagy jelszó!
        <?php else: ?>
            Ismeretlen hiba! Hibakód: <?=$_GET['hiba']?>
    <?php endif ?>
<?php endif ?>



<h3>Még nincs fiókod? </h3>
<h3>Semmi gond, a regisztráció elérhető a gombra kattintva:</h3> 
<form action="register.php">
    <input type="submit" value="Regisztráció">
</form>
<br>
<br>
<form action="index.php">
    <input type="submit" value="Vissza a főoldalra">
</form>