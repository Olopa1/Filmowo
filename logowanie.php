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
		if($_GET['dzialanie']=="1"){
			$db = new SQLite3('sklep.db');
			if(!$db){ print $db->lastErrorMsg();}
			$login_id = "select ID,Nazwa_uzytkownika,Prawa_uzytkownika from Uzytkownicy";
			$autoryzacja = 0;
			$rezultat_login = $db->query($login_id);
			while($login_db = $rezultat_login->fetchArray()){
				$id = $login_db[0];
				$login = $login_db[1];
				$dostep_id = $login_db[2];
				if($_POST['nazwa_uzytkownika']==$login){
					//print "działa";
					$wyciagnij_haslo = "select haslo from Uzytkownicy where id = $id and nazwa_uzytkownika like '$login' "; 
					$wyciagnij_dostep = "select Nr_dostepu from Prawa_uzytkownika where id = $dostep_id "; 
					$rezultat_haslo = $db->query($wyciagnij_haslo);
					$rezultat_dostep = $db->query($wyciagnij_dostep);
					$dostep = $rezultat_dostep->fetchArray();
					$haslo = $rezultat_haslo->fetchArray();
					if(password_verify($_POST["haslo"], $haslo[0])){
						$autoryzacja = 1;
					}
					break;
				}
				else{ 
					continue;
				}
			}
			if($autoryzacja == 1){	
				$_SESSION['autoryzacja'] = 1;
				$_SESSION['nazwa_uzytkownika'] = $login;
				$_SESSION['id_uzytkownika'] = $id;
				$_SESSION['dostep'] = $dostep[0];
				header("location:strona_glowna.php");
				//print "Zostałeś zalogowany jako $login";
			}
			$db->close();
		}
		else if($_GET['dzialanie']=="2"){
			session_destroy();
		}
	?>
	<div id="simplecookienotification_v01"
		style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67) none repeat scroll 0% 0%; border-image: none 100% / 1 / 0 stretch; border-style: outset none none; border-width: 2px 0px 0px; border-color: rgb(160, 178, 192); text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px; box-shadow: rgba(0, 0, 0, 0.8) 0px 0px 4px 1px;">
		<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
			<span id="simplecookienotification_v01_powiadomienie">Ta strona używa plików cookies.</span><span
				id="br_pc_title_html"><br></span>
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
	<script
		type="text/javascript">function simplecookienotification_v01_create_cookie(name, value, days) { if (days) { var date = new Date(); date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); var expires = "; expires=" + date.toGMTString(); } else var expires = ""; document.cookie = name + "=" + value + expires + "; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for (var i = 0; i < ca.length; i++) { var c = ca[i]; while (c.charAt(0) == " ") c = c.substring(1, c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length); } return null; } var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01"); if (simplecookienotification_v01_jest == 1) { document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>
	<!--Powyższe kilka linijek jest wygenerowane przez generator cookies-->

		<div id="form_log_rej" class="wlasciwosci">
			<?php if(isset($autoryzacja) and $autoryzacja != 1){ print "Niepoprawny login lub hasło";} ?>
			<?php if($_GET['dzialanie']=="2"){ print "Zostałeś wylogowany";} ?>
			<form method="post" action="logowanie.php?dzialanie=1">
			<fieldset>
				<legend>Logowanie</legend>
				<label>Nazwa użytkownika</label>
				<br>
				<input type="text" name="nazwa_uzytkownika" size="50" maxlength="30" class="pole_wpisywania" placeholder="Nazwa użytkownika"/>
				<br>
				<label>Hasło</label><br>
				<input type="password" name="haslo" class="pole_wpisywania" placeholder="hasło"/>
			</fieldset>
			<br>
				<input type="reset" value="Wyczyść formularz" id="przycisk" />

				<button type="submit" id="przycisk">Zaloguj</button>
			</form>		
			<br>
			<a href="strona_glowna.php"><button id="przycisk">Powrót do strony głównej</button></a>
		</div>


	
	<div id="stopka" class="wlasciwosci" style="width:50%;"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>

</body>

</html>