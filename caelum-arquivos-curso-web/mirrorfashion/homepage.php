<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mirror Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet/less" type="text/css" href="less/estilos.less">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width:	939px)">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script'>

</head>

<body>
    <header class="container">
        <h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
        <p class="sacola">
            Nenhum item na sacola de compras
        </p>

        <nav class="menu-opcoes">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>
    <div class="container destaque">
        <section class="busca">
            <h2>Busca</h2>

            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section>

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li><a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a>
                    <li><a href="#">Saias</a>
                    <li><a href="#">Vestidos</a>
                    <li><a href="#">Sapatos</a>
                    <li><a href="#">Bolsas e Carteiras</a>
                    <li><a href="#">Acessórios</a>
                </ul>

            </nav>





        </section>

        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
    </div>

    <div class="container paineis">
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <?php
                $conexao    =    mysqli_connect("127.0.0.1",    "root",    "",    "wd43");
                $dados    =    mysqli_query($conexao, "SELECT	*	FROM	produtos	ORDER BY data DESC LIMIT	0,	12");
                while ($produto    =    mysqli_fetch_array($dados)):
                ?>
                    <li>
                        <a href="produto.php?id=<?= $produto['id']    ?>">
                            <figure>
                                <img src="img/produtos/miniatura<?= $produto['id']    ?>.jpg"
                                    alt="<?= $produto['nome']    ?>">
                                <figcaption><?= $produto['nome']    ?> por <?= $produto['preco']    ?></figcaption>
                            </figure>
                        </a>
                    </li>
                <?php endwhile;    ?>
            </ol>

            <button type="button">Mostra mais</button>

        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/foto1-verde.jpg" style="width: 130px;">
                            <figcaption>Camisa Manga Longa</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/foto2-rosa.jpg" style="width: 130px;">
                            <figcaption>Camisa Rosa</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/foto3-azul.jpg" style="width: 130px;">
                            <figcaption>Camisa Manga Longa Azul</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/foto4-verde.jpg" style="width: 130px;">
                            <figcaption>Jaqueta Verde</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/foto9-rosa.jpg" style="width: 130px;">
                            <figcaption>Blusa Xadrex</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/miniatura10.jpg" style="width: 130px;">
                            <figcaption>Blusa Rosa</figcaption>
                        </figure>
                    </a>
                </li>

                <li>
                    <a href="">
                        <figure>
                            <img src="img/produtos/miniatura10.jpg" style="width: 130px;">
                            <figcaption>Blusa Rosa</figcaption>
                            <div id="fb-root"></div>
                            <div class="fb-like" data-href="http://www.mirrorfashion.net"
                    data-send="false" data-layout="box_count"
                    data-width="58" data-show-faces="false"></div>
                        </figure>
                    </a>
                </li>



            </ol>
            <button type="button">Mostra mais</button>
        </section>
    </div>
    </div>

    <footer>
        <div class="container">
            <img src="img/logo-rodape.png" alt="Logo	Mirror	Fashion">
            <ul class="social">
                <li><a href="http://facebook.com/mirrorfashion">Facebook</a></li>
                <li><a href="http://twitter.com/mirrorfashion">Twitter</a></li>
                <li><a href="http://plus.google.com/mirrorfashion">Google+</a></li>
            </ul>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/home.js"></script>
    <script src="js/less.js"></script>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

</body>

</html>

<script>
    var banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
    var bannerAtual = 0;

    function trocaBanner() {
        bannerAtual = (bannerAtual + 1) % 2;
        document.querySelector('.destaque	img').src = banners[bannerAtual];
    }
    setInterval(trocaBanner, 4000);
</script>