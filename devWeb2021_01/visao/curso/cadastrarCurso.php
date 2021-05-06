<html>

<head>
    <title>Dev Web 2</title>

    <!-- <?php include("../visao/bootstrap.php") ?> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <script>
    function mudarCorInput() {
        document.getElementById("nomeID").style.background = '#000000';
    }
    </script>
</head>

<body>
    <?php include("../layout/menu.php") ?>

    <div class="container">
        <h1>Cadastrar Curso</h1>
        <form id="formDadastroDeAluno" method="POST" action="../index.php">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeID">Nome</label>
                    <input type="text" class="form-control" onclick="mudarCorInput()" name="nome" id="nomeID"
                        placeholder="Nome do Curso">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="descricaoID">Descrição</label>
                    <input type="desc" class="form-control" name="descricao" id="descricaoID">
                </div>
                <div class="form-group col-md-4">
                    <label for="conceitoID">Conceito no ENADE</label>
                    <input type="number" class="form-control" name="conceito" id="conceitoID">
                </div>
            </div>

            <div class="form-group col-md-8">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <div>
                            <label for="diaa">Data da Pimeira oferta:</label>
                            <input type="date" id="bday" name="diaa" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                            <span class="validity"></span>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="areaID">Area</label>
                        <select name="area" id="areaID" class="form-control">
                            <option value="exe1">1</option>
                            <option value="exe2">2</option>
                            <option value="exe3">3</option>
                            <option value="exe4" selected>4</option>
                        </select>
                    </div>
                </div>
            </div>



            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</body>

</html>