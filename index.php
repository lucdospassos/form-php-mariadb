<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: grid;
            gap: 15px;
            grid-template-columns: repeat(2, 1fr);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            height: 40px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        button[type="button"] {
            height: 40px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        button[type="button"]:hover {
            background-color: #45a049;
        }

        pre {
            background-color: #eee;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<?php
// Inicializa a variável de controle
$clienteCadastrado = false;

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados de conexão com o banco de dados
    $servername = "localhost";
    $username = "lucdospassos";
    $password = "@Deh99012#";
    $dbname = "db_php";

    // Conecta ao banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Prepara os dados para inserção no banco de dados
    $nome = $_POST["NOME"];
    $sobrenome = $_POST["SOBRENOME"];
    $telefone = $_POST["TELEFONE"];
    $endereco = $_POST["ENDEREÇO"];
    $bairro = $_POST["BAIRRO"];
    $cidade = $_POST["CIDADE"];
    $estado = $_POST["ESTADO"];


    // Processamento da foto
    $fotoNome = $_FILES["foto"]["name"];
    $fotoTmpName = $_FILES["foto"]["tmp_name"];
    $fotoDestino = "./img/" . $fotoNome;

     move_uploaded_file($fotoTmpName, $fotoDestino);

    //$data_nascimento = $_POST["DATA_DE_NASCIMENTO"];

    // Converte a data para o formato aceito pelo MariaDB (YYYY-MM-DD)
    $data_nascimento_input = $_POST["DATA_DE_NASCIMENTO"];
    $data_nascimento = date('Y-m-d', strtotime(str_replace('/', '-', $data_nascimento_input)));    

    // Query SQL para inserir dados na tabela
    $sql = "INSERT INTO CLIENTE (NOME, SOBRE_NOME, TELEFONE, ENDERECO, BAIRRO, CIDADE, ESTADO, FOTO, DATA_NASCIMENTO) VALUES ('$nome', '$sobrenome', '$telefone', '$endereco', '$bairro', '$cidade', '$estado', '$fotoDestino', '$data_nascimento')";

    // Executa a query
    if ($conn->query($sql) === TRUE) {
        $clienteCadastrado = true;
    } else {
        echo "Erro ao cadastrar o cliente: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

<div class="container">
    <h2>Cadastro de Cliente</h2>

    <?php
    // Verifica se o cliente foi cadastrado e exibe a mensagem correspondente
    if ($clienteCadastrado) {
        echo '<p style="color: green; text-align: center;">Cliente cadastrado com sucesso</p>';
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        <div>
            <label for="NOME">NOME:</label>
            <input type="text" name="NOME">

            <label for="SOBRENOME">SOBRENOME:</label>
            <input type="text" name="SOBRENOME">

            <label for="TELEFONE">TELEFONE:</label>
            <input type="text" name="TELEFONE">

            <input type="file" name="foto"><br>
        </div>

        <div>
            <label for="ENDEREÇO">ENDEREÇO:</label>
            <input type="text" name="ENDEREÇO">

            <label for="BAIRRO">BAIRRO:</label>
            <input type="text" name="BAIRRO">

            <label for="CIDADE">CIDADE:</label>
            <input type="text" name="CIDADE">

            <label for="ESTADO">ESTADO:</label>
            <input type="text" name="ESTADO">

            <label for="DATA_DE_NASCIMENTO">DATA DE NASCIMENTO:</label>
            <input type="text" name="DATA_DE_NASCIMENTO">
        </div>

        <input type="submit" value="Cadastrar">
	<button type="button" onclick="redirecionarParaNovaPagina()">Novo Cadastro</button>

<script>
    function redirecionarParaNovaPagina() {
        console.log("Função chamada!");
        // Substitua 'sua_pagina.html' pelo caminho real da sua página HTML
        window.location.href = 'http://34.72.56.1/';
    }
</script>



    </form>
</div>

</body>
</html>
