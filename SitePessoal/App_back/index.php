<?php
if (isset($_POST['nome'],$_POST['email'])){
 $nome = addslashes($_POST['nome']);
  $email =addslashes($_POST['email']);
  $assunto = addslashes($_POST['assunto']);
   $mensagem = addslashes($_POST['mensagem']);
}

try {
	$pdo = new PDO('mysql:host=localhost;dbname=banco','root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$stmt = $pdo ->prepare('INSERT INTO informacao_contato (nome,email,assunto,mensagem) VALUES (:n,:e,:a,:m)');
	     $stmt->bindValue(":n",$nome);
	         $stmt->bindValue(":e",$email);
                $stmt->bindValue(":a",$assunto);
                $stmt->bindValue(":m",$mensagem); 
                $stmt->execute();
          echo "Dados enviados com sucesso";?>
         <a href="..\index.html">Voltar &raquo;</a>
        <?php
} catch (Exception $e) {
	echo "Error: ".$e->getMessage();
	
}


?>