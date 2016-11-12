<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Mirror Fashion</title>
	<meta charset="utf-8" name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/reset.css">	
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/produtos.css">
	<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"> 
</head>
<body>
	<?php include("cabecalho.php"); ?>

	<div class="container">
		<div class="produtos">
			<h2>Camiseta Ecko Caveira Bad to the Bone</h2>
			<p>por apenas R$ 48,95</p>
			<form action="checkout.php" method="POST">
				<fieldset class="cor">
					<legend>Escolha a cor:</legend>

					<input type="radio" name="cor" value="verde" id="verde" checked="true">
					<label for="verde">
						<img src="img/produtos/foto2-verde.png" alt="verde">
					</label>

					<input type="radio" name="cor" value="rosa" id="rosa">
					<label for="rosa">
						<img src="img/produtos/foto2-rosa.png" alt="rosa">
					</label>

					<input type="radio" name="cor" value="azul" id="azul">
					<label for="azul">
						<img src="img/produtos/foto2-azul.png" alt="azul">
					</label>

				</fieldset><!--
				--><fieldset class="tamanhos">
					<legend>Escolha o tamanho</legend>

					<input type="range" name="tamanho" min="36" max="46" value="42" step="2" id="tamanho">
					<output for="tamanho" name="valortamanho">42</output>
				</fieldset>
				<input type="hidden" name="nome" value="Fuzzy Cardigan">
				<input type="hidden" name="preco" value="129.00">
				<input type="submit" class="comprar" value="Comprar">
			</form>
		</div>

		<div class="detalhes">
			<h2>Detalhes do produto</h2>

			<p>Esse é o melhor casaco de Cardigã que você ja viu. Excelente
			material italiano com estampa desenhada pelos artesãos da 
			comunidade de Krotor nas ilhas gregas. Compre já e receba hoje 
			mesmo pela nossa entrega a jato.</p>

			<table>
				<thead>
					<tr>
						<th>Caracteristicas</th>
						<th>Detalhe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Modelo</td>
						<td>Cardigã 7845</td>
					</tr>
					<tr>
						<td>Material</td>
						<td>Algodão e poliester</td>
					</tr>
					<tr>
						<td>Cores</td>
						<td>Azul, Rosa e Verde</td>
					</tr>
					<tr>
						<td>Lavagem</td>
						<td>Lavar a mão</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<script src="js/produto.js"></script>
	<?php include("rodape.php"); ?>
</body>
</html>