<!-- application/views/pages/viacep.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumindo API</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 30vw;
            height: 40vh;
            margin: 10vh auto;
            justify-content: space-around;
        }

        #resultado {
            margin-top: 20px;
        }
    </style>

    <form>
        <p>Digite o CEP para encontrar o endereço.</p>
        <input type="text" placeholder="Digite um cep..." name="cep" id="cep">
        <button type="button" onclick="buscarEndereco()">Buscar</button>
    </form>

    <!-- Div para exibir os resultados -->
    <div id="resultado">
        <p>Resultado da pesquisa:</p>
        <p><strong>Rua:</strong> <span id="rua"></span></p>
        <p><strong>Bairro:</strong> <span id="bairro"></span></p>
        <p><strong>Cidade:</strong> <span id="cidade"></span></p>
        <p><strong>Estado:</strong> <span id="estado"></span></p>
    </div>

    <script>
        function buscarEndereco() {
            var cep = $('#cep').val();

            // Verifica se o CEP possui formato válido antes de enviar a requisição
            if (/^\d{5}-?\d{3}$/.test(cep)) {
                $.post('<?php echo base_url("CepController/index"); ?>', { cep: cep }, function(data) {
                    $('#rua').text(data.address.logradouro);
                    $('#bairro').text(data.address.bairro);
                    $('#cidade').text(data.address.localidade);
                    $('#estado').text(data.address.uf);
                }, 'json');
            } else {
                alert('CEP inválido');
            }
        }
    </script>
</body>
</html>
