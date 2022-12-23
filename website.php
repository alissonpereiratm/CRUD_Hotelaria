<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventre dos Pélagos</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/4d0cdf4c93.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagens/LOGO.png" type="image/x-icon">
</head>

<body>
    <!--dobra 1-->
    <section class="dobra1">

        <div class="topo">
            <div class="logo"><img src="imagens/LOGO.png" /></div>

            <ul>
                <li class="ativo"><a href="">HOME</a></li>
                <li><a href="#pacotes">PACOTES</a></li>
                <li><a href="#cadastrar">CADASTRAR</a></li>
                <li><a href="#sobre">SOBRE</a></li>
                <li><a href="#contato">CONTATO</a></li>
                <li><a href="adm.php">ADMIN</a></li>
            </ul>
        </div>

        <div class="titulo">
            <h1>VENTRE DOS PÉLAGOS</h1>
            <p>Bem-vindo ao Ventre dos Pélagos.
                Seus especialistas em <br> viagens de luxo à praia, férias e passeios românticos</p>
        </div>

        <div class="botao">
            <a href="#cadastrar" class="butao">CADASTRAR</a>
            <a href="#pacotes" class="butao">SABER MAIS</a>
        </div>

    </section>

    <section class="dobra2">
        <div id="pacotes">
            <h1>PACOTES DE VIAGEM</h1>
            <h3>Monte Já seu Pacote para as Férias pelo Melhor Preço no Ventre dos Pélagos! Preços incríveis</h3>

            <div class="pacotes">
                <div class="package">
                    <h2>Econômico</h2>
                    <p>
                        <li>VOO COMERCIAL - IDA E VOLTA</li>
                        <li>HOTEIS 3 ESTRELAS</li>
                        <li>CAFÉ DA MANHÃ</li>
                    </p>
                </div>

                <div class="package">
                    <h2>Intermediário</h2>
                    <p>
                        <li>CLASSE EXECUTIVA - IDA E VOLTA</li>
                        <li>HOTEIS 5 ESTRELAS</li>
                        <li>BUFFET DE CAFÉ DA MANHÃ</li>
                        <li>SERVIÇO DE QUARTO</li>
                        <li>PISCINAS</li>
                        <li>SHOWS AO VIVO</li>
                    </p>
                </div>

                <div class="package">
                    <h2>Premium</h2>
                    <p>
                        <li>PRIMEIRA CLASSE - IDA E VOLTA</li>
                        <li>HOSPEDAGEM 7 ESTRELAS </li>
                        <li>RESTAURANTE 24 HORAS</li>
                        <li>ACADEMIA</li>
                        <li>LAVANDERIA</li>
                        <li>VALLET PARKING</li>
                        <li>CASSINO</li>



                    </p>
                </div>
            </div>
    </section>

    <!----------Dobra 3---------->
    <section class="servicos">
        <h1>HOSPEDAGENS</h1>
        <p>Possuimos os melhores serviços de hospedagem. Diferentes avaliações, preços e benefícios! </p>

        <div class="hotel">
            <div class="hotel1">

                <div class="image1">
                    <img src="imagens/resort1.png">
                    <div class="layer1">
                        <a href="#cadastrar">
                            <h3>VILLAMAS</h3>
                        </a>
                    </div>

                </div>
                <div class="image2">
                    <img src="imagens/resort2.png">
                    <div class="layer2">
                        <a href="#cadastrar">
                            <h3>ALUNA</h3>
                        </a>
                    </div>
                </div>
                <div class="image3">
                    <img src="imagens/resort3.png">
                    <div class="layer3">
                        <a href="#cadastrar">
                            <h3>EMPIRE'S</h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="formulario">
        <div id="cadastrar">
            <h1>CASDASTRE-SE</h1>
            <div class="form">
                <form method="POST" action="recebeHospede.php">
                    <input type="text" placeholder="Nome Completo" required name="nm_pessoa">
                    <input type="text" placeholder="CPF" required name="nr_CPF">
                    <input type="text" placeholder="Telefone" required name="nr_telefone">
                    <input type="text" placeholder="Número Cartão" required name="nr_cartao">
                    <input type="date" placeholder="Data de Nascimento" required name="data_nascimento">
                    <input type="text" placeholder="Endereço" required name="endereco">
                    <textarea rows="8" placeholder="Dúvidas" required name="duvidas"></textarea>
                    <button type="submit" class="btn">ENVIAR</button>

                </form>
            </div>

        </div>
    </section>

    <section class="footer">
        <div id="sobre">
            <H1>SOBRE NÓS</H1>
            <P>
                1987 foi o ano de fundação do Ventre dos Pélagos, e desde então somos destaque e exemplo no mundo todo. Com nossos serviços que produzem paz, liberdade, alegria... Um verdadeiro prazer sensorial. Nossos restaurantes possuem 5 estrelas Michelin e contamos com os serviços culinários das maiores culturas mundiais.
                Desde os tempos de fundação o conforto do cliente foi nossa prioridade, a satisfação dos mesmos é a nossa missão. Por isso, sempre sugerimos nossos quartos e suítes luxuosos e elegantemente projetados, cujas comodidades incluem serviços de quarto, vallet parking, restaurante 24 horas e muitos outros serviços que disponibilizamos para o agrado de nosso clientes. Nossa praia privada conta com corais e com nossas promoções de viagens você pode adquirir um mergulho no fundo mar e conhece-los de perto é uma experiencia de conexão com a natureza mais fortes que existem. Quem experimenta pela primeira vez a sensação de entrar nesse universo tão único e surpreendente , consequentemente, o sentimento de liberdade de maneira próspera resplandece nos corações de quem desfruta do que temos à oferecer. <br> Venha para o Ventre dos Pélagos.
            </P>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63497.86866791415!2d102.71297528183099!3d5.9093152803275615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31b6c101aced7741%3A0x82bc3dbe074ed77a!2sIlhas%20Perhentian!5e0!3m2!1spt-PT!2sbr!4v1671040056611!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div id="contato">
                <div class="icon">
                  <a href="https://m.facebook.com" target="_blank">  <i  class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://twitter.com" target="_blank"">  <i class="fa-brands fa-twitter"></i></a>
                  <a href="https://instagram.com" target="_blank"">  <i class="fa-brands fa-instagram"></i></a>
                  <a href="https://linkedin.com" target="_blank""> <i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p>Feito com <i class="fa-solid fa-heart"></i> por Equipe 1</p>
            </div>
        </div>


    </section>









</body>

</html>