<!DOCTYPE html>
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
	<link rel="stylesheet" href="./css/form.css" type="text/css">
	<link rel="stylesheet" href="./css/main.css" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com">	<!-- linia 10,11,12 służy do importowania czcionki-->
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
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
	else if( isset($_SESSION['autoryzacja']) and $_SESSION['autoryzacja']==1){
		$nazwa_uzytkownika = $_SESSION['nazwa_uzytkownika'];
		$id = $_SESSION['id_uzytkownika'];
		$autoryzacja = 1;
		$dostep = $_SESSION['dostep'];	
		//print $_SESSION['autoryzacja'];
	}
	else{
		$nazwa_uzytkownika = " ";
		$id = " ";
		$autoryzacja = 0;
		$dostep = 4;
		//print "nie działa";
	}
	?>
<div id="simplecookienotification_v01" style="display: block; z-index: 99999; min-height: 35px; width: 100%; position: fixed; background: rgb(43, 54, 67) none repeat scroll 0% 0%; border-image: none 100% / 1 / 0 stretch; border-style: outset none none; border-width: 2px 0px 0px; border-color: rgb(160, 178, 192); text-align: center; right: 0px; color: rgb(119, 119, 119); bottom: 0px; left: 0px; box-shadow: rgba(0, 0, 0, 0.8) 0px 0px 4px 1px;">
<div style="padding:10px; margin-left:15px; margin-right:15px; font-size:14px; font-weight:normal;">
<span id="simplecookienotification_v01_powiadomienie">Ta strona używa plików cookies.</span><span id="br_pc_title_html"><br></span>
<a id="simplecookienotification_v01_polityka" href="http://jakwylaczyccookie.pl/polityka-cookie/" style="color: rgb(160, 178, 192);">Polityka Prywatności</a><span id="br_pc2_title_html"> &nbsp;&nbsp; </span>
<a id="simplecookienotification_v01_info" href="http://jakwylaczyccookie.pl/jak-wylaczyc-pliki-cookies/" style="color: rgb(160, 178, 192);">Jak wyłączyć cookies?</a><span id="br_pc3_title_html"> &nbsp;&nbsp; </span>
<a id="simplecookienotification_v01_info2" href="https://nety.pl/cyberbezpieczenstwo" style="color: rgb(160, 178, 192);">Cyberbezpieczeństwo</a><div id="jwc_hr1" style="height: 10px; display: none;"></div>
<a id="okbutton" href="javascript:simplecookienotification_v01_create_cookie('simplecookienotification_v01',1,1);" style="position: absolute; background: rgb(160, 178, 192) none repeat scroll 0% 0%; color: rgb(255, 255, 255); padding: 5px 15px; text-decoration: none; font-size: 12px; font-weight: normal; border: 0px solid rgb(43, 54, 67); border-radius: 0px; top: 5px; right: 5px;">ROZUMIEM</a><div id="jwc_hr2" style="height: 10px; display: none;"></div>
</div>
</div>
<script type="text/javascript">var galTable= new Array(); var galx = 0;</script><script type="text/javascript">function simplecookienotification_v01_create_cookie(name,value,days) { if (days) { var date = new Date(); date.setTime(date.getTime()+(days*24*60*60*1000)); var expires = "; expires="+date.toGMTString(); } else var expires = ""; document.cookie = name+"="+value+expires+"; path=/"; document.getElementById("simplecookienotification_v01").style.display = "none"; } function simplecookienotification_v01_read_cookie(name) { var nameEQ = name + "="; var ca = document.cookie.split(";"); for(var i=0;i < ca.length;i++) { var c = ca[i]; while (c.charAt(0)==" ") c = c.substring(1,c.length); if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length); }return null;}var simplecookienotification_v01_jest = simplecookienotification_v01_read_cookie("simplecookienotification_v01");if(simplecookienotification_v01_jest==1){ document.getElementById("simplecookienotification_v01").style.display = "none"; }</script>	
<!--Powyższe kilka linijek jest wygenerowane przez generator cookies-->
		<div id="panel_ster" class="wlasciwosci">
			<div id="logo" class="wlasciwosci_sterowania"><img src="./grafiki/logo.png" width="40%"></div>
			
			<div id="wyszukiwarka" class="wlasciwosci_sterowania">
			<form action="pokaz_film.php" method="post">
			<input type="text" name="szukanie" placeholder="Wpisz tytuł szukanego filmu ..." id="pole_szukania"> 
			<button id="przycisk_szukaj">SZUKAJ</button>
			</form>
			</div>
			
			<div id="log_rej" class="wlasciwosci_sterowania"><?php if($autoryzacja == 0){ print '<a href="logowanie.php?dzialanie=0">Logowanie</a>';} 
			else{print 'Zostałeś zalogowany jako '.$nazwa_uzytkownika.' / <a href="logowanie.php?dzialanie=2">wyloguj</a>';}?> <!--/ <a href="rejestracja.php">Rejestracja</a>--></div>
			</div>	
		
		<div id="kontener">	
			
			<div id="menu" class="wlasciwosci">
				<a href="strona_glowna.php"><div class="pozycja_menu">Strona główna</div></a>
				<a href="pokaz_film.php"><div class="pozycja_menu">Wszystkie filmy</div></a>
				<a href="pokaz_posiadane.php"><div class="pozycja_menu">Posiadane filmy</div></a>
				<a href="konto.php?wyswietl=zarz_kont&akcja=nic"><div class="pozycja_menu">Konto</div></a>
				<a href="polityka.php"><div class="pozycja_menu">Polityka prywatności</div></a>
				<a href="autorzy.php"><div class="pozycja_menu">O twórcach</div></a>
				<a href="koszy.php"><div class="pozycja_menu" ><img id="koszyk" src="./grafiki/koszyk_bez_klik.png" onmouseover="this.src='./grafiki/koszyk_klik.png'" onmouseout="this.src='./grafiki/koszyk_bez_klik.png'"> </div></a>
			</div>
			<div class="wlasciwosci_koszyk"> 
			<?php
			$db = New SQLite3('sklep.db');
			$pytnie_saldo = "select saldo from uzytkownicy where ID = $id";
			$wyswietl_saldo = $db->query($pytnie_saldo);
			$saldo = $wyswietl_saldo -> fetchArray();
			if(isset($_GET['akcja']) and $_GET['akcja'] == "usun"){
				$usun_zapytanie = "delete from Zamowienie where ID='$_GET[id_zamowienia]'";
				$usun_zam = $db -> prepare($usun_zapytanie);
				$usun_zam = $usun_zam -> execute();
			}
			else if(isset($_GET['akcja']) and $_GET['akcja'] == "kup"){
				$wyswietl_kosz_kup = "select ID,ID_uzytkownik,ID_film from Zamowienie where ID_uzytkownik = $id ";
				$wykonaj_kosz_kup = $db -> query($wyswietl_kosz_kup);
				$calkowita_cena_kup = 0;
				$ilosc_produktow = 0;
				while($rzad_kup = $wykonaj_kosz_kup -> fetchArray()){
					$pytanie_film_kup = "select ID,Cena from Filmy where ID = $rzad_kup[2]";
					$wykonaj_film_kup = $db -> query($pytanie_film_kup);
					$rzad_film_kup = $wykonaj_film_kup ->fetchArray();
					$ilosc_produktow++;
					$id_film_tab[] = $rzad_kup[2];
					$id_zam[] = $rzad_kup[0];
					$calkowita_cena_kup += $rzad_film_kup[1];
				}
				$calkowity_koszt = $saldo[0]-$calkowita_cena_kup;
				if($calkowity_koszt < 0){
					print "zbyt mały budżet doładuj konto ";
				}
				else if($calkowity_koszt > 0){
					for($i=0;$i<$ilosc_produktow;$i++){
						$wstaw_posiadane = "insert into Posiadane_filmy(ID_uzytkownik,ID_film) values($id,$id_film_tab[$i])";
						$usun_zamowienie = "delete from Zamowienie where ID=$id_zam[$i]";
						$zmien_saldo = "update Uzytkownicy set saldo=$calkowity_koszt";
						$dodaj_posiadny_film = $db-> prepare($wstaw_posiadane);
						$usun_zam_film = $db-> prepare($usun_zamowienie);
						$zmien_saldo_przy = $db-> prepare($zmien_saldo);
						$zmien_saldo_przy = $zmien_saldo_przy -> execute();
						$dodaj_posiadny_film = $dodaj_posiadny_film -> execute();
						$usun_zam_film = $usun_zam_film -> execute();
						
					}
				}
			}
			if(isset($_GET['id_film'])){
				$wstaw_kosz = "insert into Zamowienie(ID_uzytkownik,ID_film) values($id,'$_GET[id_film]')";
				$wstaw_kosz = $db -> prepare($wstaw_kosz);
				$wstaw_kosz = $wstaw_kosz -> execute();
			}
			$wyswietl_kosz = "select ID,ID_uzytkownik,ID_film from Zamowienie where ID_uzytkownik = $id ";
			$wykonaj_kosz = $db -> query($wyswietl_kosz);
			$calkowita_cena = 0;
			while($rzad = $wykonaj_kosz -> fetchArray()){
				$pytanie_film = "select ID,Nazwa,Cena from Filmy where ID = $rzad[2]";
				$wykonaj_film = $db -> query($pytanie_film);
				$rzad_film = $wykonaj_film ->fetchArray();
				$calkowita_cena += $rzad_film[2];
			?>
			<div class="produkt"><div class="produkty">Nazwa: "<?php print $rzad_film[1] ?>" </div><div class="produkty_cena">Cena: <?php print $rzad_film[2] ?> Cebulionów <a href="koszy.php?akcja=usun&id_zamowienia=<?php print $rzad[0]?>"><button id="przycisk" >Usuń</button></a></div>  </div>
			<?php 
			}	
			$db->close();
			?>
			<div id="cena_calkowita">Cena do zapłacenia: <?php print $calkowita_cena; ?> Cebulionów<br> <a href="koszy.php?akcja=kup"><button id="przycisk">Zapłać</button></div>
			</div>

			<div id="stopka" class="wlasciwosci"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>
			
		</div>
	</body>
</html>