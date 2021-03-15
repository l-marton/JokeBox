<h1>JokeBox - Légy a legviccesebb</h1>
<p>
    Kérlek a játék elindításához jelentkezz be! <br>
    Lorem impusum, Lorem impusum, Lorem impusum ,Lorem impusum ,Lorem impusum
</p>
<br>
<form action="login.php">
    <input type="submit" value="Bejelentkezés">
</form>

<form action="register.php">
    <input type="submit" value="Regisztráció">
</form>

<?php
session_start();
$bejelentkezes_url = "login.php";
$bejelentkezve = isset($_SESSION['username']);
if($bejelentkezve == NULL)
	{$admin = false;}
else
	{$admin = true;}

if($bejelentkezve): ?>
	A belépés sikeres volt, Üdv az oldalon <?=$_SESSION['username']?><br>
	<?php $jelentkezes_url = "jelentkezes.php";
endif ?>


<?php if($bejelentkezve): ?>
	<form action="logout.php" method="post">
		<input type="submit" value="Kijelentkezés">
	</form>
<?php endif ?>
