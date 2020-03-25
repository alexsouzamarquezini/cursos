<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    $lista_tarefas = [];

    if(array_key_exists('nome', $_GET)){         
          $lista_tarefas[] = $_GET['nome'];
    } 
    ?>
</body>
</html>
