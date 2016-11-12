<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Checkout Mirror Fashion</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/bootstrap-flatly.css">
	<link rel="stylesheet" href="css/checkout.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Mirror Fashion</a>

			<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
				<span class="glyphicon glyphicon-align-justify"></span>
			</button>
		</div>
		<ul class="nav navbar-nav collapse navbar-collapse">
			<li><a href="sobre.php">Sobre</a></li>
			<li><a href="#">Ajuda</a></li>
			<li><a href="#">Perguntas frequentes</a></li>
			<li><a href="#">Entre em contato</a></li>
		</ul>
	</nav>

	<div class="jumbotron">
		<div class="container">
			<h1>Ótima escolha!</h1>
			<p>
				Obrigado por comprar na Mirror Fashion!
				Preencha seus dados para efetuar a compra.
			</p>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="panel panel-default">
					<div class="panel panel-heading">
						<h2>Sua Compra</h2>
					</div>
					<div class="panel-body">
						<img src="img/produtos/foto1-<?= $_POST["cor"] ?>.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive">

						<dl>
							<dt>Produto</dt>
							<dd><?= $_POST['nome'] ?></dd>

							<dt>Preço</dt>
							<dd id="preco">R$ <?= $_POST['preco'] ?></dd>

							<dt>Cor</dt>
							<dd><?= $_POST['cor'] ?></dd>

							<dt>Tamanho</dt>
							<dd><?= $_POST['tamanho'] ?></dd>							
						</dl>

						<div class="form-group">
							<label for="qt">Quantidade</label>
							<input id="qt" class="form-control" type="number" min="1" max="99" value="1" name="">
						</div>
						<div class="form-group">
							<label for="total">Total</label>
							<output for="preco" id="total" class="form-control">
								<?= $_POST["preco"] ?>
							</output>
						</div>
					</div>
				</div>
			</div>

			<form class="col-sm-8">
				<div class="row">
					<fieldset class="col-md-6">
						<legend>Dados pessoais</legend>

						<div class="form-group">
							<label for="nome">Nome Completo</label>
							<input type="text" name="nome" id="nome" class="form-control" autofocus required>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<!--						<input type="email" name="email" id="email" class="form-control" placeholder="email@exemplo.com.br"> -->
							<div class="input-group">
								<span class="input-group-addon">@</span>
								<input type="email" class="form-control" id="email" name="email">
							</div>
						</div>

						<div class="form-group">
							<label for="cpf">CPF</label>
							<input type="text" name="cpf" id="cpf" class="form-control" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
						</div>

						<div class="checkbox">
							<label for="nome">Quero receber spam da Mirror Fashion</label>
							<input type="checkbox" name="spam" value="sim" checked>
						</div>

					</fieldset>

					<fieldset class="col-md-6">
						<legend>Cartão de Crédito</legend>

						<div class="form-group">
							<label for="numero-cartao">Número - CVV</label>
							<input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
						</div>

						<div class="form-group">
							<label for="bandeira-cartao">Bandeira</label>
							<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
								<option value="master">MasterCard</option>
								<option value="Visa">Visa</option>
								<option value="amex">American Express</option>
							</select>
						</div>

						<div class="form-group">
							<label for="validade-cartao">Validade</label>
							<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
						</div>
					</fieldset>
				</div>

				<button type="submit" class="pull-rigth btn-lg btn btn-primary"><span class="glyphicon glyphicon-thumbs-up"></span> Confirmar Pedido</button>
			</form>
		</div>
	</div>
	<script src="js/checkout.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/inputmask-plugin.js"></script>
</body>
</html>