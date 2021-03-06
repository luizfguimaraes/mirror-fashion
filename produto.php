<!DOCTYPE html>

<html>
<head>
  <title>Mirror Fashion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
  <link rel="stylesheet" href="css/produto.css">
</head>

<body>
  <?php include("cabecalho.php"); ?>

  <!--Aqui vai vir o miolo da pagina!! -->
<div class="container"> <!--envolvendo a div produto dentro da div container-->
  <div class="produto">
    <h1>Fuzzy Cardigan</h1>
    <span> por apenas R$129,00</span>
    <form action="checkout.php" method="post">
      <input type="hidden" name="nome" value="Fuzzy Cardigan" />
      <input type="hidden" name="preco" value="129.00" />
      <fieldset class="cores">
        <legend>
          Escolha a cor:
        </legend>

        <input type="radio" name="cor" value="verde" id="verde" checked />
        <label for="verde"> <img src="img/produtos/foto1-verde.png" alt="verde" />
        </label>

        <input type="radio" name="cor" value="rosa" id="rosa" />
        <label for="rosa"><img src="img/produtos/foto1-rosa.png" alt="rosa" />
        </label>
        <input type="radio" name="cor" value="azul" id="azul" />
        <label for="azul"><img src="img/produtos/foto1-azul.png" alt="azul" />
        </label>

      </fieldset>
      <input type="submit" class="comprar" value="Comprar" />
      <fieldset class="tamanhos">
        <legend>
          Escolha o tamanho:
        </legend>
        <input type="range" min="36" max="46" value="42" step="2"
        name="tamanho" id="tamanho">
        <output for="tamanho" name="valortamanho">
          42
        </output>
      </fieldset>
    </form>
  </div>
    <div class="detalhes">
      <h2>Detalhes do produto</h2>
      <p>
        Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade
        de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa engrega a jato.
      </p>

      <table>
        <thead>
          <tr>
            <th>
              Características
            </th>
            <th>
              Detalhe
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              Modelo
            </td>
            <td>
              Cardigã 7845
            </td>
          </tr>
          <tr>
            <td>
              Material
            </td>
            <td>
              Algodão e poliester
            </td>
          </tr>
          <tr>
            <td>
              Cores
            </td>
            <td>
              Azul, Rosa e Verde
            </td>
          </tr>
          <tr>
            <td>
              Lavagem
            </td>
            <td>
              Lavar a mão
            </td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
  <?php include("rodape.php"); ?>
  <script src="js/produto.js"></script>
</body>
</html>
