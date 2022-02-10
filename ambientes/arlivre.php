<?php
require 'conexao.php';

$lista = [];
$sql =$pdo->query("SELECT * FROM ar_livre");

if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gramado Tem</title>
  <link rel="icon" href="../src/img/icone_braso_prefeitura/brasao_gramado.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../src/style.css">
  <link rel="stylesheet" type="text/css" href="../src/ambientes.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand fonte-titulo cor-especial" href="#">Gramado Tem</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Buscar Local" aria-label="Search">
          <button class="btn borda-botao-cor-especial cor-especial " type="submit">Pesquisar</button>
        </form>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <ul class="navbar-nav">
            
          <li><a class="nav-link" href="../Home.html">Início</a></li>
           <li><a class="nav-link" href="../cadastrar.php">Cadastro</a></li>
           <li><a class="nav-link" href="../login.php">Login</a></li>
           <li><a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal-quem_somos">Quem somos</a></li>
           
           </ul>
        </div>
      </div>
    </nav> 
  </header> 
  
  <main class="cards cor-de-fundo">

   <section class="container-fluid cor-de-fundo " id="ambientes">
     <div class="row justify-content-center">
      <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
        <img src="../src/img/ar_livre_cards/snowland.card.png" class=" card-img-top card-posicao-imagem" alt="">
        <div class="card-body">
          <h5 class="card-title titulo_card">Snowland</h5>
          <a data-bs-toggle="modal" data-bs-target="#modal-snowland" href="#"  class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>
    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/mini_mundo.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Mini Mundo</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-minimundo" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/le_jardin.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Le Jardin Parque de Lavanda  </h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-lejardin" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/lago_negro.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Lago Negro</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-lagonegro" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/exceed_park.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Exceed Experience Park</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-exceed" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/praca_etnias.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card"> Praça das Etnias - Casa do Colono </h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-etnias" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/praca_major.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Praça Major Nicoletti </h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-major" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/lago_joaquina.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Lago Joaquina Rita Bier </h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-joaquina" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  
    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/ar_livre_cards/leopoldo_rosenfeldt.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Praça Leopoldo Rosenfeldt</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-leopoldo" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/ar_livre_cards/silvino_fiorenze.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Praça Silvino Fiorenze</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-silvino" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/ar_livre_cards/gramado_zoo.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Gramado Zoo</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-zoo" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/ar_livre_cards/parque_gaucho.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Parque Gaúcho </h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-gaucho" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  

   </div>
   </section> 

</main>

<footer class="bg-white p-3">
  <ul class="rodape ">
   <li> <p class="p-rodape">Fone: (54)32860220
      <br>Av. das Hortênsias, 2029 - Centro - Gramado
      <br> E-mail:<a class="cor-especial" href="mailto:eduardazingano@gmail.com">turismo@gramado.rs.gov.br</a></p>
   </li>  
  
   <li>
     <a href="https://www.facebook.com/prefeituradegramado"><img class="imagem-face-rodape" src="../src/img/rodape/face_icon.png" ></a>
   </li>
  
   <li>
    <a href="https://www.instagram.com/prefeituradegramado/"><img class="imagem-insta-rodape" src="../src/img/rodape/insta_icon.png" ></a>
  </li>
  </ul> 
  
  <p class="copyright"> 	
    &copy; Gramado Tem - 2022</p>
  
  <img src="../src/img/rodape/logo_gramado.png" class="imagem-logo-rodape">
  
  
  </footer>


<div class="modal fade" id="modal-quem_somos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-titulo" id="exampleModalLabel">Quem somos?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <p>O app "Gramado Tem" é uma iniciativa da Secretaria de <br>
          Turismo da cidade de Gramado/RS para potencializar o turismo na região.</p>

        <p>Institucional:
        Compete à Secretaria Municipal de Turismo: atrair investimentos para o desenvolvimento do turismo no município;<br>
        articular a promoção institucional da cidade no país e no exterior; 
        impulsionar ações que visem a integração<br> 
        das atividades do setor de turismo com a região; compreendendo destinos, roteiros e atividades turísticas dos <br>
        municípios integrados; estimular e participar de comitês ou fóruns municipais, regionais, estaduais e federais <br>
        que visem o desenvolvimento turístico da Região; incentivar a interação com entidades públicas e privadas, <br>
        organizações não governamentais e organizações da sociedade civil de interesse público, nacionais <br>  
        e internacionais, com o objetivo de incrementar o intercâmbio de novas tecnologias de desenvolvimento<br> 
        turístico; viabilizar a formação e a capacitação dos profissionais que atuam na área de turismo,<br>
        visando a melhoria da qualidade e, da produtividade dos <br>
        serviços prestados aos turistas; fomentar a captação e a <br>
        geração de eventos, nacionais e internacionais, no sentido de <br>
        minimizar os efeitos da sazonalidade da atividade turística; coordenar, monitorar e acompanhar as ações dos programas <br>
        da Política de Turismo do Estado e União; <br> 
       <p> responder demandas de Protocolo, Ouvidoria Fala Cidadão de sua Secretaria; realizar todos os procedimentos<br> 
        definidos pela Norma ISO 9001.</p>
        </p>
        <p>  
     <br>Av. das Hortênsias, 2029 - Centro - Gramado <br>
       Fone: (54)32860220 <br>
       E-mail:<a class="cor-especial" href="mailto:turismo@gramado.rs.gov.br">turismo@gramado.rs.gov.br</a>
      </p> 
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>


<!--Modal cards-->

<div class="modal fade" id="modal-snowland" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Snowland</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/snowland3.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/snowland1.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/snowland2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/snowland4.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class=" descricao" >São diversas atrações congelantes, como a montanha de neve, o espetáculo flokus, o turbing e a patinação no gelo. É encantador o espetáculo da patinação artística.
              O lugar faz frio mesmo! Chega a ser -5.º. Você pode alugar uma roupa de frio no parque, mas é desnecessário caso você estiver bem agasalhado.</div>
              
              <div class="paragrafo">
              <p></p>
              <p>Endereço: RS-235, R. Linha Carazal, 9009, Gramado - RS, 95670-000  </p>
              <p>Avaliação:4,3(24.979) </p>
              <p>Horário de Funcionamento: 10h às 17h</p>
              <p>Contato: WhatsApp (54) 3295-6000</p>
              <p>Média de Preços: Passaportes variam de 94,00 à 189,00(crianças de 1 a 3 e 11 meses não pagam)</p>
              <p>Site: <a href="https://www.snowland.com.br/ingressos/"></a>https://www.snowland.com.br/ingressos/</p>
              </div>

            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>
  
<div class="modal fade" id="modal-minimundo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mini Mundo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/minimundo1.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/minimundo2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/minimundo3.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/minimundo4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Mini Mundo é um parque ao ar livre formado por réplicas fiéis de prédios de várias partes do mundo, ricas em detalhes e únicas, baseadas em seus respectivos projetos originais.
              O parque conta com infraestrutura incluindo local para alimentação, lojas temáticas e espaço infantil.</div>
              
              <div class="paragrafo">
              <p></p>
              <p>Endereço: Rua Horário Cardoso, 291 CEP 95670-000 Gramado-RS-Brasil </p>
              <p>Avaliação:4,7(33.407) </p>
              <p>Horário de Funcionamento: Das 9h até às 17h</p>
              <p>Contato: (54) 3286.4055</p>
              <p>Média de Preços:26,00 à 58,00</p>
              <p>Site: <a href="https://loja.minimundo.com.br/">https://loja.minimundo.com.br/ </a></p>
            </label>
            </div>
           </div>

        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>

<div class="modal fade" id="modal-lejardin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Le Jardin Parque de Lavanda</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/lejardin1.jpg" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lejardin2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lejardin3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lejardin4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Com plantas exóticas e espécies inéditas de lavanda no Brasil, apresenta a seus visitantes além de um belíssimo jardim, uma loja temática, estufas de produção de flores e um Bistrô.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:RS-115, 37700 - Várzea Grande, Gramado - RS, 95670-000 </p>
              <p>Avaliação:4,7 (8.333) </p>
              <p>Horário de Funcionamento: Abertos a visitação de terças à domingos das 9h30 ás 17h30</p>
              <p>Contato: WhatsApp (54)98432752</p>
              <p>Valor : de 0 a 6, isentas 
                de 7 a 12 anos, meia entrada, R$10,00
                de 13 a 59, R$20,00
                a partir de 60 anos, meia entrada R$10,00</p>
                <p>Site: <a href="https://lavandas.com.br/">https://lavandas.com.br/</a></p>
            </label>
            </div>
           </div>
           
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>

<div class="modal fade" id="modal-lagonegro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lago Negro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/lagonegro1.jpg" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagonegro2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagonegro3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagonegro4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Este é um dos pontos turísticos mais famosos de Gramado. As águas escuras e profundas do Lago Negro são envolvidas pelo verde das árvores que fazem deste um dos lugares mais bonitos da cidade.
              A visita ao Lago Negro é recomendada a qualquer hora do dia – seja pela manhã para uma boa caminhada ou ao entardecer para sentar e tomar um chimarrão – já que o local está sempre movimentado.O pedalinho é a maior atração do parque, funciona diariamente das 8h30 às 18h.</div>
             
              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. A. J. Renner - Bairro Lago Negro </p>
              <p>Avaliação: 4,8 (8.729) </p>
              <p>Horário de Funcionamento: acesso livre (24 horas)</p>
              <p>Contato: (54) 3292195</p>
              <p>Valor : A entrada no parque  é gratuita </p>
            </label>
            </div>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->

<div class="modal fade" id="modal-exceed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Exceed Experience</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/exceed1.png" class="d-block w-100 modal-carrosel" alt="">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/exceed2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/exceed3.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/exceed4.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Altamente tecnológico, com amplo uso de projeção mapeada, é o parque que conta com maior número de projetores no Brasil, utilizando diferentes formas de realidade virtual, as atrações simulam as mais diversas aventuras e exploram novas sensações visuais, auditivas e perceptivas. O Exceed Experience Park buscou o que há de mais moderno envolvendo a tecnologia para que o público possa imergir em um mundo de ultrarealidade! São experiências em simuladores, cidade futurística, cinema flyover, U-create e X-Food</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Av. das Hortênsias, 4510 - Estrada Gramado, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,2 (724) </p>
              <p>Horário de Funcionamento: Aberto todos os dias das 10h às 19h</p>
              <p>Contato: (54) 3422-2400</p>
              <p>Valor : Os passaportes variam de 119,00 à 228,00 </p>
              <p>Site: <a href="https://exceedpark.com.br/">https://exceedpark.com.br/</a></p>
            </label>
            </div>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->

<div class="modal fade" id="modal-etnias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Praça das Etnias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/pracaetnias1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracaetnias2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracaetnias3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracaetnias4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> É na Praça das Etnias que se localiza a Casa do Colono, onde você encontra produtos típicos produzidos no interior da cidade.É um lugar bem charmoso e decorado.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Av. Borges de Medeiros, 1848 - Centro, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,6 (9.851)</p>
              <p>Horário de Funcionamento:Aberto 24h</p>
              <p>Contato:(54) 3036-0389</p>
              <p>Média de Preços:Acesso livre</p>

            
            </label>
            </div>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->

<div class="modal fade" id="modal-major" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Praça Major Nicoletti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/pracamajor1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracamajor2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracamajor3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/pracamajor4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> Inaugurada em 1936 e reinaugurada em 2003, recebeu o nome do 1º subintendente do local, responsável pela localização atual de Gramado, núcleo da sede desde 17 de janeiro de 1913. A praça compõe, com a Igreja Matriz São Pedro e o Palácio dos Festivais, um dos cenários mais característicos da cidade.</div>
              
              <div class="paragrafo">
              <p></p>
              <p>Endereço:Vila Suica, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,7 (71)</p>
              <p>Horário de Funcionamento:Aberto 24h</p>
              <p>Contato:Não possui</p>
              <p>Média de Preços:Acesso livre</p>

            
            </label>
            </div>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------>
<div class="modal fade" id="modal-joaquina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lago Joaquina Rita Bier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/lagojoaquina1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagojoaquina2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagojoaquina3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/lagojoaquina4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> O Lago Joaquina Rita Bier é um lago artificial com 17 mil metros quadrados. Araucárias com mais de 70 anos resistem ao tempo e contribuem com sua parcela de beleza ao local que foi idealizado por Leopoldo Rosenfeld.
              A qualquer hora do dia é possível ver pessoas caminhando ou correndo no entorno do lago. Tem ainda quem prefira sentar em um dos bancos ou mesmo no gramado e contemplar o visual. Lá é onde acontece o grande espetáculo do Natal Luz.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: R. Leopoldo Rosenfeld, 919 - Planalto, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,6 (8.700)</p>
              <p>Horário de Funcionamento:Aberto 24h</p>
              <p>Contato:Não possui</p>
              <p>Média de Preços:Acesso livre (Exceto no Natal Luz )</p>
            </label>
            </div>
           </div>

        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>
<!-------->

<div class="modal fade" id="modal-leopoldo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Praça Leopoldo Rosenfeldt</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/leopoldo1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/leopoldo2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/leopoldo3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/leopoldo4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> A Rótula das Bandeiras esta localizada na Praça Leopoldo Rosenfeldt e é uma das paradas obrigatórias dos turistas de carteirinha que gostam de tirar uma bela foto para recordação. Nesta praça estão hasteadas as bandeiras de todos  os estados brasileiros, por isso o nome da rótula.
              Há uma réplica do Kikito em tamanho gigante em um belo jardim florido bem em frente a Rótula das Bandeiras, que completam o cenário para a foto perfeita.</div>
              
              <div class="paragrafo">
              <p></p>
              <p>Endereço:Av. Borges de Medeiros, 1989 - Planalto, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,6 (10) )</p>
              <p>Horário de Funcionamento:Aberto 24h</p>
              <p>Contato:Não possui</p>
              <p>Média de Preços:Acesso livre</p>

            </div>
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!------->

<div class="modal fade" id="modal-silvino" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Praça Silvino Fiorenze</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/silvino1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/silvino2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/silvino3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/silvino4.jpeg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput"> 
              <div class="descricao"> Ótimo lugar para as crianças brincarem, parquinho ao ar livre, com banheiros, bebedouro e bancos na sombra.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. Sen. Salgado Filho, 123 - Vila Suica, Gramado - RS, 95670-000, Brasil</p>
              <p>Avaliação:4,7 (1.445)</p>
              <p>Horário de Funcionamento:08:00 - 20:00</p>
              <p>Contato:Não possui</p>
              <p>Média de Preços:Acesso livre</p>
              </div>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->

<div class="modal fade" id="modal-zoo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gramado Zoo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/zoo1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/zoo2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/zoo3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/zoo4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> Em funcionamento desde setembro de 2008, o GramadoZoo traz um novo conceito para o segmento. Bem-estar animal, pesquisa, educação e conservação ambiental são os pilares que norteiam as atividades do empreendimento. Composto exclusivamente por animais da fauna brasileira, oferece uma experiência de proximidade com os animais. No lugar das grades e jaulas, vidros blindados e enormes viveiros de imersão reproduzem com fidelidade o habitat das espécies.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:ERS 115, km-35 (Várzea Grande) - Gramado - RS</p>
              <p>Avaliação:4,5 (6.530)</p>
              <p>Horário de Funcionamento:Das 10h às 16h</p>
              <p>Contato:(54) 3421 0800 </p>
              <p>Valor:  R$ 70,00 o ingresso (crianças menores de 3 anos são isentas)</p>
              <p>Site: <a href="https://gramadozoo.com.br/">https://gramadozoo.com.br/</a></p>
              </div>
            
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>

<!----->
<div class="modal fade" id="modal-gaucho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Parque Gaucho</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </header>
      <main class="modal-body">
        <form>

          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../src/img/modais/ar_livre/gaucho1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/gaucho2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/gaucho3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/ar_livre/gaucho4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          

          <div class="form-group">
            <label for="formGroupExampleInput">
              <div class="descricao"> O empreendimento possui uma infraestrutura completa de cultura, gastronomia e lazer. Em área de 120 mil metros quadrados, o parque conta com o Memorial do Gaúcho, Lanchonete temática (Pulperia), Arena de doma, Programa de resgate de animais crioulos, Galpão mirim (um espaço lúdico que ensina tradições gaúchas especialmente para as crianças), Horta orgânica e herbário e Mangueira para apresentações da lida campeira.(O parque Gaúcho e o GramadoZoo formam parte do mesmo complexo.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Estrada RS 115 Km 35 – Bairro Várzea Grande (a 700m do GramadoZoo)</p>
              <p>Avaliação:4,4 (2,347)</p>
              <p>Horário de Funcionamento:Estão fechados durante a Pandemia</p>
              <p>Contato:(54) 3421 0800 </p>
              <p>Valor:  R$ 70,00 o ingresso (crianças menores de 3 anos são isentas)</p>
              <p>Site: <a href="http://parquegaucho.com.br/">http://parquegaucho.com.br/</a></p>

            </div>
            </label>
           </div>
        
      </form>
      </main>
      <footer class="modal-footer">
       
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </footer>
    </dialog>
  </div>
</div>



  

  

  

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
   </script>
    
 
</body>
</html>
