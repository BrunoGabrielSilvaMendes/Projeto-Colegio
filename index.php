<?php
   
   include('config.php');
   include('Mysql.php');
   include('Form.php');
   
    Mysql::conectar();
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colégio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
    <div class="form_cd">

    <?php
    
        if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
            $ferias = $_POST['ferias'];
            $nome = $_POST['nome'];
            $serie = $_POST['serie'];

            if($ferias == ''){
                Form::alert('erro','O campo férias ficou vazio !');
            }else if($nome == ''){
                Form::alert('erro','O campo nome ficou vazio !');
            }else if($serie == ''){
                Form::alert('erro','O campo serie ficou vazio !');
            }else{
                Form::cadastrar($ferias,$nome,$serie);
                Form::alert('sucesso','Suas férias foi enviada ! ');
            }


        }

    ?>

        <h2>Colégio Caminho do Crescer</h2>
    <form method="POST">
        <div><input type="text" name="nome" placeholder="Digite o seu nome"></div>
        <div><input type="text" name="serie" placeholder="Qual série você está ?"></div>
        <div><input type="text" name="ferias" placeholder="Digite como foi suas ferias"></div>
        <div><input type="submit" name="acao" value="Enviar"></div>
        <div><input type="hidden" name="form" value="f_form"></div>
        </form>
    </div><!--form_cd-->

    <header>
        <nav>
            <a class="logo" href="index.php">Colégio Caminho do Crescer</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>

            </div>
        </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
</body>
</html>
