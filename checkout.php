<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="css/bootstrap-flatly.css" />
    <link rel="stylesheet" href="css/checkout.css" />
</head>

    <body>
      <nav class="navbar navbar-default navbar-static-top">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Mirror Fashion</a>
          <button class="navbar-toggle collapsed" type="button" data-target=".navbar-collapse"
          data-toggle="collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
        </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse">
          <li>
            <a href="sobre.php">Sobre</a>
          </li>
          <li>
            <a href="#">Ajuda</a>
          </li>
          <li>
            <a href="#">Perguntas Frequentes</a>
          </li>
          <li>
            <a href="#">Entre em contato</a>
          </li>
        </ul>
      </nav>
      <div class="jumbotron">
        <div class="container">



        <h1>Ótima escolha!</h1>
        <p>
            Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.
        </p>
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-default">
            <div class="panel-heading">
            <h2> Sua compra</h2>
            </div>
            <div class="panel-body">
        <img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan"
        class="img-thumbnail img-responsive"/>
        <dl>
          <dt>
            Produto
          </dt>
          <dd>
            <?= $_POST['nome'] ?>
          </dd>
          <dt>
            Cor
          </dt>
          <dd>
            <?=$_POST['cor'] ?>
          </dd>
          <dt>
            Tamanho
          </dt>
          <dd>
            <?= $_POST['tamanho'] ?>
          </dd>
          <dt>
            Preço
          </dt>
          <dd id="preco">
            <?= $_POST['preco'] ?>
          </dd>
        </dl>
        <div class="form-group">
          <label for="qt">Quantidade</label>
          <input id="qt" class="form-control" type="number" min="0" max="99" value="1" />
        </div>
        <div class="form-group">
          <label for="total">Total</label>
          <output for="qt preco" id="total" class="form-control">
            <?= $_POST["preco"] ?>
          </output>
        </div>
            </div>
        </div>
      </div>

        <form class="col-sm-8">
          <div class="row">
          <fieldset class="col-md-6">
            <legend>
              Dados Pessoais
            </legend>
            <div class="form-group">
              <label for="nome">Nome completo</label>
              <input type="text" class="form-control" id="nome" name="nome"
              autofocus required/>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email"
              placeholder="email@exemplo.com" />
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" id="cpf" name="cpf"
              placeholder="000.000.000-00" data-mask="999.999.999-99" required/>
            </div>
            <div class="checkbox">
              <label>
                  <input type="checkbox" value="sim" name="spam" checked />
                  Quero receber spam da Mirror Fashion
              </label>
            </div>
          </fieldset class="col-md-6">
          <fieldset>
            <legend>
              Cartão de crédito
            </legend>
            <div class="form-group">
              <label for="numero-cartao">Número - CVV</label>
              <input type="text" class="form-control" id="numero-cartao"
              name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
            </div>
            <div class="form-group">
              <label for="bandeira-cartao">Bandeira</label>
              <select name="bandeira-cartao" id="bandeira-cartao"
              class="form-control">
              <option value="master">Mastercard</option>
              <option value="visa">
                VISA
              </option>
              <option value="amex">
                American Express
              </option>
            </div>
            <div class="form-group">
              <label for="validade-cartao">Validade</label>
              <input type="month" class="form-control" id="validade-cartao"
              name="validade-cartao">
            </div>
          </div>
          </fieldset>
          <button type="submit" class="btn btn-primary btn-lg pull-right">
            <span class="glyphicon glyphicon-thumbs-up"></span>
            Confirmar pedido
          </button>
        </form>
      </div>
      </div> <!-- fim do .container da p[agina -->
      </div> <!--fim do.container do jumbotron -->
    </div>  <!-- fim do .jumobrton -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/inputmask-plugin.js"></script>
    <script src="js/total.js"></script>
    </body>

</html>
