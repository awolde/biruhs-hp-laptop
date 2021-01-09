<html>
        <head>
        <title>Hp Laptop password reseter</title>
        <script type="text/javascript">
                function reloadPage() {
                        document.getElementById("idForm").submit();
                        }
        </script>
        </head>
        <body>
<?php
function resetPass($pass) {
	echo "<PRE>";
	echo "got your password $pass";
	echo shell_exec("./hp.sh $pass");
	echo "</PRE>";
}

function enableInternet($value) {
	echo "<PRE>";
	if ($value) {
		echo "Enabling internet...";
		echo shell_exec("ssh -o StrictHostKeyChecking=no awolde@192.168.1.1 ./toggle-internet.sh ON");
	}
	else {
		echo "Disabling internet...";
		echo shell_exec("ssh -o StrictHostKeyChecking=no awolde@192.168.1.1 ./toggle-internet.sh OFF");
	}
	echo "</PRE>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$pass = $_POST["pass"];
	$internet = $_POST["internet"];
	if ($pass != "") resetPass($pass);
	if ($internet == "disable") {
		enableInternet(false);
	}
	else if ($internet == "enable") {
		enableInternet(True);
	}
}
?>

        <form name="password" id='idForm' action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method='POST'>
        <p><label for='file'><h3>reset hp laptop password.</h3></label></p>
        <input type='text' name='pass' id='pass' />
	<br />
	<p><label for="access">Internet Access</label></p>
	<input type="radio" name="internet" value="disable">Disable<br />
	<input type="radio" name="internet" value="enable">Enable<br />
	<input type="radio" name="internet" value="nochange" checked>No Change<br />
	
        <br />
        <input type='submit' name='submit' value='Reset password' />
        </form>
        </body>
</html>
