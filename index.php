<!DOCTYPE html>
<html>

<head>
    <title>Mirror Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
    <link href="https://fonts.googleapis.com/css?family=Bad+Script|PT+Sans" rel="stylesheet">
</head>

<body>
  <?php include("cabecalho.php"); ?>
    <main class="container">
        <div class="destaque">
            <section class="busca">
                <h2>Busca</h2>

                <form>
                    <input type="search" />
                    <input type="submit" value="Enviar" />
                </form>
            </section>
            <!--fim .busca -->

            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e camisas</a>
                            <ul>
                                <li>
                                    <a href="#">Manga curta</a>
                                </li>
                                <li>
                                    <a href="#">Manga comprida</a>
                                </li>
                                <li>
                                    <a href="#">Camisa social</a>
                                </li>
                                <li>
                                    <a href="#">Camisa casual</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Calças</a>
                        </li>
                        <li>
                            <a href="#">Saias</a>
                        </li>
                        <li>
                            <a href="#">Vestidos</a>
                        </li>
                        <li>
                            <a href="#">Sapatos</a>
                        </li>
                        <li>
                            <a href="#">Bolsas e Carteiras</a>
                        </li>
                        <li>
                            <a href="#">Acessórios</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <!--fim .menu-departamentos-->

            <img src="img/destaque-home.png" alt="Promoção: Big City Nights" />

        </div>
        <!-- fim .container .destaque -->
        <div class="=container paineis">
            <!-- os paineis de novidades e mais vendidos estão aqui-->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <!--primeiro produto -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>

            <section class="painel mais-vendidos painel-compacto">
                <h2> Mais Vendidos</h2>
                <ol>
                    <!--produtos mais vendidos aqui -->
                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura1.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura2.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura3.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura4.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura5.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>

                    <li>
                        <a href="produto.html">
                            <figure>
                                <img src="img/produtos/miniatura6.png" />
                                <figcaption>
                                    Fuzz Cardigan por R$129,90
                                </figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
                <button type="button">Mostrar mais</button>
            </section>
        </div>
    </main>
<?php include("rodape.php") ?>

<script src="js/jquery.js"></script>
<script src="js/home.js"></script>a
</body>

</html>
