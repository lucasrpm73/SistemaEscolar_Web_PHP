<html>

<head>
    <title>Dev Web 2</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        function procurarCidade() {
            let nome = document.getElementById("estadoID").value;

            $.ajax({
                url: "../retornaCidades.php",
                type: "POST",
                data: "estado=" + nome,
                dataType: "html"
            }).done(function(resposta) {
                console.log(resposta);
                $('#cidadeID').html(resposta);
            }).fail(function(jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
            }).always(function() {
                console.log("completou");
            });
        }

        function mudarCorInput() {
            document.getElementById("nomeID").style.background = '#000000';
        }
    </script>
</head>

<body>
    <?php include("../layout/menu.php") ?>

    <div class="container">
        <h1>Cadastrar Aluno</h1>
        <form id="formDadastroDeAluno" method="POST" action="../index.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeID">Nome</label>
                    <input type="text" class="form-control" onclick="mudarCorInput()" name="nome" id="nomeID" placeholder="Aluno">
                </div>
                <div class="form-group col-md-3">
                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" name="cpf" id="inputPassword4">
                </div>
                <div class="form-group col-md-3">
                    <label for="sexoID">Sexo</label>
                    <select name="sexo" id="sexoID" class="form-control">
                        <option value="m" selected>Masculino</option>
                        <option value="f">Feminino</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="telefoneID">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="teleFoneID">
                </div>
                <div class="form-group col-md-4">
                    <label for="cepID">CEP</label>
                    <input type="number" class="form-control" name="cep" id="cepID">
                </div>
                <div class="form-group col-md-4">
                    <label for="turmaID">Turma</label>
                    <select name="turma" id="turmaID" class="form-control">
                        <option value="1225">1225</option>
                        <option value="1225">1226</option>
                        <option value="32212">32212</option>
                        <option value="32213" selected>32213</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estadoID">Estado Origem</label>
                    <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
                        <option value="0" selected>Escolher...</option>
                        <option value="sp">São Paulo</option>
                        <option value="ms">Mato Grosso do Sul</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidadeID">Cidade Origem</label>
                    <select id="cidadeID" name="cidade" class="form-control">

                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>

</html>