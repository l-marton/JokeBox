<form action="valid_reg.php" method="post">
    Teljes név: <input name="name"> <br>
    Jelszó: <input type="password" name="password1"> <br>
    Jelszó újra: <input type="password" name="password2"> <br>
    Email: <input name="email"> <br>
    <input type="submit" value="Regisztráció">
</form>

<?php if(isset($_GET['hiba'])): ?>
    <?php $h = $_GET['hiba']; ?>
    <?php if($h == 'jelszo'): ?>
        Jelszavak nem egyeznek!
    <?php elseif($h == 'email'): ?>
        Hibás email formátum.
    <?php elseif($h == 'felhasznalonev'): ?>
        Helytelen név.
    <?php elseif($h == 'letezik'): ?>
        A név már foglalt.
    <?php else: ?>
        Ismeretlen hiba! Hibakód: <?=$_GET['hiba']?>
    <?php endif ?>
<?php endif ?>

<form action="index.php">
    <input type="submit" value="Vissza a főoldalra">
</form>