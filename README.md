# ChallengeArcaTechPHP

Este repositório contém um desafio de desenvolvimento web usando XAMPP, PHP, e CodeIgniter para criar um CRUD (Create, Read, Update, Delete) de jogos e implementar um buscador de CEP utilizando a API ViaCEP.

### Pré-requisitos:

- [XAMPP](https://www.apachefriends.org/index.html) instalado.
- Conexão com a internet para acessar a API ViaCEP.

### Configuração do Ambiente:

1. **Instalação do XAMPP:**
   - Baixe e instale o XAMPP a partir do [site oficial](https://www.apachefriends.org/index.html).
   - Inicie o servidor Apache e o servidor MySQL no painel de controle do XAMPP.

2. **Configuração do Projeto:**
   - Clone ou baixe este repositório para a pasta `htdocs` no diretório de instalação do XAMPP.
   - Abra o navegador e acesse `http://localhost/nome-do-seu-projeto/` para garantir que o servidor esteja funcionando corretamente.

3. **Configuração do Banco de Dados:**
   - Abra o phpMyAdmin acessando `http://localhost/phpmyadmin/`.
   - Crie um banco de dados chamado `challenge_arcatech`.
   - Importe o arquivo `database.sql` fornecido no repositório para criar a tabela `tb_games`.

### Configuração do CodeIgniter:

1. **Configuração do Banco de Dados no CodeIgniter:**
   - Abra o arquivo `application/config/database.php`.
   - Configure as informações de conexão do banco de dados (usuário, senha, nome do banco) no array `$db['default']`.

2. **Configuração da Base URL:**
   - Abra o arquivo `application/config/config.php`.
   - Configure a base URL de acordo com o seu ambiente, por exemplo:
     ```php
     $config['base_url'] = 'http://localhost/nome-do-seu-projeto/';
     ```

### Executando o Projeto:

1. **Acesse o Aplicativo:**
   - Abra o navegador e acesse `http://localhost/nome-do-seu-projeto/`.

2. **Explorando o CRUD de Games:**
   - Navegue até a seção de jogos para criar, visualizar, atualizar e excluir jogos.

3. **Buscador de CEP:**
   - Experimente o buscador de CEP na seção correspondente, utilizando a API ViaCEP para obter informações de endereço com base no CEP fornecido.

### Tecnologias Utilizadas:

- XAMPP: Ambiente de desenvolvimento que inclui Apache, MySQL, PHP, e Perl.
- PHP: Linguagem de programação server-side.
- CodeIgniter: Framework PHP leve e rápido para desenvolvimento web.
- ViaCEP API: Serviço de busca de CEP brasileiro.

### Estrutura do Projeto:

- `application/controllers/Games.php`: Controlador para o CRUD de jogos.
- `application/controllers/Cep.php`: Controlador para o buscador de CEP.
- `application/models/Games_model.php`: Modelo para operações no banco de dados relacionadas aos jogos.
- `application/views/pages/games.php`: Página principal do CRUD de jogos.
- `application/views/pages/form-games.php`: Formulário para adicionar/editar jogos.
- `application/views/pages/cep.php`: Página para o buscador de CEP.
- `database.sql`: Script SQL para criar a tabela `tb_games` no banco de dados.

### Considerações Finais:

Este desafio é uma oportunidade para praticar e aprimorar habilidades de desenvolvimento web utilizando XAMPP, PHP, e o framework CodeIgniter. Sinta-se à vontade para explorar, personalizar e expandir este projeto de acordo com suas necessidades e conhecimentos.

**Divirta-se codificando!**
