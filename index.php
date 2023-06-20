<?php
	error_reporting(0);

	if($_POST['texto']){$texto = $_POST['texto'];}else{$texto = "0";}
	if($_POST['razao']){$razao = $_POST['razao'];}else{$razao = "0";}
	if($_POST['mensagem']){$mensagem = $_POST['mensagem'];}else{$mensagem = "0";}

	if($texto == "0"){
?>
<html>
	<head>
		<title>Criptografia</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	 <body>
	 	
	 	<main>
	 		<section class="login">
	 			<form action="cripto.php" method="post">
	 				<input type="text" name="texto" placeholder="MENSAGEM"  ><br><br>
			 		<input type="text" name="razao" placeholder="RAZÃO"><br><br>
			 		<input type="submit" value="Criptografar">
			 	</form>
		 	</section>
	 	</main>
	 </body>
</html>
<?php
	}else{
?>
<html>
	<head>
		<title>Criptografia</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	
	 <body>
	 	
	 	<main>
	 		<section class="login">
	 			<form action="cripto.php" method="post">
	 				<input type="text" name="texto" value='<?php echo $texto; ?>' style="text-transform: lowercase;"><br><br>
			 		<input type="text" name="razao" value='<?php echo $razao; ?>'><br><br>
			 		<input type="submit" value="Criptografar">
			 	</form>
			 	<p><?php echo $mensagem; ?></p>
		 	</section>
	 	</main>
	 </body>
</html>
<?php
	}
?>
