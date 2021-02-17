
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
 	<title>X.Code - Desenvolvimento Web</title>
    <link rel="stylesheet" href="css-sitepessoal/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,700;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css-sitepessoal/estilo.css"/>
</head>
<body>
	<div class="header">
		<div class="linha">
			<header>
				<div class="coluna col4">
					<h1 class="logo">X.Code</h1>
				</div>
				<div class="coluna col8">
					<nav>
						<ul class="menu inline sem marcador">
							<li><a href="index.html">Home</a></li>
						    <li><a href="clientes.html">Clientes</a></li>
						    <li><a href="servicos.html">Serviços</a></li>
						    <li><a href="sobre.html">Sobre</a></li>
						    <li><a href="contato.html">Contato</a></li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</div>
	<div class="linha">
		<section>
			 <div class="coluna col5 sidebar">
        <h3>Localização</h3>
        <img src="img/mapa.jpg" alt=""/>
        <ul class="sem-padding sem-marcador">
          <li>Rua frrancisco motta,420</li>
          <li>Bairro de Campo Grande</li>
          <li>Rio de Janeiro - RJ</li>
        </ul>
        <h3>Contato Direto</h3>
        <ul class="sem-padding sem-marcador">
          <li>Fone: <strong>(21)9969232991</strong></li>
           <li>E-mail: <strong>contatoruandev.com</strong></li>
        </ul>
      </div>
      <div class="coluna col7 contato">
        <h2>Envie sua Mensagem</h2>
         <form method = "POST"  action = "App_back/index.php">
          <label for="nome">Seu Nome:</label>
            <input type="text" name="nome"/>
          <label for="nome">Seu Email:</label>
             <input type="text" name="email"/>
          <label for="nome">Assunto:</label>
              <input type="text" name="assunto" />
          <label for="nome">Mensagem</label>
              <textarea name="mensagem" id="mensagem"></textarea>
              <input type="submit" class="botao" name="enviar" value="Enviar mensagem &raquo;"/>
         </form>
         
      </div>
		</section>
		
	</div>
   

  <div class="conteudo-extra">
  	<div class="linha">
  		<div class="coluna col7">
  			<section>
  				<h2>Metodo Alternativo de contato</h2>
  				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim </p>
  				<p>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate "</p>
  				<p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  					<h4>Fulano - Empresa ABC</h4></p>
  			</section>
  			
  		</div>
  		<div class="coluna col9">
  			<h3>Ultimas noticias</h3>
  			<ul class="sem-marcador sem-padding noticias">
  				<li>
  					<img src="img/empresa2.jpg" alt=""/>
  					<h4>Titulo da noticia publicada</h4>
  					<p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="">leia mais &raquo;</a></p>
  				</li>
  				<li>
  					<img src="img/empresa2.jpg" alt=""/>
  					<h4>Titulo da noticia publicada</h4>
  					<p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="">leia mais &raquo;</a></p>
  				</li>
  				<li>
  					<img src="img/empresa2.jpg" alt=""/>
  					<h4>Titulo da noticia publicada</h4>
  					<p>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="">leia mais &raquo;</a></p>
  				</li>
  			</ul>
  		</div>
  	</div>
  	
  </div>

  <div class="footer">
  	<div class="linha">
  		<footer>
  			<div class="coluna col12">
  				<span>&copy; 2020 - XCode Desenvolvimento Web</span>
  			</div>
  		</footer>

  		
  	</div>
  	
  </div>







</body>
</html>