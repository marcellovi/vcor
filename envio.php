<?
if($_POST['hidform']=="vidacormacae"){
		$to = "contato@vidacormacae.com.br";
		$titulo = "VIDACOR MACAE - Formulario de Contato";
		$mensagem = "Nome : " . $_POST['name'] . " <br>"
					. "Email : " . $_POST['email'] . " <br>"
					. "Tel. : " . $_POST['phone'] . " <br>"
					. "Mensagem : " . $_POST['message'] . " <br>"
					."-------- Formulario de contato --------.<br>";			

		$headers = "Content-Type: text/html\n";
		$headers .= "From: " . $_POST['nome'] . " <" . $_POST['email'] . ">";
		if(@mail($to, $titulo, $mensagem, $headers)) {	
			echo "<script>alert('Enviado com Sucesso!'); window.location='contato.php';</script>";
		}
		else { 
			echo "<script>alert('Enviado com Sucesso!'); window.location='contato.php';</script>";
	   } 
	}	
?>
