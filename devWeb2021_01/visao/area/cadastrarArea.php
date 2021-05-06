<html>

<head>
    <title>Dev Web 2</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        function mudarCorInput() {
            document.getElementById("nomeID").style.background = '#000000';
        }
    </script>
</head>

<body>
    <?php include("../layout/menu.php") ?>

    <div class="container">
        <h1>Cadastrar Area</h1>
        <form id="formDadastroDeArea" method="POST" action="../index.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeID">Nome</label>
                    <input type="text" class="form-control" onclick="mudarCorInput()" name="nome" id="nomeID" placeholder="Area">
                </div>
             <div class="form-group col-md-7">
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </div>
        </form>
    </div>
</body>

</html>