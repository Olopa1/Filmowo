<!doctype html>
<html>

<head>
	<title>Filmowo</title>
	<meta name="description" content="Jest to strona wirtualnego przedsiębiorstwa, która zajmuje się wypożyczaniem filmów.">
	<meta name="keywords" content="Przedsiębiorstwo,Filmy,wypożyczalnia,wirtualne,praktyki,recenzje">
	<meta name="robots" content="nofollow">
	<meta name="robots" content="noindex">
	<meta charset="utf-8">
	<link rel="shortcut icon" href="./grafiki/ikona.png">
	<link rel="stylesheet" href="./css/pokaz_film.css" type="text/css">
	<link rel="stylesheet" href="./css/main.css" type="text/css">
	<link rel="stylesheet" href="./css/form.css" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com"> <!-- linia 10,11,12 służy do importowania czcionki-->
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<style>
	body{
	background-image:url(./grafiki/tlo_form.png);
	background-repeat:no-repeat;
	background-size:cover;
	}
	</style>
</head>

<body>
	<?php 
		session_start();
	if(empty($_SESSION['autoryzacja']) or $_SESSION['autoryzacja'] != 1){
		
	?>
	
	<div id="form_log_rej" class="wlasciwosci">
	Nie masz uprawnień by przebywać na tej stronie, <a href="logowanie.php?dzialanie=0">zaloguj</a> się lub wróć na <a href="strona_glowna.php">stronę główną</a>.
	</div>
		</body>
	</html>
	<?php	
		exit();
	}		
	else{
		$poprawnosc_hasla = Null;
		if($_GET['dzialanie']=='1'){
			if($_POST['haslo']==$_POST['haslo_sprawdz'] and $_POST['haslo']!==""){
				$db = new SQLite3('sklep.db');
				if(!$db){ print $db->lastErrorMsg();}
				$rekordy = "SELECT count(*) from Uzytkownicy where ID<>0";
				$wykonaj = $db->query($rekordy);
				$row = $wykonaj->fetchArray();
				$id_uzytkownika = $row[0] + 1;
				$haslo = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
				$wstaw = "insert into Uzytkownicy(Imie,Nazwisko,Data_urodzenia,Haslo,Plec,Adres_email,Nazwa_uzytkownika) values('$_POST[imie]','$_POST[nazwisko]','$_POST[data_urodzenia]','$haslo','$_POST[plec]','$_POST[adres_email]','$_POST[nazwa_uzytkownika]');";
				$wstaw = $db->prepare($wstaw);
				$wstaw = $wstaw->execute();
				$poprawnosc_hasla = 1;
				$db->close();
			}
			else{
				$poprawnosc_hasla = 0;
			}
		}
		
	}	
	?>
	<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67) none repeat scroll 0% 0%; border-image: none 100% / 1 / 0 stretch; border-style: outset none none; border-width: 2px 0px 0px; border-color: rgb(160, 178, 192); text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px; box-shadow: rgba(0, 0, 0, 0.8) 0px 0px 4px 1px;">
		<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
			<span id="simplecookienotification_v01_powiadomienie">Ta strona używa plików cookies.</span>
				<span id="br_pc_title_html"><br></span>
			<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/"
				style="color: rgb(160, 178, 192);">Polityka Prywatności</a><span id="br_pc2_title_html"> &nbsp;&nbsp;
			</span>
			<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/"
				style="color: rgb(160, 178, 192);">Jak wyłączyć cookies?</a><span id="br_pc3_title_html"> &nbsp;&nbsp;
			</span>
			<a id="simplecookienotification_v01_info2" href="https://nety.pl/cyberbezpieczenstwo"
				style="color: rgb(160, 178, 192);">Cyberbezpieczeństwo</a>
			<div id="jwc_hr1" style="height: 10px; display: none;"></div>
			<a id="okbutton"
				href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,1);"
				style="position: absolute; background: rgb(160, 178, 192) none repeat scroll 0% 0%; color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(43, 54, 67); border-radius: 0px; top: 5px; right: 5px;">ROZUMIEM</a>
			<div id="jwc_hr2" style="height: 10px; display: none;"></div>
		</div>
	</div>
	<script type="text/javascript">var galTable = new Array(); var galx = 0;</script>
	<script type="text/javascript">function simplecookienotification_v01_create_cookie(name, value, days) { if (days) { var date = new Date(); date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); var expires = "; expires=" + date.toGMTString(); } else var expires = ""; document.cookie = name + "=" + value + expires + "; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for (var i = 0; i < ca.length; i++) { var c = ca[i]; while (c.charAt(0) == " ") c = c.substring(1, c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length); } return null; } var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01"); if (simplecookienotification_v01_jest == 1) { document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>
	<!--Powyższe kilka linijek jest wygenerowane przez generator cookies-->

		<div id="form_log_rej" class="wlasciwosci">
			<?php
			if($poprawnosc_hasla == 0 and $poprawnosc_hasla!== Null){
				print "Coś poszło nie tak sprawdź poprawność haseł lub wypróbuj inną nazwę użytkownika";
			}
			else if($poprawnosc_hasla == 1){
				print "Użytkownik został zarejstrowany poprawnie";
			}
			?>
			<form method="post" action="rejestracja.php?dzialanie=1">
			
			<fieldset>
				<legend>Dodawanie użytkownika</legend>
				<label>Imię</label>
				<br>
				<input type="text" name="imie" size="50"  maxlength="30" class="pole_wpisywania" placeholder="Imię" requaierd/>
				<br>
				<label>Nazwisko</label>
				<br>
				<input type="text" name="nazwisko" size="50" maxlength="30" class="pole_wpisywania" placeholder="Nazwisko"/>
				<br>
				<label>Nazwa użytkownika</label>
				<br>
				<input type="text" name="nazwa_uzytkownika" size="50" maxlength="30" class="pole_wpisywania" placeholder="Nazwa użytkownika"/>
				<br>
				<label>Adres emaik</label>
				<br>
				<input type="email" name="adres_email" size="50" maxlength="30" class="pole_wpisywania" placeholder="E-mail"/>
				<br>
				<label>Data urodzenia</label>
				<br>
				<input type="date" name="data_urodzenia" size="50" maxlength="30" class="pole_wpisywania" />
				<br>
				<label>Płeć</label>
				<br>
				<select name="plec" class="pole_wpisywania" placeholder="płeć">
					<option value="K">Kobieta</option>
					<option value="M">Mężczyzna</option>
					<option value="I">Inne</option>
					<option value="N/D">Nie chcę podawać</option>

				</select>
				<br>
				<label>Hasło</label><br>
				<input type="password" name="haslo" class="pole_wpisywania" placeholder="hasło"/>
				<br>
				<label>Powtórz hasło</label><br>
				<input type="password" name="haslo_sprawdz" class="pole_wpisywania" placeholder="Powtórz hasło"/>
				<br>
			</fieldset>
			<br>
				<input type="reset" value="Wyczyść formularz" id="przycisk" />

				<button type="submit" id="przycisk">Dodaj użytkownika</button>
			</form>		
			<br>
			<a href="strona_glowna.php"><button id="przycisk">Powrót do strony głównej</button></a>
		</div>


	
	<div id="stopka" class="wlasciwosci" style="width:50%;"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>

</body>

</html>