<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css">

<title>Logowanie</title>

</head>
<body>


<div class="center">



<div id="panel">

    <form method="post" action="">
	
        <label for="sklep_id">Kod sklepu:</label>
		<input type="text" name="sklep_id" maxlength="32" id="sklep_id" />
		<label for="usser_id">Kod pracowniczy:</label>
		<input type="text" name="usser_id" maxlength="32" id="usser_id" />
       

	   <label for="pass">Hasło:</label>
        <input type="password" name="usser_pass" maxlength="32" id="usser_pass" />
		<input type="hidden" name="send" value="1" />
        <div id="lower">
			<label for="INFO">Nie jesteś zalogowany.</label>
			<label for="INFO2"><a href="register.php">zarejestruj</a> jeśli jeszcze nie masz konta.</label>
			
					
            <input type="submit" value="Zaloguj" />
        </div>
    </form>
</div>
</div>
</body>
</html>
 

