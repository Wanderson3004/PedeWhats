﻿<!DOCTYPE html>
<html lang='pt-br'>

<head>

    <!-- Meta tags Obrigatórias -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>

    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <!-- FontAwesome -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css' integrity='sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU' crossorigin='anonymous'>

    <!-- CSS Principal -->
    <link rel='stylesheet' href='css/estilo.css'>

    <title>PedeWhats - Peça sua pizza pelo Whatsapp</title>
</head>

<body>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col">
                <h1>Faça seu pedido abaixo:</h1>

                <form method="GET">
                    <label for="nome">Seu nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>

                    <label for="telefone">Telefone da pizzaria</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="DDD + Telefone (Somente números)" required>

                    <label for="mais-sabor">A pizza tem mais de um sabor?</label> <br>
                    <input type="radio" name="mais-sabor" value="sim"> Sim
                    <input type="radio" name="mais-sabor" value="não"> Não<br>

                    <label id="metade1" for="metade1">Qual o sabor da primeira metade?</label>
                    <select name="metade1" id="metade1" class="form-control">
                        <option value=""></option>
                        <option value="sabor1">sabor1</option>
                        <option value="sabor2">sabor2</option>
                        <option value="sabor3">sabor3</option>
                        <option value="sabor4">sabor4</option>
                        <option value="sabor5">sabor5</option>
                        <option value="sabor6">sabor6</option>
                        <option value="sabor7">sabor7</option>
                        <option value="sabor8">sabor8</option>
                        <option value="sabor9">sabor9</option>
                        <option value="sabor10">sabor10</option>
                    </select>

                    <label id="metade2" for="metade2">Qual o sabor da segunda metade?</label>
                    <select name="metade2" id="metade2" class="form-control">
                        <option value=""></option>
                        <option value="sabor1">sabor1</option>
                        <option value="sabor2">sabor2</option>
                        <option value="sabor3">sabor3</option>
                        <option value="sabor4">sabor4</option>
                        <option value="sabor5">sabor5</option>
                        <option value="sabor6">sabor6</option>
                        <option value="sabor7">sabor7</option>
                        <option value="sabor8">sabor8</option>
                        <option value="sabor9">sabor9</option>
                        <option value="sabor10">sabor10</option>
                    </select>

                    <label id="sabor-inteiro-label" for="sabor-inteiro">Selecione o sabor da pizza inteira</label>
                    <select name="sabor-inteiro" id="sabor-inteiro" class="form-control">
                        <option value=""></option>
                        <option value="sabor1">sabor1</option>
                        <option value="sabor2">sabor2</option>
                        <option value="sabor3">sabor3</option>
                        <option value="sabor4">sabor4</option>
                        <option value="sabor5">sabor5</option>
                        <option value="sabor6">sabor6</option>
                        <option value="sabor7">sabor7</option>
                        <option value="sabor8">sabor8</option>
                        <option value="sabor9">sabor9</option>
                        <option value="sabor10">sabor10</option>
                    </select>

                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button> <br> <br>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>

    <!-- JavaScript personalizado -->
    <script src="js/script.js"></script>

</body>

</html>