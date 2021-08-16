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
			
			<div id="naj_oceniane" class="wlasciwosci"><center>
Polityka prywatności<br><br> opisuje zasady przetwarzania przez nas informacji na Twój temat, w tym danych osobowych oraz ciasteczek, czyli tzw. cookies.<br>
1. Informacje ogólne<br>
Niniejsza polityka dotyczy Serwisu www, funkcjonującego pod adresem url: Filmowo<br>
Operatorem serwisu oraz Administratorem danych osobowych jest: Grupa3<br>
Adres kontaktowy poczty elektronicznej operatora: Filmowo@gmail.com<br>
Operator jest Administratorem Twoich danych osobowych w odniesieniu do danych podanych dobrowolnie w Serwisie.<br>
Serwis wykorzystuje dane osobowe w następujących celach:<br>
Obsługa zapytań przez formularz<br>
Realizacja zamówionych usług<br>
Prezentacja oferty lub informacji<br>
Serwis realizuje funkcje pozyskiwania informacji o użytkownikach i ich zachowaniu w następujący sposób:<br>
Poprzez dobrowolnie wprowadzone w formularzach dane, które zostają wprowadzone do systemów Operatora.<br>
Poprzez zapisywanie w urządzeniach końcowych plików cookie (tzw. „ciasteczka”).<br>
2. Wybrane metody ochrony danych stosowane przez Operatora<br>
Istotnym elementem ochrony danych jest regularna aktualizacja wszelkiego oprogramowania, wykorzystywanego przez Operatora do przetwarzania danych osobowych, co w szczególności oznacza regularne aktualizacje komponentów programistycznych.<br>
3. Hosting<br>
Serwis jest hostowany (technicznie utrzymywany) na serwera operatora: cyberFolks.pl<br>
4. Twoje prawa i dodatkowe informacje o sposobie wykorzystania danych<br>
W niektórych sytuacjach Administrator ma prawo przekazywać Twoje dane osobowe innym odbiorcom, jeśli będzie to niezbędne do wykonania zawartej z Tobą umowy lub do zrealizowania obowiązków ciążących na Administratorze. Dotyczy to takich<br> grup odbiorców:<br>
osoby upoważnione przez nas, pracownicy i współprcownicy, którzy muszą mieć dostęp do danych osobowych w celu wykonywania swoich obowiązków,<br>
firma hostingowa,<br>
firmy obsługująca mailingi,<br>
firmy obsługująca komunikaty SMS,<br>
firmy, z którymi Administrator współpracuje w zakresie marketingu własnego,<br>
kurierzy,<br>
ubezpieczyciele,<br>
kancelarie prawne i windykatorzy,<br>
banki,<br>
operatorzy płatności,<br>
organy publiczne.<br>
Twoje dane osobowe przetwarzane przez Administratora nie dłużej, niż jest to konieczne do wykonania związanych z nimi czynności określonych osobnymi przepisami (np. o prowadzeniu rachunkowości). W odniesieniu do danych marketingowych <br>dane nie będą przetwarzane dłużej niż przez 3 lata.<br>
Przysługuje Ci prawo żądania od Administratora:<br>
dostępu do danych osobowych Ciebie dotyczących,<br>
ich sprostowania,<br>
usunięcia,<br>
ograniczenia przetwarzania,<br>
oraz przenoszenia danych.<br>
Przysługuje Ci prawo do złożenia sprzeciwu w zakresie przetwarzania wskazanego w pkt 3.3 c) wobec przetwarzania danych osobowych w celu wykonania prawnie uzasadnionych interesów realizowanych przez Administratora, w tym profilowania,<br> przy czym prawo sprzeciwu nie będzie mogło być wykonane w przypadku istnienia ważnych prawnie uzasadnionych podstaw do przetwarzania, nadrzędnych wobec Ciebie interesów, praw i wolności, w szczególności ustalenia, dochodzenia lub obrony roszczeń.
Na działania Administratora przysługuje skarga do Prezesa Urzędu Ochrony Danych Osobowych, ul. Stawki 2, 00-193 Warszawa.<br>
Podanie danych osobowych jest dobrowolne, lecz niezbędne do obsługi Serwisu.<br>
W stosunku do Ciebie mogą być podejmowane czynności polegające na zautomatyzowanym podejmowaniu decyzji, w tym profilowaniu w celu świadczenia usług w ramach zawartej umowy oraz w celu prowadzenia przez Administratora marketingu bezpośredniego.
Dane osobowe nie są przekazywane od krajów trzecich w rozumieniu przepisów o ochronie danych osobowych. Oznacza to, że nie przesyłamy ich poza teren Unii Europejskiej.<br>
5. Informacje w formularzach<br>
Serwis zbiera informacje podane dobrowolnie przez użytkownika, w tym dane osobowe, o ile zostaną one podane.<br>
Serwis może zapisać informacje o parametrach połączenia (oznaczenie czasu, adres IP).<br>
Serwis, w niektórych wypadkach, może zapisać informację ułatwiającą powiązanie danych w formularzu z adresem e-mail użytkownika wypełniającego formularz. W takim wypadku adres e-mail użytkownika pojawia się wewnątrz adresu url strony<br> zawierającej formularz.<br>
Dane podane w formularzu są przetwarzane w celu wynikającym z funkcji konkretnego formularza, np. w celu dokonania procesu obsługi zgłoszenia serwisowego lub kontaktu handlowego, rejestracji usług itp. Każdorazowo kontekst i opis <br>formularza w czytelny sposób informuje, do czego on służy.<br>
6. Logi Administratora<br>
Informacje zachowaniu użytkowników w serwisie mogą podlegać logowaniu. Dane te są wykorzystywane w celu administrowania serwisem.<br>
7. Istotne techniki marketingowe<br>
Operator stosuje rozwiązanie automatyzujące działanie Serwisu w odniesieniu do użytkowników, np. mogące przesłać maila do użytkownika po odwiedzeniu konkretnej podstrony, o ile wyraził on zgodę na otrzymywanie korespondencji handlowej od Operatora.<br>
8. Informacja o plikach cookies<br>
Serwis korzysta z plików cookies.<br>
Pliki cookies (tzw. „ciasteczka”) stanowią dane informatyczne, w szczególności pliki tekstowe, które przechowywane są w urządzeniu końcowym Użytkownika Serwisu i przeznaczone są do korzystania ze stron internetowych Serwisu. Cookies <br>zazwyczaj zawierają nazwę strony internetowej, z której pochodzą, czas przechowywania ich na urządzeniu końcowym oraz unikalny numer.<br>
Podmiotem zamieszczającym na urządzeniu końcowym Użytkownika Serwisu pliki cookies oraz uzyskującym do nich dostęp jest operator Serwisu.<br>
Pliki cookies wykorzystywane są w następujących celach:<br>
utrzymanie sesji użytkownika Serwisu (po zalogowaniu), dzięki której użytkownik nie musi na każdej podstronie Serwisu ponownie wpisywać loginu i hasła;<br>
realizacji celów określonych powyżej w części "Istotne techniki marketingowe";<br>
W ramach Serwisu stosowane są dwa zasadnicze rodzaje plików cookies: „sesyjne” (session cookies) oraz „stałe” (persistent cookies). Cookies „sesyjne” są plikami tymczasowymi, które przechowywane są w urządzeniu końcowym Użytkownika do<br> czasu wylogowania, opuszczenia strony internetowej lub wyłączenia oprogramowania (przeglądarki internetowej). „Stałe” pliki cookies przechowywane są w urządzeniu końcowym Użytkownika przez czas określony w parametrach plików cookies lub do czasu ich usunięcia przez Użytkownika.<br>
Oprogramowanie do przeglądania stron internetowych (przeglądarka internetowa) zazwyczaj domyślnie dopuszcza przechowywanie plików cookies w urządzeniu końcowym Użytkownika. Użytkownicy Serwisu mogą dokonać zmiany ustawień w tym zakresie.<br> Przeglądarka internetowa umożliwia usunięcie plików cookies. Możliwe jest także automatyczne blokowanie plików cookies Szczegółowe informacje na ten temat zawiera pomoc lub dokumentacja przeglądarki internetowej.
Ograniczenia stosowania plików cookies mogą wpłynąć na niektóre funkcjonalności dostępne na stronach internetowych Serwisu.<br>
Pliki cookies zamieszczane w urządzeniu końcowym Użytkownika Serwisu wykorzystywane mogą być również przez współpracujące z operatorem Serwisu podmioty, w szczególności dotyczy to firm: Google (Google Inc. z siedzibą w USA), Facebook (Facebook Inc. z siedzibą w USA), Twitter (Twitter Inc. z siedzibą w USA).<br>
9. Zarządzanie plikami cookies – jak w praktyce wyrażać i cofać zgodę?<br>
Jeśli użytkownik nie chce otrzymywać plików cookies, może zmienić ustawienia przeglądarki. Zastrzegamy, że wyłączenie obsługi plików cookies niezbędnych dla procesów uwierzytelniania, bezpieczeństwa, utrzymania preferencji użytkownika może utrudnić, a w skrajnych przypadkach może uniemożliwić korzystanie ze stron www<br>
W celu zarządzania ustawienia cookies wybierz z listy poniżej przeglądarkę internetową, której używasz i postępuj zgodnie z instrukcjami:<br><br>
Edge<br>
Internet Explorer<br>
Chrome<br>
Safari<br>
Firefox<br>
Opera<br>
Urządzenia mobilne:<br><br>

Android<br>
Safari (iOS)<br>
Windows Phone<br>
Niniejszy wzór polityki został wygenerowany bezpłatnie, w celach informacyjnych, w oparciu o naszą wiedzę, branżowe praktyki i przepisy prawa obowiązujące na dzień 2018-08-14. Zalecamy sprawdzenie wzoru polityki przed użyciem jej na <br>stronie. Wzór opiera się na najczęściej występujących na stronach internetowych sytuacjach, ale może nie odzwierciedlać pełnej i dokładnej specyfiki Twojej strony www. Przeczytaj uważnie wygenerowany dokument i w razie potrzeb <br>dostosuj go do Twojej sytuacji lub zasięgnij porady prawnej. Nie bierzemy odpowiedzianości za skutki posługiwania się tym dokumentem, ponieważ tylko Ty masz wpłw na to, czy wszystkie informacje w nim zawarte są zgodne z prawdą. <br>Zwróć także uwagę, że Polityka Prywatności, nawet najlepsza, jest tylko jednym z ekmentów Twojej troski o dane osobowe i prywatność użytkownika na stronie www.

				
</center>
</div>
			
			
			
			<div id="stopka" class="wlasciwosci"> Jest to wirtualne przedsiębiorstwo które powstało na czas praktyki i nie jest ono realnie zarejestrowane. </div>
			
		</div>
	</body>
</html>