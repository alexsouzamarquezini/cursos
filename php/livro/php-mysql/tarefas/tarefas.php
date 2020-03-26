<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>
    <form action="">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="">
                Tarefa:
            </label>
            <input type="text" name="nome" />
            <input type="submit" value="Cadastrar">
        </fieldset>
    </form>
    <?php 
    if(array_key_exists('nome', $_GET)){         
          $_SESSION['lista_tarefas'][] = $_GET['nome'];
    } 

    $lista_tarefas = [];

    if(array_key_exists('lista_tarefas', $_SESSION)){
        $lista_tarefas = $_SESSION['lista_tarefas'];
    }
    ?>
    <table>
        <tr>
            <th>Tarefas</th>
        </tr>
        <?php foreach($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?= $tarefa; ?></td>
        </tr>
        <?php endforeach?>
    </table>
</body>
</html>
