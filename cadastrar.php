<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--icones-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Na Base Do Odio</title>
</head>

<body>
    <nav class="nav-extended black lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="galeria.php">galeria</a></li>
                <li><a href="cadastrar.php">cadastrar</a></li>
            </ul>

        </div>
        <div class="nav-header center">
            <h1>Na Base Do Odio</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent grey darken-1">
                <li class="tab"><a class="active">Pagina Principal</a></li>
                <li class="tab"><a class="active" href="#test2">Receitas Em Video</a></li>
                <li class="tab "><a class="active">Favoritos</a> </li>
            </ul>
        </div>
    </nav>
    <!-- div de titulo -->
    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <!-- input de cadastrar receitas -->
                    <span class="card-title"> Cadastrar Receitas </span>
                    <div class="row">
                        <div class="input-field col s12">
                            <input value="" id="Receita" type="text" class="validate" require>
                            <label for="disabled">Nome Da Receita</label>
                        </div>
                    </div>
                    <!-- div de ingredientes-->
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                                    <label for="textarea1">Ingredientes</label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- input numerico -->
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="nota" type="number" step=".5" min="0" max="10" class="validate" require>
                            <label for="nota">Nota Da Receita</label>
                        </div>

                    </div>
                    <!-- div de bota selecionar arquivo de imagem do pc-->
                    <form action="#">
                        <div class="file-field input-field">
                            <div class="btn grey darken-4">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    </form>
                </div>

            </div>


            <div class="card-action">
                <a class="waves-effect waves-light grey btn" href="galeria.php">Cancelar</a>
                <a href="#" class="waves-effect waves-light black btn">Confirmar</a>
            </div>
        </div>
    </div>
    </div>
</body>

</html>