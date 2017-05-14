<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Weryfikator CEN</title>

 <link rel="stylesheet" type="text/css" href="css/style.css" />
 
</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo">
				<a href="#">
					<h2>Weryfikator CEN</h2>
				</a>
			</div>
		<div id="menu">
			<ul>
				<li><a href="http://weryfikatorme.cba.pl/">Pobierz aplikacje </a></li>
				<li><a href="https://play.google.com/store/apps/details?id=com.roger.barcode&hl=pl">Pobierz skaner</a></li>
				<li><a href="#">Kontakt</a></li>
				<li><a href="logout.php">Wyloguj</a></li>
			</ul>
		</div>
    </div>
    <div id="container">
		<div id="sidebar">
			<div id="content_box">
			<h2>ZASOBY Z DNIA :DATA</h2>
			<h2>AKTUALIZUJ:</h2>
				<form action="odczytcsv.php" method="POST" ENCTYPE="multipart/form-data">
				<input type="file" name="plik"/><br/>					
				<p><b>Pobierz plik ze stanami magazynowymi</b></p>
		</div>
			
			<div id="content_box">
			
			<h2>Pobierz Ceny/Wywieszki :</h2>

			
			<a href="ceny/ceny_id_user.csv"><img src="images/pobierz_ceny.png" align="left"; Style="width:50px;height:50px" /></a><br><br><br><br>
			
			<a href="ceny/wywieszki_id_user.csv"><img src="images/pobierz_wyw.png" align="left"; Style="width:50px;height:50px" /></a><br>
			<br>
			<br>
			<p><b>Zapisz pliki z listami cen i wywieszek i pobierz je do aplikacji cenowej</b></p>

			</div>
		
		
		
			<div id="content_box">
				<h2>Profil użytkownika :</h2>
				<p><b>Zalogowany: </b>Użytkownik</p>
				<p><b>Kod sklepu: </b> Id_sklep</p>
				<p><b>Kod pracowniczy: </b> Id_usser<br /></p>
				<p><b><a href="logout.php">Wyloguj</a></b></p>
			</div>
			<div id="content_box">
				<h2>Wersje serwisu: </h2>
				<p><b>Strona :</b> testowa v 1.0</p>
				<p><b>Aplikacja:</b> test v 1.0</p>
			</div>
		</div>
		
		<div id="solid" class="border">
			<div class="solid_title1">Cześć:  Użytkownik  </div>
				<p></p>
			<div class="solid_title2">Witaj na stronie Weryfikatora CEN</div>
			<p>   </p>

	

	
	<div id="solid_box">
		<div id="solid_boximg">
			<img src="images/icon_quote.gif" align="left" />
			</div>
			<a href=:<"#"></a>
			<h2>Cześć:</h2>
    
			<p><b>Info</b></p>
    </div>
   
   <div id="solid_box" class="margin2">
		<div id="solid_boximg">
			<img src="images/icon_mail.gif" align="left" />
		</div>
			<h2>Kontakt</h2>
    
		<p>Opis</p>
    </div>			
	
	<div id="border"></div>			

		<div id="solid_box">
			<h2> Co Działa v 1.0:</h2>

		</div>
		<div id="solid_box" class="margin2">
			<h2>Co nie działa... :</h2>

		</div>

	</div>
    </div>
    <div id="footer">
           </div>
    </div>
</body>
</html>
</body>
</html>

