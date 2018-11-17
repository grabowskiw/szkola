<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Weterynarz</title>
	<link href="weterynarz.css" rel="stylesheet">
</head>
<body>
	<div class="baner">
		<h1>GABINET WETERYNARYJNY</h1>
	</div>
	<div class="lewy">
		<h2>PSY</h2>
		<?php
			$polaczenie = mysqli_connect('localhost', 'root', 'vertrigo', 'egz_weterynarz');
			$zapytanie1 = mysqli_query($polaczenie, "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE `rodzaj` = '1'");
			while($row = mysqli_fetch_array($zapytanie1)) {
				echo "<p>".$row['id']." ".$row['imie']." ".$row['wlasciciel']."</p>";
			}
		?>
		<h2>KOTY</h2>
		<?php
			$zapytanie2 = mysqli_query($polaczenie, "SELECT `id`, `imie`, `wlasciciel` FROM `zwierzeta` WHERE `rodzaj` = '2'");
			while($row = mysqli_fetch_array($zapytanie2)) {
				echo "<p>".$row['id']." ".$row['imie']." ".$row['wlasciciel']."</p>";
			}
		?>
	</div>
	<div class="srodkowy">
		<h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
		<?php
			$zapytanie3 = mysqli_query($polaczenie, "SELECT `imie`, `telefon`, `szczepienie`, `opis` FROM `zwierzeta`");
			while($row = mysqli_fetch_array($zapytanie3)) {
				echo "<p>Pacjent: ".$row['imie']."<br>Telefon właściciela: ".$row['telefon'].", ostatnie szczepienie: ".$row['szczepienie'].", informacje: ".$row['opis']."</p><hr>";
			}
		?>
	</div>
	<div class="prawy">
		<h2>WETERYNARZ</h2>
		<a href="logo-mini.jpg">
			<img src="logo-mini.jpg">
		</a>
		<p>Krzysztof Nowakowski, lekarz weterynarii</p>
		<h2>GODZINY PRZYJĘĆ</h2>
		<table>
			<tr>
				<td>Poniedziałek</td>
				<td>15:00 - 19:00</td>
			</tr>
			<tr>
				<td>Wtorek</td>
				<td>15:00 - 19:00</td>
			</tr>
		</table>
	</div>
</body>
</html>