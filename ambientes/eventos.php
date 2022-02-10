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
        <img src="../src/img/eventos_cards/museu_de_cera.card.png" class=" card-img-top card-posicao-imagem" alt="">
        <div class="card-body">
          <h5 class="card-title titulo_card">Museu de Cera</h5>
          <a  data-bs-toggle="modal" data-bs-target="#modal-cera" href="#" class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>

      <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
        <img src="../src/img/eventos_cards/a_mina.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
        <div class="card-body">
          <h5 class="card-title titulo_card">A Mina - Museu de Pedras</h5>
          <a  data-bs-toggle="modal" data-bs-target="#modal-mina" href="#" class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>
    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/reino_chocolate.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">O Reino de Chocolate</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-chocolate" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/museu_dream_cars.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hollywood Dream Cars</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-cars" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/museu_da_moda.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Museu da Moda</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-moda" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/galleria_darte.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Galleria D'arte Giovanni Bocchi</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-arte" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>


    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/desfile_natal.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Grande Desfile de Natal - Celebrando Tradições</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-natal" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/reino_natal.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Reino do Natal</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-reino" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/primeiro_milagre.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Primeiro Milagre do Menino Jesus</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-jesus" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/nativitaten.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Nativitaten</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-navi" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  
    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/eventos_cards/tour_uva_vinho.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Tour Uva e Vinho: Maria Fumaça + Epopéia + Malharias + Tramontina + Vinícolas + Almoço Italiano + Tour Gramado e Canela</h5>
        <a  data-bs-toggle="modal" data-bs-target="#modal-passeio" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/city_tour.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">City tour Gramado e Canela</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-city" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/rua_torta.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Rua Torta</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-torta" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/casa_seganfredo.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Vinícola Casa Seganfredo</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-sega" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/cascata_caracol.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Cascata do Caracol</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-caracol" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/bondinhos.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Bondinho aéreo</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-bonde" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/eventos_cards/raizes_coloniais.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Tour Raízes Coloniais + Caffé Colonial</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-tour" href="#" class="btn botao botao-cor-especial">Ver mais</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Quem somos?</h5>
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

<div class="modal fade" id="modal-cera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Museu de Cera</h5>
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
                <img src="../src/img/modais/eventos/cera2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cera3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cera4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cera1.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">Considerado o primeiro museu de cera da América Latina, foi inaugurado em 2009 e conta com cerca de 70 estátuas, entre elas réplicas de artistas, cantores, políticos etc. 
              </div>
              
              <div class="paragrafo">
                <p></p>
              <p>Endereço: Avenida das Hortênsias 5.507 - Ipê Amarelo , Gramado - RS 95670-000 </p>
              <p>Avaliação: 4,3 </p>
              <p>Horário de Funcionamento: domingo a quinta 08h00 às 18h30 / sexta a sabado 08h00 ás 19h00</p>
              <p>Contato: WhatsApp 0800 200 2019</p>
              <p>Média de preço: R $70,00 a R $140,00.</p>
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

<!------------->

<div class="modal fade" id="modal-mina" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">A Mina Museu de Pedras</h5>
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
                <img src="../src/img/modais/eventos/mina1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/mina2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/mina3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/mina4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Museu constituído em forma de mina de ametista cravejada de pedras preciosas. A mina possui um túnel de 80 metros repleto de uma beleza encantadora
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Rodovia Rs 235 km 31 Carazal Gramado - Rs 95670-000 </p>
              <p>Avaliação: 4,5 </p>
              <p>Horário de Funcionamento:segunda a domingo das 08h30 às 19h00</p>
              <p>Contato: WhatsApp (54) 99956-7483</p>
              <p>Média de preço: R$ 15,00 a R$ 30,00.</p>
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

<div class="modal fade" id="modal-chocolate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">O Reino de Chocolate </h5>
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
                <img src="../src/img/modais/eventos/chocolate1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/chocolate2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/chocolate3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/chocolate4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> O reino de chocolate é um espaço da fábrica de chocolates caracol. O lugar tem uma loja com restaurante, com uma vista linda para o Vale do Quilombo, e uma atração fechada que explica o processo de fabricação do chocolate e como o cacau se desenvolveu ao longo da história para que fosse tão difundido como é hoje.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Av das Hortênsias 5382, estrada gramado - canela, Rs. </p>
              <p>Avaliação: 4,4 </p>
              <p>Horário de Funcionamento:domingo a sexta das 8h30 às 18h30 / sábados e feriados 8h30 às 19h30</p>
              <p>Contato: WhatsApp (54) 3286-3588</p>
              <p>Média de preço: R$ 11,00 a R$22,00 </p>
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

<!---------->

<div class="modal fade" id="modal-cars" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hollywood Dream Cars </h5>
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
                <img src="../src/img/modais/eventos/cars1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cars2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cars3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/cars4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Inaugurado em Julho de 1997 é  a maior exposição de carros antigos  restaurados com perfeição sem fugir de nenhum detalhe do original que fizeram história no meio automobilístico.
              </div> 

              <div class="paragrafo">
                <p></p>
              <p>Endereço: Avenida das Hortênsias, R. Vigilante, 4151, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,4 </p>
              <p>Horário de Funcionamento: segunda a domingo das 08h00 às 18h30</p>
              <p>Contato: 0800 200 2019</p>
              <p>Média de preço:R$ 30,00 a R$ 60,00 </p>
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

<!------------>

<div class="modal fade" id="modal-moda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Museu da Moda </h5>
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
                <img src="../src/img/modais/eventos/moda1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/moda2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/moda3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/moda4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> E assim se reflete o Museu da Moda: uma reconstrução estética do vestuário feminino retratando a moda em diversas épocas, com destaque às réplicas de vestidos de rainhas e princesas: Antiguidade (nas civilizações Egito, Pérsia, Síria, Grécia, Roma, e Bizâncio), Idade Média, Iluminismo, Renascença, Era Napoleônica, Rainhas da França, Belle Epoque, Avant garde (Vanguarda), século XX e século XXI. 
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Av. Ernani Kroeff Fleck, 1810 - São José - Canela - RS</p>
              <p>Avaliação: 4,4 </p>
              <p>Horário de Funcionamento: Todos os dias das 09h30 às 18h00</p>
              <p>Contato: (54) 3282-1121</p>
              <p>Média de preço: R$ 68,00 </p>
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

<!----------------->

<div class="modal fade" id="modal-arte" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Galleria D'arte Giovanni Bocchi</h5>
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
                <img src="../src/img/modais/eventos/arte1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/arte2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/arte3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/arte4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Galeria de arte que busca reunir a arte de diversos artistas locais em um ambiente acolhedor e único.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Centro, Av. Borges de Medeiros, 3165 - loja 07, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,5 </p>
              <p>Horário de Funcionamento: segunda a sábado das 13h30 às 19h30 / domingo fechado</p>
              <p>Contato:(54) 3286-5750</p>
              <p>Média de preço: Entrada Gratuita  </p>
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

<!---------->

<div class="modal fade" id="modal-natal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Grande Desfile de Natal - Celebrando Tradições</h5>
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
                <img src="../src/img/modais/eventos/natal1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/natal2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/natal3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/natal4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">  O grande momento do Natal Luz de Gramado, O Grande Desfile de Natal - Celebrando Tradições, é o espetáculo mais assistido de toda a história do evento com um espetáculo formado por alas temáticas cada uma traz um pouco da história do Natal, começando com o nascimento de Jesus Cristo na ala da Luz Sagrada que abre o desfile, passando por diversas alas como a dos Doces Enfeites que transportará você para as lembras das guloseimas e dos presentes na ceia de Natal, até a chegada da ala Branca onde a corte da Rainha da Neve prepara a chegada do visitante mais importante da noite.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:ExpoGramado, Av. Borges de Medeiros, 4111</p>
              <p>Avaliação: 4,1 </p>
              <p>Horário de Funcionamento: De 29 de outubro de 2021 a 16 de janeiro de 2022,  Quartas, Sextas e Domingos às 21h. </p>
              <p>Contato:54) 99634-8983</p>
              <p>Média de preço: R$ $190,00 a R$ $300,00. </p>
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

  <div class="modal fade" id="modal-reino" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <dialog class="modal-content">
        <header class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Reino de Natal</h5>
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
                  <img src="../src/img/modais/eventos/reino1.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/eventos/reino2.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/eventos/reino3.jpg" class="d-block w-100 modal-carrosel" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="../src/img/modais/eventos/reino4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
                <div class="descricao">  Para conhecer o lugar que guarda toda a magia do Natal, será preciso atravessar a Floresta do Reino. Nesta jornada o público será guiado pelos carismáticos esquilos e pássaros da floresta que mostrarão o caminho em mais um emocionante show de luzes, efeitos e performances aéreas. Abertos os caminhos da floresta, o público enfim chegará à Vila Branca do Reino, no exato momento em que as renas deslizam e ensaiam seus passos para o longo voo que virá. É neste magnífico e cintilante show de luz e neve que os visitantes irão descobrir que lugar é este que se transformou aos poucos no verdadeiro Reino do Natal.
                </div>

                <div class="paragrafo">
                <p></p>
                <p>Endereço: ExpoGramado, Av. Borges de Medeiros, 4111</p>
                <p>Avaliação: 4,1 </p>
                <p>Horário de Funcionamento: De 29 de outubro de 2021 a 16 de janeiro de 2022,  Todos os dias, das 13h00 às 19h30</p>
                <p>Contato: (54) 99634-8983</p>
                <p>Média de preço: R$ 80,00 a R$ 140,00  </p>
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

<!--------->

<div class="modal fade" id="modal-jesus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Primeiro Milagre do Menino Jesus</h5>
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
                <img src="../src/img/modais/eventos/jesus1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/jesus2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/jesus3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/jesus4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Primeiro Milagre do Menino Jesus é uma opereta fascinante e envolvente, que conta com a participação de cantores e músicos da Orquestra Sinfônica de Gramado, com músicas interpretadas ao vivo e em português, em um show cheio de fé, esperança e amor que marcam para sempre as pessoas que o assistem.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: ExpoGramado, Av. Borges de Medeiros, 4111</p>
              <p>Avaliação: 4,1 </p>
              <p>Horário de Funcionamento: De 26 de novembro de 2021 a 09 de Janeiro de 2022, às quartas sextas e domingo às 19h.</p>
              <p>Contato: (54) 99634-8983</p>
              <p>Média de preço: R$ 100,00 a R$ 160,00  </p>
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

<div class="modal fade" id="modal-navi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nativitaten</h5>
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
                <img src="../src/img/modais/eventos/navi1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/navi2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/navi3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/navi4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Sucesso de público entre os anos de 2013 e 2014 o espetáculo Natalis, a criação está de volta este ano ao Natal Luz de Gramado, buscando resgatar as mais fortes tradições natalinas com muita modernidade e efeitos visuais.
              Narrado com a inconfundível voz de Cid Moreira, o espetáculo se inicia contando a história de Gênesis capítulo 1, e passa por diversos eventos bíblicos até o nascimento de Jesus Cristo, ponto este um dos grandes momentos do espetáculo.
              </div> 

              <div class="paragrafo">
              <p></p>
              <p>Endereço: ExpoGramado, Av. Borges de Medeiros, 4111</p>
              <p>Avaliação: 4,1 </p>
              <p>Horário de Funcionamento:  de 30 de outubro  de 2021 a 15 de Janeiro de 2022, às terças quintas e sábados  às 21h.</p>
              <p>Contato: (54) 99634-8983</p>
              <p>Média de preço: R$ 100,00 a R$ 160,00  </p>
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

<!------------>

<div class="modal fade" id="modal-passeio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tour Uva e Vinho: Maria Fumaça + Epopéia + Malharias + Tramontina + Vinícolas + Almoço Italiano + Tour Gramado e Canela   </h5>
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
                <img src="../src/img/modais/eventos/passeio1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/passeio2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/passeio3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/passeio4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">  Neste tour visitaremos o encantador vale dos vinhedos, conhecendo algumas das mais charmosas vinícolas da região, com degustações de vinhos, sucos e espumantes. Além do tradicional passeio de Trem Maria Fumaça, onde você fará uma viagem ao passado, celebrando a cultura italiana, em uma experiência única e inesquecível.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Saída dos principais hotéis da região central de gramado e canela </p>
              <p>Avaliação: 4,5 </p>
              <p>Horário de Funcionamento:  Todos os dias a partir das 06h15</p>
              <p>Contato: 51 3062-6070</p>
              <p>Média de preço: R$ 339,90 </p>
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

<!------------>

<div class="modal fade" id="modal-city" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">City tour Gramado e Canela  </h5>
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
                <img src="../src/img/modais/eventos/city1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/city2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/city3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/city4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> A bordo do Bustour você irá conhecer os melhores pontos turísticos e atrativos das duas cidades. Com sua característica hop on/hop off - você pode descer em qualquer parada e retornar ao ônibus quantas vezes você desejar. Não é incrível? Você mesmo faz o seu roteiro com total liberdade.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Bustour Gramado: Av. das Hortênsias, 1845, Centro - Gramado/RS - CEP: 95670-000.</p>
              
              <p>Horário de Funcionamento: Segunda, terça, quintas, sextas, sábados e domingos das 9h00 às 18h00</p>
              <p>Contato: (54) 3286.7777</p>
              <p>Média de preço: R$ 79,00 a R$ 89,00 </p>
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

<!------------>

<div class="modal fade" id="modal-torta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rua Torta  </h5>
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
                <img src="../src/img/modais/eventos/torta1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/torta2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/torta3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/torta1.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">O que muitas pessoas não sabem é que a Rua Torta de Gramado foi inspirada na Lombard Street e foi construída durante um projeto de revitalização da cidade. Ou seja, é um pedacinho da Califórnia dentro do nosso território.
              </div>
             
              <div class="paragrafo">
             <p></p>
              <p>Endereço: :R. Emílio Sorgetz, 118 - Planalto, Gramado - RS, 95670-000</p>
              
              <p>Horário de Funcionamento: 24h</p>
              
              <p>Média de preço: Gratuito </p>
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

<!-------->

<div class="modal fade" id="modal-sega" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vinícola Casa Seganfredo</h5>
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
                <img src="../src/img/modais/eventos/sega1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/sega2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/sega3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/sega4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> O que muitas pessoas não sabem é que a Rua Torta de Gramado foi inspirada na Lombard Street e foi construída durante um projeto de revitalização da cidade. Ou seja, é um pedacinho da Califórnia dentro do nosso território. 
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Linha Belvedere 600 - Estrada Serra Grande - Gramado - Rs</p>
              <P>Avaliação: 4,9</P>
              <p>Horário de Funcionamento: Aberto diariamente das 9h00 às 17h00</p>
              <p>Contato:(51) 3333.2255 / (54)9 9677.2255</p>
              <p>Média de preço: R$$</p>
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

<!-------->

<div class="modal fade" id="modal-caracol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cascata do Caracol</h5>
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
                <img src="../src/img/modais/eventos/caracol1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/caracol2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/caracol3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/caracol4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Você pode pensar que vai para mais um desses lugares típicos de turistas, que promete mais do que entrega… mas nada disso! O Caracol tem, sim, aquela foto de cartão-postal que toda a família vai gostar de ver, mas há recantos e trilhas que levam mata adentro e que revelam novos ângulos da cascata e da natureza.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Rs 466, km 0 - Caracol </p>
              <P>Avaliação: 4,8</P>
              <p>Horário de Funcionamento: Aberto diariamente das 9h00 às 17h00</p>
              <p>Contato:(54)3282.5199</p>
              <p>Média de preço: R$ 10,00 R$ 20,00 </p>
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

<!----------->

<div class="modal fade" id="modal-bonde" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bondinho Aéreo</h5>
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
                <img src="../src/img/modais/eventos/bonde1.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/bonde2.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/bonde3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/bonde4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">Que a Cascata do Caracol é um espetáculo da natureza, todo mundo já sabe. A novidade é que agora, além de admirá-la com uma visão privilegiada, o Parques da Serra trouxe a segurança da tecnologia suíça para te acompanhar neste passeio.
              </div> 
            
            <div class="paragrafo">
            <p></p>
              <p>Endereço:Estrada da Ferradura 699 - Caracol - Canela RS </p>
              <P>Avaliação: 4,5</P>
              <p>Horário de Funcionamento: Aberto diariamente das 9h00 às 17h00</p>
              <p>Contato: (54)3878.3250</p>
              <p>Média de preço: R$ 35,00 a R$ 75,00 </p>
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

<!---------->

<div class="modal fade" id="modal-tour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tour Raízes Coloniais + Caffé Colonial</h5>
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
                <img src="../src/img/modais/eventos/tour1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/tour2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/tour3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/eventos/tour4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> O Tour Raízes Coloniais emociona adultos e crianças! Um verdadeiro retorno às origens da colonização italiana no município de Gramado. Seguindo pelas localidades de Linha Nova e Linha Bonita o visitante pode conhecer a herança cultural dos imigrantes, passada de geração a geração até os dias atuais. A arquitetura típica, a hospitalidade e um delicioso café colonial fazem deste tour um passeio inesquecível.
              </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Rio Grande do Sul - Estrada Linha Bonita, 2490, Linha Bonita</p>
              <p>Horário de Funcionamento: De segunda a sexta às 09h00 / terças, quintas e sábados às 13h00</p>
              <p>Contato: (54)99968.3395</p>
              <p>Média de preço:  R$ 179,90 </p>
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
