<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="xci-estrutura-inicial-master/07-consumoAPI/style.css">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Busca CEP</title>
</head>

<body>
	<form action="<?= base_url('/') ?>" method="post">
		<p>Digite o CEP para encontrar o endereço.</p>
		<input type="text" placeholder="Digite um cep..." name="cep" value="<?= $address->cep ?>">
</br>
		<label for="rua">Rua:</label>
		<input type="text" placeholder="Rua" name="rua" value="<?= $address->logradouro ?>">
		</br>
		<label for="bairro">Bairro:</label>
		<input type="text" placeholder="Bairro" name="bairro" value="<?= $address->bairro ?>">
		</br>
		<label for="cidade">Cidade:</label>
		<input type="text" placeholder="Cidade" name="cidade" value="<?= $address->localidade ?>">
		</br>
		<label for="estado">Estado:</label>
		<input type="text" placeholder="Estado" name="estado" value="<?= $address->uf ?>">
		</br>
		<input type="submit" value="Return">
		</br>
		<form action="<?= base_url('/') ?>" method="post">
		<input type="submit" value="Return"><span></span>
	</form>
</body>

</html>
