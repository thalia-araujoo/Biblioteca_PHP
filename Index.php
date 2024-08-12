<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar o meu livro!</title>
    <style>

        body{
            font-family: sans-serif;
        }
        .container {
            width: 300px;
            margin: 50px auto;
        }

        form{
            display: flex;
            flex-direction: column;
        }

        input[type="sobmit"]{
            padding: 10px;
            margin-top: 10px;
            background-color: #007Bff;
            color: white;
            border: nome;
            cursor: pointer;
        }

        input [type="submit"]:hover{
            background-color: #0056b3;

        }

        .mensagem{
            margin-top: 10 px;
            color : green;
        }

        .livro-detalhes{
            margin-top: 20px
        }


    </style>
</head>


<body>
    <div class="container">
        <h1>Cadastrar livro</h1>

        <?php if (isset($mensagem)) :?>
            <div class="mensagem"><?php  echo $mensagem; ?></div>
            <?php endif; ?>
            
        <form method="postagem" action="">

            <label for="Titulo">Titulo: <br> </label>
            <input type="text" id="titulo" nome = 'titulo' required>

            <label for="Ano">Ano: </label>
            <input type="text" id="ano"  ano = "ano" required>

            <label for="Autor">Autor: </label>
            <input type="text" id="autor" autor = "autor" required><br>

            <input type="submit" value="cadastar">
        </form>

    <?php if ($livro_recuperado) : ?>
        <div class="livro_detalhes">
            <h2>livro cadastrado:</h2>
            <p><strong>titulo:</strong> <?php echo $livro_recuperado->gettitulo(); ?></p>
            <p><strong>autor:</strong> <?php echo $livro_recuperado->getautor(); ?></p>
            <p><strong>ano:</strong> <?php echo $livro_recuperado->getano(); ?></p>
        </div>
    <?php endif; ?>
   
   </div>
</body>
</html>