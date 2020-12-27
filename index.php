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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$pass = $_POST["pass"];
	resetPass($pass);
}
?>

        <form name="password" id='idForm' action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" method='POST'>
        <p><label for='file'><h3>reset hp laptop password.</h3></label></p>
        <input type='text' name='pass' id='pass' />
        <br />
        <input type='submit' name='submit' value='Reset password' />
        </form>
        </body>
</html>
