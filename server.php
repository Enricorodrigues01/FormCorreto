<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 class="cabecalho">
            NEXUS.GAMES
        </h1>
        
    </header>
    <nav>
        <a href="file:///C:/Users/Cliente%20Office/Documents/FormDeCadastro/index.html#"class="cabecalho">INICIO</a>
        <a href="file:///C:/Users/Cliente%20Office/Documents/FormDeCadastro/desenvolvedor.html" class="cabecalho">SOBRE</a>
        <a href="https://portal.ifrn.edu.br/"class="cabecalho">IFRN</a>
    </nav>
    <main>
        <br>
        <?php
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $idade = $_POST['idade'];
        $check = $_POST['check'];
        $jogos = $_POST['jogos'];
        $texto = $_POST['texto'];
        $mes = $_POST['mes'];
        $tempo = $_POST['tempo'];
        $cor = $_POST['cor'];
        $avaliacao = $_POST['avaliacao'];

        ?>
        <div class="dados">
            <h3>Email:</h3>
            <?php echo $email;?>
            <br>

            <h3>senha:</h3>
            <?php echo $senha;?>
            <br>
            
            <h3>reset:</h3>
            <?php echo $reset;?>
            <br>

            <h3>idade:</h3>
            <?php echo $idade;?>
            <br>

            <h3>check:</h3>
            <?php echo $check;?>
            <br>

            <h3>jogos:</h3>
            <?php echo $jogos;?>
            <br>

            <h3>texto:</h3>
            <?php echo $texto;?>
            <br>

            <h3>mes:</h3>
            <?php echo $mes;?>
            <br>

            <h3>tempo:</h3>
            <?php echo $tempo;?>
            <br>

            <h3>cor:</h3>
            <?php echo $cor;?>
            <br>

            <h3>avaliacao:</h3>
            <?php echo $avaliacao;?>
            <br>

            <h3>enviar:</h3>
            <?php echo $enviar;?>
            <br>
        </div>
    </main>
    <footer>
        <h6>
            IFRN campus Santa Cruz
        </h6>
        <h6>
            Trabalho de Autoria Web
        </h6>
        <h6>
            Prof. Marcelo Figueiredo Barbosa Júnior
        </h6>
        <h6>
            {Enrico Rodrigues Fernandes da Paz }{
            Lucas Gabriel de Pontes Lima}
        </h6>
    </footer>
</body>
</html>
