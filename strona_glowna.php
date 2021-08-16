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
	<link rel="stylesheet" href="./css/main.css" type="text/css">
	<link rel="stylesheet" href="./css/form.css" type="text/css">
	<link rel="preconnect" href="https://fonts.gstatic.com">	<!-- linia 10,11,12 służy do importowania czcionki-->
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
	</head>
	<body>
	<?php
	session_start();
	if( isset($_SESSION['autoryzacja']) and $_SESSION['autoryzacja']==1){
		$nazwa_uzytkownika = $_SESSION['nazwa_uzytkownika'];
		$id = $_SESSION['id_uzytkownika'];
		$dostep = $_SESSION['dostep'];	
		$autoryzacja = 1;
		//print $_SESSION['autoryzacja'];
	}
	else{
		$nazwa_uzytkownika = " ";
		$id = " ";
		$autoryzacja = 0;
		$dostep = 4;
		header("location:logowanie.php?dzialanie=0");
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
			else{print 'Zostałeś zalogowany jako '.$nazwa_uzytkownika.' / <a href="logowanie.php?dzialanie=2">wyloguj</a>';}?>  </div>
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
			
			<div id="naj_oceniane" class="wlasciwosci"><img id="baner" src="./grafiki/baner.gif"></div>
			
			<div id="polecane" class="wlasciwosci">
				<div class="tytul">Aktualności filmowe</div>
			</div>
			
			<div id="aktualnosc" class="wlasciwosci"> 
				<div class="tytul">Ostatnio dodatni użytkownicy</div>
				<?php
					$db = new SQLite3('sklep.db');
					$uzytkownicy = "select Imie,Nazwisko from Uzytkownicy where ID != 0 order by ID DESC Limit 5";
					$wypisz = $db->query($uzytkownicy);
					while($wyciagnij_uzytkownicy = $wypisz->fetchArray()){
						$imie = $wyciagnij_uzytkownicy[0];
						$nazwisko = $wyciagnij_uzytkownicy[1];
						
				?>
					
					<div id="ramaimie" style="width:100%; text-align:center;">Witaj w serwisie ! <?php print $imie ; ?> <?php print $nazwisko; ?> </div>
					
					<div style="clear: both;"></div>
				<?php }?>
			</div>
			
			<div id="stopka" class="wlasciwosci"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>
			
		</div>
	</body>
</html>