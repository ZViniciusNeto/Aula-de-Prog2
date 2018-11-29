<?php
		$db = new PDO('mysql:host=root@localhost ;dbname=alice;charset=utf8', 'root', '');

		$nome = $_REQUEST['nome'];
		$button = $_REQUEST['Enviar'];
		session_start();
		$nota = $_REQUEST['notaJogo'];
		$qualidade = $_REQUEST['qualidadeJogo'];
		$best = $_REQUEST['bestQualidade'];
		$notaJog = $_REQUEST['notaJogabilidade'];
		$notaSom = $_REQUEST['notaSom'];
		$notaGrafica = $_REQUEST['notaGrafica'];
		$notaSite = $_REQUEST['notaSite'];

		
		$sql = "INSERT INTO pesquisaFinal (nome, qualidade, nota, best, jogabilidade, som, grafica, site) ";
		$sql = $sql . " VALUES (:nome, :qualidade, :nota, :best, :jogabilidade, :som, :grafica, :site)";
		$stmt = $db->prepare($sql);
		$stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
		$stmt->bindValue(':qualidade', $qualidade, PDO::PARAM_STR);
		$stmt->bindValue(':nota', $nota, PDO::PARAM_INT);
		$stmt->bindValue(':best', $best, PDO::PARAM_STR);
		$stmt->bindValue(':jogabilidade', $notaJog, PDO::PARAM_STR);
		$stmt->bindValue(':som', $notaSom, PDO::PARAM_STR);
		$stmt->bindValue(':grafica', $notaGrafica, PDO::PARAM_STR);
		$stmt->bindValue(':site', $notaSite, PDO::PARAM_STR);
		$stmt->execute();
		$result = $stmt->rowCount();
		$_SESSION['MENSAGEM'] = 'Opinião inserida com sucesso';
		header('Location: ./Pesquisa.php');
?>
