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
        <img src="../src/img/hospedagem_cards/hotel_sky.card.png" class=" card-img-top card-posicao-imagem" alt="">
        <div class="card-body">
          <h5 class="card-title titulo_card">Hotel Sky</h5>
          <a data-bs-toggle="modal" data-bs-target="#modal-sky" href="#" class="btn botao botao-cor-especial">Ver mais</a>
        </div>
      </article>
    

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_fazenda_pampas.card.png" class=" card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Fazenda Pampas </h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-pampa" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_sky_ville.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Sky Ville</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-ville" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_azaleia.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Azaléia</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-azaleia" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_due.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Due Nobili</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-due" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/hotel_cercano.card.png" class="card-img-top card-posicao-imagem" alt=" ">
      <div class="card-body">
        <h5 class="card-title titulo_card">Hotel Cercano</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-cercano" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_gramado.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Gramado</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-pousada" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>

    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_viena.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Viena</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-viena" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  
    <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
      <img src="../src/img/hospedagem_cards/pousada_recanto_lua.card.png" class="card-img-top card-posicao-imagem" alt="">
      <div class="card-body">
        <h5 class="card-title titulo_card">Pousada Recanto da Lua</h5>
        <a data-bs-toggle="modal" data-bs-target="#modal-lua" href="#" class="btn botao botao-cor-especial">Ver mais</a>
      </div>
    </article>
  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_do_lago.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada do Lago</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-lago" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_ tres_pinheiros.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada Três Pinheiros</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-pinheiros" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/pousada_betania.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Pousada Betânia</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-betania" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>  

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/hostel_chocolatche.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Hostel Chocolatchê</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-tche" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/albergue_eleganz.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Eleganz Hostel e Suítes</h5>
      <a  data-bs-toggle="modal" data-bs-target="#modal-eleganz" href="#" class="btn botao botao-cor-especial">Ver mais</a>
    </div>
  </article>

  <article class="card borda-cor-especial card-largura p-0 m-4 col-12 col-md-4">
    <img src="../src/img/hospedagem_cards/casa_da_juventude.card.png" class="card-img-top card-posicao-imagem" alt="">
    <div class="card-body">
      <h5 class="card-title titulo_card">Albergue Casa da Juventude</h5>
      <a data-bs-toggle="modal" data-bs-target="#modal-casa" href="#" class="btn botao botao-cor-especial">Ver mais</a>
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

<div class="modal fade" id="modal-sky" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Sky</h5>
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
                <img src="../src/img/modais/hospedagem/sky1.jfif" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/sky2.jfif" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/sky3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/sky4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Na rodovia RS-235, este hotel aconchegante com temática alemã em um edifício encantador no estilo enxaimel fica a 9 minutos de caminhada do parque temático Mini Mundo e a 1 km do Parque do Lago Negro.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Av. das Hortênsias, 680 - Planalto, Gramado - RS, 95670-000</p>
              <p>Avaliação:4.5 (4.961)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3421-3333</p>
              <p>Valor:$$ - $$$</p>
              <p>Site:<a href="https://www.hotelsky.com.br/">https://www.hotelsky.com.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-pampa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Fazenda Pampas</h5>
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
                <img src="../src/img/modais/hospedagem/pampa1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pampa2.jpeg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pampa3.png" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pampa4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Este resort rural sofisticado fica a 3 km do Museu Medieval Castelo de Saint George e a 11 km da Cascata do Caracol.
              As cabanas peculiares, com sala de estar circular, têm minicozinha e vista panorâmica da área, além de sofá, acesso Wi-Fi incluso e TV com tela plana.</div>
              
              <div class="paragrafo">
              <p></p>
              <p>Endereço:Av. Don Luiz Guanella, 1561 - Vila Suica, Canela - RS, 95680-000</p>
              <p>Avaliação:4,5 (2.413)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone: (54) 3282-3433</p>
              <p>Média de preço: R$155,00 a 290,00</p>
              <p>Site:<a href="https://hoteispampas.com.br/">https://hoteispampas.com.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-ville" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Sky Ville</h5>
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
                <img src="../src/img/modais/hospedagem/ville1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/ville2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/ville3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/ville4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Este hotel simples com vista para o Lago do Carniel fica a 12 minutos de caminhada do Museu de Cera Dreamland e a 4 km das construções em miniatura no Mini Mundo.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Rua Itapeva, 59 - Carniel, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,4 (1.741)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone: (54) 3286-3195</p>
              <p>Média de preço: R$178,00 a R$239,00</p>
              <p>Site:<a href="https://skyvillehotelgramado.com.br/">https://skyvillehotelgramado.com.br/</a></p>
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

<!---------------->

<div class="modal fade" id="modal-azaleia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Azaléia</h5>
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
                <img src="../src/img/modais/hospedagem/azaleia1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/azaleia2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/azaleia3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/azaleia4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Este hotel encantador em um edifício de tijolos vermelhos é cercado por um jardim e está localizado em uma área residencial arborizada. Além disso, fica a 1 km do Parque do Lago Negro, uma área verde próxima a um lago artificial, e a 4 km do Museu Medieval Castelo-Saint George.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:Av. Borges de Medeiros, 1069 - Centro, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,7 (525)</p>
              <p>Horário de check-in: 13:00</p>
              <p>Horário de check-out: 11:00</p>
              <p>Telefone: (54) 3286-3583</p>
              <p>Média de preço: R$212,00 a R$309,00</p>
              <p>Site:<a href="https://www.hotelazaleia.com.br/">https://www.hotelazaleia.com.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-due" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Due Nobili</h5>
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
                <img src="../src/img/modais/hospedagem/due1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/due2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/due3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/due4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Situado em um bairro residencial arborizado, este hotel informal fica a 1 km da rodovia estadual RS-235, a 2 km do parque temático Mini Mundo e a 3 km das exposições de carros antigos no museu Hollywood Dream Cars.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. das Fontes, 57 - Floresta, Gramado - RS, 95670-000</p>
              <p>Avaliação: 4,8 (488)</p>
              <p>Horário de check-in: 13:00</p>
              <p>Horário de check-out: 11:00</p>
              <p>Telefone: (54) 3286-6501</p>
              <p>Média de preço: R$165,00 a R$198,00</p>
              <p>Site:<a href="https://www.hotelduenobili.com.br/">https://www.hotelduenobili.com.br/</a></p>
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

<div class="modal fade" id="modal-cercano" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hotel Cercano </h5>
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
                <img src="../src/img/modais/hospedagem/cercano1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/cercano4.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/cercano3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/cercano4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao">A 1 minuto de caminhada das lojas e restaurantes do centro, este hotel moderno e sofisticado em uma rua arborizada fica a 15 minutos a pé do parque temático Mini Mundo e a 2 km do Lago Negro.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. Me. Verônica, 220 - Centro, Gramado - RS, 95670-000 </p>
              <p>Avaliação: 4,7(886)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone: (54) 3905-3200</p>
              <p>Média de preço: R$287,00 a R$477,00</p>
              <p>Site: <a href="https://www.hotelcercano.com.br/">https://www.hotelcercano.com.br/</a></p>
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

<div class="modal fade" id="modal-pousada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada Gramado </h5>
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
                <img src="../src/img/modais/hospedagem/pousada1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pousada2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pousada3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/pousada4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Esta pousada informal está situada em uma casa de luxo de pedra cercada de jardins. Fica a 6 km do museu de cera Dreamland e a 15 km da Cachoeira do Caracol.</div>
             
              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. Demétrio Pereira dos Santos, 489 - Planalto, Gramado - RS, 95670-000 </p>
              <p>Avaliação: 4,6 (456)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 999315808 </p>
              <p>Média de preço: R$229,00 a R$351,00</p>
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

<!-------------->

<div class="modal fade" id="modal-viena" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada Viena </h5>
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
                <img src="../src/img/modais/hospedagem/viena1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/viena2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/viena3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/viena4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Em uma rua residencial, esta pousada descontraída fica a 5 minutos a pé da Rua Coberta, a 12 minutos do parque Aldeia do Papai Noel e a menos de 1 km da rodovia estadual RS-135.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. Artur Zwetsch, 70 - Centro, Gramado - RS, 95670-000 </p>
              <p>Avaliação: 4,6 (441)</p>
              <p>Horário de check-in: 13:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-5015 </p>
              <p>Média de preço:  R$210,00 a R$324,00</p>
              <p>Site:<a href="https://pousada-viena.hoteis-em-suldobrasil.com/pt/">https://pousada-viena.hoteis-em-suldobrasil.com/pt/</a></p>
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

<div class="modal fade" id="modal-lua" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada Recanto da Lua  </h5>
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
                <img src="../src/img/modais/hospedagem/lua1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lua2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lua3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lua4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Situado em um bairro residencial arborizado, este B&B pitoresco em uma <br>
                casa de madeira e tijolos fica a 1 km do parque temático Mini Mundo e a 6 km do Museu de Cera Dreamland.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Rua Antônio Accorsi, 322 Rua Antônio Accorsi, R. da Bavária, 322, Gramado <br>
                 - RS, 95670-000 </p>
              <p>Avaliação:4,7 (363)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54)3286-2463</p>
              <p>Média de preço:  R$253,00 a R$445,00</p>
              <p>Site:<a href="https://www.pousadarecantodalua.com.br/">https://www.pousadarecantoda <br>
                lua.com.br/</a></p>
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

<div class="modal fade" id="modal-lago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada do Lago Gramado </h5>
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
                <img src="../src/img/modais/hospedagem/lago1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lago2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lago3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/lago4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Cercada por árvores e próxima à rodovia estadual RS-115, esta hospedaria casual fica a 7 minutos de caminhada dos pedalinhos no Lago Negro e a 15 minutos de caminhada do Mini Mundo, um parque ao ar livre com café e réplicas em miniatura de edifícios internacionais.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço:R. da Carrieri, 433 - Bairro Lago Negro, Gramado - RS, 95670-000 </p>
              <p>Avaliação:4,6 (428)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-4762 </p>
              <p>Média de preço:R$174,00 a R$176,00</p>
              <p>Site:<a href="https://pousadadolago.tur.br/">https://pousadadolago.tur.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-pinheiros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada Três Pinheiros  </h5>
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
                <img src="../src/img/modais/hospedagem/tres1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/tres2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/tres3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/tres4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Esta pousada descontraída cercada por vegetação fica ao lado da RS-115, <br>
                 a 3 km da Igreja Matriz São Pedro Apóstolo, feita de pedra, e a 2 km do parque e jardim no <br>
                  Lago Negro.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: R. F. G. Bier, 2088 - Planalto, Gramado - RS, 95670-000 </p>
              <p>Avaliação:4,8 (470)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 98127-6887 </p>
              <p>Média de preço:R$234,00 a R$365,00</p>
              <p>Site:<a href="https://www.pousadatrespinheiros.com.br/">https://www.pousadatres <br>
                pinheiros.com.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-betania" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pousada Betânia </h5>
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
                <img src="../src/img/modais/hospedagem/betania1.jpeg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/betania2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/betania3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/betania4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Situada em uma área arborizada, esta  <br>
                 pousada simples fica a 2 km da Fonte do <br>
                 Amor Eterno e a 9 minutos a pé do parque Mini Mundo e do Lago Joaquina Rita Bier.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Rua Antônio Accorsi, 727 -  <br>
                Planalto, Gramado - RS, 95670-000 </p>
              <p>Avaliação:4,8 (511)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-1739 </p>
              <p>Média de preço: a partir de R$317,00</p>
              <p>Site:<a href="http://www.pousadabetaniagramado.com.br/">http://www.pousadabetania  <br>
                gramado.com.br/</a></p>
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

<!-------------->

<div class="modal fade" id="modal-tche" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Albergue Hostel Chocolatchê </h5>
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
                <img src="../src/img/modais/hospedagem/chocolatche1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/chocolatche2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/chocolatche3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/chocolatche4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Este hostel simples, localizado em uma avenida arborizada repleta de lojas e restaurantes, fica a 11 minutos a pé da estação rodoviária intermunicipal e a 15 minutos a pé do Mini Mundo, um parque temático ao ar livre com atrações do mundo todo em miniatura.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: Av. Borges de Medeiros, 2889 - Centro, Gramado - RS, 95670-000 </p>
              <p>Avaliação:4,7 (319)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-2299 </p>
              <p>Média de preço: R$167,00 a R$266,00</p>
              <p>Site: <a href="https://www.hostelchocolatche.com/">https://www.hostelchocolatche.com/</a></p>
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

<div class="modal fade" id="modal-eleganz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Albergue Eleganz Hostel e Suítes </h5>
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
                <img src="../src/img/modais/hospedagem/eleganz1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/eleganz2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/eleganz3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/eleganz4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Localizado próximo à rodovia estadual RS-235, este hostel simples cercado por restaurantes fica a 6 minutos a pé da Igreja Matriz São Pedro Apóstolo e a 3 km do Lago Negro. </div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: R. Pref. Nelson Dinnebier, 160 - Centro, Gramado - RS, 95670-000</p>
              <p>Avaliação:4,4 (844)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-0746</p>
              <p>Média de preço: R$271,00 a R$407,00</p>
              <p>Site:<a href="https://www.eleganzhostel.com.br/">https://www.eleganzhostel.com.br/</a></p>
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

<div class="modal fade" id="modal-casa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <dialog class="modal-content">
      <header class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Albergue Casa da Juventude  </h5>
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
                <img src="../src/img/modais/hospedagem/casa1.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/casa2.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/casa3.jpg" class="d-block w-100 modal-carrosel" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../src/img/modais/hospedagem/casa4.jpg" class="d-block w-100 modal-carrosel" alt="...">
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
              <div class="descricao"> Localizado a 4.7 km do Dreamland Museu de Cera, Pousada Vista do Lago Gramado oferece recepção de 24 horas e serviço de limpeza. vista do Lago é um hotel de 2 estrelas situado a cerca de 900 metros do Lago Joaquina Rita Bier.</div>

              <div class="paragrafo">
              <p></p>
              <p>Endereço: R. Vinte e Cinco de Julho, 833 - Planalto, Gramado - RS, 95670-000</p>
              <p>Avaliação:4,4 (113)</p>
              <p>Horário de check-in: 14:00</p>
              <p>Horário de check-out: 12:00</p>
              <p>Telefone:(54) 3286-1811</p>
              <p>Média de preço: A partir de R$166,00</p>
              <p>Site:<a href="http://casa-da-juventude-hostel.gramadohotels24.com/pt/">http://casa-da-juventude-hostel.gramadohotels24.com/pt/</a></p>
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
