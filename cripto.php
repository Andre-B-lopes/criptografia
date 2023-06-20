<?php
	error_reporting(0);
	if($_POST['texto']){$mensagem = $_POST['texto'];}else{$mensagem = "0";}
	if($_POST['texto']){$texto = $_POST['texto'];}else{$texto = "0";}
	if($_POST['razao']){$razao = $_POST['razao'];}else{$razao = "0";}
	
	
	if($mensagem != '0'){
	//TROCA CARACTER ESPECIAL
		$mensagem = str_replace('A','a',$mensagem);
		$mensagem = str_replace('B','b',$mensagem);
		$mensagem = str_replace('C','c',$mensagem);
		$mensagem = str_replace('D','d',$mensagem);
		$mensagem = str_replace('E','e',$mensagem);
		$mensagem = str_replace('F','f',$mensagem);
		$mensagem = str_replace('G','g',$mensagem);
		$mensagem = str_replace('H','h',$mensagem);
		$mensagem = str_replace('I','i',$mensagem);
		$mensagem = str_replace('J','j',$mensagem);
		$mensagem = str_replace('K','k',$mensagem);
		$mensagem = str_replace('L','l',$mensagem);
		$mensagem = str_replace('M','m',$mensagem);
		$mensagem = str_replace('N','n',$mensagem);
		$mensagem = str_replace('O','o',$mensagem);
		$mensagem = str_replace('P','p',$mensagem);
		$mensagem = str_replace('Q','q',$mensagem);
		$mensagem = str_replace('R','r',$mensagem);
		$mensagem = str_replace('S','s',$mensagem);
		$mensagem = str_replace('T','t',$mensagem);
		$mensagem = str_replace('U','u',$mensagem);
		$mensagem = str_replace('V','v',$mensagem);
		$mensagem = str_replace('W','w',$mensagem);
		$mensagem = str_replace('X','x',$mensagem);
		$mensagem = str_replace('Y','y',$mensagem);
		$mensagem = str_replace('Z','z',$mensagem);

		$mensagem = str_replace('á','a',$mensagem);
		$mensagem = str_replace('é','e',$mensagem);
		$mensagem = str_replace('í','i',$mensagem);
		$mensagem = str_replace('ó','o',$mensagem);
		$mensagem = str_replace('ú','u',$mensagem);
		$mensagem = str_replace('à','a',$mensagem);
		$mensagem = str_replace('è','e',$mensagem);
		$mensagem = str_replace('ì','i',$mensagem);
		$mensagem = str_replace('ò','o',$mensagem);
		$mensagem = str_replace('ù','u',$mensagem);
		$mensagem = str_replace('â','a',$mensagem);
		$mensagem = str_replace('ê','e',$mensagem);
		$mensagem = str_replace('î','i',$mensagem);
		$mensagem = str_replace('ô','o',$mensagem);
		$mensagem = str_replace('û','u',$mensagem);
		$mensagem = str_replace('ã','a',$mensagem);
		$mensagem = str_replace('ẽ','e',$mensagem);
		$mensagem = str_replace('ĩ','i',$mensagem);
		$mensagem = str_replace('õ','o',$mensagem);
		$mensagem = str_replace('ũ','u',$mensagem);
		$mensagem = str_replace('ç','c',$mensagem);
		
		$mensagem = str_replace('Á','A',$mensagem);
		$mensagem = str_replace('É','E',$mensagem);
		$mensagem = str_replace('Í','I',$mensagem);
		$mensagem = str_replace('Ó','O',$mensagem);
		$mensagem = str_replace('Ú','U',$mensagem);
		$mensagem = str_replace('À','A',$mensagem);
		$mensagem = str_replace('È','E',$mensagem);
		$mensagem = str_replace('Ì','I',$mensagem);
		$mensagem = str_replace('Ò','O',$mensagem);
		$mensagem = str_replace('Ù','U',$mensagem);
		$mensagem = str_replace('Ã','A',$mensagem);
		$mensagem = str_replace('Ẽ','E',$mensagem);
		$mensagem = str_replace('Ĩ','I',$mensagem);
		$mensagem = str_replace('Õ','O',$mensagem);
		$mensagem = str_replace('Ũ','U',$mensagem);
		$mensagem = str_replace('Â','A',$mensagem);
		$mensagem = str_replace('Ê','E',$mensagem);
		$mensagem = str_replace('Î','I',$mensagem);
		$mensagem = str_replace('Ô','O',$mensagem);
		$mensagem = str_replace('Û','U',$mensagem);
		$mensagem = str_replace('Ç','C',$mensagem);
	}
	
	if($razao > 25){
		$razao = 25;
	}
	$mensagem_nova = "";
	if($mensagem != "0"){
		
		$array=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		$pre_mensagem = explode(" ",$mensagem);
		$t = 0;
		while ($pre_mensagem[$t] != ""){
			$mensagem_explode = str_split($pre_mensagem[$t]);
			if($razao != 0){
				$i = 0;
				while($i <= 30){
					$letra_certa = $mensagem_explode[$i];
					$j = 0;
					while ($j < 26){
						if($letra_certa == $array[$j]){
							$id_array = $j;
							//echo $id_array."<br>";
							$id_novo = $id_array + $razao;
							if ($id_novo > 25){
								$id_novo = $id_novo - 26; 
							}
							$mensagem_nova .= $array[$id_novo];
							//echo $id_array." - ".$array[$j]."<br>";
						}
						$j++;
					}
					$i++;
				}
			}
			$mensagem_nova .= " ";
			$t++;
		}
		echo "<form id='cripto' action='index.php' method='post'>
				<input type='text' name='mensagem' value='".$mensagem_nova."'>
				<input type='text' name='razao' value='".$razao."'>
				<input type='text' name='texto' value='".$texto."'>
			</form>";
		echo "<script>
			document.getElementById('cripto').submit();
			</script>";
	}
?>
