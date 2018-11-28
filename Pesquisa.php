<html>

	<head>
	
		<meta charset="utf8">
		<link rel="stylesheet" href="css/css.css"/>
		<link href="./css/bootstrap.min.css" rel="stylesheet"/>
		<script src="./js/jquery-3.3.1.min.js"></script>
		<script src="./js/bootstrap.js"></script>
		<title>Pesquisa</title>

	</head>

	<body>
		<h1>Pesquisa de Mercado</h1>
		
		<div id="menuBar">
			<nav id="menu">
				<ul>
					<li><a href="./Home.html">Página inicial</a></li>
					<li><a href="./InfoGame.html">Sobre o jogo</a></li>
					<li><a href="./Quiz.html">Quiz</a></li>
						<li><a href="./Pesquisa.php">Pesquisa</a></li>
					<li><a href="./Contato.html">Contato</a></li>
				</ul>
			</nav>
		</div> 

		<?php
			session_start();
			if (isset($_SESSION['MENSAGEM'])) {
					echo $_SESSION['MENSAGEM'];
					unset($_SESSION['MENSAGEM']);
			}
		 ?>
		
		<form action="./Resultado.php">
			<div class="container">
				<div class="form-group">
					<label for="txtNome">Seu Nome:</label>
					<input id="txtNome" name="nome" type="text" class="form-control"/>
				</div>
				
				<div class="form-group">
					<label for="notaJogo">Nota geral para o jogo:</label>
					<input id="notaJogo" name="notaJogo" type="number" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="qualidadeJogo">Qualidade do jogo:</label>
					<select id="qualidadeJogo" name="qualidadeJogo" class="form-control">
						<option disabled selected></option>
						<option>Bom</option>
						<option>Mediano</option>
						<option>Ruim</option>
						<option>Péssimo</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="bestQualidade">Maior Qualidade</label>
					<select id="bestQualidade" name="bestQualidade" class="form-control">
						<option disabled selected></option>
						<option>Jogabilidade</option>
						<option>Audio</option>
						<option>Grafico</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="notaJogabilidade">Qualidade da Jogabilidade</label>
					<select id="notaJogabilidade" name="notaJogabilidade" class="form-control">
						<option disabled selected></option>
						<option>Boa</option>
						<option>Mediana</option>
						<option>Ruim</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="notaSom">Qualidade Sonora</label>
					<select id="notaSom" name="notaSom" class="form-control">
						<option disabled selected></option>
						<option>Boa</option>
						<option>Mediana</option>
						<option>Ruim</option>
					</select>
				</div>
				
				<div class="form-group">
					<label for="notaGrafica">Qualidade Grafica</label>
					<select id="notaGrafica" name="notaGrafica" class="form-control">
						<option disabled selected></option>
						<option>Boa</option>
						<option>Mediana</option>
						<option>Ruim</option>
					</select>
				</div>
					
				<div class="form-group">
					<label for="notaSite">Qualidade do Site</label>
					<select id="notaSite" name="notaSite" class="form-control">
						<option disabled selected></option>
						<option>Boa</option>
						<option>Mediana</option>
						<option>Ruim</option>
					</select>
				</div>
				
				<div class="form-group">
					<button type="submit" name="Enviar" value="adicionar" class="btn btn-primary">Enviar</button>
				</div>
			</div>
		</form>
	</body>

</html>
