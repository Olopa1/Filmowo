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
	<link rel="stylesheet" href="./css/form.css" type="text/css">
	<link rel="stylesheet" href="./css/pokaz_film.css" type="text/css">
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
			else{print 'Zostałeś zalogowany jako '.$nazwa_uzytkownika.' / <a href="logowanie.php?dzialanie=2">wyloguj</a>';}?>  <!--/ <a href="rejestracja.php">Rejestracja</a>--></div>
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
			
			
			<div id="wyswietl_narz_admin" class="wlasciwosci">
				<div class="tytul">Podgląd narzędzia</div>
				<?php 
				
				if(isset($_GET['wyswietl']) and $_GET['wyswietl'] == "zarz_kont"){
					$db = new SQLite3('sklep.db');
					if(!$db){ print $db->lastErrorMsg();}
					
					if(isset($_GET['id_uzyt'])){
						$id_zmiana = $_GET['id_uzyt'];
					}
					else{
						$id_zmiana = $id;
					}
					
					if($_GET['akcja']=="zmien_dane"){
						$zmien_dane_uzytkownika = "update Uzytkownicy set Imie='$_POST[imie]', Nazwisko='$_POST[nazwisko]', Data_urodzenia='$_POST[data_urodzenia]', Plec='$_POST[plec]',Adres_email='$_POST[adres_email]', Nazwa_uzytkownika='$_POST[nazwa_uzytkownika]',Prawa_uzytkownika='$_POST[prawa]' WHERE ID='$_GET[zmien_id]'";
						$zmien_dane = $db->prepare($zmien_dane_uzytkownika);
						$zmien_dane = $zmien_dane->execute();
					}
					
					
					else if($_GET['akcja']=="usun_dane"){
						$usun_dane_uzytkownika = "delete from uzytkownicy where ID='$_GET[uzytkownik_id]'";
						$usun_dane = $db->prepare($usun_dane_uzytkownika);
						$usun_dane = $usun_dane->execute();
					}
					
					$pytanie_dane_uzytkownika = "select Imie, Nazwisko, Data_urodzenia, Plec,Adres_email, Nazwa_uzytkownika ,Prawa_uzytkownika,Saldo from Uzytkownicy where ID=$id_zmiana";
					$wykonaj = $db->query($pytanie_dane_uzytkownika);
					$dane_uzytkownika = $wykonaj->fetchArray();
					
					
					
					$imie = $dane_uzytkownika[0];
					$nazwisko = $dane_uzytkownika[1];
					$data_urodzenia = $dane_uzytkownika[2];
					$plec = $dane_uzytkownika[3];
					$adres_email = $dane_uzytkownika[4];
					$nazwa_uzytkownika = $dane_uzytkownika[5];
					$prawa_uzytkownika = $dane_uzytkownika[6];
					$saldo = $dane_uzytkownika[7];
					$_SESSION['nazwa_uzytkownika']=$nazwa_uzytkownika;
					$prawa_uzytkownika_zap = "select opis from Prawa_uzytkownika where id=$prawa_uzytkownika";
					$wykonaj_prawa = $db->query($prawa_uzytkownika_zap);
					$opis_prawa = $wykonaj_prawa->fetchArray();
					
				?>
				<form method="post" action="konto.php?akcja=zmien_dane&wyswietl=zarz_kont&zmien_id=<?php print $id_zmiana; ?>">
			
			<fieldset>
				<legend>Dane użytkownika</legend>
				<div>Saldo konta: <?php print $saldo; ?> cebulionów</div>
				<br>
				<label>Imię</label>
				<br>
				<input type="text" name="imie" size="50"  maxlength="30" class="pole_wpisywania" placeholder="Imię" value="<?php print $imie; ?>"/>
				<br>
				<label>Nazwisko</label>
				<br>
				<input type="text" name="nazwisko" size="50" maxlength="30" class="pole_wpisywania" placeholder="Nazwisko" value="<?php print $nazwisko; ?>"/>
				<br>
				<label>Nazwa użytkownika</label>
				<br>
				<input type="text" name="nazwa_uzytkownika" size="50" maxlength="30" class="pole_wpisywania" placeholder="Nazwa użytkownika" value="<?php print $nazwa_uzytkownika; ?>"/>
				<br>
				<label>Adres email</label>
				<br>
				<input type="email" name="adres_email" size="50" maxlength="30" class="pole_wpisywania" placeholder="E-mail" value="<?php print $adres_email; ?>"/>
				<br>
				<label>Data urodzenia</label>
				<br>
				<input type="date" name="data_urodzenia" size="50" maxlength="30" class="pole_wpisywania" value="<?php print $data_urodzenia; ?>"/>
				<br>
				<label>Płeć</label>
				<br>
				<select name="plec" class="pole_wpisywania" placeholder="płeć">
					<option value="K" <?php if($plec == "K"){print "selected";} ?>>Kobieta</option>
					<option value="M" <?php if($plec == "M"){print "selected";} ?>>Mężczyzna</option>
					<option value="I" <?php if($plec == "I"){print "selected";} ?>>Inne</option>
					<option value="N/D" <?php if($plec == "N/D"){print "selected";} ?>>Nie chcę podawać</option>
				</select>
				<br>
				<label>Poziom dostępu</label>
				<br>
				<div class="wlasciwosci" id="opis_praw">
				<?php print $opis_prawa[0]; ?>
				</div>
				<?php
				if($dostep == 0){
					print '<br>';
					print '<label>Zmiana dostępu</label>';
					print '<br>';		
					print '<select name="prawa" class="pole_wpisywania" placeholder="prawa">';
					
					$pytanie_wszystkie_prawa = "select id from Prawa_uzytkownika";
					$wykonaj_wszystkie_prawa = $db->query($pytanie_wszystkie_prawa);
					$nazwy_praw = array("Super administrator","Administrator","Moderator","Użytkownik");
					for($i=0;$i<4;$i++){
						$id_praw = $wykonaj_wszystkie_prawa->fetchArray();
						?>
							<option value="<?php print $id_praw[0]; ?>" <?php if($prawa_uzytkownika==$id_praw[0]){print "selected";} ?>> <?php print $nazwy_praw[$i]; ?> </option>
						<?php
						}
					}
					$db->close();
					?>
				</select>
			</fieldset>
			<br>

				<button type="submit" id="przycisk">Zmień dane</button>
			</form>		
				<?php
				}
				else if(isset($_GET['wyswietl']) and $_GET['wyswietl']=="zarz_kont_wszy"){
					
					$db = new SQLite3('sklep.db');
					$uzytkownicy = "select ID,Nazwa_uzytkownika,Imie,Nazwisko,Prawa_uzytkownika from Uzytkownicy";
					?>
					<div id="rama">
					<div id="ramaid">ID</div>
					<div id="ramanazwa">Nazwa użytkownika</div>
					<div id="ramaimie">Imię i nazwisko </div>
					<div id="ramaprawa">Prawa użytkownika</div>
					<div id="ramausun">Kasowanie</div>
					<div style="clear: both;"></div>
					<?php
					$wypisz = $db->query($uzytkownicy);
					while($wyciagnij_uzytkownicy = $wypisz->fetchArray()){
						$id_osoba = $wyciagnij_uzytkownicy[0];
						$nazwa_uzytkownika = $wyciagnij_uzytkownicy[1];
						$imie = $wyciagnij_uzytkownicy[2];
						$nazwisko = $wyciagnij_uzytkownicy[3];
						$prawa_uzytkownika = $wyciagnij_uzytkownicy[4];
						$zapytanie_prawa = "select Nr_dostepu from Prawa_uzytkownika where ID=$prawa_uzytkownika";
						$wykonaj_prawa = $db->query($zapytanie_prawa);
						$nr_prawa = $wykonaj_prawa->fetchArray();
				?>
					
					<div id="ramaid"><?php if(isset($id_osoba)){print $id_osoba;} ?> </div>
					<a href="konto.php?id_uzyt=<?php print $id_osoba ?>&wyswietl=zarz_kont&akcja=nic"><div id="ramanazwa"><?php if(isset($nazwa_uzytkownika)){ print $nazwa_uzytkownika;} ?> </div></a>
					<div id="ramaimie"><?php print $imie ; ?> <?php print $nazwisko; ?> </div>
					<div id="ramaprawa"><?php print $nr_prawa[0]; ?></div>
					<a href="konto.php?wyswietl=zarz_kont&akcja=usun_dane&uzytkownik_id=<?php print $id_osoba ?>"><div id="ramausun"> Usuń</div></a>
					<div style="clear: both;"></div>
		 
				<?php
					}
					print "</div>";
				}
				else if(isset($_GET['wyswietl']) and $_GET['wyswietl'] == "dodaj_film"){
					
					$db = new SQLite3("sklep.db"); 
					if(isset($_GET['film_dodaj_zmien']) and $_GET['film_dodaj_zmien']=="dodaj"){
						if ($_SERVER['REQUEST_METHOD'] == "POST") {				
							$photo = file_get_contents($_FILES['fname']['tmp_name']);
							$query = $db->prepare("insert into Filmy(Nazwa,Rodzaj_filmu,Obrazek,Cena,Data_dodania,Scenarzysta,Dlugosc_filmu,Opis_filmu,Grupa_wiekowa) values('$_POST[nazwa_filmu]','$_POST[gatunek_filmu]',:photo,'$_POST[cena]','$_POST[data_dodania]','$_POST[rezyser]','$_POST[dlugosc_filmu]','$_POST[opis_filmu]','$_POST[grupa_wiekowa]')");
							$query->bindValue(':photo',$photo,SQLITE3_BLOB);
							$result = $query->execute();
							$db->close();
						}
					}
					else if(isset($_GET['film_dodaj_zmien']) and $_GET['film_dodaj_zmien']=="zmien"){
						if ($_SERVER['REQUEST_METHOD'] == "POST") {				
							$photo = file_get_contents($_FILES['fname']['tmp_name']);
							$query = $db->prepare("update Filmy set Nazwa='$_POST[nazwa_filmu]',Rodzaj_filmu='$_POST[gatunek_filmu]',Obrazek=:photo,Cena='$_POST[cena]',Scenarzysta='$_POST[rezyser]',Dlugosc_filmu='$_POST[dlugosc_filmu]',Opis_filmu='$_POST[opis_filmu]',Grupa_wiekowa='$_POST[grupa_wiekowa]' where ID='$_GET[id_film]'");
							$query->bindValue(':photo',$photo,SQLITE3_BLOB);
							$result = $query->execute();
							$db->close();
						}
					}
					
				if(isset($_GET['akcja_film'])){
					$db = new SQLite3('sklep.db');
					if(!$db){ print $db->lastErrorMsg();}
					$zapytanie_filmy = "select Nazwa,Rodzaj_filmu,Cena,Data_dodania,Scenarzysta,Dlugosc_filmu,Opis_filmu,Grupa_wiekowa,ID from Filmy where ID='$_GET[id_film]'";
					$wykonaj_filmy = $db->query($zapytanie_filmy);
					$rzad = $wykonaj_filmy->fetchArray();
					$gatunek = $rzad[1];
					$rezyser = $rzad[4];
					$dlugosc_filmu = $rzad[5];
					$opis_filmu = $rzad[6];
					$grupa_wiekowa_film = $rzad[7];
					$data_dodania_film = $rzad[3];
					$id_film = $rzad[8];
				}
				?>
				<form method="post" enctype="multipart/form-data">
				<fieldset>
				<legend>Dodawanie filmu</legend>
				
				<br>
				<label>Nazwa filmu</label>
				<br>
				<input type="text" name="nazwa_filmu" size="50"  maxlength="30" class="pole_wpisywania" placeholder="Nazwa filmu" value="<?php if(isset($rzad[0])){print $rzad[0];} ?>" />
				<br>
				<label>Cena (cebuliony)</label>
				<br>
				<input type="number" step="0.01" min="0" name="cena" size="50" maxlength="30" class="pole_wpisywania" placeholder="Cena" value="<?php if(isset($rzad[2])){print $rzad[2];}?>" />
				<br>
				<label>Gatunek filmu</label>
				<br>
				<select class="pole_wpisywania" name="gatunek_filmu">
				<?php 
				$db = new SQLite3('sklep.db');
				$zapytanie_gatunki = "select ID,Nazwa_rodzaju from Rodzaje_filmu";
				$wykonaj = $db->query($zapytanie_gatunki);
				while($rzad = $wykonaj->fetchArray()){
					?>
					<option value="<?php print $rzad[0]; ?>" <?php if(isset($gatunek) and $gatunek == $rzad[0]){print "selected";}?>> <?php print $rzad[1]; ?> </option>
					<?php
				}
				$db->close();
				?>
				</select>
				<br>
				<label>Reżyser</label>
				<br>
				<input type="text" name="rezyser" size="50" maxlength="30" class="pole_wpisywania" placeholder="Imię i nazwisko" value="<?php if(isset($rezyser)){print $rezyser;}?>"/>
				<br>
				<label>Długość filmu</label>
				<br>
				<input type="text" name="dlugosc_filmu" size="50" maxlength="30" class="pole_wpisywania" placeholder="Długość filmu w formacie h:m" value="<?php if(isset($dlugosc_filmu)){print $dlugosc_filmu;}?>" />
				<br>
				<label>Opis filmu</label>
				<br>
				<textarea rows="10" cols="60" name="opis_filmu"> <?php if(isset($opis_filmu)){print $opis_filmu;}?> </textarea>
				<br>
				<label>Grupa wiekowa</label>
				<br>
				<select class="pole_wpisywania" name="grupa_wiekowa">
				<?php
				$grupa_wiekowa = array("7+","13+","16+","18+");
				for($i = 0;$i < 4; $i++){
				?>
					<option value="<?php print $grupa_wiekowa[$i]; ?>" <?php if(isset($grupa_wiekowa_film) and $grupa_wiekowa_film == $grupa_wiekowa[$i]){print "selected";}?>><?php print $grupa_wiekowa[$i]; ?></option>
				<?php
				}
				?>
				</select>
				<br>
				<label>Okładka filmu</label>
				<br>
				<input type="file" name="fname" accept=".png">
				<br>
				<label>Data dodania</label>
				<br>
				<input type="date" name="data_dodania" size="50" maxlength="30" class="pole_wpisywania" value="<?php if(isset($data_dodania_film)){print $data_dodania_film;} else{ print date("Y-m-d"); }?>" readonly/>
				<br>
				<?php if(!isset($_GET['akcja_film'])){?><button type="submit" id="przycisk" formaction="konto.php?wyswietl=dodaj_film&film_dodaj_zmien=dodaj" >Dodaj film</button><?php } ?>
				<?php if(isset($_GET['akcja_film'])){?><button type="submit" id="przycisk" formaction="konto.php?wyswietl=dodaj_film&film_dodaj_zmien=zmien&id_film=<?php print $id_film; ?>">Zmień film</button><?php } ?>
				</fieldset>
				</form>
				<?php
				}
				else if(isset($_GET['wyswietl']) and $_GET['wyswietl'] == "zasil_konto"){
					$db = new SQLite3('sklep.db');
					if(!$db){ print $db->lastErrorMsg();}
					$pytanie_dane_uzytkownika = "select Nazwa_uzytkownika, Saldo from Uzytkownicy where ID=$id";
					$wykonaj = $db->query($pytanie_dane_uzytkownika);
					$dane_uzytkownika = $wykonaj->fetchArray();
					if(isset($_GET['akcja_zasil']) and $_GET['akcja_zasil']=='zasil'){
						$nowe_saldo = $_POST['dodaj_saldo'] + $dane_uzytkownika[1];
						$zmien_saldo_pytanie="update Uzytkownicy set Saldo=$nowe_saldo where ID=$id";
						$przygotuj_zapytanie = $db->prepare($zmien_saldo_pytanie);
						$rezultat = $przygotuj_zapytanie->execute();
					}
				?>
					Saldo użytkownika <?php print $dane_uzytkownika[0]; ?> wynosi : <?php if(isset($nowe_saldo)){print $nowe_saldo;} else{ print $dane_uzytkownika[1];} ?> cebulionów.
					<form method="post" action="konto.php?wyswietl=zasil_konto&akcja_zasil=zasil">
					<label>Doładuj konto :</label>
					<br>
					<input type="number" step="0.01" min="0" name="dodaj_saldo" size="50" maxlength="30" class="pole_wpisywania" placeholder="Ile cebulionów chcesz doładowa ?" value="<?php if(isset($rzad[2])){print $rzad[2];}?>" />
					<br>
					<button type="submit" id="przycisk">Doładuj konto</button>
					</form>
				<?php
				$db->close();
				}
				?>
			</div>
				
			<div id="narz_admin" class="wlasciwosci"> 

				<div class="tytul">Narzędzia administracyjne</div>
				<?php
				if($dostep == 0){
				?>
				<a href="konto.php?wyswietl=zarz_kont_wszy"><div class="pozycja_admin">Wszyscy użytkownicy</div></a>
				<a href="rejestracja.php?dzialanie=0"><div class="pozycja_admin">Dodawanie użytkowników </div></a>
				<a href="konto.php?wyswietl=zarz_kont&akcja=nic"><div class="pozycja_admin">Zarządzanie kontem</div></a>
				<a href="konto.php?wyswietl=zarzadzaj_komnetarze"><div class="pozycja_admin">Zarządzaj komentarzami</div></a>
				<a href="konto.php?wyswietl=dodaj_film"><div class="pozycja_admin">Dodawanie filmów</div></a>
				<a href="#"><div class="pozycja_admin">Ulubione </div></a>
				<a href="konto.php?wyswietl=zasil_konto"><div class="pozycja_admin">Zasilenie konta</div></a>
				<?php
				}
				else if($dostep == 1){
				?>
				<a href="konto.php?wyswietl=zarz_kont&akcja=nic"><div class="pozycja_admin">Zarządzanie kontem</div></a>
				<a href="konto.php?wyswietl=zarzadzaj_komnetarze"><div class="pozycja_admin">Zarządzaj komentarzami</div></a>
				<a href="konto.php?wyswietl=dodaj_film"><div class="pozycja_admin">Dodawanie filmów</div></a>
				<a href="#"><div class="pozycja_admin">Ulubione </div></a>
				<a href="konto.php?wyswietl=zasil_konto"><div class="pozycja_admin">Zasilenie konta</div></a>
				<?php
				}		
				else if($dostep == 2){
				?>
				<a href="konto.php?wyswietl=zarz_kont&akcja=nic"><div class="pozycja_admin">Zarządzanie kontem</div></a>
				<a href="konto.php?wyswietl=dodaj_film"><div class="pozycja_admin">Dodawanie filmów</div></a>
				<a href="#"><div class="pozycja_admin">Ulubione </div></a>
				<a href="konto.php?wyswietl=zasil_konto"><div class="pozycja_admin">Zasilenie konta</div></a>
				<?php
				}
				else if($dostep == 3){
				?>
				<a href="konto.php?wyswietl=zarz_kont&akcja=nic"><div class="pozycja_admin">Zarządzanie kontem</div></a>
				<a href="#"><div class="pozycja_admin">Ulubione </div></a>
				<a href="konto.php?wyswietl=zasil_konto"><div class="pozycja_admin">Zasilenie konta</div></a>
				<?php
				}
				?>
			</div>
		
			<div id="stopka" class="wlasciwosci"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>
			
		</div>
	</body>
</html>